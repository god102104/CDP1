
<!-- modal 사용 X -->

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

							<?php if($all_members_result):
							foreach($all_members_result as $val):
								$is_already_friend = $this->friend_model->friendship_validations($val->id);
		
								if($val->photo)
									$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$val->photo;
								else
									$image_thumb = base_url().'glancePublic/images/no-image.jpg';

								if($this->session->userdata('username')) {
									if($this->session->userdata('username') == $val->username) {
										continue;
									}
								}
								
								if($val->division == "chaeyong") {
							?>
							<!-- 기본 정보 -->
							<div class="single-job-head head-light style-1">
								<div class="single-job-left">
									<div class="single-job-thumb">
										<img src="<?php echo $image_thumb;?>" alt="">
									</div>
									<div class="single-job-info">
										<h4 class="single-job-title"><? echo $val->name;?> <span class="job-age">(<?php echo $val->mAge;?>세 | <? echo (($val->gender) == 'Male')?'남성':'여성';?>)</span><span class="job-type full-time"><? echo (($val->division) == 'yoyang')?'요양사':'채용자';?></span></h4>
										<h5 class="sj-location"><i class="ti-mobile"></i><?php echo $val->phone;?></h5>
										<h5 class="sj-location"><i class="ti-email"></i><?php echo $val->email;?></h5>
										<ul class="tags-jobs">
											<li><i class="fa fa-eye"></i> Total Views : <? echo $profile_views;?></li>
										</ul>
									</div>
								</div>
								
								<div class="listing-detail_right">
									<div class="listing-detail-item">
										<a href="<?php echo base_url(); ?>friends/add_to_favourite/<?php echo my_encrypt($val->id); ?>" title="Add to Favourite" class="btn btn-outline-info full-width mb-2"><i class="ti-heart mr-2"></i> 즐겨찾기 추가</a><br>
										<?php 
											if($this->session->userdata('username')) {
										?>
										<a href="javascript:;" title="메시지 보내기" onclick="setRecieverSession('<?php echo $val->username;?>')" class="btn btn-warning full-width"><i class="ti-email mr-2"></i> 메시지 보내기</a>
										<?php } ?>
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
											<span class="text-danger"><? echo $val->emp_type;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 지역 :</span>
											<span class="text-danger"><? echo $val->location;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 기간 :</span>
											<span class="dark text-success"><?php switch ($val->emp_term) {
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
											<span class="dark text-success"><? echo $val->emp_date;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 요일 :</span>
											<span class="dark text-warning"><? echo $val->emp_day;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">근무 시간 :</span>
											<span class="text-purple"><? echo $val->emp_time;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">희망 경력 :</span>
											<span class="dark"><?php switch ($val->emp_career) {
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
											<span class="dark"><? echo $val->emp_pay;?></span>
										</div>
									</li>
									<li class="job-categories job-categoy">
										<i class="ti-layers"></i>
											<div class="content">
											<span class="title">희망 나이 :</span>
											<span class="dark"><?php switch ($val->emp_age) {
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
											<span class="dark"><? echo $val->animal;?></span>
										</div>
									</li>
								</ul>
							</div> <!-- large -->
							
							<!-- 상세 설명 -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-write"></i><? echo $val->emp_title;?></h4>
								</div>
								<div class="tr-single-body">
									<p><? echo $val->emp_desc;?></p>
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

