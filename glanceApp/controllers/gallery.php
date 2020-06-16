<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	public function photos($username,$albumname='')
	{
		
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		
		$profile_row = $this->member_model->get_member_by_username($username);
		
		$this->form_validation->set_rules('photo', 'Image', 'required');
		
		//$album_id = $this->gallery_model->get_album_id_by_albumname($albumname);
		
		$data['row'] = $profile_row;
		
		if($albumname!='') {
		
			$albumname = str_replace('_',' ',$albumname);
			$albumExists = $this->gallery_model->checkAlbumname($profile_row->id,$albumname);
		
			if(!$albumExists) {
				
				redirect(base_url().'gallery/photos/'.$username);
				exit;
			}
			
			$album_id = $this->gallery_model->get_album_id_by_albumname($profile_row->id,$albumname);
			
			$gallery_row = $this->gallery_model->get_all_gallery_by_id($profile_row->id,$album_id->album_id);
			$data['album_name'] = $albumname;
			$data['album_row'] = '';
		} else {
		
			$album_row = $this->gallery_model->get_all_album_names_by_member_id($profile_row->id);
			$data['album_row'] = $album_row;
			$gallery_row = $this->gallery_model->get_all_gallery_by_id($profile_row->id,'');
			$data['album_name'] = '';
			$album_id = '';
		
		}
		
		$data['gallery_row'] = $gallery_row;
		
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = SITE_NAME.': '.$this->session->userdata('name');
			$this->load->view('gallery_view',$data);
			return;
		}
	}
	
	public function create_album_name()
	{
		$album = $this->input->post('album');
		$profile_row = $this->member_model->get_member_id_by_username($this->session->userdata('username'));
		
		//$real_pathUsername = realpath(APPPATH . '../glancePublic/uploads/member_gallery/'.$this->session->userdata('username'));
		$real_pathUsername = './glancePublic/uploads/member_gallery/'.$this->session->userdata('username');
		
		if(!is_dir($real_pathUsername)) {
			mkdir($real_pathUsername, 0777, TRUE);
			chmod($real_pathUsername,0777);
		}
		
		//$real_pathAlbum = realpath(APPPATH . '../glancePublic/uploads/member_gallery/'.$this->session->userdata('username').'/'.$album);
		
		$real_pathAlbum = './glancePublic/uploads/member_gallery/'.$this->session->userdata('username').'/'.$album;
		
		if(!is_dir($real_pathAlbum)) {
			mkdir($real_pathAlbum, 0777, TRUE);
			chmod($real_pathAlbum,0777);
		}
		
		$albumExists = $this->gallery_model->checkAlbumname($profile_row->id,$album);
		
		if(!$albumExists) {
			
			$album_array = array(
								'mem_id' => $this->session->userdata('member_id'),
								'album_name' => $album,
								'date_created' => date('Y-m-d H:i:s'),
			);
			
			$this->gallery_model->add_album($album_array);
			
		}
		
		return '1';
		
	}
	
	public function upload_images() {
		
		if (!empty($_FILES['photo']['name'])){

			$album_name = $this->input->post('album_name');
			
			$profile_row = $this->member_model->get_member_id_by_username($this->session->userdata('username'));
			
			if($album_name != '') {
				$album_id = $this->gallery_model->get_album_id_by_albumname($profile_row->id,$album_name);
				$albumId = $album_id->album_id;
				
				$albumFinal = str_replace(' ','_',$album_name);
				
			} else {
				$albumId = '';
				$albumFinal='';
			}
			
			$real_pathUsername = realpath(APPPATH . '../glancePublic/uploads/member_gallery/'.$this->session->userdata('username'));
			
			$UsernameDir = './glancePublic/uploads/member_gallery/'.$this->session->userdata('username');
			if(!is_dir($UsernameDir)) {
				mkdir($UsernameDir, 0777, TRUE);
				chmod($UsernameDir,0777);
			}
			
			$real_path = $real_pathUsername;
			
			if($album_name != '') {
				
				$real_pathAlbum = realpath(APPPATH . '../glancePublic/uploads/member_gallery/'.$this->session->userdata('username').'/'.$album_name);
			
				$real_path = $real_pathAlbum;
			
			}
			
			$config['upload_path'] = $real_path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 6000;
			$config['file_name'] = $this->session->userdata('member_id').time();
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			
			$image = array('upload_data' => $this->upload->data());	
			$image_name = $image['upload_data']['file_name'];
			
			//Iomage resizing
			$objImg = new Simple_Image();
			$small_img = 'thumb_'.$image_name;
			$objImg->load($real_path.'/'.$image_name);
			$objImg->resizeToHeight(150);
			$objImg->save($real_path.'/'.$small_img);

			$gallery_array = array(
								'mem_id' => $this->session->userdata('member_id'),
								'org_photo' => $image_name,
								'date_added' => date('Y-m-d H:i:s'),
								'album_id' => $albumId,
			);
			

			$this->gallery_model->add_gallery($gallery_array);
		}

		redirect(base_url().'gallery/photos/'.$this->session->userdata('username').'/'.$albumFinal);
		
	}
	
	public function remove_image() {
		$id = $this->input->post('img_id');
		$rs = $this->gallery_model->delete_image($id);
		echo "deleted";
		exit;
	}
		
}
