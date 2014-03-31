<?php

//mail('milder.lisondra@jewsforjesus.org','Export started',$filename); // notification

// connection
$mysqli = new mysqli("localhost", "root", "", "wordpress");

$sql = "SELECT
DATE_FORMAT(FROM_UNIXTIME(submit_time), '%b %e, %Y  %l:%i %p') AS Submitted,
MAX(IF(field_name='firstname', field_value, NULL )) AS 'first_name',
MAX(IF(field_name='lastname', field_value, NULL )) AS 'last_name',
MAX(IF(field_name='email', field_value, NULL )) AS 'email',
MAX(IF(field_name='address_1', field_value, NULL )) AS 'address1',
MAX(IF(field_name='city', field_value, NULL )) AS 'city',
MAX(IF(field_name='state', field_value, NULL )) AS 'state',
MAX(IF(field_name='zip', field_value, NULL )) AS 'zip',
MAX(IF(field_name='phone', field_value, NULL )) AS 'phone',
MAX(IF(field_name='jewish_belief', field_value, NULL )) AS 'jewish_belief',
MAX(IF(field_name='jesus_belief', field_value, NULL )) AS 'jesus_belief',
MAX(IF(field_name='your-message', field_value, NULL )) AS 'comments',
MAX(IF(field_name='contact-permission', field_value, NULL )) AS 'contact_permission'
FROM wp_cf7dbplugin_submits
WHERE
form_name = 'That Jew Died for You Contact'
GROUP BY submit_time
ORDER BY submit_time DESC;";

$result = $mysqli->query($sql);

/*
Cron process
May need to have 2 cron jobs
First cron job selects data from source table wp_cformsdata and inserts into a new table. 
New table is normalized. One record for each submission.

Second cron job selects data from new table and packages into CSV file.
*/


$filename = "tjdfy_export_" . time() . ".csv"; // filename
$file_handler = fopen($filename,'a');
$header_row = 'CONSTITUENT TYPE,TITLE,FIRST NAME,MIDDLE NAME,LAST/ORG/GROUP/HOUSEHOLD NAME,GENDER,COUNTRY,ADDRESS,CITY,STATE,ZIP,PHONE TYPE 1,PHONE NUMBER 1,PRIMARY 1,EMAIL TYPE,EMAIL ADDRESS,CONTACT CODE,APPEAL (CONTACT SOURCE),MISSIONARY CODE,Critical notes,Solicit Code 1,Start Date 1,Comments 1'."\r\n";
fwrite($file_handler,$header_row); // append header columns

$result->data_seek(0);
while ($r = $result->fetch_object()) {
	$title = '';
	$phone_type = '';
	$phone = '';
	$primary1 = '';
	$submitted_date = '';
	$comments = '';
	$solicit_code = '';
	
	if($r->contact_permission == ""){	
		$submitted_date = date('m/d/Y', strtotime($r->Submitted));
		$solicit_code = 'No e-blasts';
		$comments = 'Requested no-eblasts via thatjewdiedforyou.com';
	}
	
	if($r->phone != ""){
		$phone_type = 'Home';
		$phone = $r->phone;
		$primary1 = 'TRUE';
	}
	if($r->jewish_belief == "Yes" && $r->jesus_belief == "Yes"){ // Jewish Believer
		$contact_code = 'JB';
		$missionary_code = 'issues ISSUES fund';
	}elseif($r->jewish_belief == "Yes" && $r->jesus_belief == "No"){ // Jewish Unbeliever
		$missionary_code = 'issues ISSUES fund';
		$contact_code = 'UJ';		
	}elseif($r->jewish_belief == "No" && $r->jesus_belief == "Yes"){ // Gentiler Believer
		$missionary_code = 'geevan General Evangelism';
		$contact_code = 'GB';		
	}else{ // Gentile Unbeliever
		$contact_code = 'UG';
		$missionary_code = 'issues ISSUES fund';
	}
	$data_string = "Individual," . $title . ",";
    $data_string .= $r->first_name . "," . "," . $r->last_name . ",,United States," . $r->address1 . "," . $r->city . "," . $r->state . "," . $r->zip . ",";
	$data_string .= $phone_type . "," . $phone . "," . $primary1 . ",General E-Mail," . $r->email . "," . $contact_code .",STNETTJDFY," . $missionary_code. "," . '"' .$r->comments. '",' . $solicit_code . "," . $submitted_date . "," . $comments ;     
	$data_string .= "\r\n";
    fwrite($file_handler,$data_string);
   
}

fclose($file_handler); // Clean up