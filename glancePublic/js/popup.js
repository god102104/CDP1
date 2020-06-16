/************************************************/
/// isscroll value should be 1 or yes if dont want to scroll the div the you can set it empty or no.
/// popupHeight depend on isscroll value if isscroll value is 1 or yes and popupHeight value is empty then it will return an error.
/// if backgroundOverlay is 1 or yes thenm it will show background overlay, if value is empty, 0 or no then it will not show background Overlay
/// Through CSS important layout settings of Popup can be changed like Popup position, color of Text, Heading style, Heading background color and Popup outer border    color.
/// By default Popup will set itself in center according to screen resolution.


/************************************************/
var ScrollBackToX = '';
var ScrollBackToY = '';

function loadNewPopup(headingText,content,popupWidth,popupHeight,isscroll,backgroundOverlay,jqSelector,selectorName,topPosition,topPositionUnit,popUpPosition)
{
		
		if(arguments.length > 11) {
			
			for (var x = 11; x < arguments.length; x++) {
				
				var getValueArr = arguments[x].split(':');
				
				var varType = getValueArr[0];
				var varValue = getValueArr[1];
				
				if(varType == 'windowScroll') {
					
					if(varValue == '1' || varValue == 'yes') {
						
						varType = getValueArr[2];
						varValue = getValueArr[3];
						
						if(varType == 'windowScrollToX') {
							
							var setX = varValue;
							
						}
						
						varType = getValueArr[4];
						varValue = getValueArr[5];
						
						
						if(varType == 'windowScrollToY') {
							
							var setY = varValue;
							
						}
						
						window.scroll(parseInt(setX),parseInt(setY));
						
						varType = getValueArr[6];
						varValue = getValueArr[7];
					
						if(varType == 'windowScrollBack') {
							
							
							if(varValue == '1' || varValue == 'yes') {
								
								varType = getValueArr[8];
								varValue = getValueArr[9];
								
								if(varType == 'windowSrollBackSelector') {
									
									var position = $(varValue).position();
									ScrollBackToX = position.left;
									ScrollBackToY = position.top;
									//alert("X"+" "+ScrollToX+" Y"+" "+ScrollToY);
									
								}
								
								
							
							}
								
																
						}	
						
					}
					
				} else {
					
					alert("Unknown Parameter");
					return false;
					
				}
				
			};
			
		}
		
		if(backgroundOverlay == '1' || backgroundOverlay == 'yes') {
			
			var createMainDivs = '<div id="backgroundPopup"></div><div class="content_main"><div class="content_popup"></div></div>';
			
		} else {
		
			var createMainDivs = '<div class="content_main"><div class="content_popup"></div></div>';
		
		}
		
		var headingDivWidth = parseInt(popupWidth) - 52;
		var headingHtml = '<div class="heading_popup"><div></div><a href="javascript:;" onclick="closePopup()">Close (X)</a></div>';
		
		if(jqSelector != "") {
		
			if(jqSelector == 'id' || jqSelector == 'class' || jqSelector == 'tag') {
				
				if(jqSelector == 'id') {
					var selector = "#";
				} else if(jqSelector == 'class') {
					var selector = ".";
				} else if(jqSelector == 'tag') {
					var selector = "";
				}
				
			} else {
				
				alert('Select the Valid Selector');
				return false;
			}
			
		} else {
			
			alert('Select the Valid Selector. Possible Values are id, class and tag.');
			return false;
			
		}
		
		
		if(selectorName == "") {
			
			alert("Please Define Selector. Possible values are id name, class name and Tag name");
			return false;
			
		} else {
			
			var jQobject = selector+selectorName;
			
		}
		
		
		if($('.content_main').length > 0) {
			
			$('#backgroundPopup').remove();
			$('.content_main').remove();
			
			$(jQobject).append(createMainDivs);
		} else {
			
			$(jQobject).append(createMainDivs);
			
		}
		
		if(isscroll=='yes' || isscroll=='1') {
			var scrollDiv = '<div class="scroll-divPopup">&nbsp;</div>';
		}
		
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		
		
		if(popUpPosition != "") {
			
			if(popUpPosition != "fixed" && popUpPosition !="absolute") {
				
				alert("Possible values of popUpPosition should be fixed and absolute");
				return false;
			}
			
			$('.content_main').css({
				"position":popUpPosition
			});
		}
		
		
		if(topPosition!='') {
			
			if(topPositionUnit == "") {
				
				alert("You Define topPositionValue. Possible values are px and %");
				return false;
			}
			
			setTop = topPosition+topPositionUnit;
			
			$('.content_main').css({
				"top":setTop
			});
			
		}
		
		$('.content_popup').css({
			"width":popupWidth+"px"
		});
		
		$('.content_popup').html(headingHtml);

		$('.heading_popup div').css({
			"float": "left",
			"width": headingDivWidth+"px"
		});

		$('.heading_popup div').html(unescape(headingText));
		
		if(isscroll == 'yes' || isscroll=='1') {
			if(popupHeight == '') {
				alert('Variable "popupHeight" value is missing.');
				return false;
			} else {
					$('.content_popup').append(scrollDiv);
					
					$('.scroll-divPopup').css({
						"height" : popupHeight+"px"
					});
	
					$('.scroll-divPopup').html(unescape(content));
			}
		}
		else {
				$('.content_popup').append(unescape(content));
		}
		
		$("#backgroundPopup").fadeIn("slow");
		$('.content_main').fadeIn("slow");
}



function closePopup(){
	
	if(ScrollBackToX != "" && ScrollBackToY != "") {
		
		window.scroll(parseInt(ScrollBackToX),parseInt(ScrollBackToY));
		$('.content_main').fadeOut('slow');	
		$("#backgroundPopup").fadeOut('slow');
		
	}
	
	$("#backgroundPopup").fadeOut('slow');
	$('.content_main').fadeOut('slow');
	
	ScrollBackToX = '';
	ScrollBackToY = '';
}

function loadContent(oldValue,rid)
{
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td colspan="3"> How many Rewards would you like to be alerted at? </td></tr><tr> <td width="30%" align="center"><strong>Number:</strong></td><td width="21%"><input type="text" name="alerton" id="alerton" value="'+oldValue+'" size="6"><input type="hidden" name="rid" id="rid" value="'+rid+'"></td><td width="49%"><input type="button" name="button" id="button" value="Submit" style="font-weight:bold;" onclick="changeAlertSettings(\''+oldValue+'\',\''+rid+'\')"> &nbsp;&nbsp;<input type="button" value="Cancel" style="font-weight:bold;" onclick="closePopup()"></td></tr></table>');

//to see params of function	
//loadNewPopup(headingText,content,popupWidth,popupHeight,isscroll,backgroundOverlay,jqSelector,selectorName,topPosition,topPositionUnit,popUpPosition) 

	loadNewPopup(escape('Manage Alert'),content,'350','','','no','id','td'+rid,'','','');
}

function loadContentIPAddress() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">My Hotel Cash Card records the computer IP address and redemption activity   for every redemption and attempted redemption, and that attempts to   redeem the same code more than once, attempts to redeem multiple codes,   giving your code to someone else to redeem, or attempts to redeem a code not issued directly to you will result in termination of your reward   code, and may result in referral to our fraud department and possibly to the legal authorities.</td></tr></table>');
	
	loadNewPopup(escape('Why do we record this?'),content,'571','','','1','tag','body','','','fixed');
}

function loadContentNotActivated() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">If you haven\'t activated, you cannot check your  status. In order to activate <a href="activate-my-hotel-cash-card.php">click here</a>.</td></tr></table>');
	
	loadNewPopup(escape('I Have Not Yet Activated'),content,'400','','','1','tag','body','','','fixed');
}


function loadContentInvalideCode() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">Looks the PIN or Email address you have entered isn\'t in the system. If you haven\'t activated yet <a href="activate-my-hotel-cash-card.php">click here</a>. If you have activated, but there seems to be an issue, contact <a href="support.php">member support</a>. </td></tr></table>');
	
	loadNewPopup(escape('Member Status'),content,'542','','','1','tag','body','','','fixed');
}

function loadContentInvalidInfo() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">The PIN and Email address you have entered don\'t exist. If you haven\'t activated yet, please <a href="activate-my-hotel-cash-card.php">click here</a>. Otherwise, carefully re-enter your Pin and Email Address. </td></tr></table>');
	
	loadNewPopup(escape('Invalid PIN and Email Address'),content,'400','','','1','tag','body','','','fixed');
}

function loadContentIncorrect() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">Looks like either your email address or PIN is entered incorrectly. Please review both and fix the issue.</td></tr></table>');
	
	loadNewPopup(escape('Incorrect'),content,'400','','','1','tag','body','','','fixed');
}

function loadContentIncorrectActivationCode(msg) {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">You have entered your Activation PIN. This is the incorrect PIN that you will need to get your savings on your booking. Please enter your Redemption Code here instead which was sent to you on '+msg+'</td></tr></table>');
	loadNewPopup(escape('Incorrect Activation Code'),content,'700','','','1','tag','body','','','fixed');
}

function showpopwithUpdatedText() {
	
	var eml3=document.getElementById('email').value;

	content2 = escape('<div style="padding-left:5px;">If you would like to  send it to '+eml3+', please click YES. If that is  not your email address and you would like to change your email address, please  click NO <table width="100%"><tr><td align="right"><img onclick="formSubmit();" src="images/yes-btn.png" /></td><td width="5%"></td><td><img onclick="edit_email();" src="images/no-btn.png" /></td></tr></table></div>');
	
	 loadNewPopup(escape('Resend confirmation email'),content2,'400','','','1','tag','body','','','fixed');
}

function loadContentActivationCodeSugesstions(userEnter,actCode) {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3"><p>You typed '+userEnter+'.&nbsp; Maybe you were trying to type '+actCode+' which is a valid  code.&nbsp; Do you want to try this code?</p></td></tr></table>');
	
	loadNewPopup(escape('Incorrect Activation Code'),content,'500','','','1','tag','body','','','fixed');
}

function loadContentActivationCodeSugesstionsMoreLetters(userEnter,actCode,num) {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="300%" colspan="3">It looks like you made a mistake when you typed your code. There should only be 5 letters. You\'ve included '+num+'. You typed '+userEnter+'. Maybe you were trying to type '+actCode+' which is a valid code. Do you want to try this code?</td></tr></table>');
	
	loadNewPopup(escape('Incorrect Activation Code'),content,'500','','','1','tag','body','','','fixed');
}

function loadContentIncorrectActivationCodeUnused() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">The Activation code you have entered has not be redeemed yet. Please <a href="activation.php">Click Here</a> to redeem it.</td></tr></table>');
	
	loadNewPopup(escape('Activation code status'),content,'400','','','1','tag','body','','','fixed');
}

function loadContentInvalidInfoActivationCode() {
	
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">The activation code you have entered don\'t exist. If you haven\'t activated yet, please <a href="activate-my-hotel-cash-card.php">click here</a>. Otherwise, carefully re-enter your activation code. </td></tr></table>');
	
	loadNewPopup(escape('Invalid Activation Code'),content,'400','','','1','tag','body','','','fixed');
}

function testExtraArgus()
{
	content = escape('<table width="100%" border="0" cellspacing="3" cellpadding="3"><tr><td width="100%" colspan="3">Looks like either your email address or PIN is entered incorrectly. Please review both and fix the issue.</td></tr></table>');
	
	loadNewPopup(escape('Incorrect'),content,'400','','','1','tag','body','','','fixed', 'windowScroll:1:windowScrollToX:0:windowScrollToY:0:windowScrollBack:1:windowSrollBackSelector:#fourthimage');
}// JavaScript Document