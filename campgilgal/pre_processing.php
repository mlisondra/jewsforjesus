<?php
$form->data['full_name']  = $form->data['fname'].' '.$form->data['lname'];

// check the region selected and place the appropriate admin email for the outbound notification
switch($form->data['chronoform_data']['select_region']){
	case "West":
		$form->data['admin_email']  = 'campgilgalwest@jewsforjesus.org';
		$form->data['region_label'] = "Camp Gilgal West";
		break;
	case "Midwest":
		$form->data['admin_email']  = 'campgilgalmidwest@jewsforjesus.org';
		$form->data['region_label'] = "Camp Gilgal Midwest";
		break;
	case "East":
		$form->data['admin_email']  = 'campgilgaleast@jewsforjesus.org';
		$form->data['region_label'] = "Camp Gilgal East";
		break;
}
// temporary override; use during debugging
$form->data['admin_email']  = 'mlisondra@lisondraconsulting.com';

// Get the number of campers selected
$num_child = $form->data['chronoform_data']['child_count'];

// for each camper extract which camps have been selected
for($x = 1;$x <= $num_child; $x++){
	switch($x){
		case "1":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group1 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group1'];
			}
			if(input_checkbox_group2 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group2'];
			}
			if(input_checkbox_group3 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group3'];
			}
			break;	
		case "2":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group4 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group4'];
			}
			if(input_checkbox_group5 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group5'];
			}
			if(input_checkbox_group6 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group6'];
			}
			break;
		case "3":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group7 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group7'];
			}
			if(input_checkbox_group8 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group8'];
			}
			if(input_checkbox_group9 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group9'];
			}
			break;
		case "4":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group10 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group10'];
			}
			if(input_checkbox_group11 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group11'];
			}
			if(input_checkbox_group12 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group12'];
			}
			break;
		case "5":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group13 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group13'];
			}
			if(input_checkbox_group14 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group14'];
			}
			if(input_checkbox_group15 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group15'];
			}
			break;

		case "6":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group16 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group16'];
			}
			if(input_checkbox_group17 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group17'];
			}
			if(input_checkbox_group18 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group18'];
			}
			break;
		case "7":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group19 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group19'];
			}
			if(input_checkbox_group20 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group20'];
			}
			if(input_checkbox_group21 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group21'];
			}
			break;
		case "8":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group22 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group22'];
			}
			if(input_checkbox_group23 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group23'];
			}
			if(input_checkbox_group24 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group24'];
			}
			break;
		case "9":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group25 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group25'];
			}
			if(input_checkbox_group26 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group26'];
			}
			if(input_checkbox_group27 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group27'];
			}
			break;
		case "10":
			$key = "child_" . $x . "_camps";
			if(input_checkbox_group28 != ''){
				$form->data['chronoform_data'][$key] = $form->data['chronoform_data']['input_checkbox_group28'];
			}
			if(input_checkbox_group29 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group29'];
			}
			if(input_checkbox_group30 != ''){
				$form->data['chronoform_data'][$key] .= $form->data['chronoform_data']['input_checkbox_group30'];
			}
			break;			
	}
			
}
$form->data['registration_id'] = $form->data['chronoform_data']['cf_uid'];

$form->data['event_type'] = $form->data['chronoform_data']['fundid'];

?>