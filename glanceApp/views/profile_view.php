			<!-- ======================= Start Banner ===================== -->
			<section class="small-page-title-banner" style="background-image:url(<? echo base_url()?>glancePublic/images/profile_bg.jpg);">
				<div class="container">
					<div class="row">
						<div class="tr-list-center">
							<h2>내 프로필 보기</h2>
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= End Banner ===================== -->
			
			<!-- ============== Job Detail ====================== -->	
			<section class="overlay-top p-0">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							
							<!-- Default Style -->
							<div class="single-job-head head-light style-1 mb-0">
								<div class="single-job-left">
									<div class="single-job-thumb">
										<img src="<?php echo ($this->session->userdata('photo'))?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo'):base_url().'glancePublic/images/no-image.jpg';?>" alt="">
									</div>
									<div class="single-job-info">
										<h4 class="single-job-title"><? echo $row->name;?><span class="job-type full-time"><? echo (($row->division) == 'yoyang')?'요양사':'채용자';?></span></h4>
										<span class="sj-location"><i class="ti-shortcode"></i><? echo (($row->gender) == 'Male')?'남성':'여성';?></span>
										<ul class="tags-jobs">
											<li><i class="ti-calendar"></i> <? echo date("Y년 m월 d일",strtotime($row->dob));?></li>
											<li><i class="fa fa-eye"></i> Total Views : <? echo $profile_views;?></li>
										</ul>
									</div>
								</div>

								<div class="listing-detail_right right-area">
									<div class="listing-detail-item">
										<a href="<?php echo base_url().'edit_profile';?>" class="btn btn-green full-width mb-3"><i class="ti-check-box mr-2"></i> 내 정보 수정</a><br />
										<a href="<?php echo base_url().'friends';?>" class="btn btn-orange full-width"><i class="ti-link mr-2"></i> 매칭 목록</a>
									</div>
								</div>

							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============== Job Detail End ====================== -->	
		
			<!-- ============== Job Detail ====================== -->	
			<section class="tr-single-detail gray-bg">
				<div class="container">
					<div class="row">
						
						<div class="col-md-8 col-sm-12">
							<div id="div_yoyangsa_form"> <!-- 요양사 폼 출력 -->
							<!-- 요양사 정보 -->
							<div class="job-widget-area large">
								<div class="tr-single-header">
									<h4><i class="ti-agenda"></i>요양사 정보</h4>
								</div>
								<ul>
									<li class="job-categories">
										<i class="ti-layers text-red"></i>
											<div class="content">
											<span class="title">희망 근무 형태 :</span>
											<span class="dark type--bold"><? echo $row->work_type;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-orange"></i>
											<div class="content">
											<span class="title">희망 근무 지역 :</span>
											<span class="dark type--bold"><? echo $row->work_zone;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-yellow"></i>
											<div class="content">
											<span class="title">희망 근무 요일 :</span>
											<span class="dark type--bold"><? echo $row->work_day;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-grn"></i>
											<div class="content">
											<span class="title">희망 근무 시간 :</span>
											<span class="dark type--bold"><? echo $row->work_time;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-blu"></i>
											<div class="content">
											<span class="title">근무 경력 :</span>
											<span class="dark type--bold"><?php switch ($row->work_career) {
																		case '0':
																			echo '1년 미만';
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
									<li class="job-categories">
										<i class="ti-layers text-pupp"></i>
											<div class="content">
											<span class="title">희망 급여 :</span>
											<span class="dark type--bold"><? echo $row->work_pay;?></span>
										</div>
									</li>
								</ul>
							</div>
							
							<!-- 자기소개 -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-write"></i>자기소개</h4>
								</div>
								<div class="tr-single-body">
									<ul class="qa-skill-list">
										<li>
											<h4 class="qa-skill-title pl-3"><? echo $row->work_title;?></h4>
											<div class="qa-skill-box">
												<div class="qa-content">
													<p><?php echo nl2br($row->work_desc);?></p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
														
							<!-- 자격증 -->
							<?php if($row->photo_li): ?>
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-book"></i>자격증</h4>
								</div>
								<div class="tr-single-body">
									<ul class="qa-skill-list">
										<li>
											<div class="qa-skill-box">
												<div class="qa-content">
													<img src="<?php echo ($row->photo_li)?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo_li'):'';?>" alt="">
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<?php endif;?>
							
							<!-- Job Education -->
							<!-- <div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-cup"></i>교육</h4>
								</div>
								<div class="tr-single-body">
									<ul class="jb-detail-list">
										<li>Higher(10th Pass) (Preferred)</li>
										<li>Higher Secondary(12th Pass) (Preferred)</li>
										<li>Any Graduattion Degree(13th Pass) (Preferred)</li>
									</ul>
								</div>
							</div> -->

							</div>
							<div id="div_chaeyong_form" > <!-- 채용자 폼 출력 -->

							<!-- 채용자 정보 -->
							<div class="job-widget-area large">
								<div class="tr-single-header">
									<h4><i class="ti-agenda"></i>채용자 정보</h4>
								</div>
								<ul>
									<li class="job-categories">
										<i class="ti-layers text-red"></i>
											<div class="content">
											<span class="title">근무 형태 :</span>
											<span class="dark type--bold"><? echo $row->emp_type;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-orange"></i>
											<div class="content">
											<span class="title">근무 지역 :</span>
											<span class="dark type--bold"><? echo $row->emp_zone;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-yellow"></i>
											<div class="content">
											<span class="title">근무 요일 :</span>
											<span class="dark type--bold"><? echo $row->emp_day;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-grn"></i>
											<div class="content">
											<span class="title">근무 시간 :</span>
											<span class="dark type--bold"><? echo $row->emp_time;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-blu"></i>
											<div class="content">
											<span class="title">근무 기간 :</span>
											<span class="dark type--bold"><?php switch ($row->emp_term) {
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
									<li class="job-categories">
										<i class="ti-layers text-indigo"></i>
											<div class="content">
											<span class="title">근무 시작일 :</span>
											<span class="dark type--bold"><? echo $row->emp_date;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-pupp"></i>
										<div class="content">
											<span class="title">희망 경력 :</span>
											<span class="dark type--bold"><?php switch ($row->emp_career) {
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
									<li class="job-categories">
										<i class="ti-layers text-pink"></i>
											<div class="content">
											<span class="title">급여 :</span>
											<span class="dark type--bold"><? echo $row->emp_pay;?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers"></i>
										<div class="content">
											<span class="title">희망 나이 :</span>
											<span class="dark type--bold"><?php switch ($row->emp_age) {
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
																}?></span>
										</div>
									</li>
									<li class="job-categories">
										<i class="ti-layers text-beige"></i>
											<div class="content">
											<span class="title">반려동물 :</span>
											<span class="dark type--bold"><? echo $row->animal;?></span>
										</div>
									</li>
								</ul>
							</div>
							
							<!-- 상세 설명 -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-write"></i>상세설명</h4>
								</div>
								<div class="tr-single-body">
									<ul class="qa-skill-list">
										<li>
											<h4 class="qa-skill-title pl-3"><? echo $row->emp_title;?></h4>
											<div class="qa-skill-box">
												<div class="qa-content">
													<p><?php echo nl2br($row->emp_desc);?></p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							</div>
						</div>
						
						<!-- Sidebar Start -->
						<div class="col-md-4 col-sm-12">
							
							<!-- Apply Button Wrap -->
							<div class="apply-wrap-buttons">
							
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="input-group">
											<a href="<?php echo base_url();?>messages" class="btn btn-red send-message"><i class="ti-comment"></i> 메시지 전송</a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="input-group">
											<a href="<?php echo base_url(); ?>friends/favourite_friends" class="btn btn-blue favorite"><i class="ti-heart"></i> 즐겨찾기 목록</a>
										</div>
									</div>									
								</div>
								
							</div>
							
							<!-- Company Address -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-id-badge"></i> Calling Card</h4>
								</div>
								
								<div class="tr-single-body">
									<ul class="extra-service">
										<!-- <li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-map-marker"></i>
													</div>
													<div class="icon-box-text">
														주소
													</div>
												</a>
											</div>
										</li>
										 -->
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-phone-handset"></i>
													</div>
													<div class="icon-box-text">
														<? echo $row->phone;?>
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-envelope"></i>
													</div>
													<div class="icon-box-text">
														<? echo $row->email;?>
													</div>
												</a>
											</div>
										</li>
										
									</ul>
								</div>
								
							</div>
							
							<!-- Share this -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-share"></i> Share</h4>
								</div>
								
								<div class="tr-single-body">
									<ul class="extra-service half">
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-facebook"></i>
													</div>
													<div class="icon-box-text">
														Facebook
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-google-plus"></i>
													</div>
													<div class="icon-box-text">
														Google plus
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-twitter"></i>
													</div>
													<div class="icon-box-text">
														Twitter
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-linkedin"></i>
													</div>
													<div class="icon-box-text">
														LinkedIn
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="lni-instagram"></i>
													</div>
													<div class="icon-box-text">
														Instagram
													</div>
												</a>
											</div>
										</li>
										
										<li>
											<div class="icon-box-icon-block">
												<a href="#">
													<div class="icon-box-round">
														<i class="fa fa-pinterest"></i>
													</div>
													<div class="icon-box-text">
														Pinterest
													</div>
												</a>
											</div>
										</li>
										
									</ul>
								</div>
								
							</div>
							
						</div>
						<!-- /col-md-4 -->
					</div>
				</div>
			</section>
			<!-- ============== Job Detail ======================