			<!-- ============================ Job Featured End ================================== -->
			<div class="fs-container half-map">
				<div class="fs-inner-container">
					<div class="fs-content">
						
							<div class="row">
								<div class="col text-center">
									<div class="sec-heading mx-auto">
										<h2>즐겨찾기 목록</h2>
									</div>
								</div>
							</div>
						
							<div class="tab-content">
								
								<!-- Job List Start -->
								<div class="row">
									<!-- Single New Job -->
									<div class="col-md-12 col-sm-12">
								<!-- Recent Jobs -->
								<!-- <div class="tab-pane fade in show active" id="recent" role="tabpanel">
									<div class="row"> -->
										
										<?php
										if($record_set):
											foreach($record_set as $row ):
												$row->name_mask = preg_replace('/(?<=.{1})./u', '○', $row->name);

												if($row->photo)
							  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$row->photo;
							  					else
							  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
							  					if($row->division == 'yoyang') {
										?>

										<!-- favorite 요양사 -->
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="verticle-job-list">
												
												<div class="jbs-featured"></div>
												<span class="job-type j-full-time"><? echo (($row->division) == 'yoyang')?'요양사':'채용자';?></span>
												<div class="verticle-job-wrap">
													<div class="verticle-job-thumb">
														<img alt="" src="<?php echo ($row->photo)?base_url().'glancePublic/uploads/member_images/thumb_'.$row->photo:base_url().'glancePublic/images/no-image.jpg';?>" class="img-fluid mx-auto">
													</div>
													
													<div class="verticle-job-detail">
														<a href="<?php echo base_url();?>profile/<?php echo $row->username; ?>"><h4 class="jb-title"><? echo $row->name_mask;?> <span class="jb-age">(<?php echo count_years($row->dob,date("Y-m-d"));?>세 | <? echo (($row->gender) == 'Male')?'남성':'여성';?>)</span></h4></a>
														<p class="jb-employer"><i class="ti-mobile text-danger"></i> <?php echo $row->phone;?></p>
														<div class="verticle-jb-info">
															<p class="jb-employer"><?php echo $row->work_type;?> | 경력 <?php switch ($row->work_career) { case '0': echo '1년 미만'; break; case '1': echo '1년 이상'; break; case '2': echo '2년 이상'; break; case '3': echo '3년 이상'; break; case '5': echo '5년 이상'; break; }?></p>
														</div>
														<div class="verticle-jb-post">
															<p class="jb-employer"><?php echo $row->work_day;?> | <?php echo $row->work_time;?></p>
														</div>
													</div>
												</div>
												
												<div class="verticle-job-footer">
													<div class="jb-package">
														<i class="ti-location-pin text-primary"></i><?php echo $row->work_zone;?>
													</div>
													<div class="jb-author">
														<a href="<?php echo base_url(); ?>friends/unfavourite/<?php echo my_encrypt($row->id); ?>" class="chatbtn" title="목록에서 제외">목록에서 제외</a>
													</div>
												</div>
											
											</div>
										</div>

										<?php } else { ?>

										<!-- favorite 채용자 -->
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="verticle-job-list">
												
												<div class="jbs-featured"></div>
												<span class="job-type j-full-time"><? echo (($row->division) == 'chaeyong')?'채용자':'요양사';?></span>
												<div class="verticle-job-wrap">
													<div class="verticle-job-thumb">
														<img alt="" src="<?php echo ($row->photo)?base_url().'glancePublic/uploads/member_images/thumb_'.$row->photo:base_url().'glancePublic/images/no-image.jpg';?>" class="img-fluid mx-auto">
													</div>
													
													<div class="verticle-job-detail">
														<a href="<?php echo base_url();?>profile/<?php echo $row->username; ?>"><h4 class="jb-title"><? echo $row->name_mask;?> <span class="jb-age">(<?php echo count_years($row->dob,date("Y-m-d"));?>세 | <? echo (($row->gender) == 'Male')?'남성':'여성';?>)</span></h4></a>
														<p class="jb-employer"><i class="ti-mobile text-danger"></i> <?php echo $row->phone;?></p>
														<div class="verticle-jb-info">
															<p class="jb-employer"><?php echo $row->emp_type;?> | 경력 <?php switch ($row->emp_career) { case '0': echo '1년 미만'; break; case '1': echo '1년 이상'; break; case '2': echo '2년 이상'; break; case '3': echo '3년 이상'; break; case '5': echo '5년 이상'; break; }?></p>
														</div>
														<div class="verticle-jb-post">
															<p class="jb-employer"><?php echo $row->emp_day;?> | <?php echo $row->emp_time;?></p>
														</div>
													</div>
												</div>
												
												<div class="verticle-job-footer">
													<div class="jb-package">
														<i class="ti-location-pin text-primary"></i><?php echo $row->emp_zone;?>
													</div>
													<div class="jb-author">
														<a href="<?php echo base_url(); ?>friends/unfavourite/<?php echo my_encrypt($row->id); ?>" class="chatbtn" title="목록에서 제외">목록에서 제외</a>
													</div>
												</div>
											
											</div>
										</div>

										<?php } endforeach; else: ?>

										<div class="col-lg-4 col-md-4"  style="margin: 0 auto;">
											<div class="blog-grid-wrap mb-4">
												<div class="blog-grid-thumb">
													<img src="<? echo base_url()?>glancePublic/images/no-results.png" class="img-responsive" alt="" />
												</div>
												<div class="alert text-center display-7" role="alert">목록이 없습니다.</div>
											</div>
										</div>
											
										<?php endif; ?>
										
									</div>
								</div>
								
							</div>
							<!-- tab-content END -->
							
						</div>
					</div>
				</div>
			<div class="clearfix"></div>
			<!-- ============================ Job Featured End ================================== -->