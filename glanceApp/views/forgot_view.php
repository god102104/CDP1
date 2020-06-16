			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(<? echo base_url()?>glancePublic/images/thumb_security_bg.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>비밀번호 찾기</h1>
							<p><a href="<?php echo base_url()?>">홈</a><span class="current-page">비밀번호 찾기</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->

			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="modal-body">
								<h4 class="modal-header-title"><a href="<?php echo base_url(); ?>" class="brand"><img src="<? echo base_url()?>glancePublic/images/logo_main.png" alt="" /></a></h4>
							</div>	

							<?php if($msg): ?>
								<div class="tab-pane" id="change-password">
									<div class="alert alert-success" role="alert" style="font-size: 18px; text-align: center;"><?php echo $msg;?></div>
								</div>
							<?php else: ?>
							<!-- forgot-password -->
							<div class="tab-pane" id="change-password">
								<form name="login_form" id="login_form" method="post" action="<?php echo base_url().'user/forgot';?>">
										
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-help-alt"></i> 비밀번호 찾기</h4>
										</div>
										<div class="tr-single-body">
											<div class="form-group">
												<label>이메일</label>
												<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="ex) Email@gmail.com" />
											</div>
										</div>
									</div>
									<button type="submit" name="" class="btn btn-info btn-md full-width">비밀번호 찾기 <i class="ml-2 ti-arrow-right"></i></button>
								</form>
							</div>
							<?php endif; ?>
							<div class="modal-footer" style="background: transparent; border: none;">
								<div class="mf-link app-hidden"><i class="ti-user"></i>아직 회원이 아니신가요?<a href="<?php echo base_url();?>signup"> 회원가입</a></div>
									<div class="mf-link app-show"><i class="ti-user"></i><a href="<?php echo base_url();?>signup"> 회원가입</a></div>
								<div class="mf-forget"><i class="ti-lock"></i><a href="<?php echo base_url();?>user/login"> 로그인</a></div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
