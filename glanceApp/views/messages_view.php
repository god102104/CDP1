
<!--Site Wraper Start-->
<div class="siteWraper">
    <div class="innerPageswrap">
        <div class="container">
            <h1 class="titleheading">메시지</h1>

            <div class="messageWrap">
                <div class="row" style=" flex-wrap: nowrap;">
                    <div class="col-md-3 col-sm-5 col-xs-3">

                        <!--Left Col Users-->
                        <div class="usercol">
                            <div class="userlist">

                                <!--User List-->
                                <div class="userwrp">
                                    <ul class="userallList">
                                        <?php
                                        if($conatacted_memebers) {
                                        foreach($conatacted_memebers as $ContactedMemberDetail) {
                                            $ContactedMemberDetail->name_mask = preg_replace('/(?<=.{1})./u', '○', $ContactedMemberDetail->name);
                                        if($ContactedMemberDetail->photo == "") {
                                        $photo = 'images/no-image.jpg';
                                        } else {
                                        $photo = 'uploads/member_images/thumb_'.$ContactedMemberDetail->photo;

                                        }

                                        if($ContactedMemberDetail->username == $this->session->userdata('user_rec')) {

                                        $class = 'class="active"';

                                        } else {

                                        $class = '';
                                        }

                                        ?>
                                        <li><a href="javascript:;" <?php echo $class; ?> onclick="setRecieverSession('<?php echo $ContactedMemberDetail->username;?>')">
                                            <div class="imgbox"><img src="<?php echo base_url(); ?>glancePublic/<?php echo $photo;?>" width="40" height="39" /></div>
                                            <div class="userinfo">
                                                <div class="name"><?php echo $ContactedMemberDetail->name_mask;?></div>
                                                <p><?php switch ($ContactedMemberDetail->gender) : case 'Male': echo "남성"; break; case 'Female': echo "여성"; break; endswitch;?>
                                                <?php echo $ContactedMemberDetail->mAge."세, ".$ContactedMemberDetail->work_zone;?></p>
                                            </div>
                                            <div class="clear"></div></a>
                                        </li>
                                        <?php }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-7 col-xs-9">
                        <!--Right Col Chat-->
                        <div class="chatCol"><!--Chat user info-->
                            <div class="chatserinfo">
                                <?php if($rec_row):
                                    $is_already_friend = $this->friend_model->friendship_validations($rec_row->id);
                                    $rec_row->name_mask = preg_replace('/(?<=.{1})./u', '○', $rec_row->name);

                                ?>
                                    <div class="chatuserWrp">
                                    <?php if($rec_row->photo)
                                        $image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$rec_row->photo;
                                        else
                                        $image_thumb = base_url().'glancePublic/images/no-image.jpg';
                                    ?>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="userpic"><a href="<?php echo base_url(); ?>profile/<?php echo $rec_row->username; ?>" class="userimgBox"><img src="<?php echo $image_thumb; ?>"></a></div>
                                            <div class="usercontent">
                                                <div class="left">
                                                    <h2><?php echo $rec_row->name_mask;?><span><? echo (($rec_row->division) == 'yoyang')?'요양사':'채용자';?></span></h2>
                                                    <p><?php switch ($rec_row->gender) : case 'Male': echo "남성"; break; case 'Female': echo "여성"; break; endswitch;?>
                                                    <?php echo $rec_row->mAge."세, ".$rec_row->work_zone;?></p>
                                                </div>
                                                <div class="clear"></div>   
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6 chatbtnarea">
                                            <a href="<?php echo base_url(); ?>friends/block_friend/<?php echo my_encrypt($rec_row->id); ?>" class="btn btn-red">블랙리스트 추가</a> 
                                            <?php if(!$is_already_friend): ?>
                                                <a href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($rec_row->id); ?>" class="btn btn-green">매칭 신청</a>
                                            <?php elseif($is_already_friend->status =='pending'): ?>
                                                <a href="<?php echo base_url(); ?>friends/request_sent"class="btn btn-inverse">매칭 대기</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif;?>
                                <div class="chatListBox">
                                    <ul class="chatList" id="messages_all">
                                        <?php  if($messages_row) {
                                            foreach($messages_row as $messageDetail) {
                                            if($messageDetail->photo == "") {
                                            $photo = 'images/no-image.jpg';
                                            } else {
                                            $photo = 'uploads/member_images/thumb_'.$messageDetail->photo;

                                            }
                                        ?>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-2 col-xs-2"><img src="<?php echo base_url(); ?>glancePublic/<?php echo $photo; ?>" alt="" /></div>
                                                <div class="col-md-11 col-sm-10 col-xs-10">
                                                    <div class="chattxt">
                                                        <div class="chatcont">
                                                            <p><?php echo $messageDetail->message; ?></p>
                                                            <div class="time"><?php echo dateDiff(date("Y-m-d H:i:s"),$messageDetail->date_send).' ago';?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } } ?>
                                    </ul>
                                </div>

                                <div class="chatForm">
                                    <div class="writeBox">
                                        <textarea id="message" name="message" class="form-control"></textarea> <input type="button" value="전송" class="btn" onclick="sendMessages()" />
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

</div>
<!--/Site Wraper End-->
