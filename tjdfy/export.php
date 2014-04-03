<?php

$mysqli = new mysqli("localhost", "admin_root", "jfjweb777", "admin_thatjew");
$sql = "SELECT * FROM export_data WHERE exported = 0 AND `jesus_belief` = 'No' LIMIT 500";
$result = $mysqli->query($sql);

// Check that that records exist
if($result->num_rows > 0){

	$filename = "tjdfy_export_" . date("YmdHis",time()) . ".csv"; // filename format "tjdfy_export_YYYYMMDD_HHMMSS.csv"
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
			$submitted_date = date('m/d/Y', strtotime($r->submitted_date));
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
		
		$ids_array[] = $r->id;
	   
	}

	fclose($file_handler); // Clean up file stream
	
	// create string of ids
	$ids_list = "'".implode("','",$ids_array) . "'";
	// update db for exported records
        $exported_datetime = date("Y-m-d H:i:s",time());
	$query = "UPDATE export_data SET exported = 1, exported_datetime = '" . $exported_datetime . "' WHERE id IN (".$ids_list.")";
	$mysqli->query($query);
	print 'Exported data created';
	send_notification($filename);
		
}else{
	print 'no records to export';
	send_notification();
}


function send_notification($filename = ''){
	require 'phpmailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	if($filename != ''){
		$attachment = '/home/admin/public_html/maintenance/' . $filename;
	}
	
	$mail->From = 'admin@jewsforjesus.org';
	$mail->FromName = 'TJDFY Submissions Export';
	$mail->addAddress('michael.butcher@jewsforjesus.org', 'Michael Butcher');  // Add a recipient
	$mail->addCC('don.walker@jewsforjesus.org','Don Walker'); // Add cc recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	$mail->addBCC('milder.lisondra@jewsforjesus.org');
	
	$mail->WordWrap = 50; // Set word wrap to 50 characters
	$mail->addAttachment($attachment);         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	//$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'TJDFY Submissions Export';
	if($filename != ''){
		$mail->Body    = 'The exported data is attached to this email';
		$mail->AltBody = 'The exported data is attached to this email';
	}else{
		$mail->Body    = 'No exported data';
		$mail->AltBody = 'No exported data';
	}
	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}

}