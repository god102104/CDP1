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
      <h1> 회원 메시지 관리
        <!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">전체 메시지</h3>
            </div>
            <!-- /.box-header -->
            <?php
            if($this->session->flashdata('msg')):
			?>
              <div style="color:#009933;font-size:12px;"><?php echo $this->session->flashdata('msg');?></div><br />
            <?php
			endif;
			?>  
            
            <div class="box-body table-responsive">

            <table id="example2" class="table table-bordered table-hover">
            
              <thead>
                <tr>
                    <th><strong>작성일</strong></td>
                    <th><strong>보낸 회원</strong></td>
                    <th><strong>받은 회원</strong></td>
                    <th><strong>메시지 내용</strong></td>
                    <th><strong>삭제</strong></td>
                  </tr>
              </thead>
              <?php
              if($message_row):
			  	foreach($message_row as $message) {
					
			  ?>
              <tr>
                <td><?php echo date('Y-m-d',strtotime($message['date_send']));?></td>
                <td><?php echo $message['sender'];?></td>
                <td><?php echo $message['reciever'];?></td>
                <td><?php echo $message['message'];?></td>
                <td>
                    <a href="<?php echo base_url().'admin/all_messages/message_delete/'.$message['messages_id'];?>" onclick="if(confirm('메시지를 삭제하시겠습니까?')){ return true; } else {return false;} ">메시지 삭제</a><br/>
               </td>
              </tr>
              <?php	} endif; ?>

                <tfoot>
                </tfoot>
              </table>
            </div>
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