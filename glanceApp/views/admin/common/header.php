<header class="header"> <a href="<?php echo base_url();?>admin/dashboard" class="logo"> Yoyangnavi </a>
  <nav class="navbar navbar-static-top" role="navigation"> <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <span><?php echo $this->session->userdata('admin_name');?></span> </a> </li>
      </ul>
    </div>
  </nav>
</header>
