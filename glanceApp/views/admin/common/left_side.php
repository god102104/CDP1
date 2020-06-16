<aside class="left-side sidebar-offcanvas"> 
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"> 
    <!-- Sidebar user panel -->
    <ul class="sidebar-menu">
      <li> <a href="<?php echo base_url();?>admin/dashboard"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/profiles_lists';?>"> <span>회원 프로필 관리</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/search_profile_name';?>"> <span>이름으로 회원 검색</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/search_profile_email';?>"> <span>이메일로 회원 검색</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/search_profile_location';?>"> <span>지역으로 회원 검색</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/all_messages';?>"> <span>회원 메시지 관리</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/email_templates';?>"> <span>이메일 템플릿 관리</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/pages_manage';?>"> <span>CMS 관리</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/ads';?>"> <span>광고 관리</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/home/update_pass';?>"> <span>비밀번호 변경</span> </a> </li>
      <li> <a href="<?php echo base_url().'admin/home/logout';?>"> <span>로그아웃</span> </a> </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>