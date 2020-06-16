<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  
    
    <div class="innerPageswrap">
    <!--Recent Profiles Start-->
	<div class="container">
        <!--Recent Profiles Start-->
       	<div class="row">
        	<div class="col-md-9">
            	<div class="profileWrap">
            	<h1>전체 목록</h1> <!--<span class="onlinelast">564 Profiles Found</span>-->
				<div class="searchResult">
                <?php if($all_members_result): ?>
            	<ul class="featuredListing row">
                	<?php 
						$this->load->model('friend_model');
						foreach($all_members_result as $val):
                            
						if($val->photo)
	  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$val->photo;
	  					else
	  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
						
						if($this->session->userdata('username')) {
							if($this->session->userdata('username') == $val->username) {
								continue;
							}
						}
							
					?>
                    	<li class="col-md-4">
                    	<div class="profileBox">
                        <div class="imgbox"><a target="_blank" href="<?php echo base_url(); ?>profile/<?php echo $val->username; ?>"><img src="<?php echo $image_thumb;?>" alt="<?php echo $val->name;?>" /></a></div>
                        <div class="profileInfo">
                        	<h2><a target="_blank" href="<?php echo base_url(); ?>profile/<?php echo $val->username; ?>" title="<?php echo $val->name;?>"><?php echo $val->name;?></a></h2>
                            <p><i class="fa fa-user" aria-hidden="true"></i> <?php switch ($val->gender) : case 'Male': echo "남성"; break; case 'Female': echo "여성"; break; endswitch;?></p>
                            <p><i class="fa fa-history" aria-hidden="true"></i> <?php echo count_years($val->dob,date("Y-m-d"));?>세</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php //echo $val->city;?> <?php echo $val->location;?></p>
                            <?php 
								if($this->session->userdata('username')) {
									
									$isFriend = $this->friend_model->isfriends($this->session->userdata('member_id'),$val->id);
									if(!$isFriend) {
							?>
                            <a href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($val->id); ?>" class="chatbtn" title="Send Friend Request">친구추가</a> 
                            <?php } ?>
                            <a href="javascript:;" onclick="setRecieverSession('<?php echo $val->username;?>')" class="chatbtn" title="Send Message"> 메시지</a>
                            <?php 
								} 
							?>
                          <div class="clear"></div>
                        </div>
                        </div>
                    </li>
					<?php endforeach;?>
                </ul>
                <?php endif;?>
            </div>
            	<?php echo $links;?>
           	  <div class="clear"></div>
            
            </div>            
            </div>
            
            <div class="col-md-3">
            	<!--Right Col Start-->
       <?php $this->load->view('common/profile_right_side');?>
            </div>
        </div>

    </div>
    <!--Recent Profiles Endt-->
    </div>
    
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
