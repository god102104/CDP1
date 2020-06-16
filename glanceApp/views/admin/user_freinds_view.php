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
      <h1> 회원 친구 목록
        <!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $real_name;?> 님의 친구 목록</h3>
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
                    <th width="84"><strong>추가일</strong></th>
                    <th width="44"><strong>이름</strong></th>
                    <th width="72"><strong>아이디</strong></th>
                    <th width="32">나이 </th>                 
                  <th width="61"><strong>지역</strong></th>                    
               </tr>
              </thead>
              <?php
              if($friend_row):
			  	foreach($friend_row as $friend) {
					
			  ?>
              <tr>
                <td><?php echo date('Y-m-d',strtotime($friend->dated));?></td>
                <td><a href="<?php echo base_url().'profile/'.$friend->username;?>" target="_blank"><?php echo $friend->name;?></a></td>
                <td><?php echo $friend->username;?></td>
                <td><?php echo $friend->mAge;?></td>
                <td><?php echo $friend->location;?></td>
                </tr>
              <?php
				}
              endif;
              ?>

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