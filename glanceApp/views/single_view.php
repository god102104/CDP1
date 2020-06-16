<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
<script type="text/javascript" src="<?php echo base_url();?>glancePublic/js/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>glancePublic/css/jquery.fancybox.css?v=2.0.6" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>glancePublic/js/fancybox-min.js"></script>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  
  <div class="container"> 
    <!--Recent Profiles Start-->
    <div class="leftCol left">
      <div class="profileWrap">
        <h1>갤러리</h1>
        <div class="actionBox"> <a href="<?php echo $back_url;?>" title="목록으로 돌아가기"><span>목록</span></a>
          <div class="clear"></div>
        </div>
        
        <!--Gallery-->
        <div class="gallerySingle">
          <div class="photobox">
            <div class="imagebox"> <a class="fancybox-effects-c" href="<?php echo $image_url;?>"><img src="<?php echo $image_url; ?>" /></a> </div>
          </div>
          
          <!--Coments-->
          <div class="commentsWrap">
            <div class="clear"></div>
            <div class="totalComment"><a href="#">댓글</a></div>
            <ul class="commentsList">
              <?php
								if($comment_row) {
									foreach($comment_row as $commentDetail) {
										if($commentDetail->photo)
											$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$commentDetail->photo;
										else
											$image_thumb = base_url().'glancePublic/images/no-image.jpg';
							?>
              <li>
                <div class="maincomnt">
                  <div class="userpic"><img src="<?php echo $image_thumb;?>" alt="<?php echo $commentDetail->name; ?>" /></div>
                  <div class="usercomnt"> <a href="<?php echo base_url(); ?>profile/<?php echo $commentDetail->username; ?>" class="userlink" title="<?php echo $commentDetail->name; ?>"><?php echo $commentDetail->name; ?></a>
                    <p><?php echo $commentDetail->comment;?></p>
                    <div class="timerep"><span>[ <?php echo dateDiff(date("Y-m-d H:i:s"),$commentDetail->date_added).' ago';?> ]</span> <!--<a href="#" title="Reply">Reply</a>--></div>
                  </div>
                  <div class="clear"></div>
                </div>
              </li>
              <?php 
								}
							}
							?>
              
            
            </ul>
            <?php
                        if($this->session->userdata('username')) {
						?>
            <div class="postbox">
              <textarea id="comments" class="form-control"></textarea>
              <input type="button" value="게시" onclick="postImageComments()" />
              <input type="hidden" name="img" id="img" value="<?php echo base64_encode($image_row->image_id);?>">
            </div>
            <?php  } ?>
          </div>
        </div>
        
        <!--Gallery-->
        <div class="clear"></div>
      </div>
    </div>
    
    <!--Right Col Start-->
    <?php $this->load->view('common/profile_right_side');?>
    <div class="clear"></div>
  </div>
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
