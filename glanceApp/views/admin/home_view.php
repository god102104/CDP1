<!DOCTYPE html>
<html class="bg-black">
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="bg-black">
<div class="form-box" id="login-box">
  <div class="header">관리자 로그인</div>
  <div class="err"><?php echo $msg;?></div>
  <form name="login_form" id="login_form" method="post" action="<?php echo base_url().'admin/home';?>">
    <div class="body bg-gray">
      <div class="form-group">
        <input type="text" name="username" id="username" class="form-control" placeholder="아이디"  />
        <?php echo form_error('username', '<div class="error"><span>', '</span></div>'); ?>
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="비밀번호"  />
        <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
      </div>
    </div>
    <div class="footer">
      <button type="submit" class="btn bg-olive btn-block">로그인</button>
     
  </form>
</div>
</body>
</html>