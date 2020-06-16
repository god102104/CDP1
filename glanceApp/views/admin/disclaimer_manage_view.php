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
      <h1> Disclaimer Management
        <!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
			  <?php
            	if($this->session->flashdata('msg')):
				?>
               <?php 
					echo $this->session->flashdata('msg');
				endif;	
			  ?>
            </h3>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo base_url()."admin/pages_manage/update_content_disclaimer"?>" method="post">
            <table width="100%" border="0">
              <tr>
                <td width="19%" align="right" valign="top"><strong>Content:</strong>&nbsp;</td>
                <td width="81%">
                 <textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo stripslashes($content);?></textarea>
                 <script>

					CKEDITOR.replace( 'editor1', {
						fullPage: false,
						allowedContent: true,
						extraPlugins: 'wysiwygarea'
					});
		
				</script>   
                </td>
              </tr>
              <tr>
                <td align="right" valign="top">&nbsp;</td>
                <td><input type="submit" value="Submit"></td>
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
