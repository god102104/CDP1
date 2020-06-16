			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(<? echo base_url()?>glancePublic/images/signup_bg.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>로그인</h1>
							<p><a href="<?php echo base_url()?>">홈</a><span class="current-page"><a href="<?php echo base_url()?>user/login">로그인</a></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="modal-body">
								<h4 class="modal-header-title" style="margin-bottom: 40px;"><a href="<?php echo base_url(); ?>" class="brand brand_login_logo"><img src="<? echo base_url()?>glancePublic/images/logo_main.png" alt="" /></a></h4>
							</div>
							<? if(!$msg == null): ?>
								<div class="alert text-center" role="alert" style="color: red;"><?php echo $msg;?></div>
							<? endif; ?>
								<div class="login-form">
									<form name="login_form" id="login_form" method="post" action="<?php echo base_url().'user/login';?>">
									
										<div class="form-group">
											<label>아이디</label>
											<div class="input-with-gray">
												<input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username');?>" placeholder="ID" required>
												<i class="ti-user"></i>
											</div>
										</div>
										
										<div class="form-group">
											<label>비밀번호</label>
											<div class="input-with-gray">
												<input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="********" required>
												<i class="ti-unlock"></i>
											</div>
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-md full-width pop-login">로 그 인</button>
										</div>

										<div class="devide-wrap"><span>OR</span></div>

										<div class="social-login center-tr">
											<ul>
												<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>페이스북으로 로그인</a></li>
												<li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>구글로 로그인</a></li>
												<li><a href="#" class="btn connect-twitter"><i class="ti-twitter"></i>트위터로 로그인</a></li>
												<li><a href="#" class="btn connect-linked"><i class="ti-linkedin"></i>LinkedIn으로 로그인</a></li>
											</ul>
										</div>
									
									</form>
								</div>

								<div class="modal-footer" style="background: transparent; border: none;">
									<div class="mf-link app-hidden"><i class="ti-user"></i>아직 회원이 아니신가요?<a href="<?php echo base_url();?>signup"> 회원가입</a></div>
									<div class="mf-link app-show"><i class="ti-user"></i><a href="<?php echo base_url();?>signup"> 회원가입</a></div>
									<div class="mf-forget"><i class="ti-lock"></i><a href="<?php echo base_url();?>user/forgot">비밀번호 찾기</a></div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->