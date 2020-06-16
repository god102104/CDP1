<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {
	
	public function add_comments() {
		
		$username = $this->input->post('to');
		$comment = $this->input->post('comment');
		$memid_From = $this->member_model->get_member_by_username($this->session->userdata('username'));
		$memid_To = $this->member_model->get_member_by_username($username);
		
		$comment = strip_tags(urldecode($comment));
		
		$comment_array = array(
								'mem_id_from' => $memid_From->id,
								'mem_id_to' => $memid_To->id,
								'date_comment' => date("Y-m-d H:i:s"),
								'comments' => $comment,
								);
								
		$return = $this->comments_model->add_comment($comment_array);
		
		if($memid_From->photo)
			$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$memid_From->photo;
		else
			$image_thumb = base_url().'glancePublic/images/no-image.jpg';
		
          $return ='<li>
                <div class="maincomnt">
                  <div class="userpic"><img src="'.$image_thumb.'" alt="'.$memid_From->name.'" /></div>
                  <div class="usercomnt"> <a href="'.base_url().'profile/'.$memid_From->username.'" class="userlink" title="'.$memid_From->name.'">'.$memid_From->name.'</a>
                    <p>'.$comment.'</p>
                    <div class="timerep"><span>[ 1 second ago ]</span> <!--<a href="#" title="Reply">Reply</a>--></div>
                  </div>
                  <div class="clear"></div>
                </div>
              </li>';
		echo $return;
	}
	
	public function add_image_comments() {
		
		$image_id = base64_decode($this->input->post('image_id'));
		$comment = $this->input->post('comment');
		$memid_From = $this->member_model->get_member_id_by_username($this->session->userdata('username'));
		$comment = strip_tags(urldecode($comment));
		
		$comment_array = array(
								'img_id' => $image_id,
								'mem_id' => $memid_From->id,
								'date_added' => date("Y-m-d H:i:s"),
								'comment' => $comment,
								);
								
		$return = $this->comments_model->add_image_comment($comment_array);
		return $return;
	}
	
	//Delete comment
	public function delete_comment($id='')
	{
		//Checking Permissions
		if(!$this->input->is_ajax_request())
		{
				echo 'Invalid Access. No permission to access this method. We have saved your IP address for further investigation.';
				exit;
		}
			
		if($id=='')
		{
			echo 'ID is missing. Please refresh the page and try again.';
			exit;
		}
		
		if($this->session->userdata('member_id')==''){
			echo "Login to delete comment";
			exit;	
		}
		
		$comment_row = $this->comments_model->get_comment_by_id_mem_id($id,$this->session->userdata('member_id'));
		if(!$comment_row){
				echo "Something went wrong with creds.";
				exit;	
		}
		
		$this->comments_model->delete_comment($id);
		echo 'done';

	}
		
}
