<?php
header("Content-Type:application/json");
$time=null;
$rashi=null;

if(isset($_GET['time'])){
$time=$_GET['time'];}

if(isset($_GET['sign'])){
$rashi=$_GET['sign'];
}

if($time!=null && $rashi!=null){

if(strcmp($time, 'today')===0){
$time='daily';

}
elseif (strcmp($time, 'week')===0) {
		$time='weekly';}
		elseif (strcmp($time, 'month')===0) {
			$time='monthly';
		}
		elseif (strcmp($time, 'year')===0) {

			$time=date('Y');
		}
$html = file_get_contents('http://www.askganesha.com/'.$rashi.'/'.$rashi.'-'.$time.'-horoscope.asp'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();
$data='';
libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
		if (strcmp($time, 'year')===0) {

			$rashi = $pokemon_xpath->query('//p[@class="aj mt10"]');
		}
	else
	{
				$rashi = $pokemon_xpath->query('//p[@class="mt10 aj p10"]');

	}// $date1 = $pokemon_xpath->query('//p[@class="orrange-text margin-bottom-0 margin-top-5 truncate-line"]');

	if($rashi->length > 0){
		foreach($rashi as $row){
			$data=$row->nodeValue . "<br/>";
			// echo $date1[0]->nodeValue;
		}
	}

	
	} 
	if($data!=null){


	response(200,"Success",$data);
	}else
	{
	response(400,"Some error, please try again later",NULL);

	}
}

else{

if($time==null && $rashi==null){

header("HTTP/1.1 ");
	
	$response['Author']="Sumit Gohil";
	$response['Author_Website']="http://sumitgohil.com";
	$response['project_name']="Horoscope Api";
	$response['project_url']="https://github.com/sumitgohil/horoscope-api";
	$json_response = json_encode($response);
	echo $json_response;
}

		elseif($time==null){
			header("HTTP/1.1 Time not Defined ");
	
	$response['status']="error";
	$response['status_message']="Time not Defined";

	
	$json_response = json_encode($response);
	echo $json_response;
		}
		elseif ($rashi==null) {
			header("HTTP/1.1 Sign not Defined ");
	
	$response['status']="error";
	$response['status_message']="Sign not Defined";

	
	$json_response = json_encode($response);
	echo $json_response;
		}
		

	}
function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status_message);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}

?>
