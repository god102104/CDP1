<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('admin/common/after_body_open'); ?>
<?php $this->load->view('admin/common/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
	<?php $this->load->view('admin/common/left_side'); ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Dashboard</h1></section>
    
    <!-- Main content -->
    <section class="content">
     <table width="700" border="0" align="center">
              <tr>
                <td width="210">&nbsp;</td>
                <td width="205">&nbsp;</td>
                <td width="197">&nbsp;</td>
              </tr>
              <tr>
                <td align="center">
                <img src="<?php echo base_url();?>glancePublic/images/admin_images/view_profile.png" /><br />
                <a href="<?php echo base_url().'admin/profiles_lists';?>">회원 프로필 관리</a></td>
                <td align="center"><img src="<?php echo base_url();?>glancePublic/images/admin_images/cms.png" alt="" /><br />
                <a href="<?php echo base_url().'admin/pages_manage';?>">CMS 관리</a></td>
                <td align="center"><img src="<?php echo base_url();?>glancePublic/images/admin_images/msg.png" alt="" /><br />
                <a href="<?php echo base_url().'admin/all_messages';?>">회원 메시지 관리</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><img src="<?php echo base_url();?>glancePublic/images/admin_images/search.png" alt="" /><br />
                <a href="<?php echo base_url().'admin/search_profile_name';?>">프로필 검색</a></td>
                <td align="center"><img src="<?php echo base_url();?>glancePublic/images/admin_images/logout.png" alt="" /><br />
                <a href="<?php echo base_url().'admin/home/logout';?>">로그아웃</a></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>