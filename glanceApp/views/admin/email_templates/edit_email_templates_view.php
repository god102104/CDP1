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
<script src="<?php echo base_url(); ?>glancePublic/ckeditor/ckeditor.js"></script>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
	<?php $this->load->view('admin/common/left_side'); ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 이메일 템플릿 관리</h1></section><section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">이메일 템플릿 수정</h3>
            </div>
            <!-- /.box-header -->
            <div style="font-size:11px; color:#F00;"><?php echo validation_errors(); ?></div>
            <?php
            if($this->session->flashdata('msg')):
			?>
              <div style="color:#009933;font-size:12px;"><?php echo $this->session->flashdata('msg');?></div><br />
            <?php
			endif;
			?>  
            
             <?php echo form_open('admin/'.$page_name.'/update/'.$row->ID, array('name'=>'frm', 'id'=>'frm')); ?>
            
              <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <div id="msg_box"></div>
                  <div class="nav-tabs-custom">
                    <div class="tab-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>이메일 템플릿 이름</label>
                            <input type="text" placeholder="Email Name" name="email_name" value="<?php echo $row->email_name;?>" id="email_name" class="form-control" required >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>이메일 수진자</label>
                            <input type="text" placeholder="From Name" name="from_name" value="<?php echo $row->from_name;?>" id="from_name" class="form-control" required >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>이메일 주소</label>
                            <input type="text" placeholder="From Email Address" value="<?php echo $row->from_email;?>" name="from_email" id="from_email" class="form-control" required >
                          </div>
                        </div>
                        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>이메일 제목</label>
                            <input type="text" placeholder="Email Subject" name="email_subject"  value="<?php echo $row->email_subject;?>" id="email_subject" class="form-control" required >
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label>이메일 내용</label>
                          <textarea placeholder="Email Content" name="editor1" id="editor1" class="form-control"><?php echo $row->email_content;?></textarea>
                 <script>

					CKEDITOR.replace( 'editor1', {
						fullPage: false,
						allowedContent: true,
						extraPlugins: 'wysiwygarea'
					});
		
				</script> 
                
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-content --> 
                    
                  </div>
                </div>
              </div>
     
            <!-- /.box-body -->
            
            <div class="box-footer">
              <input type="hidden" value="update" name="method" id="method" />
              <input type="hidden" value="<?php echo $row->ID;?>" name="pid" id="pid" />
              <button class="btn btn-primary" id="btn_submit" type="submit">변경</button>
            </div>
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