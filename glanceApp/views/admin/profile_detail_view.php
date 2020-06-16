<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <h1> 프로필 관리
        <!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
          <table width="835" border="0">
            <tr>
              <td width="325" align="center" valign="top"><img src="<?php echo ($row->photo)?base_url().'glancePublic/uploads/member_images/'.$row->photo:base_url().'glancePublic/images/no-image.jpg';?>" width="300" style=" border:2px solid #666; border-radius:5px; margin:4px;" /></td>
              <td width="500" valign="top"><table width="500" border="0">
                
                <tr>
                  <td colspan="2"><strong>개인 정보</strong></td>
                </tr>
                <tr>
                  <td width="140">이름 :</td>
                  <td width="350"><?php echo $row->name;?></td>
                </tr>
                <tr>
                  <td>아이디 :</td>
                  <td><?php echo $row->username;?></td>
                </tr>
                <tr>
                  <td>성별 :</td>
                  <td><span class="inftxt"><?php echo $row->gender;?></span></td>
                </tr>
                <tr>
                  <td>구분 :</td>
                  <td><span class="inftxt"><?php echo $row->division;?></span></td>
                </tr>
                <tr>
                  <td>생년월일 :</td>
                  <td><span class="inftxt"><?php echo date("Y-m-d",strtotime($row->dob));?></span></td>
                </tr>
                <tr>
                  <td>휴대폰 번호 :</td>
                  <td><span class="inftxt"><?php echo $row->phone;?></span></td>
                </tr>
                <tr>
                  <td>이메일 :</td>
                  <td><span class="inftxt"><?php echo $row->email;?></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td colspan="2"><strong>요양사 정보</strong></td>
                </tr>
                <tr>
                  <td>희망 근무 지역 :</td>
                  <td><span class="inftxt"><?php echo $row->work_zone;?></span></td>
                </tr>
                <tr>
                  <td>희망 근무 형태 :</td>
                  <td><span class="inftxt"><?php echo $row->work_type;?></span></td>
                </tr>
                <tr>
                  <td>희망 근무 요일 :</td>
                  <td><span class="inftxt"><?php echo $row->work_day;?></span></td>
                </tr>
                <tr>
                  <td>희망 근무 시간 :</td>
                  <td><span class="inftxt"><?php echo $row->work_time;?></span></td>
                </tr>
                <tr>
                  <td>근무 경력 :</td>
                  <td><span class="inftxt"><?php echo $row->work_career;?></span></td>
                </tr>
                <tr>
                  <td>희망 급여 :</td>
                  <td><span class="inftxt"><?php echo $row->work_pay;?></span></td>
                </tr>
                <tr>
                  <td>자격증 유무 :</td>
                  <td><span class="inftxt"><?php echo $row->license;?></span></td>
                </tr>
                <tr>
                  <td>제목 :</td>
                  <td><span class="inftxt"><?php echo $row->work_title;?></span></td>
                </tr>
                <tr>
                  <td>자기소개 :</td>
                  <td><?php echo $row->work_desc;?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td colspan="2"><strong>채용자 정보</strong></td>
                </tr>
                <tr>
                  <td>근무 지역 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_zone;?></span></td>
                </tr>
                <tr>
                  <td>근무 형태 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_type;?></span></td>
                </tr>
                <tr>
                  <td>근무 기간 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_term;?></span></td>
                </tr>
                <tr>
                  <td>근무 시작일 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_date;?></span></td>
                </tr>
                <tr>
                  <td>근무 요일 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_day;?></span></td>
                </tr>
                <tr>
                  <td>근무 시간 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_time;?></span></td>
                </tr>
                <tr>
                  <td>희망 나이 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_age;?></span></td>
                </tr>
                <tr>
                  <td>희망 경력 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_career;?></span></td>
                </tr>
                <tr>
                  <td>급여 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_pay;?></span></td>
                </tr>
                <tr>
                  <td>반려동물 :</td>
                  <td><span class="inftxt"><?php echo $row->animal;?></span></td>
                </tr>
                <tr>
                  <td>제목 :</td>
                  <td><span class="inftxt"><?php echo $row->emp_title;?></span></td>
                </tr>
                <tr>
                  <td>자기소개 :</td>
                  <td><?php echo $row->emp_desc;?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                
                <tr>
                  <td>Total Views :</td>
                  <td><?php echo $profile_views;?></td>
                </tr>
                </table></td>
            </tr>
            <tr>
              <td colspan="2"><hr /></td>
            </tr>
            <tr>
              <td colspan="2" valign="top"><strong>&nbsp;&nbsp;댓글 :</strong></td>
            </tr>
            <tr>
              <td colspan="2" valign="top"><table width="100%" border="0">
               <?php
          				if($comment_row) {
          					foreach($comment_row as $commentDetail) {
          						if($commentDetail->photo)
          	  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$commentDetail->photo;
          	  					else
          	  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
          			?>
                <tr>
                  <td width="3%" rowspan="3" valign="top">&nbsp;</td>
                  <td width="5%" rowspan="3" valign="top"><img src="<?php echo $image_thumb;?>" alt="<?php echo $commentDetail->name; ?>" width="60" style="border:2px solid #666; border-radius:5px; margin:4px;" /></td>
                  <td width="53%"><a href="<?php echo base_url(); ?>profile/<?php echo $commentDetail->username; ?>" class="userlink" title="<?php echo $commentDetail->name; ?>"><?php echo $commentDetail->name; ?></a> <span style="float:right;"><a href="<?php echo base_url(); ?>admin/profile_detail/user_comment_delete/<?php echo $row->username; ?>/<?php echo $commentDetail->comment_id; ?>">댓글 삭제</a></span></td>
                  <td width="39%">&nbsp;</td>
                </tr>
                <tr>
                  <td><?php echo $commentDetail->comments;?></td>
                  <td>&nbsp;</td>
                </tr>
                <tr style="border-bottom: 1px solid #CCC;">
                  <td><span style="font-size:11px; color:#666">[ <?php echo dateDiff(date("Y-m-d H:i:s"),$commentDetail->date_comment).' ago';?> ]</span></td>
                  <td>&nbsp;</td>
                </tr>
                
                <?php
          		}
          	} else {
          	  ?>
                <tr>
                  <td colspan="4">&nbsp;&nbsp;댓글이 없습니다.</td>
                  </tr>
              <?php
          	}
          	?>    
              </table></td>
            </tr>
          </table>

            
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
