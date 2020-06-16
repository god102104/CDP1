<!--Profile Start-->
    <div class="userInfoBar">
      <div class="inner">
        <div class="userPicbox">
          <div class="userimage">
            <div class="imgint"><img src="<?php echo ($this->session->userdata('photo'))?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo'):base_url().'glancePublic/images/no-image.jpg';?>" /></div>
          </div>
          <div class="userName">
            <h4><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>" style="color:#018564;"><?php echo ($this->session->userdata('name')=='')?$this->session->userdata('username'):$this->session->userdata('name');?></a></h4>
            <a href="<?php echo base_url().'edit_profile';?>">Edit Profile Picture</a></div>
        </div>
        <div class="searchFriendBox">
        <form name="search_frm" id="search_frm" action="<?php echo base_url();?>search" method="post">
          <input type="text" name="search" value="Search Friends" />
          <input type="submit" value="search" />
        </form>
        </div>
        <div class="userquickLinks">
          <ul class="usernav">
            <li><a href="<?php echo base_url(); ?>friends" title="Friend List">Friends</a> </li>
            <li><a href="<?php echo base_url();?>messages" title="Messages Conversation">Messages</a></li>
            <li><a href="<?php echo base_url();?>gallery/photos/<?php echo $this->session->userdata('username'); ?>" title="My Picture Gallery">My Gallery</a></li>
            <li><a href="#" title="Settings"><img src="<?php echo base_url(); ?>glancePublic/images/setting.png" /></a>
              <ul class="subnav">
                <li><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>" title="Goto your profile"><?php echo $this->session->userdata('name');?></a></li>
                <li><a href="<?php echo base_url(); ?>edit_profile" title="Edit Profile">Edit Profile</a></li>
                
                <li><a href="<?php echo base_url(); ?>friends/request_received" title="Blcok List">Friends Request Received</a></li>
                <li><a href="<?php echo base_url(); ?>friends/request_sent" title="Blcok List">Friends Request Sent</a></li>

                <li><a href="<?php echo base_url(); ?>friends/blocked_friends" title="Blcok List">Block List</a></li>
                <li><a href="<?php echo base_url(); ?>friends/favourite_friends" title="Favourities List">Favourities</a></li>
                <li><a href="#" title="Account Setting">Account Setting</a></li>
                <li><a href="#" title="Privacy Setting">Privacy Setting</a></li>
                <li><a href="<?php echo base_url(); ?>user/logout" title="Logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
<!--Profile End-->