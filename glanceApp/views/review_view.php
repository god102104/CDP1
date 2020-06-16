			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(<? echo base_url()?>glancePublic/images/thumb_review_bg.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>후기 게시판</h1>
							<p><a href="<?php echo base_url()?>">홈</a><span class="current-page"><a href="<?php echo base_url()?>notice/service">고객센터</a></span><span class="current-page"><a href="<?php echo base_url()?>reviews">후기 게시판</a></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- ============================ Blog Grid Start ================================== -->
			<section class="tr-single-detail gray-bg">
				<div class="container">
					
					<div class="row">

						<!-- Sidebar Start -->
						<div class="col-md-3 col-sm-12 side-hidden">
							<div class="dashboard-wrap bg-white">
							
							<div class="dashboard-thumb">
								<div class="dashboard-th-pic">
								</div>
								<h3 class="mb-1">고객센터</h3>
							</div>
							
							<!-- Nav tabs -->
							<ul class="nav dashboard-verticle-nav">
								<li class="nav-item">
									<a class="nav-link"  href="<? echo base_url()?>notice"><i class="ti-info-alt"></i>공지사항</a>
								</li>
								<li class="nav-item">
									<a class="nav-link"  href="<? echo base_url()?>reviews"><i class="ti-comment"></i>후기 게시판</a>
								</li>
								<li class="nav-item">
									<a class="nav-link"  href="<? echo base_url()?>community"><i class="ti-comment-alt"></i>자유 게시판</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active"  href="<? echo base_url()?>notice/service"><i class="lni-heart-filled"></i>자주 묻는 질문</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active"  href="<? echo base_url()?>notice/price"><i class="ti-shopping-cart"></i>결재</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<? echo base_url()?>contact"><i class="ti-help-alt"></i>문의하기</a>
								</li>
							</ul>
							
							</div>
						</div>
						<!-- /col-md-3 -->

						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<?php if($this->session->userdata('username')) : ?>
							<!-- Comment 작성 -->
							<div class="comment-detail-form">
								<div class="section-title2">
									<h3 id="reply-title" class="comment-reply-title">후기 작성
										<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">취소</a></small>
									</h3>
								</div>
								
								<form name="frm" id="frm" method="post" action="">
									<div class="row">
										<!-- <div class="form-group col-md-4 col-sm-4">
											<input type="text" name="name" id="name" class="form-control" placeholder="이름">
										</div> -->

										<div class="form-group col-md-4 col-sm-4">
											<select name="grade" id="grade" class="form-control">
												<option value="">평점</option>
												<?php for($i=5;$i>=0;$i--): ?>
													<option value="<?php echo $i;?>"><?php echo $i;?></option>
												<?php endfor; ?>
											</select>
										</div>
										
										<div class="form-group col-md-12 col-sm-12">
											<textarea name="review" id="review" class="form-control" style="resize: none" placeholder="작성란"></textarea>
										</div>
										
										<div class="col-md-12 col-sm-12" style="margin-bottom: 50px;">
											<button class="btn btn-primary pull-right" type="submit">게시</button>
										</div>
									</div>
								</form>
							</div>
							<?php endif; ?>

							<div class="row">
								<?php 
									if($all_reviews) :
										foreach ($all_reviews as $row) :
											if($row->photo)
												$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$row->photo;
											else
												$image_thumb = base_url().'glancePublic/images/no-image.jpg';
								?>
									<!-- Single Testimonials -->
									<div class="item col-md-12 mb-4">
										<div class="testimonial-wrap style-2">
											<div class="client-thumb-box">
												<div class="client-thumb-content">
													<div class="client-thumb">
														<img src="<?php echo $image_thumb; ?>" class="img-responsive img-circle" alt="">
													</div>
													<h5 class="mb-0"><?php echo $row->name_mask; ?> <span class="job-type full-time"><? echo (($row->division) == 'yoyang')?'요양사':'채용자';?></span></h5>
													<span>&nbsp;</span>
													<div class="rating">
														<?php for($j=1;$j<=($row->grade);$j++): ?>
															<span class="fa fa-star"></span>
														<?php endfor; for($k=5;$k>($row->grade);$k--) : ?>
															<span class="fa fa-star-o"></span>
														<?php endfor; ?>
													</div>
												</div>
											</div>
											
											<p><?php echo nl2br($row->reviews); ?></p>
											
										</div>
									</div>
								<?php endforeach; endif; ?>
								
							</div>
							<!-- ======================================= -->

						</div>
						<!-- /col-md-9 -->
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->