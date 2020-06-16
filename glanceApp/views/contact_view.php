			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(<? echo base_url()?>glancePublic/images/contact_bg.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>문의하기</h1>
							<p><a href="<?php echo base_url()?>">홈</a><span class="current-page"><a href="<?php echo base_url()?>notice/service">고객센터</a></span><span class="current-page"><a href="<?php echo base_url()?>contact">문의하기</a></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
			<section class="gray">
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-5 col-md-5 bg-white mb-5">
							<div class="contact-address">
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-user theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>CEO</h4>
										CEO : 전재홍<br>
									</div>
								</div>
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-map-alt theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>본사</h4>
										대구광역시 중구 성내2동 경상감영길<br />
										28, 101호 푸른들소프트
									</div>
								</div>
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-email theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>이메일</h4>
										gryard@gmail.com<br>
									</div>
								</div>
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-headphone theme-cl"></i>
									</div>
									<div class="add-text-box">
										<h4>전화번호</h4>
										010-7453-8998<br>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="contact-form">
								<form name="frm" id="frm" method="post" action="">
									<div class="form-row">
										<div class="form-group col-md-6">
										  <label>이름</label>
										  <input type="text" name="fname" id="fname" class="form-control" value="<?php echo set_value('fname'); ?>" placeholder="이름">
										</div>
										<div class="form-group col-md-6">
										  <label>이메일</label>
										  <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label>제목</label>
										<input type="text" class="form-control" placeholder="문의 제목">
									</div>
									<div class="form-group">
										<label>메시지</label>
										<textarea name="comment" id="comment" class="form-control" style="resize: none" placeholder="작성란"></textarea>
									</div>
									<button type="submit" name="Send" id="Send" class="btn btn-primary">문의</button>
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->