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
  <!--Recent Profiles Start-->
  <div class="container">
		<div class="loginboxWrap">
        <div class="err"><?php echo $msg;?></div>
        	<h4>비밀번호 변경</h4>
            <form name="reset_form" id="reset_form" method="post">
        	<label>새 비밀번호</label>
        	<input type="password" name="pass" id="pass" value=""  />
            <?php echo form_error('pass', '<div class="error"><span>', '</span></div>'); ?>
            
            <input type="submit" name="" value="Update Password" />
            <a href="<?php echo base_url();?>user/login">로그인</a>
            <div class="clear"></div>
            </form>
        </div> 
        
        <div class="signupWrp"><a href="<?php echo base_url();?>">회원가입</a></div>
              
    <div class="clear"></div>
    </div>
    <!--Recent Profiles Endt-->
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
