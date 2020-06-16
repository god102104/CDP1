<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url() . 'user/login');
            exit;
        }

        $includedMemberId = array();

        $profile_row = $this->member_model->get_member_by_username($this->session->userdata('username'));
        $data['row'] = $profile_row;

        if ($this->session->userdata('user_rec') != '') {
            $reciever_row = $this->member_model->get_member_by_username($this->session->userdata('user_rec'));
            $data['rec_row'] = $reciever_row;
        } else {
            $conversationMemberId = $this->message_model->getUserWithLatestConversation($profile_row->id);

            if ($conversationMemberId) {
                
                if ($conversationMemberId->sender_id != $profile_row->id) {

                    $reciever_row = $this->member_model->get_member_details_by_id($conversationMemberId->sender_id);
                    $data['rec_row'] = $reciever_row;
                    $this->session->set_userdata('user_rec', $reciever_row->username);
                } else {

                    $reciever_row = @$this->member_model->get_member_details_by_id($conversationMemberId->reciever_id);
                    $data['rec_row'] = $reciever_row;
                    $this->session->set_userdata('user_rec', @$reciever_row->username);
                }
            } else {

                $data['rec_row'] = "";
            }
        }

        if ($data['rec_row'] != '') {

            $isFriend = $this->friend_model->isfriends($this->session->userdata('member_id'), $reciever_row->id);
        } else {

            $isFriend = FALSE;
        }

        $data['is_freind'] = $isFriend;

        $ListofContactedUsers = $this->message_model->getAllSenderRecieverOfUser($profile_row->id);

        if ($ListofContactedUsers) {
            foreach ($ListofContactedUsers as $memberIdsContacted) {

                if ($memberIdsContacted->sender_id != $profile_row->id) {
                    if (!in_array($memberIdsContacted->sender_id, $includedMemberId)) {
                        array_push($includedMemberId, $memberIdsContacted->sender_id);
                    }
                }

                if ($memberIdsContacted->reciever_id != $profile_row->id) {
                    if (!in_array($memberIdsContacted->reciever_id, $includedMemberId)) {
                        array_push($includedMemberId, $memberIdsContacted->reciever_id);
                    }
                }
            }
        }

        if ($includedMemberId) {
            $contactedMembers = $this->member_model->get_member_details_by_ids_array($includedMemberId);
            $data['conatacted_memebers'] = $contactedMembers;
        } else {

            $data['conatacted_memebers'] = "";
        }
        
        $messages_row = '';
        if(@$profile_row->id!='' && @$reciever_row->id!=''){
            $messages_row = $this->message_model->get_all_messages($profile_row->id, @$reciever_row->id);
        }
        $data['messages_row'] = $messages_row;

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = SITE_NAME . ': ' . $this->session->userdata('name');
            // $this->load->view('messages_view', $data);

            $this->load->view('common/before_head_close');
            $this->load->view('common/header');
            $this->load->view('messages_view', $data);
            // $this->load->view('common/footer');
            $this->load->view('common/before_body_close');
            return;
        }
    }

    public function set_session_for_reciever() {
        $username = $this->input->post('user_to');
        $this->session->set_userdata('user_rec', $username);
        return;
    }

    public function add_messages() {

        $username = $this->session->userdata('user_rec');
        $message = $this->input->post('message');
        $memid_From = $this->member_model->get_member_by_username($this->session->userdata('username'));
        $memid_To = $this->member_model->get_member_by_username($username);

        $message = strip_tags(urldecode($message));


        /* $message_array = array(
          'sender_id' => $memid_From->id,
          'reciever_id' => $memid_From->id,
          'date_send' => date("Y-m-d H:i:s"),
          'message' => $message,
          'msg_status' => 'read'
          );

          $return = $this->message_model->add_message($message_array); */

        $message_array = array(
            'sender_id' => $memid_From->id,
            'reciever_id' => $memid_To->id,
            'date_send' => date("Y-m-d H:i:s"),
            'message' => $message,
        );

        $return = $this->message_model->add_message($message_array);
		
		if($memid_From->photo == "") {

			$photo = 'images/no-image.jpg';

		} else {

			$photo = 'uploads/member_images/thumb_'.$memid_From->photo;
		}
       $return = '<li>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-2">
                            <img src="'.base_url().'glancePublic/'.$photo.'" width="40" height="39" alt="" />
                        </div>
                        <div class="col-md-11 col-sm-10 col-xs-10">
                            <div class="chattxt">
                                <div class="chatcont">
                                    <p>'.$message.'</p>
                                    <div class="time">1 second ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>    
                </li>';
        echo $return;
    }

}
