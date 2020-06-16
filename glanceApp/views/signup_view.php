			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(<? echo base_url()?>glancePublic/images/signup_bg.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center">
							<h1>회원가입</h1>
							<p><a href="<?php echo base_url()?>">홈</a><span class="current-page"><a href="<?php echo base_url()?>signup">회원가입</a></span></p>
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
								<? if(!$msg == null): ?>
								<div class="alert text-center" role="alert" style="color: red;"><?php echo $msg;?></div>
								<? endif; ?>
								<div class="login-form">
									<form name="frm" id="frm" method="post" action="">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>아이디</label>
													<div class="input-with-gray">
														<input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="ID" required>
														<i class="ti-user theme-cl"></i>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>비밀번호</label>
													<div class="input-with-gray">
														<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"class="form-control" placeholder="********" required minlength="7">
														<i class="ti-unlock theme-cl"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>이름</label>
													<div class="input-with-gray">
														<input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" class="form-control" required>
														<i class="ti-heart theme-cl"></i>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label>성별</label>
													<select name="gender" id="gender" class="form-control" required>
														<option value="" selected="selected">성별</option>
							                            <option value="female">여성</option>
							                            <option value="male">남성</option>
													</select>
												</div>
											</div>
											
											<div class="col-lg-6 col-md-6 col-sm-6">
												<div class="form-group">
													<label>구분</label>
													<select name="division" id="division" class="form-control" required>
														<option value="" selected="selected">선택</option>
							                            <option value="요양사">요양사</option>
							                            <option value="채용자">채용자</option>
							                        </select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="form-group">
													<label>생년월일</label>
								                    <select name="birth_year" id="birth_year" class="form-control" required>
								                    	<option value="<?php echo set_value('birth_year'); ?>" selected="selected"><?php echo (set_value('birth_year'))?set_value('birth_year'):'년'; ?></option>
										                <?php for($i=1950;$i<=date('Y');$i++): ?>
										                <option value="<?php echo $i;?>"><?php echo $i;?></option>
										                <?php endfor; ?>
								                    </select>
							                	</div>
						                    </div>
						                    <div class="col-lg-4 col-md-4 col-sm-4">
						                    	<div class="form-group">
													<label> &nbsp;</label>
								                    <select name="birth_month" id="birth_year" class="form-control" required>
								                    	<option value="<?php echo set_value('birth_month'); ?>" selected="selected"><?php echo (set_value('birth_month'))?set_value('birth_month'):'월'; ?></option>
										                <?php for($i=1;$i<=12;$i++): ?>
										                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
										                <?php endfor; ?>
								                    </select>
							                    </div>
						                    </div>
						                    <div class="col-lg-4 col-md-4 col-sm-4">
						                    	<div class="form-group">
													<label> &nbsp;</label>
								                    <select name="birth_day" id="birth_year" class="form-control" required>
								                    	<option value="<?php echo set_value('birth_day'); ?>" selected="selected"><?php echo (set_value('birth_day'))?set_value('birth_day'):'일'; ?></option>
										                <?php for($i=1;$i<=31;$i++): ?>
										                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
										                <?php endfor; ?>
								                    </select>
							                    </div>
						                    </div>
					                    </div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>휴대폰 번호</label>
													<div class="input-with-gray">
														<input type="phone" name="phone" id="phone" class="form-control" value="<?php echo set_value('phone'); ?>" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="ex) 010-0000-0000" required>
														<i class="ti-mobile theme-cl"></i>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Email</label>
													<div class="input-with-gray">
														<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="ex) Email@gmail.com" required>
														<i class="ti-email theme-cl"></i>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-md full-width pop-login">가 입 하 기</button>
												</div>
											</div>
										</div>


										<div class="devide-wrap"><span>OR</span></div>

										<div class="social-login center-tr">
											<ul>
												<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>페이스북으로 회원가입</a></li>
												<li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>구글로 회원가입</a></li>
												<li><a href="#" class="btn connect-twitter"><i class="ti-twitter"></i>트위터로 회원가입</a></li>
												<li><a href="#" class="btn connect-linked"><i class="ti-linkedin"></i>LinkedIn으로 회원가입</a></li>
											</ul>
										</div>
									
									</form>
								</div>

								<div class="modal-footer" style="background: transparent; border: none;">
									<div class="mf-link"><i class="ti-user"></i>이미 회원이신가요?<a href="<?php echo base_url();?>user/login"> 로그인</a></div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->
