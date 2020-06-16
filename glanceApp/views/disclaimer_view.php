<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $content->page_meta_title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  <div class="about-wraper">
      <div class="container"><h1 class="titleinner">정책</h1></div>
      
      <div class="textrow"><div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php echo stripslashes($content->content);?>
      </div>
    <div class="col-md-4">
      <div class="postimg"><?php $ads = $this->ads_model->get_content(); echo $ads->content;?></div>
    </div>
  </div>
</div></div>

      
    </div>
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
