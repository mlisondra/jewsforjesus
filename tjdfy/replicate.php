<?php

// Copy records from main Contact Form 7 table to normalized export data

	
	$mysqli = new mysqli("localhost", "root", "", "wordpress");
	
	$sql = "INSERT IGNORE INTO  export_data (submitted_date,first_name, last_name,email,address1,city,state,zip,phone,jewish_belief,jesus_belief,comments,contact_permission) (SELECT
	DATE_FORMAT(FROM_UNIXTIME(submit_time), '%Y-%m-%d %I:%i:%s') AS Submitted,
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
	ORDER BY submit_time DESC)";
	
	
	$result = $mysqli->query($sql);