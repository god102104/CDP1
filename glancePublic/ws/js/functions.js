function postComments()
{
	
	var comment = $.trim($('#comments').val());
	var to = $('#to_user').val();
	
	if(comment == '' || to == '') {
		return false;
	}
	
	var pageName = baseUrl+'comments/add_comments';
	var parameters = 'comment='+encodeURIComponent(comment)+'&to='+to;
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			//location.reload(true);
			//window.reload(true);
			$('#comment_all').append(msg);
			$('#comments').val('');
		
		
		}
							
	});
}


function sendMessages()
{
	
	var message = $.trim($('#message').val());
	//var to = $('#to_user').val();
	
	if(message == '') {
		return false;
	}
	
	var pageName = baseUrl+'messages/add_messages';
	var parameters = 'message='+encodeURIComponent(message);
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			//location.reload(true);
			//window.reload(true);
			$('#messages_all').append(msg);
			$('#message').val('');
		
		
		}
							
	});
}

function setRecieverSession(username)
{
	
	var to = username;
	
	var pageName = baseUrl+'messages/set_session_for_reciever';
	var parameters = 'user_to='+to;
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			window.location = baseUrl+'messages';
			//window.reload(true);
		
		
		
		}
							
	});
}


function createAlbumDir(username)
{
	var albumName = $.trim($('#album_name_create').val());
	var pageName = baseUrl+'gallery/create_album_name';
	var parameters = 'album='+albumName;
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			//alert(baseUrl+'gallery/photos/'+username+'/'+albumName);
			window.location = baseUrl+'gallery/photos/'+username+'/'+albumName;
			//window.reload(true);
		
		
		
		}
							
	});
}


function addAlbumForm(username) {
	

	var content = '<table width="100%" border="0"><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td width="163" align="right"><strong>앨범명:</strong>&nbsp;</td><td width="162" align="center"><input type="text" name="album_name_create" id="album_name_create" /></td><td width="163"><input type="button" value="추가" onclick="createAlbumDir(\''+username+'\')" class="viewlinks" /></td></tr><tr><td colspan="3">&nbsp;</td></tr><tr><td colspan="3" style="text-align:center; color:red">영문 및 숫자만 가능합니다</td></tr><tr><td colspan="3">&nbsp;</td></tr></table>';
	
	loadNewPopup(escape('새 앨범 추가'),content,'400','','','1','tag','body','','','fixed');



}

function addNewPhoto(album_name) {
	
	var content = '<form method="post" enctype="multipart/form-data" action="'+baseUrl+'gallery/upload_images"><table width="100%" border="0"><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td width="163" align="right"><strong>사진 추가 :</strong>&nbsp;</td><td width="127" align="center"><input type="file" name="photo" style="width:183px;" /></td><td width="113"><input type="submit" value="업로드" class="viewlinks"/><input type="hidden" name="album_name" id="album_name" value="'+album_name+'"></td></tr><tr><td colspan="3">&nbsp;</td></tr></table></form>';
	
	loadNewPopup(escape('새 사진 추가'),content,'400','','','1','tag','body','','','fixed');
}

function postImageComments()
{
	
	var comment = $.trim($('#comments').val());
	var img_id = $('#img').val();
	if(comment == '' || img_id == '') {
		return false;
	}
	
	var pageName = baseUrl+'comments/add_image_comments';
	var parameters = 'comment='+encodeURIComponent(comment)+'&image_id='+img_id;
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			location.reload(true);
			//window.reload(true);
		
		
		
		}
							
	});
}

function deleteImage(id)
{
	
	var pageName = baseUrl+'gallery/remove_image';
	var parameters = 'img_id='+id;
	
	$.ajax({
	type: "POST",
	url: pageName,
	data: parameters,
	beforeSend: function(){},
	success: function(msg){

			$('#'+id).remove();
			//location.reload(true);
			//window.reload(true);
		
		
		
		}
							
	});
}

function delete_comment(id){
	var myurl = baseUrl+'comments/delete_comment/'+id;
	var is_confirm = confirm("해당 댓글을 삭제하시겠습니까?");
	if(is_confirm){
		  $.get(myurl, function (sts) {
			  if(sts=='done'){
				  	$("#row_"+id).fadeOut();
			  }
			  else
			  		alert(sts);
	   	  });
	}
}
