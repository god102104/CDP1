
			<!-- ============================ Hero Banner  Start================================== -->
			<!-- <div class="page-title-wrap">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption">
							<h1>Hello! <?php echo $this->session->userdata('name');?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div> -->
			<!-- ============================ Hero Banner End ================================== -->

			<script>
				$(function() {
				    $(".submit2").click(function() {
				        alert($("#edit_form").serialize());
				    });
				});
			</script>
			<!-- ============== Candidate Dashboard ====================== -->	
			<section class="tr-single-detail gray-bg">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar Start -->
						<div class="col-md-4 col-sm-12">
							<div class="dashboard-wrap bg-white">
							
							<div class="dashboard-thumb">
								<div class="dashboard-th-pic">
									<img src="<?php echo ($this->session->userdata('photo'))?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo'):base_url().'glancePublic/images/no-image.jpg';?>" class="img-fluid mx-auto img-circle" alt="" />
								</div>
								<h4 class="mb-1"><?php echo $this->session->userdata('name');?></h4>
								<span class="text-success"><?php echo ($this->session->userdata('division')=='yoyang')?'요양사':'채용사'; ?></span>
							</div>
							
							<!-- Nav tabs -->
							<ul class="nav dashboard-verticle-nav">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#profile"><i class="ti-file"></i>내 정보 수정</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#resume"><i class="ti-file"></i>내 이력서</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#cv"><i class="ti-email"></i>자기소개서</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>"><i class="ti-user"></i>프로필 보기</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#change-password"><i class="lni-lock"></i>비밀번호 변경</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:void(0)"><i class="lni-trash"></i>회원 탈퇴</a>
								</li>
							</ul>
							
							</div>
						</div>
						<!-- /col-md-4 -->
					
						<div class="col-md-8 col-sm-12">
							<!-- Tab panes -->
							<div class="tab-content">
								
								<!-- 내 프로필 -->
								<div class="tab-pane active" id="profile">

									<!-- 기본 정보 -->
									<div class="tr-single-box">
										<form name="edit_form" id="edit_form" method="post" action="<?php echo base_url().'edit_profile';?>" enctype="multipart/form-data">
											<div class="tr-single-header">
												<h4><i class="ti-desktop"></i> 기본 정보</h4>
											</div>
											
											<div class="tr-single-body">
												<div class="row">
													
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>이름</label>
															<input type="text" name="name" id="name" class="form-control" value="<?php echo $row->name;?>" readonly="readonly">
														</div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
								                    		<label>성별</label>
								                    		<select name="gender" id="gender" class="form-control">
								                    			<option value="Male" <?php echo $row->gender == 'Male'?'selected':'' ?>>남성</option>
								                    			<option value="Female" <?php echo $row->gender == 'Female'?'selected':''?>>여성</option>
								                    		</select>
								                    	</div>
								                    </div>
								                    <div class="col-md-6 col-sm-6">
								                    	<div class="form-group">
								                    		<label>구분</label>
								                    		<select name="division" id="division" class="form-control">
								                    			<option value="yoyang" <?php echo $row->division == 'yoyang'?'selected':'' ?>>요양사</option>
								                    			<option value="chaeyong" <?php echo $row->division == 'chaeyong'?'selected':''?>>채용자</option>
								                    		</select>
								                		</div>
								                    </div>
								                    <div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>생년월일</label>
															<input type="text" name="dob" id="dob" class="form-control" value="<?php echo date('Y-m-d',strtotime($row->dob));?>" readonly />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>휴대전화</label>
															<input type="phone" name="phone" id="phone" class="form-control" value="<?php echo $row->phone;?>" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="010-0000-0000"/>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>이메일</label>
															<input type="text" name="email" id="email" class="form-control" value="<?php echo $row->email; ?>" />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>사진 첨부</label>
															<div class="custom-file">
																<input type="file" name="photo" id="photo" class="custom-file-input" >
																<label class="custom-file-label" for="photo">파일 선택</label>
															 </div>
														</div>
													</div>
												
												</div>
											</div>
											
											
										</div>
										<!-- /기본 정보 -->
										
										<!-- 요양사 정보 -->
									<div id="div_yoyangsa_form">
										<div class="tr-single-box">
											<div class="tr-single-header">
												<h4><i class="ti-support"></i> 요양사 정보</h4>
											</div>
											
											<div class="tr-single-body">
												<div class="row">
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 근무 지역</label>
															<select name="work_zone" id="work_zone" class="form-control">
										                        <option value="서울" <?php echo is_selected($row->work_zone,'서울');?>>서울</option>
										                        <option value="경기" <?php echo is_selected($row->work_zone,'경기');?>>경기</option>
										                        <option value="인천" <?php echo is_selected($row->work_zone,'인천');?>>인천</option>
										                        <option value="강원" <?php echo is_selected($row->work_zone,'강원');?>>강원</option>
										                        <option value="충북" <?php echo is_selected($row->work_zone,'충북');?>>충북</option>
										                        <option value="충남" <?php echo is_selected($row->work_zone,'충남');?>>충남</option>
										                        <option value="세종" <?php echo is_selected($row->work_zone,'세종');?>>세종</option>
										                        <option value="대전" <?php echo is_selected($row->work_zone,'대전');?>>대전</option>
										                        <option value="광주" <?php echo is_selected($row->work_zone,'광주');?>>광주</option>
										                        <option value="전북" <?php echo is_selected($row->work_zone,'전북');?>>전북</option>
										                        <option value="전남" <?php echo is_selected($row->work_zone,'전남');?>>전남</option>
										                        <option value="대구" <?php echo is_selected($row->work_zone,'대구');?>>대구</option>
										                        <option value="경북" <?php echo is_selected($row->work_zone,'경북');?>>경북</option>
										                        <option value="경남" <?php echo is_selected($row->work_zone,'경남');?>>경남</option>
										                        <option value="울산" <?php echo is_selected($row->work_zone,'울산');?>>울산</option>
										                        <option value="부산" <?php echo is_selected($row->work_zone,'부산');?>>부산</option>
										                    	<option value="제주" <?php echo is_selected($row->work_zone,'제주');?>>제주</option>
										                    </select>
										                    <!-- <script>
										                        var work_zoneSelected = '<?php echo $row->work_zone;?>';
										                        $("#work_zone option[value='"+work_zoneSelected+"']").attr('selected', 'selected');
										                    </script> -->
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 근무 형태</label>
															<select name="work_type" id="work_type" class="form-control">
																<option value="출퇴근형" <?php echo is_selected($row->work_type,'출퇴근형');?>>출퇴근형</option>
																<option value="재택형" <?php echo is_selected($row->work_type,'재택형');?>>재택형</option>
																<option value="입주형" <?php echo is_selected($row->work_type,'입주형');?>>입주형</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 근무 요일</label>
															<select name="work_day" id="work_day" class="form-control">
																<option value="평일" <?php echo is_selected($row->work_day,'평일');?>>평일</option>
																<option value="주말" <?php echo is_selected($row->work_day,'주말');?>>주말</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 근무 시간</label>
															<select name="work_time" id="work_time" class="form-control">
																<option value="풀타임" <?php echo is_selected($row->work_time,'풀타임');?>>풀타임</option>
																<option value="오전" <?php echo is_selected($row->work_time,'오전');?>>오전</option>
																<option value="오후" <?php echo is_selected($row->work_time,'오후');?>>오후</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 경력</label>
															<select name="work_career" id="work_career" class="form-control">
																<option value="0" <?php echo is_selected($row->work_career,'초보');?>>초보</option>
																<option value="1" <?php echo is_selected($row->work_career,'1');?>>1년 이상</option>
																<option value="2" <?php echo is_selected($row->work_career,'2');?>>2년 이상</option>
																<option value="3" <?php echo is_selected($row->work_career,'3');?>>3년 이상</option>
																<option value="5" <?php echo is_selected($row->work_career,'5');?>>5년 이상</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 급여</label>
															<input type="text" name="work_pay" id="work_pay" class="form-control" value="<?php echo $row->work_pay;?>" />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">제목</label>
															<input type="text" name="work_title" id="work_title" class="form-control" value="<?php echo $row->work_title; ?>" />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">자기소개</label>
															<textarea name="work_desc" id="work_desc" class="form-control" style="resize: none"><?php echo $row->work_desc;?></textarea>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">자격증</label>
															<select name="license" id="license" class="form-control">
																<option value="No" <?php echo is_selected($row->license,'No');?>>No</option>
																<option value="Yes" <?php echo is_selected($row->license,'Yes');?>>Yes</option>
															</select>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label>자격증 첨부</label>
															<div class="custom-file">
																<input type="file" name="photo_li" id="photo_li" class="custom-file-input" >
																<label class="custom-file-label" for="photo_li">파일 선택</label>
															</div>
														</div>
													</div>
													
												</div>
											</div>
											
										</div>
										
									</div> <!-- /요양사 정보 -->
										<!-- 채용자 정보-->
									<div id="div_chaeyong_form" > 
										<div class="tr-single-box">
											<div class="tr-single-header">
												<h4><i class="ti-blackboard"></i> 채용자 정보</h4>
											</div>
											
											<div class="tr-single-body">
												<div class="row">
													
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 지역</label>
															<select name="emp_zone" id="emp_zone" class="form-control">
										                        <option value="서울" <?php echo is_selected($row->emp_zone,'서울');?>>서울</option>
										                        <option value="경기" <?php echo is_selected($row->emp_zone,'경기');?>>경기</option>
										                        <option value="인천" <?php echo is_selected($row->emp_zone,'인천');?>>인천</option>
										                        <option value="강원" <?php echo is_selected($row->emp_zone,'강원');?>>강원</option>
										                        <option value="충북" <?php echo is_selected($row->emp_zone,'충북');?>>충북</option>
										                        <option value="충남" <?php echo is_selected($row->emp_zone,'충남');?>>충남</option>
										                        <option value="세종" <?php echo is_selected($row->emp_zone,'세종');?>>세종</option>
										                        <option value="대전" <?php echo is_selected($row->emp_zone,'대전');?>>대전</option>
										                        <option value="광주" <?php echo is_selected($row->emp_zone,'광주');?>>광주</option>
										                        <option value="전북" <?php echo is_selected($row->emp_zone,'전북');?>>전북</option>
										                        <option value="전남" <?php echo is_selected($row->emp_zone,'전남');?>>전남</option>
										                        <option value="대구" <?php echo is_selected($row->emp_zone,'대구');?>>대구</option>
										                        <option value="경북" <?php echo is_selected($row->emp_zone,'경북');?>>경북</option>
										                        <option value="경남" <?php echo is_selected($row->emp_zone,'경남');?>>경남</option>
										                        <option value="울산" <?php echo is_selected($row->emp_zone,'울산');?>>울산</option>
										                        <option value="부산" <?php echo is_selected($row->emp_zone,'부산');?>>부산</option>
										                    	<option value="제주" <?php echo is_selected($row->emp_zone,'제주');?>>제주</option>
										                    </select>
										                    <!-- <script>
										                        var emp_zoneSelected = '<?php echo $row->emp_zone;?>';
										                        $("#emp_zone option[value='"+emp_zoneSelected+"']").attr('selected', 'selected');
										                    </script> -->
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 형태</label>
															<select name="emp_type" id="emp_type" class="form-control">
																<option value="출퇴근형" <?php echo is_selected($row->emp_type,'출퇴근형');?>>출퇴근형</option>
																<option value="재택형" <?php echo is_selected($row->emp_type,'재택형');?>>재택형</option>
																<option value="입주형" <?php echo is_selected($row->emp_type,'입주형');?>>입주형</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 기간</label>
															<select name="emp_term" id="emp_term" class="form-control">
																<option value="0" <?php echo is_selected($row->emp_term,'0');?>>1개월 미만</option>
																<option value="1" <?php echo is_selected($row->emp_term,'1');?>>1개월</option>
																<option value="2" <?php echo is_selected($row->emp_term,'2');?>>2개월</option>
																<option value="3" <?php echo is_selected($row->emp_term,'3');?>>3개월</option>
																<option value="6" <?php echo is_selected($row->emp_term,'6');?>>6개월 이상</option>
																<option value="12" <?php echo is_selected($row->emp_term,'12');?>>1년 이상</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 시작일</label>
															<input type="text" name="emp_date" id="emp_date" class="form-control" value="<?php echo $row->emp_date; ?>">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 요일</label>
															<select name="emp_day" id="emp_day" class="form-control">
																<option value="평일" <?php echo is_selected($row->emp_day,'평일');?>>평일</option>
																<option value="주말" <?php echo is_selected($row->emp_day,'주말');?>>주말</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">근무 시간</label>
															<select name="emp_time" id="emp_time" class="form-control">
																<option value="풀타임" <?php echo is_selected($row->emp_time,'풀타임');?>>풀타임</option>
																<option value="오전" <?php echo is_selected($row->emp_time,'오전');?>>오전</option>
																<option value="오후" <?php echo is_selected($row->emp_time,'오후');?>>오후</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 나이</label>
															<select name="emp_age" id="emp_age" class="form-control">
																<option value="0">무관</option>
																<?php for($p=20;$p<=70;$p+=10):?>
																<option value="<?php echo $p;?>" <?php echo is_selected($row->emp_age,'$p');?>><?php echo $p;?> 대</option>
																<?php endfor ?>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">희망 경력</label>
															<select name="emp_career" id="emp_career" class="form-control">
																<option value="0" <?php echo is_selected($row->emp_career,'초보');?>>초보 가능</option>
																<option value="1" <?php echo is_selected($row->emp_career,'1');?>>1년 이상</option>
																<option value="2" <?php echo is_selected($row->emp_career,'2');?>>2년 이상</option>
																<option value="3" <?php echo is_selected($row->emp_career,'3');?>>3년 이상</option>
																<option value="5" <?php echo is_selected($row->emp_career,'5');?>>5년 이상</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">급여</label>
															<input type="text" name="emp_pay" id="emp_pay" class="form-control" value="<?php echo $row->emp_pay;?>" />
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">반려동물</label>
															<input type="text" name="animal" id="animal" class="form-control" value="<?php echo $row->animal; ?>" />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">제목</label>
															<input type="text" name="emp_title" id="emp_title" class="form-control" value="<?php echo $row->emp_title; ?>" />
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group">
															<label class="social-nfo">상세 설명</label>
															<textarea name="emp_desc" id="emp_desc" class="form-control" style="resize: none"><?php echo nl2br($row->emp_desc);?></textarea>
														</div>
													</div>
													
												</div>
											</div>
											
										</div>
									</div> <!-- /채용자 정보-->
										
										<!-- 소셜 계정 -->
										<div class="tr-single-box">
											<div class="tr-single-header">
												<h4><i class="ti-new-window"></i> 소셜 계정</h4>
											</div>
											
											<div class="tr-single-body">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo"><i class="lni-facebook"></i>페이스북 URL</label>
															<input class="form-control" type="text" value="https://facebook.com/">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo"><i class="lni-google-plus"></i>구글 URL</label>
															<input class="form-control" type="text" value="https://plus.google.com">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo"><i class="lni-twitter"></i>트위터 URL</label>
															<input class="form-control" type="text" value="htps://twitter.com">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="form-group">
															<label class="social-nfo"><i class="lni-instagram"></i>인스타그램 URL</label>
															<input class="form-control" type="text" value="https://instagram.com">
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<!-- /소셜 계정 -->
										
										<button type="submit" id="" class="btn btn-info btn-md full-width submit2">수정<i class="ml-2 ti-arrow-right"></i></button>
									</form>
								</div>
								
								<!-- 내 이력서 -->
								<div class="tab-pane" id="resume">
								
									<!-- Add Educations -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="lni-graduation"></i> Add Education</h4>
										</div>
										
										<div class="tr-single-body">
											<table class="table table-striped mb-5">
												<thead class="thead-dark">
													<tr>
														<th scope="col">Qualification</th>
														<th scope="col">Dates</th>
														<th scope="col">School / Colleges</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">Masters In Fine Arts</th>
														<td>2002 - 2004</td>
														<td>Virazia University</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">Tommers College</th>
														<td>2012 - 2015</td>
														<td>Bachlors in Fine Arts</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">Diploma In Fine Arts</th>
														<td>2014 - 2015</td>
														<td>Imperieal of Art Direction</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											
											<table class="price-list-wrap">
												<tbody class="ui-sortable"><tr class="pricing-list-item pattern ui-sortable-handle">
													<td>
														<div class="box-close"><a class="delete" href="#"><i class="ti-close"></i></a></div>
														<div class="row">
											
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>Title</label>
																	<input class="form-control" type="text" value="Adam Muklarial">
																</div>
															</div>
															
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>From</label>
																	<input placeholder="06.11.2007" type="text" class="form-control datepicker">
																</div>
															</div>
															
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>To</label>
																	<input placeholder="07.17.2010" type="text" class="form-control datepicker">
																</div>
															</div>
															
															
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>University</label>
																	<input placeholder="University Name" type="text" class="form-control">
																</div>
															</div>
														
														</div>
													</td>
												</tr>
												</tbody>
											</table>
											<a href="#" class="btn add-pr-item-btn">Add Item</a>
										</div>
										
									</div>
									<!-- /Education Info -->
									
									<!-- Add Experience -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="lni-briefcase"></i> Experience</h4>
										</div>
										
										<div class="tr-single-body">
											<table class="table table-striped mb-5">
												<thead class="thead-dark">
													<tr>
														<th scope="col">Skills @ Company</th>
														<th scope="col">Dates</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">Wordpress Developer at Gio Tech</th>
														<td>2002 - 2004</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">PHP Developer at Hint Solution</th>
														<td>2012 - 2015</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">Web Designer at Indo Soft</th>
														<td>2014 - 2015</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											
											<table class="price-list-wrap">
												<tbody class="ui-sortable"><tr class="pricing-list-item pattern ui-sortable-handle">
													<td>
														<div class="box-close"><a class="delete" href="#"><i class="ti-close"></i></a></div>
														<div class="row">
											
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>Title</label>
																	<input class="form-control" type="text" value="Skill & Company">
																</div>
															</div>
															
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>From</label>
																	<input placeholder="06.11.2007" type="text" class="form-control datepicker">
																</div>
															</div>
															
															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>To</label>
																	<input placeholder="07.17.2010" type="text" class="form-control datepicker">
																</div>
															</div>
															
															
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>Company</label>
																	<input placeholder="Company Name" type="text" class="form-control">
																</div>
															</div>
														
														</div>
													</td>
												</tr>
												</tbody>
											</table>
											<a href="#" class="btn add-pr-item-btn">Add Item</a>
										</div>
										
									</div>
									<!-- /Experience Info -->
									
									<!-- Add Skills -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="lni-briefcase"></i> Skill Or Expertise</h4>
										</div>
										
										<div class="tr-single-body">
											<table class="table table-striped mb-5">
												<thead class="thead-dark">
													<tr>
														<th scope="col">Skills @ Company</th>
														<th scope="col">Lavel</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">Graphic Design</th>
														<td>65</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">PHP Developer</th>
														<td>75</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<th scope="row">Web Designer</th>
														<td>88</td>
														<td>
															<div class="dash-action">
																<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
																<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											
											<table class="price-list-wrap">
												<tbody class="ui-sortable"><tr class="pricing-list-item pattern ui-sortable-handle">
													<td>
														<div class="box-close"><a class="delete" href="#"><i class="ti-close"></i></a></div>
														<div class="row">
											
															<div class="col-lg-9 col-md-9 col-sm-8">
																<div class="form-group">
																	<label>Skills</label>
																	<input class="form-control" type="text" value="Skills">
																</div>
															</div>
															
															<div class="col-lg-3 col-md-3 col-sm-4">
																<div class="form-group">
																	<label>Lavel</label>
																	<input placeholder="68" type="text" class="form-control">
																</div>
															</div>
														
														</div>
													</td>
												</tr>
												</tbody>
											</table>
											<a href="#" class="btn add-pr-item-btn">Add Item</a>
										</div>
										
									</div>
									<!-- /Skills Info -->
									
									<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>
									
								</div>
								
								<!-- 자기소개서 -->
								<div class="tab-pane" id="cv">
									<!-- CV & Cover letter -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-desktop"></i> CV & Cover letter</h4>
										</div>
										
										<div class="tr-single-body">
											<div class="row">
											
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Full Name</label>
														<input class="form-control" type="text" value="Adam Muklarial">
													</div>
												</div>
											
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Job Title</label>
														<input class="form-control" type="text" value="Web Designer & Developer">
													</div>
												</div>
											
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Overview</label>
														<div id="cv-cover"><p>Hello Description</p></div>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12">
													<form>
													  <div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													  </div>
													</form>
												</div>
											
											</div>
										</div>
										
									</div>
									<!-- /CV -->
									
									<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>
									
								</div>
								
								<!-- 비밀번호 변경 -->
								<div class="tab-pane" id="change-password">
									<form name="pass_form" id="pass_form" method="post" action="<?php echo base_url();?>edit_profile/changepass">
										<div class="tr-single-box">
											<div class="tr-single-header">
												<h4><i class="lni-lock"></i> 비밀번호 변경</h4>
											</div>
											
											<div class="tr-single-body">
												<!-- <div class="form-group">
													<label>현재 비밀번호</label>
													<input class="form-control" type="password">
												</div> -->
												<div class="form-group">
													<label>새 비밀번호</label>
													<input type="password" name="password" id="password" class="form-control" />
												</div>
												<div class="form-group">
													<label>비밀번호 확인</label>
													<input type="password" name="con_password" id="con_password" class="form-control" />
												</div>
											</div>
											
										</div>
										<button type="submit" name="" value="Change" class="btn btn-info btn-md full-width" >변 경<i class="ml-2 ti-arrow-right"></i></button>
									</form>
								</div>

							</div>

						</div>
						
					</div>
				</div>
			</section>
			<!-- ============== Candidate Dashboard ====================== -->

