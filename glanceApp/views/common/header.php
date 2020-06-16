    <body class="green-skin bg-light">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="Loader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light nav-left-side">
				<nav class="headnavbar no-shadow">
					<div class="nav-header">
						<a href="<?php echo base_url(); ?>" class="brand"><img src="<? echo base_url()?>glancePublic/images/logo_main.png" alt="" /></a>
						<button class="toggle-bar"><span class="ti-align-justify"></span></button>
					</div>
					<ul class="menu">
						<li class="app-hidden"><span>&nbsp;</span></li>
						<li><a href="<?php echo base_url(); ?>about">서비스 소개</a></li>
						<li><a href="<?php echo base_url(); ?>search_care">요양사 검색</a></li>
						<li><a href="<?php echo base_url(); ?>search_emp">채용자 검색</a></li>
						<li class="dropdown">
							<a href="JavaScript:Void(0);">고객센터</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>notice">공지사항</a></li>
								<li><a href="<?php echo base_url(); ?>reviews">후기 게시판</a></li>
								<li><a href="<?php echo base_url(); ?>community">자유 게시판</a></li>
								<li><a href="<?php echo base_url(); ?>notice/service">자주묻는 질문</a></li>
								<li><a href="<?php echo base_url(); ?>notice/price">결제</a></li>
								<li><a href="<?php echo base_url(); ?>contact">문의하기</a></li>
							</ul>
						</li>

					</ul>

					<ul class="attributes">
						<?php if(!$this->session->userdata('is_user_login')): ?>
							<li class="login-attri none app-hidden"><a href="<?php echo base_url(); ?>signup">회원가입</a></li>
							<li class="login-attri theme-log app-hidden"><a href="<?php echo base_url(); ?>user/login">로그인</a></li>
							<li class=" app-show"><a href="<?php echo base_url(); ?>user/login" class="text-info app-login"><i class="ti-user"></i></a></li>
						<?php else : ?>
							<li class="dropdown">
								<a href="JavaScript:Void(0);"><i class="ti-user"></i> </a>
								<ul class="dropdown-menu setting-menu" >
									<li><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>">마이페이지</a></li>
									<li><a href="<?php echo base_url(); ?>edit_profile">내 정보 수정</a></li>
									<li><a href="<?php echo base_url(); ?>friends/favourite_friends">즐겨찾기</a></li>
									<li><a href="<?php echo base_url(); ?>friends">매칭 목록</a></li>
									<li><a href="<?php echo base_url(); ?>friends/request_received">받은 신청 목록</a></li>
									<li><a href="<?php echo base_url(); ?>friends/request_sent">보낸 신청 목록</a></li>
									<li><a href="<?php echo base_url(); ?>friends/blocked_friends">블랙리스트</a></li>
									<!-- <li><a href="<?php echo base_url(); ?>privacy">공개 설정</a></li> -->
									<li class="app-show"><a href="<?php echo base_url(); ?>user/logout" class="text-warning"><i class="ti-power-off"></i>&nbsp;로그아웃</a></li>
								</ul>
							</li>

							<li class="login-attri theme-log app-hidden"><a href="<?php echo base_url(); ?>user/logout">로그아웃</a></li>
							
							
						<?php endif; ?>
						
					</ul>
					
				</nav>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			