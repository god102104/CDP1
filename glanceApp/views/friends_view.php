			<!-- =========================== Half Map  Start =================================== -->
			<div class="fs-container half-map">
				
				<div class="fs-inner-container">
					<div class="fs-content">
					
						<!--- All List -->
						<div class="row">
							<div class="col text-center">
								<div class="sec-heading mx-auto">
									<h2>매칭 목록</h2>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="flt-result mb-3">
								
									<div class="flt-result-num">
										<h4>207 Result found</h4>
									</div>
									
									<div class="flt-change-layout">
										<a href="half-map-grid.html"><i class="ti-layout-grid2"></i></a>
										<a href="half-map-list.html" class="active"><i class="ti-view-list"></i></a>
									</div>
									
								</div>
							</div>
						</div>
						 -->

						<!-- Job List Start -->
						<div class="row">
							<!-- Single New Job -->
							<div class="col-md-12 col-sm-12">
								
								<?php
									if($record_set):
										foreach($record_set as $row ):
											if($row->photo)
						  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$row->photo;
						  					else
						  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
						  					if($row->division == 'yoyang') {
								?>

									<!-- Single Large Job List -->
									<div class="job-new-list">
										<div class="vc-thumb">
											<img class="img-fluid rounded-circle" src="<?php echo $image_thumb;?>" alt="c2.jpg">
										</div>
										<div class="vc-content">
											<h5 class="title"><a href="<?php echo base_url(); ?>profile/<?php echo $row->username; ?>" title="<?php echo $row->name;?>"><?php echo $row->name_mask;?></a><span class="jb-age">(<?php echo count_years($row->dob,date("Y-m-d"));?>세 | <? echo (($row->gender) == 'Male')?'남성':'여성';?>)</span><span class="j-full-time"><? echo (($row->division) == 'yoyang')?'요양사':'채용자';?></span></h5>
											<p><i class="ti-location-pin text-danger"></i><?php echo $row->work_zone;?></p>
											<ul class="vc-info-list">
												<li class="list-inline-item"><h5>희망 급여</h5> <i class="ti-credit-card"></i><?php echo $row->work_pay;?></li>
												<li class="list-inline-item"><h5>근무 조건</h5> 
													<div class="skills">
														<span><?php echo $row->work_type;?></span><span>경력 <?php switch ($row->work_career) { case '0': echo '1년 미만'; break; case '1': echo '1년 이상'; break; case '2': echo '2년 이상'; break; case '3': echo '3년 이상'; break; case '5': echo '5년 이상'; break; }?></span><span><?php echo $row->work_day;?></span><span><?php echo $row->work_time;?></span>
													</div>
												</li>
											</ul>
										</div>
									</div>

								<?php } else { ?>
									<!-- Single Large Job List -->
									<div class="job-new-list">
										<div class="vc-thumb">
											<img class="img-fluid rounded-circle" src="<?php echo $image_thumb;?>" alt="c2.jpg">
										</div>
										<div class="vc-content">
											<h5 class="title"><a href="<?php echo base_url(); ?>profile/<?php echo $row->username; ?>" title="<?php echo $row->name;?>"><?php echo $row->name;?></a><span class="jb-age">(<?php echo count_years($row->dob,date("Y-m-d"));?>세 | <? echo (($row->gender) == 'Male')?'남성':'여성';?>)</span><span class="j-full-time"><? echo (($row->division) == 'chaeyong')?'채용자':'요양사';?></span></h5>
											<p><i class="ti-location-pin text-danger"></i><?php echo $row->emp_zone;?></p>
											<ul class="vc-info-list">
												<li class="list-inline-item"><h5>급여</h5> <i class="ti-credit-card"></i><?php echo $row->emp_pay;?></li>
												<li class="list-inline-item"><h5>희망 근무 조건</h5> 
													<div class="skills">
														<span><?php echo $row->emp_type;?></span><span>경력 <?php switch ($row->emp_career) { case '0': echo '1년 미만'; break; case '1': echo '1년 이상'; break; case '2': echo '2년 이상'; break; case '3': echo '3년 이상'; break; case '5': echo '5년 이상'; break; }?></span><span><?php echo $row->emp_day;?></span><span><?php echo $row->emp_time;?></span><span><?php switch ($row->emp_term) { case '0': echo '1개월 미만'; break; case '1': echo '1개월'; break; case '2': echo '2개월'; break; case '3': echo '3개월'; break; case '6': echo '6개월 이상'; break; case '12': echo '1년 이상'; break; default: echo ' '; break; }?></span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								<?php } endforeach; else: ?>
									<div class="col-lg-4 col-md-4" style="margin: 0 auto;">
										<div class="blog-grid-wrap mb-4">
											<div class="blog-grid-thumb">
												<img src="<? echo base_url()?>glancePublic/images/no-results.png" class="img-responsive" alt="" />
											</div>
											<div class="alert text-center display-7" role="alert">목록이 없습니다.</div>
										</div>
									</div>
								<?php endif;?>
								
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="fs-left-map-box">
					<div class="home-map fl-wrap">
						<div class="map-container fw-map">
							<div id="map-main"></div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<!-- =========================== Half Map  End ================================= -->