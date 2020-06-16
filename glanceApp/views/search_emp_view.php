			<!-- ============================ Search Form Start================================== -->
			<section class="light-search banncer-cent" style="background: url(<? echo base_url()?>glancePublic/images/search_bg.jpg);" data-overlay="5">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1 class="text-white">채용자 검색</h1>
						</div>
					</div>
					
					<form name="search_frm" id="search_frm" action="<?php echo base_url();?>search_emp" method="post" class="search-big-form no-border search-shadow">
						<div class="row m-0">

							<div class="col-lg-2 col-md-2 col-sm-12 p-0"> <!-- 지역-->
								<div class="form-group">
									<i class="fas fa-map-marker-alt"></i>
									<select name="emp_zone" id="emp_zone" class="form-control">
										<option value="<?php echo set_value('emp_zone'); ?>" selected="selected"><?php echo (set_value('emp_zone'))?set_value('emp_zone'):'지역'; ?></option>
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
								</div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-12 p-0"> <!-- 형태-->
								<div class="form-group">
									<i class="fas fa-laptop-house"></i>
									<select name="emp_type" id="emp_type" class="form-control">
										<option value="" selected="selected">전체</option>
										<option value="출퇴근형">출퇴근형</option>
										<option value="재택형">재택형</option>
										<option value="입주형">입주형</option>
									</select>
								</div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-12 p-0"> <!-- 경력-->
								<div class="form-group">
									<i class="fab fa-black-tie"></i>
									<select name="emp_career" id="emp_career" class="form-control">
										<option value="" selected="selected">전체</option>
										<option value="초보">초보 가능</option>
										<option value="1">1년 이상</option>
										<option value="2">2년 이상</option>
										<option value="3">3년 이상</option>
										<option value="5">5년 이상</option>
									</select>
								</div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-12 p-0"> <!-- 성별-->
								<div class="form-group">
									<i class="fas fa-venus-mars"></i>
									<select name="gender" id="gender" class="form-control">
										<option value="" selected="selected">무관</option>
										<option value="Female">여성</option>
										<option value="Male">남성</option>
									</select>
								</div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-12 p-0"> <!-- 희망 나이-->
								<div class="form-group">
									<i class="fas fa-birthday-cake"></i>
									<select name="emp_age" id="emp_age" class="form-control">
										<option value="" selected="selected">나이</option>
										<?php for($p=20;$p<=70;$p+=10):?>
										<option value="<?php echo $p;?>"><?php echo $p;?></option>
										<?php endfor ?>
									</select>
								</div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-12 p-0">
								<button type="submit" class="btn btn-primary full-width"  style="font-size:  18px;"><i class="ti-search"></i> 검색</button>
							</div>
						</div>
					</form>
					
				</div>
			</section>
			<!-- ============================ Search Form End ================================== -->
			<!-- ============================ Breadcrums Start================================== -->
			<div class="container-fluid breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php echo base_url(); ?>">
							홈
							</a>
							<a href="javascript:void(0)" style="cursor: default;">
								<span>
									<i class="ti-arrow-right"></i>
								</span>
							</a>
							<a href="<?php echo base_url(); ?>search_emp">채용자 검색</a>
						</div>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div>
			<!-- ============================ Breadcrums End ================================== -->

			<!-- ============================ All Employers ================================== -->
			<section>
				<div class="container">
				
					<div class="row">
						
						<div class="col-xl-3 col-lg-4 app-hidden">
						
							<div class="d-block d-none d-sm-block d-md-none mb-3">
								<a href="javascript:void(0)" onclick="openNav()" class="btn btn-info full-width btn-md"><i class="ti-filter mrg-r-5"></i>Filter Search</a>
							</div>
							
							<div class="sidebar-container d-sm-none d-md-block d-none">
							
								<!-- Category -->
								<div class="sidebar-widget">
									<div class="form-group">
										<h5 class="mb-2">근무 지역</h5>
										<div class="side-imbo">
											<div class="row">
												<div class="col-lg-6">
													<ul class="no-ul-list">
														<li>
															<input id="checkbox-ei1" class="checkbox-custom" name="checkbox-ei1" type="checkbox">
															<label for="checkbox-ei1" class="checkbox-custom-label">서울</label>
														</li>
														
														<li>
															<input id="checkbox-ei2" class="checkbox-custom" name="checkbox-ei2" type="checkbox">
															<label for="checkbox-ei2" class="checkbox-custom-label">인천</label>
														</li>
														
														<li>
															<input id="checkbox-ei3" class="checkbox-custom" name="checkbox-ei3" type="checkbox">
															<label for="checkbox-ei3" class="checkbox-custom-label">강원</label>
														</li>
														
														<li>
															<input id="checkbox-ei4" class="checkbox-custom" name="checkbox-ei4" type="checkbox">
															<label for="checkbox-ei4" class="checkbox-custom-label">충북</label>
														</li>
														<li>
															<input id="checkbox-ei5" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei5" class="checkbox-custom-label">충남</label>
														</li>
														<li>
															<input id="checkbox-ei6" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei6" class="checkbox-custom-label">세종</label>
														</li>
														<li>
															<input id="checkbox-ei7" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei7" class="checkbox-custom-label">광주</label>
														</li>
														<li>
															<input id="checkbox-ei8" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei8" class="checkbox-custom-label">대전</label>
														</li>
													</ul>
												</div>
												<div class="col-lg-6">
													<ul class="no-ul-list">
														<li>
															<input id="checkbox-ei9" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei9" class="checkbox-custom-label">전북</label>
														</li>
														<li>
															<input id="checkbox-ei10" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei10" class="checkbox-custom-label">전남</label>
														</li>
														<li>
															<input id="checkbox-ei11" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei11" class="checkbox-custom-label">대구</label>
														</li>
														<li>
															<input id="checkbox-ei12" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei12" class="checkbox-custom-label">경북</label>
														</li>
														<li>
															<input id="checkbox-ei13" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei13" class="checkbox-custom-label">경남</label>
														</li>
														<li>
															<input id="checkbox-ei14" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei14" class="checkbox-custom-label">울산</label>
														</li>
														<li>
															<input id="checkbox-ei15" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei15" class="checkbox-custom-label">부산</label>
														</li>
														<li>
															<input id="checkbox-ei16" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
															<label for="checkbox-ei16" class="checkbox-custom-label">제주</label>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Experince -->
								<div class="sidebar-widget">
									<div class="form-group">
										<h5 class="mb-2">근무 형태</h5>
										<div class="side-imbo">
											<ul class="no-ul-list">
												<li>
													<input id="checkbox-ep1" class="checkbox-custom" name="checkbox-ep1" type="checkbox">
													<label for="checkbox-ep1" class="checkbox-custom-label">출퇴근형</label>
												</li>
												
												<li>
													<input id="checkbox-ep2" class="checkbox-custom" name="checkbox-ep2" type="checkbox">
													<label for="checkbox-ep2" class="checkbox-custom-label">재택형</label>
												</li>
												
												<li>
													<input id="checkbox-ep3" class="checkbox-custom" name="checkbox-ep3" type="checkbox">
													<label for="checkbox-ep3" class="checkbox-custom-label">입주형</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Experince -->
								<div class="sidebar-widget">
									<div class="form-group">
										<h5 class="mb-2">근무 경력</h5>
										<div class="side-imbo">
											<ul class="no-ul-list">
												<li>
													<input id="checkbox-e1" class="checkbox-custom" name="checkbox-e1" type="checkbox">
													<label for="checkbox-e1" class="checkbox-custom-label">1년 미만</label>
												</li>
												<li>
													<input id="checkbox-e2" class="checkbox-custom" name="checkbox-e2" type="checkbox">
													<label for="checkbox-e2" class="checkbox-custom-label">1년 이상</label>
												</li>
												<li>
													<input id="checkbox-e3" class="checkbox-custom" name="checkbox-e3" type="checkbox">
													<label for="checkbox-e3" class="checkbox-custom-label">2년 이상</label>
												</li>
												<li>
													<input id="checkbox-e4" class="checkbox-custom" name="checkbox-e4" type="checkbox">
													<label for="checkbox-e4" class="checkbox-custom-label">3년 이상</label>
												</li>
												<li>
													<input id="checkbox-e4" class="checkbox-custom" name="checkbox-e4" type="checkbox">
													<label for="checkbox-e4" class="checkbox-custom-label">5년 이상</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Job Type -->
								<div class="sidebar-widget">
									<div class="form-group">
										<h5 class="mb-2">성별</h5>
										<div class="side-imbo">
											<ul class="no-ul-list">
												<li>
													<input id="checkbox-j1" class="checkbox-custom" name="checkbox-j1" type="checkbox">
													<label for="checkbox-j1" class="checkbox-custom-label">남성</label>
												</li>
												
												<li>
													<input id="checkbox-j2" class="checkbox-custom" name="checkbox-j2" type="checkbox">
													<label for="checkbox-j2" class="checkbox-custom-label">여성</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Job Type -->
								<div class="sidebar-widget">
									<div class="form-group">
										<h5 class="mb-2">나이</h5>
										<div class="side-imbo">
											<ul class="no-ul-list">
												<li>
													<input id="checkbox-jf1" class="checkbox-custom" name="checkbox-jf1" type="checkbox">
													<label for="checkbox-jf1" class="checkbox-custom-label">무관</label>
												</li>
												<li>
													<input id="checkbox-jf2" class="checkbox-custom" name="checkbox-jf2" type="checkbox">
													<label for="checkbox-jf2" class="checkbox-custom-label">20</label>
												</li>
												<li>
													<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
													<label for="checkbox-jf3" class="checkbox-custom-label">30</label>
												</li>
												<li>
													<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
													<label for="checkbox-jf3" class="checkbox-custom-label">40</label>
												</li>
												<li>
													<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
													<label for="checkbox-jf3" class="checkbox-custom-label">50</label>
												</li>
												<li>
													<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
													<label for="checkbox-jf3" class="checkbox-custom-label">60</label>
												</li>
												<li>
													<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
													<label for="checkbox-jf3" class="checkbox-custom-label">70</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-xl-9 col-lg-8">
						
							<!-- Row -->
							<div class="row">
								
								<!-- layout Wrapper -->
								<div class="col-md-12 mb-1">
									<div class="layout-switcher-wrap">
										<div class="layout-switcher-left"><? if($search_row) {
																			$cnt=0;
																			foreach ($search_row as $val) {
																				if($val->division == "chaeyong") {
																					$cnt++;
																				}
																			} 
																			echo $cnt;
																		} ?> 건</div>
										<div class="layout-switcher">
											<ul>
												<li class="active"><a href="<?php echo base_url();?>search_emp"><i class="ti-layout-grid3"></i></a></li>
												<!-- <li><a href="employers-list.html"><i class="ti-view-list"></i></a></li> -->
											</ul>
										</div>
									</div>
								</div>
							
							</div>
							
							<!-- Row -->
							<div class="row">
								<?php
									$this->load->model('friend_model');
									
									if($search_row) :
										foreach($search_row as $searchDetail) :
											$is_already_friend = $this->friend_model->friendship_validations($searchDetail->id);
											
											if($this->session->userdata('username') == $searchDetail->username) {
												continue;
											}

											if($searchDetail->division == "chaeyong") {
								?>
								<!-- Single Employer -->
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="employer-wrap small">
									
										<div class="employer-cover-image" style="background-image: url(<? echo base_url()?>glancePublic/images/thumb_forest2_bg.jpg)" data-overlay="2">
											<?php if($is_already_friend->is_favourite == "yes"): ?>
												<div class="jbs-featured"></div>
											<?php endif; ?>
											<div class="employer-thumb">
												<a href="<?php echo base_url(); ?>profile/<?php echo $searchDetail->username; ?>"><img alt="" src="<?php echo ($searchDetail->photo)?base_url().'glancePublic/uploads/member_images/thumb_'.$searchDetail->photo:base_url().'glancePublic/images/no-image.jpg';?>" class="avatar avatar-80 photo"></a>
											</div>
										</div>
										<div class="employer-detail">
											<div class="employer-detail-inner">
												<h4 class="employer-title"><a class="theme-cl" href="<?php echo base_url(); ?>profile/<?php echo $searchDetail->username; ?>"><?php echo $searchDetail->name_mask;?> <span class="job-age">(<?php echo $searchDetail->mAge;?>세 | <? echo (($searchDetail->gender) == 'Male')?'남성':'여성';?>)</span></a></h4>
												<div class="employer-locations"><i class="ti-location-pin text-danger"></i><?php echo $searchDetail->emp_zone;?></div>
												<div class="employer-rating">
													<p><?php echo $searchDetail->emp_type;?> | <?php echo $searchDetail->emp_day;?> | <?php echo $searchDetail->emp_time;?> | <?php switch ($searchDetail->emp_career) { case '0': echo '1년 미만'; break; case '1': echo '1년 이상'; break; case '2': echo '2년 이상'; break; case '3': echo '3년 이상'; break; case '5': echo '5년 이상'; break; }?></p>
												</div>
												<div class="total-vacancy">
													<?php if(!$is_already_friend) : ?>
													<a class="total-vacancy text-success" href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($searchDetail->id); ?>" style="display: inline;">매칭 신청</a>&emsp;&emsp;
													<?php elseif($is_already_friend->status =='pending'): ?>
													<a class="total-vacancy text-inverse" href="<?php echo base_url(); ?>friends/request_sent"style="display: inline;">매칭 대기중</a>&emsp;&emsp;
													<?php endif; ?>
													<a href="javascript:;" onclick="setRecieverSession('<?php echo $searchDetail->username;?>')" class="total-vacancy text-warning" style="display: inline;">메시지 보내기</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<?php } endforeach; endif; ?>
															
							</div>
							
							<!-- Pagination -->
							<!-- <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination mt-0">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span class="ti-arrow-left"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">18</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span class="ti-arrow-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									</ul>
								</div>
							</div> -->
							<!-- Pagination -->
					
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ All Employers ================================== -->

			<!-- emp detail Modal -->
			<div class="modal fade" id="emp_detail" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" style="max-width: 800px;" role="document">
					<div class="modal-content" id="registermodal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"><i class="ti-close"></i></span>
							</button>
						</div>
						<div class="modal-body">

 							<!--<?
								echo "<pre>";
								echo var_dump($searchDetail->name);
							?> -->

							<?php if($search_row):
							foreach($search_row as $searchDetail):
								$is_already_friend = $this->friend_model->friendship_validations($searchDetail->id);
		
								if($searchDetail->photo)
									$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$searchDetail->photo;
								else
									$image_thumb = base_url().'glancePublic/images/no-image.jpg';

									if($searchDetail->division == "chaeyong") {
							?>
							<!-- 기본 정보 -->
							<div class="single-job-head head-light style-1">
								<div class="single-job-left">
									<div class="single-job-thumb">
										<img src="<?php echo $image_thumb;?>" alt="">
									</div>
									<div class="single-job-info">
										<h4 class="single-job-title"><? echo $searchDetail->name;?> <span class="job-age">(<?php echo $searchDetail->mAge;?>세 | <? echo (($searchDetail->gender) == 'Male')?'남성':'여성';?>)</span><span class="job-type full-time"><? echo (($searchDetail->division) == 'yoyang')?'요양사':'채용자';?></span></h4>
										<h5 class="sj-location"><i class="ti-mobile"></i><?php echo $searchDetail->phone;?></h5>
										<h5 class="sj-location"><i class="ti-email"></i><?php echo $searchDetail->email;?></h5>
										<ul class="tags-jobs">
											<li><i class="fa fa-eye"></i> Total Views : <? echo $profile_views;?></li>
										</ul>
									</div>
								</div>
								
								<div class="listing-detail_right">
									<div class="listing-detail-item">
										<a href="#" class="btn btn-outline-info full-width mb-2"><i class="ti-heart mr-2"></i> 즐겨찾기 추가</a><br>
										<a href="#" class="btn btn-warning full-width"><i class="ti-email mr-2"></i> 메시지 보내기</a>
									</div>
								</div>

							</div>

							<!-- 채용자 정보 -->
							<div class="job-widget-area large" style="border: 1px solid #eceef3;">
								<div class="tr-single-header">
									<h4><i class="ti-agenda"></i>채용자 정보</h4>
								</div>
								<ul>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 형태 :</span>
											<span class="text-danger"><? echo $searchDetail->emp_type;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 지역 :</span>
											<span class="text-danger"><? echo $searchDetail->emp_zone;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 기간 :</span>
											<span class="dark text-success"><?php switch ($searchDetail->emp_term) {
																					case '0':
																						echo '1개월 미만';
																						break;
																					case '1':
																						echo '1개월';
																						break;
																					case '2':
																						echo '2개월';
																						break;
																					case '3':
																						echo '3개월';
																						break;
																					case '6':
																						echo '6개월 이상';
																						break;
																					case '12':
																						echo '1년 이상';
																						break;
																			}?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 시작일 :</span>
											<span class="dark text-success"><? echo $searchDetail->emp_date;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 요일 :</span>
											<span class="dark text-warning"><? echo $searchDetail->emp_day;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 시간 :</span>
											<span class="text-purple"><? echo $searchDetail->emp_time;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">희망 경력 :</span>
											<span class="dark"><?php switch ($searchDetail->emp_career) {
																		case '0':
																			echo '초보 가능';
																			break;
																		case '1':
																			echo '1년 이상';
																			break;
																		case '2':
																			echo '2년 이상';
																			break;
																		case '3':
																			echo '3년 이상';
																			break;
																		case '5':
																			echo '5년 이상';
																			break;
																}?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">급여 :</span>
											<span class="dark"><? echo $searchDetail->emp_pay;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">희망 나이 :</span>
											<span class="dark"><?php switch ($searchDetail->emp_age) {
																		case '0':
																			echo '무관';
																			break;
																		case '20':
																			echo '20대';
																			break;
																		case '30':
																			echo '30대';
																			break;
																		case '40':
																			echo '40대';
																			break;
																		case '50':
																			echo '50대';
																			break;
																		case '60':
																			echo '60대';
																			break;
																		case '70':
																			echo '70대';
																			break;
																}?></span></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">반려동물 :</span>
											<span class="dark"><? echo $searchDetail->animal;?></span>
										</div>
									</li>
								</ul>
							</div> <!-- large -->
							
							<!-- 상세 설명 -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-write"></i><? echo $searchDetail->emp_title;?></h4>
								</div>
								<div class="tr-single-body">
									<p><? echo $searchDetail->emp_desc;?></p>
									<p>We are seeking an experienced Wordpress developer with minimum 2+ years of experiencea WordPress Developer responsible for both back-end and front-end development, including creating WordPress themes and plugins. This position requires a combination of programming skills (namely PHP, HTML5, CSS3, and JavaScript) and aesthetics (understanding element arrangements on the screen, the color and font choices, and so on). The candidate should have a strong understanding of industry trends and content management systems.</p>
								</div>
							</div>
							<?  } endforeach; endif;?>
						</div>

						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->