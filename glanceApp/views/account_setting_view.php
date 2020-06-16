<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <!--Start-->
  	<div class="container"> 
    <!--Recent Profiles Start-->
    
    <div class="row">
  	<div class="col-md-6 col-md-offset-3">
       <div class="userccount">
      <h1>비밀번호 변경</h1>
      <form name="pass_form" id="pass_form" method="post" action="">
      	<div class="formpanel">
        <div class="formrow">
        <label>새 비밀번호</label>
        <input type="password" name="password" id="password" class="form-control" />
        <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
        </div>
        
        <div class="formrow">
        <label>비밀번호 확인</label>
        <input type="password" name="con_password" id="con_password" class="form-control"  />
        <?php echo form_error('con_password', '<div class="error"><span>', '</span></div>'); ?>
        </div>
        <div class="buttonBox">
        <input type="submit" name="" value="Change" />
        </div>
        </div>
      </form>
      </div>
    </div>
    </div>
    
   
  </div>
  <!--End-->
  </div>
  
  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
