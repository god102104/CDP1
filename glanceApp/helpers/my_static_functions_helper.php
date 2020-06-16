<?php
if (!function_exists('format_date')) {

    function format_date($dated, $type='both') {
        if($type=='both'){
			$format="Y/m/d-h:i A";
		}else{
			$format="Y/m/d";
		}
		$new_date=date($format,strtotime($dated));

		$formated_date=($type=='both')?str_replace("-","<br />",$new_date):$new_date;
		return $formated_date;
	}
	
}

if (!function_exists('date_formats')) {

    function date_formats($dated, $format='m-d-Y') {

		$formated_date=date($format,strtotime($dated));
		return $formated_date;
	}
	
}

if (!function_exists('currency_format')) {

    function currency_format($number) {
       
	   $formatted=number_format($number,2,'.','');
		return $formatted;
		
	}
	
}

if (!function_exists('encode_json')) {

    function encode_json($string) {
       
	   $encoded=json_encode($string);
		return $encoded;
		
	}
	
}

if (!function_exists('decode_json')) {

    function decode_json($string) {
       
	   $decoded=json_decode($string);
		return $decoded;
		
	}
	
}

if (!function_exists('only_numeric')) {

    function only_numeric($value) {
       
	   $formatted = preg_replace('#[^0-9]#i', '', $value);
		return $formatted;
		
	}
	
}

if (!function_exists('only_numeric')) {

    function only_numeric($value) {
       
	   $formatted = json_encode('#[^0-9]#i', '', $value);
		return $formatted;
		
	}
	
}


//To remove any blank space from a string
if (!function_exists('remove_spaces')) {

    function remove_spaces($value) {
       
	   $formatted = preg_replace('/\s+/', '', $value);
		return $formatted;
		
	}
	
}
if (!function_exists('replace_string')) {

    function replace_string($replace,$with,$string) {
       
	   $string = str_replace($replace, $with, $string);
		return $string;
		
	}
	
}

if (!function_exists('url_encode')) {

    function url_encode($string) {
       
	   $string = urlencode($string);
		return $string;
		
	}
	
}



if (!function_exists('generate_random_password')) {
	
	function generate_random_password(){
		
	  $data    = "ABCDEFGHJKLMNPQRSTUVWXYZ2345";
	  $Random  = substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $Random .= substr($data, (rand()%(strlen($data))), 1);
	  $pass	   = $Random;
	  return $pass;	
	}
}

if (!function_exists('my_encrypt')) {
	function my_encrypt($string, $key='onlinedating3') {
	  $result = '';
	  for($i=0; $i<strlen($string); $i++) {
	   $char = substr($string, $i, 1);
	   $keychar = substr($key, ($i % strlen($key))-1, 1);
	   $ordChar = ord($char);
	   $ordKeychar = ord($keychar);
	   $sum = $ordChar + $ordKeychar;
	   $char = chr($sum);
	   $result.=$char;
	  }
	  return base64_encode($result);
	 }
 }
 
if (!function_exists('my_decrypt')) {
	function my_decrypt($string, $key='onlinedating3') {
	  $result = '';
	  $string = base64_decode($string);
	  for($i=0; $i<strlen($string); $i++) {
	   $char = substr($string, $i, 1);
	   $keychar = substr($key, ($i % strlen($key))-1, 1);
	   $ordChar = ord($char);
	   $ordKeychar = ord($keychar);
	   $sum = $ordChar - $ordKeychar;
	   $char = chr($sum);
	   $result.=$char;
	  }
	  return $result;
	 }
}

if (!function_exists('validate_data')) {
  function is_number_exist($str)
  {
	  $Nmsg='';
	  $strlength=strlen($str);
//	  echo $strlength; exit;
	  for($i=0;$i<$strlength;$i++)
	  {
		  if(is_numeric($str[$i]))
		  {
			  $Nmsg= "err";
		  }
	  }
	  return $Nmsg;	
  }
}

if (!function_exists('validate_data')) {
	
	function validate_data($string='', $field_name='', $rules='trim',$stream='',$api_page='', $method='')
	{
		$rules_array = explode('|',$rules);
		foreach($rules_array as $rule){
			
			if($rule=='trim'){
				$string	= trim($string);
			}
			if($rule=='required'){
				if(strlen($string)==0){
					$msg = "ERROR: Required variable missing: ".$field_name;
					echo $msg;
					$this->inbound_model->insert_inbound_stream($method, '', $stream, $msg, $this->agent->referrer(), $this->input->ip_address(), '0', $api_page);
					exit;
				}
			}
			if($rule=='numeric'){
				if(!is_numeric($string)){
					$msg = "ERROR: Only integer value is allow in ".$field_name;
					echo $msg;
					$this->inbound_model->insert_inbound_stream($method, '', $stream, $msg, $this->agent->referrer(), $this->input->ip_address(), '0', $api_page);
					exit;
				}
			}
			
			if($rule=='alpha'){
				if(is_number_exist($string)=='err'){
					$msg = "ERROR: Please do not enter any number in ".$field_name;
					echo $msg;
					$this->inbound_model->insert_inbound_stream($method, '', $stream, $msg, $this->agent->referrer(), $this->input->ip_address(), '0', $api_page);
					exit;	
				}
			}
			
			if($rule=='secure'){
				$string	= addslashes(strip_tags($string));
			}

			/*if($rule=='valid_email'){
				//$string	= mysql_real_escape_string(strip_tags($string));
			}*/
			
			
		}
		
		return $string;
	}
}

if (!function_exists('api_email_rule')) {

    function api_email_rule($email) {
       
	   if(stristr($email,'@noemail.com') || $email=='' || stristr($email,'@nomail.com') || $email=='noemail@email.com'){
			  $email='nomail@nomail.com';
			}
		return $email;
		
	}
	
}

if ( ! function_exists('object_to_array'))
{
 function object_to_array($object)
 {
  if (is_object($object))
  {
   // Gets the properties of the given object with get_object_vars function
   $object = get_object_vars($object);
  }
 
   return (is_array($object)) ? array_map(__FUNCTION__, $object) : $object;
 }
}


if ( ! function_exists('array_to_object'))
{
 function array_to_object($array)
 {
  return (is_array($array)) ? (object) array_map(__FUNCTION__, $array) : $array;
 }
}

if ( ! function_exists('insertspaces'))
{
function insertspaces($str,$value)
	{
		$spaces="";
		$str=substr($str,0,$value);
		
		if($value > 0)
		{
			$strlength=strlen($str);
			$remainlength=$value-$strlength;
			for($i=1;$i<=$remainlength;$i++)
			{
				$spaces.=" ";
			}
		}
		else
			$spaces="";
			
		return $str.$spaces;
	}
}

if ( ! function_exists('print_array'))
{
	function print_array($arr)
	{
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		
	}
}


if ( ! function_exists('count_days'))
{	
	function count_days( $a, $b )
	{
		$a = strtotime($a);
		$b = strtotime($b);
		
		$gd_a = getdate( $a );
		$gd_b = getdate( $b );
		$a_new = mktime( 12, 0, 0, $gd_a['mon'], $gd_a['mday'], $gd_a['year'] );
		$b_new = mktime( 12, 0, 0, $gd_b['mon'], $gd_b['mday'], $gd_b['year'] );
		return round( abs( $a_new - $b_new ) / 86400 );
	}
}

if ( ! function_exists('count_years'))
{	
	function count_years( $a, $b )
	{
		$a = strtotime($a);
		$b = strtotime($b);
		
		$gd_a = getdate( $a );
		$gd_b = getdate( $b );
		$a_new = mktime( 12, 0, 0, $gd_a['mon'], $gd_a['mday'], $gd_a['year'] );
		$b_new = mktime( 12, 0, 0, $gd_b['mon'], $gd_b['mday'], $gd_b['year'] );
		return round( abs( $a_new - $b_new ) / 86400/365 );
	}
}

if ( ! function_exists('get_average'))
{
	function get_average($total_sum,$total_quantity)
	{
			if($total_quantity>0){
				$avg = $total_sum/$total_quantity;
				$avg= number_format($avg,2,'.','');	
			}
			else{
				$avg = '0.00';
			}
			return $avg;		
	}
}

if ( ! function_exists('is_selected'))
{
	function is_selected($db_value,$current_value)
	{
			if($db_value==$current_value){
				$return = 'selected="selected"';
			}
			else{
				$return = '';
			}
			return $return;		
	}
}

if(!function_exists('dateDiff')) {
	
	function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }
 
      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }
}

if ( ! function_exists('pagination_configuration')){
	function pagination_configuration($base_url, $total_rows, $per_page='50', $uri_segment='3', $num_links='4', $use_page_numbers=TRUE) {
		$config = array();
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_rows;
	    $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;
		$config['num_links'] = $num_links;
		$config['use_page_numbers'] = $use_page_numbers;
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
        
		//First Link
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		
		//Last Link
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		//Next Link
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		//Previous Link
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		//Current link
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</li></a>';
		
		//Digits Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		return $config;
	}
}

?>