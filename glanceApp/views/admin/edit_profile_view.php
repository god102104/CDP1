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
      <h1> 회원 관리<!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">개인정보 수정 - <?php echo ($row->name=='')?$row->username:$row->name;?></h3>
            </div>
            <!-- /.box-header -->
            
            <form name="edit_form" id="edit_form" method="post" action="" enctype="multipart/form-data">
            
            <table width="706" border="0">
                <tr>
                <td width="51">&nbsp;</td>
                <td width="209">아이디 :</td>
                <td width="220"><input type="text" name="username" id="username" class="form-control" value="<?php echo $row->username;?>" readonly="readonly"/></td>
                <td width="208">&nbsp;</td>
              </tr>
              <tr>
                <td width="51">&nbsp;</td>
                <td width="209">이름 :</td>
                <td width="220"><input type="text" name="name" id="name" class="form-control" value="<?php echo $row->name;?>" />
                <?php echo form_error('name', '<div class="error"><span>', '</span></div>'); ?></td>
                <td width="208">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>성별 :</td>
                <td><select name="gender" id="gender" class="form-control">
                    <option value="Male" <?php echo is_selected($row->gender,'Male');?>>남성</option>
                    <option value="Female" <?php echo is_selected($row->gender,'Female');?>>여성</option>
                  </select>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>구분 :</td>
                <td><select name="division" id="division" class="form-control">
                      <option value="yoyang" <?php echo $row->division == 'yoyang'?'selected':'' ?>>요양사</option>
                      <option value="chaeyong" <?php echo $row->division == 'chaeyong'?'selected':''?>>채용자</option>
                  </select>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>생년월일 :</td>
                <td><input type="text" name="dob" id="dob" class="form-control" value="<?php echo date('Y-m-d',strtotime($row->dob));?>" readonly="readonly" />
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>휴대폰 번호 :</td>
                <td><span class="formwrp">
                  <input type="phone" name="phone" id="phone" class="form-control" value="<?php echo $row->phone;?>" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="010-0000-0000"/>
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>이메일 :</td>
                <td><span class="formwrp">
                  <input type="text" name="email" id="email" class="form-control" value="<?php echo $row->email;?>" />
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>

          <div id="div_yoyangsa_form"> <!-- 요양사 -->
              <tr>
                <td>&nbsp;</td>
                <td>희망 근무 지역 :</td>
                <td><select name="work_zone" id="work_zone" class="form-control">
                        <option value="서울">서울</option>
                        <option value="경기">경기</option>
                        <option value="인천">인천</option>
                        <option value="강원">강원</option>
                        <option value="충북">충북</option>
                        <option value="충남">충남</option>
                        <option value="세종">세종</option>
                        <option value="대전">대전</option>
                        <option value="광주">광주</option>
                        <option value="전북">전북</option>
                        <option value="전남">전남</option>
                        <option value="대구">대구</option>
                        <option value="경북">경북</option>
                        <option value="경남">경남</option>
                        <option value="울산">울산</option>
                        <option value="부산">부산</option>
                        <option value="제주">제주</option>
                  </select>
                <script>
                    var work_zoneSelected = '<?php echo $row->work_zone;?>';
                    $("#work_zone option[value='"+work_zoneSelected+"']").attr('selected', 'selected');
                  </script>  
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 근무 형태 :</td>
                  <td><select name="work_type" id="work_type" class="form-control">
                        <option value="출퇴근형" <?php echo is_selected($row->work_type,'출퇴근형');?>>출퇴근형</option>
                        <option value="재택형" <?php echo is_selected($row->work_type,'재택형');?>>재택형</option>
                        <option value="입주형" <?php echo is_selected($row->work_type,'입주형');?>>입주형</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 근무 요일 :</td>
                  <td><select name="work_day" id="work_day" class="form-control">
                        <option value="평일" <?php echo is_selected($row->work_day,'평일');?>>평일</option>
                        <option value="주말" <?php echo is_selected($row->work_day,'주말');?>>주말</option>
                            
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 근무 시간 :</td>
                  <td><select name="work_time" id="work_time" class="form-control">
                        <option value="풀타임" <?php echo is_selected($row->work_time,'풀타임');?>>풀타임</option>
                        <option value="오전" <?php echo is_selected($row->work_time,'오전');?>>오전</option>
                        <option value="오후" <?php echo is_selected($row->work_time,'오후');?>>오후</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 경력 :</td>
                  <td><select name="work_career" id="work_career" class="form-control">
                        <option value="초보" <?php echo is_selected($row->work_career,'초보');?>>초보</option>
                        <option value="1년" <?php echo is_selected($row->work_career,'1년');?>>1년</option>
                        <option value="2년" <?php echo is_selected($row->work_career,'2년');?>>2년</option>
                        <option value="3년" <?php echo is_selected($row->work_career,'3년');?>>3년</option>
                        <option value="5년" <?php echo is_selected($row->work_career,'5년');?>>5년</option>
                        <option value="10년" <?php echo is_selected($row->work_career,'10년');?>>10년</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 급여 :</td>
                  <td><input type="text" name="work_pay" id="work_pay" class="form-control" value="<?php echo $row->work_pay;?>" /></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>자격증 유무 :</td>
                  <td><select name="license" id="license" class="form-control">
                        <option value="Yes" <?php echo is_selected($row->license,'Yes');?>>Yes</option>
                        <option value="No" <?php echo is_selected($row->license,'No');?>>No</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>자격증 첨부 :
                  </td>
                <td><input type="file" name="photo_li" id="photo_li" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>제목 :</td>
                <td><input type="text" name="work_title" id="work_title" class="form-control" value="<?php echo $row->work_title;?>" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>자기 소개 :</td>
                <td><textarea name="work_desc" id="work_desc" class="form-control"><?php echo $row->work_desc;?></textarea> </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>사진 첨부 :
                  </td>
                <td><input type="file" name="photo" id="photo" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>

          </div> <!-- 요양사 end -->
          <div id="div_chaeyong_form" ><!-- 채용사 start -->
              <tr>
                <td>&nbsp;</td>
                <td>근무 지역 :</td>
                <td><select name="emp_zone" id="emp_zone" class="form-control">
                        <option value="서울">서울</option>
                        <option value="경기">경기</option>
                        <option value="인천">인천</option>
                        <option value="강원">강원</option>
                        <option value="충북">충북</option>
                        <option value="충남">충남</option>
                        <option value="세종">세종</option>
                        <option value="대전">대전</option>
                        <option value="광주">광주</option>
                        <option value="전북">전북</option>
                        <option value="전남">전남</option>
                        <option value="대구">대구</option>
                        <option value="경북">경북</option>
                        <option value="경남">경남</option>
                        <option value="울산">울산</option>
                        <option value="부산">부산</option>
                        <option value="제주">제주</option>
                  </select>
                <script>
                    var emp_zoneSelected = '<?php echo $row->emp_zone;?>';
                    $("#emp_zone option[value='"+emp_zoneSelected+"']").attr('selected', 'selected');
                  </script>  
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 형태 :</td>
                  <td><select name="emp_type" id="emp_type" class="form-control">
                        <option value="출퇴근형" <?php echo is_selected($row->emp_type,'출퇴근형');?>>출퇴근형</option>
                        <option value="재택형" <?php echo is_selected($row->emp_type,'재택형');?>>재택형</option>
                        <option value="입주형" <?php echo is_selected($row->emp_type,'입주형');?>>입주형</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 기간 :</td>
                  <td><select name="emp_term" id="emp_term" class="form-control">
                        <option value="0" <?php echo is_selected($row->emp_term,'0');?>>1개월 미만</option>
                        <option value="1" <?php echo is_selected($row->emp_term,'1');?>>1개월</option>
                        <option value="2" <?php echo is_selected($row->emp_term,'2');?>>2개월</option>
                        <option value="3" <?php echo is_selected($row->emp_term,'3');?>>3개월</option>
                        <option value="6" <?php echo is_selected($row->emp_term,'6');?>>6개월 이상</option>
                        <option value="12" <?php echo is_selected($row->emp_term,'12');?>>1년 이상</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 시작일 :</td>
                  <td><input type="text" name="emp_date" id="emp_date"class="form-control" placeholder="0000-00-00"></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 요일 :</td>
                  <td><select name="emp_day" id="emp_day" class="form-control">
                        <option value="평일" <?php echo is_selected($row->emp_day,'평일');?>>평일</option>
                        <option value="주말" <?php echo is_selected($row->emp_day,'주말');?>>주말</option>
                            
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>근무 시간 :</td>
                  <td><select name="emp_time" id="emp_time" class="form-control">
                        <option value="풀타임" <?php echo is_selected($row->emp_time,'풀타임');?>>풀타임</option>
                        <option value="오전" <?php echo is_selected($row->emp_time,'오전');?>>오전</option>
                        <option value="오후" <?php echo is_selected($row->emp_time,'오후');?>>오후</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 나이 :</td>
                  <td><select name="emp_age" id="emp_age" class="form-control">
                        <option value="0">무관</option>
                        <?php for($p=20;$p<=70;$p+=10):?>
                        <option value="<?php echo $p;?>" <?php echo is_selected($row->emp_age,'$p');?>><?php echo $p;?> 대</option>
                        <?php endfor ?>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>희망 경력 :</td>
                  <td><select name="emp_career" id="emp_career" class="form-control">
                        <option value="0" <?php echo is_selected($row->emp_career,'0');?>>초보가능</option>
                        <option value="1" <?php echo is_selected($row->emp_career,'1');?>>1년 이상</option>
                        <option value="2" <?php echo is_selected($row->emp_career,'2');?>>2년 이상</option>
                        <option value="3" <?php echo is_selected($row->emp_career,'3');?>>3년 이상</option>
                        <option value="5" <?php echo is_selected($row->emp_career,'5');?>>5년 이상</option>
                      </select></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>급여 :</td>
                  <td><input type="text" name="emp_pay" id="emp_pay" class="form-control" value="<?php echo $row->emp_pay;?>" /></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>반려동물 :</td>
                  <td><input type="text" name="animal" id="animal" class="form-control" value="<?php echo $row->animal;?>" /></td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>제목 :</td>
                <td><input type="text" name="emp_title" id="emp_title" class="form-control" value="<?php echo $row->emp_title;?>" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>자기 소개 :</td>
                <td><textarea name="emp_desc" id="emp_desc" class="form-control"><?php echo $row->emp_desc;?></textarea> </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>

          </div><!-- 채용사 end -->

              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="input" value="저장" />
                <input type="hidden" name="username" id="username" value="<?php echo $row->username;?>">
                <input type="hidden" name="id" id="id" value="<?php echo $row->id;?>">
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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
