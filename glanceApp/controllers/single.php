<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Single extends CI_Controller {

	public function photo($img_id)
	{
		
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		
		$imgage_id = base64_decode($img_id);
		$image_idArr = explode('_',$imgage_id);
		$imageIdFinal = base64_decode($image_idArr[1]);
		
		$image_row = $this->gallery_model->get_single_image_by_id($imageIdFinal);
		$userNameRow = $this->member_model->get_member_username_by_id($image_row->mem_id);
		if($image_row->album_id != 0) { 
			$albumNameRow = $this->gallery_model->get_album_albumname_by_id($image_row->mem_id,$image_row->album_id);
			$albumName = $albumNameRow->album_name;
		} else {
			$albumName = '';
		}
		
		if($albumName!='') {
			$image_url = base_url().'glancePublic/uploads/member_gallery/'.$userNameRow->username.'/'.$albumName.'/'.$image_row->org_photo;
			$backUrl = base_url().'gallery/photos/'.$userNameRow->username.'/'.$albumName;
		} else {
			$image_url = base_url().'glancePublic/uploads/member_gallery/'.$userNameRow->username.'/'.$image_row->org_photo;
			$backUrl = base_url().'gallery/photos/'.$userNameRow->username;
		}
		
		$comment_row = $this->comments_model->get_all_image_comments($imageIdFinal);
		
		$data['image_row'] = $image_row;
		$data['image_url'] = $image_url;
		$data['back_url'] = $backUrl;
		
		$data['comment_row'] = $comment_row;
		
		$data['title']= SITE_NAME.': Single Photo';
		$this->load->view('single_view',$data);
	}
}