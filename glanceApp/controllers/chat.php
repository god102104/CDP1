<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function index()
	{
		echo "I am index";
	}
	
	public function chat_heart_beat() {
	
	$result = $this->chat_model->get_chat_by_username($this->session->userdata('username'));
	
	$items = array();
	$chatBoxes = array();
	$entries = array();
	
	foreach($result as $chat){
		$openChatBoxes = $this->session->userdata('openChatBoxes');
		$chatHistory = $this->session->userdata('chatHistory');
		
		if (!isset($openChatBoxes[$chat->from]) && isset($chatHistory[$chat->from])) {
			$items = $chatHistory[$chat->from];
		}

		$chat->message = sanitize($chat->message);
		
		$entries = array(
					"s"=>"0",
					"f"=>"{$chat->from}",
					"m"=>"{$chat->message}",
		);
		$entries = json_encode($entries);
		array_push($items,$entries);

	if (!isset($chatHistory[$chat->from])) {
		$this->session->set_userdata('chatHistory');
		$_SESSION['chatHistory'][$chat['from']] = ''; //tttttttttttttttttttt
	}

	$_SESSION['chatHistory'][$chat['from']] .= <<<EOD
						   {
			"s": "0",
			"f": "{$chat['from']}",
			"m": "{$chat['message']}"
	   },
EOD;
		
		unset($_SESSION['tsChatBoxes'][$chat['from']]);
		$_SESSION['openChatBoxes'][$chat['from']] = $chat['sent'];
	}

	if (!empty($_SESSION['openChatBoxes'])) {
	foreach ($_SESSION['openChatBoxes'] as $chatbox => $time) {
		if (!isset($_SESSION['tsChatBoxes'][$chatbox])) {
			$now = time()-strtotime($time);
			$time = date('g:iA M dS', strtotime($time));

			$message = "Sent at $time";
			if ($now > 180) {
				$items .= <<<EOD
{
"s": "2",
"f": "$chatbox",
"m": "{$message}"
},
EOD;

	if (!isset($_SESSION['chatHistory'][$chatbox])) {
		$_SESSION['chatHistory'][$chatbox] = '';
	}

	$_SESSION['chatHistory'][$chatbox] .= <<<EOD
		{
"s": "2",
"f": "$chatbox",
"m": "{$message}"
},
EOD;
			$_SESSION['tsChatBoxes'][$chatbox] = 1;
		}
		}
	}
}

	$sql = "update chat set recd = 1 where chat.to = '".mysql_real_escape_string($_SESSION['username'])."' and recd = 0";
	$query = mysql_query($sql);

	if ($items != '') {
		$items = substr($items, 0, -1);
	}
header('Content-type: application/json');
?>
{
		"items": [
			<?php echo $items;?>
        ]
}

<?php
			exit(0);
	}
	
	public function chat_box_session($chatbox) {
		
		$items = '';
		
		if (isset($_SESSION['chatHistory'][$chatbox])) {
			$items = $_SESSION['chatHistory'][$chatbox];
		}
	
		return $items;
	}
	
	public function start_chat_session() {
		$items = '';
		if (!empty($_SESSION['openChatBoxes'])) {
			foreach ($_SESSION['openChatBoxes'] as $chatbox => $void) {
				$items .= chatBoxSession($chatbox);
			}
		}
	
	
		if ($items != '') {
			$items = substr($items, 0, -1);
		}
	
	header('Content-type: application/json');
	?>
	{
			"username": "<?php echo $_SESSION['username'];?>",
			"items": [
				<?php echo $items;?>
			]
	}
	
	<?php
	
	
		exit(0);
	}
	
	/*public function send_chat() {
		$from = $_SESSION['username'];
		$to = $_POST['to'];
		$message = $_POST['message'];
	
		$_SESSION['openChatBoxes'][$_POST['to']] = date('Y-m-d H:i:s', time());
		
		$messagesan = sanitize($message);
	
		if (!isset($_SESSION['chatHistory'][$_POST['to']])) {
			$_SESSION['chatHistory'][$_POST['to']] = '';
		}
	
		$_SESSION['chatHistory'][$_POST['to']] .= <<<EOD
						   {
				"s": "1",
				"f": "{$to}",
				"m": "{$messagesan}"
		   },
	EOD;
	
	
		unset($_SESSION['tsChatBoxes'][$_POST['to']]);
	
		$sql = "insert into chat (chat.from,chat.to,message,sent) values ('".mysql_real_escape_string($from)."', '".mysql_real_escape_string($to)."','".mysql_real_escape_string($message)."',NOW())";
		$query = mysql_query($sql);
		echo "1";
		exit(0);
	}*/
	
	public function close_chat() {
	
		unset($_SESSION['openChatBoxes'][$_POST['chatbox']]);
		
		echo "1";
		exit(0);
	}
	
	public function sanitize($text) {
		$text = htmlspecialchars($text, ENT_QUOTES);
		$text = str_replace("\n\r","\n",$text);
		$text = str_replace("\r\n","\n",$text);
		$text = str_replace("\n","<br>",$text);
		return $text;
	}



}
