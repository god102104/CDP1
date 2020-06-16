<?php
session_start();
$_SESSION['username'] = $this->session->userdata('username');
$friends_recordset = $this->friend_model->get_all_approved_friends($this->session->userdata('member_id'));
/*echo "<pre>";
print_r($friends_recordset);
exit;*/
?>

<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url();?>chat/css/chat.css" />

<div class="chatovt">
<div class="chatWrap">
<div <?php /*?>onclick="doit();"<?php */?> class="topchatHead">채팅</div>
<div id="vv">
  <?php  if(!$friends_recordset): ?>
  <em style="color:#CCC;">빈 목록!</em>
  <?php endif;?>
  <ul class="chatuserlist">
  <?php foreach($friends_recordset as $friend_chat_row):?>
  <li><a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $friend_chat_row->username;?>')"><?php echo ($friend_chat_row->name=='')?$friend_chat_row->username:$friend_chat_row->name;?></a>
  <?php if($friend_chat_row->is_logged_in=='1'):?>
  <span class="online"><i class="fa fa-circle" aria-hidden="true"></i></span>
  <?php else: ?>
  <span class="offline"><i class="fa fa-circle" aria-hidden="true"></i></span>
  <?php endif;?>
  </li>
  <?php endforeach;?>
  </ul>
  
</div>
</div>
</div>
<?php 
 if($friends_recordset): ?>

<script type="text/javascript" src="<?php echo base_url();?>chat/js/chat.js"></script>
<script type="text/javascript">
function doit(){
	$("#vv").toggle(1000);	
}



$(document).ready(function() {
	$(".chatovt").hover(function() {
		$(this).stop().animate({right: "0"}, "medium");}, 
		function() {
			$(this).stop().animate({right: "-200"}, "medium");
		}, 500);
	});



</script>
<?php endif;?>
