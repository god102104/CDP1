<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
<script src="<?php echo base_url(); ?>glancePublic/ckeditor/ckeditor.js"></script>
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
      <h1> 광고 관리<!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div style="font-size:11px; color:#060;">
                <?php
            	if($this->session->flashdata('msg')):
				?>
                <?php 
					echo $this->session->flashdata('msg');
				endif;	
			  ?>
              </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo base_url()."admin/ads/update_data/"; ?>" method="post">
              <table width="100%" border="0">
                <tr>
                  <td width="19%" align="right" valign="top"><strong>광고 :</strong>&nbsp;</td>
                  <td width="81%"><textarea cols="80" id="content" name="content" rows="20"><?php echo stripslashes($content);?></textarea></td>
                </tr>
                <tr>
                  <td align="right" valign="top">&nbsp;</td>
                  <td><input type="submit" value="변경" /></td>
                </tr>
              </table>
            </form>
            
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
          
          <!-- /.box --> 
        </div>
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>
