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
  	<div class="container">
	   <div class="privacyWrap">       	
        <div class="row">
  		<div class="col-md-8 col-md-offset-2">
            <div class="userccount">
            <h1>Privacy Setting</h1>
            <form name="edit_form" id="edit_form" method="post" action="">                
                <ul class="privacyList">
                    <li class="headbar">
                        <div class="row">
                            <div class="col-md-6 col-sm-3">&nbsp;</div>
                            <div class="col-md-2 col-sm-3"><strong>Public</strong></div>
                            <div class="col-md-2 col-sm-3"><strong>Friends</strong></div>
                            <div class="col-md-2 col-sm-3"><strong>Only Me</strong></div>
                        </div>
                    </li>
                    
                    <li>
                    	<div class="row">
                            <div class="col-md-6 col-sm-3">My email id appears to</div>
                            <div class="col-md-2 col-sm-3"><input type="radio" name="email_setting" value="public" /></div>
                            <div class="col-md-2 col-sm-3"><input type="radio" name="email_setting" value="friends" /></div>
                            <div class="col-md-2 col-sm-3"><input type="radio" name="email_setting" value="me" /></div>
                            <?php echo form_error('email_setting', '<div class="error"><span>', '</span></div>'); ?>
                            <script>
                            var SelectdValue = '<?php echo $privacy_row->email_setting;?>';
                            $('input[name="email_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                            </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">My phone number appears to</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="phone_setting" value="public" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="phone_setting" value="friends" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="phone_setting" value="me" /></div>
                        <?php echo form_error('phone_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->phone_setting;?>';
                        $('input[name="phone_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">My photo Gallery appears to</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="gallery_setting" value="public"   /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="gallery_setting" value="friends" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="gallery_setting" value="me"/></div>
                        <?php echo form_error('gallery_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->gallery_setting;?>';
                        $('input[name="gallery_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">My date of birth appears to</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="dob_setting" value="public" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="dob_setting" value="friends" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="dob_setting" value="me" /></div>
                        <?php echo form_error('dob_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->dob_setting;?>';
                        $('input[name="dob_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">My Location appears to (Country and City)</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="location_setting" value="public" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="location_setting" value="friends" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="location_setting" value="me" /></div>
                        <?php echo form_error('location_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->location_setting;?>';
                        $('input[name="location_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">Who can send messages to you</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="msg_setting" value="public" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="msg_setting" value="friends" /></div>
                        <?php echo form_error('msg_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <div class="col-md-2 col-sm-3">&nbsp;</div>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->msg_setting;?>';
                        $('input[name="msg_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    <li>
                    	<div class="row">
                        <div class="col-md-6 col-sm-3">Who can comments on your profile</div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="comment_setting" value="public" /></div>
                        <div class="col-md-2 col-sm-3"><input type="radio" name="comment_setting" value="friends" /></div>
                        <?php echo form_error('comment_setting', '<div class="error"><span>', '</span></div>'); ?>
                        <div class="col-md-2 col-sm-3">&nbsp;</div>
                        <script>
                        var SelectdValue = '<?php echo $privacy_row->comment_setting;?>';
                        $('input[name="comment_setting"][value="' + SelectdValue + '"]').prop('checked', true);
                        </script>
                    	</div>    
                    </li>
                    
                    
                    
                    <li>
                        <div class="submit-setting"><input type="submit" value="Submit and Save" name="" /></div> 
                    </li>
                </ul>
            </form>  
            </div>
        </div>
        </div>
        
    </div>
    </div>    
  </div>
  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
