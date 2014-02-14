<table width="600px">
<tr>
<td><h2>Camp Gilgal Registration Notification</h2></td>
</tr>
<tr>
<td><h3>A user has registered for Camp Gilgal</h3></td>
</tr>
<tr>
<td>Please find below the registration information.</td>
</tr>
<tr>
<td>
<!-- Basic Information - Start -->
<table width="100%">
<tr>
<td colspan="3" bgcolor="#79BAEC">&nbsp;&nbsp;<strong>BASIC INFORMATION</strong></td>
</tr>
<tr>
<td align="left" ><strong>User's IP Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{IPADDRESS}</td>
</tr>
<tr>
<td align="left" ><strong>First Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{fname}</td>
</tr>
<tr>
<td align="left" ><strong>Last Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{lname}</td>
</tr>
<tr>
<td align="left"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{phone}</td>
</tr>
<tr>
<td align="left" ><strong>Email</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{email}</td>
</tr>
<tr>
<td align="left" ><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{address_1}</td>
</tr>
<tr>
<td align="left" ><strong> &nbsp; </strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{address_2}</td>
</tr>
<tr>
<td align="left" ><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{city}</td>
</tr>
<tr>
<td align="left" ><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{state_province}</td>
</tr>
<tr>
<td align="left" ><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{postal_zip}</td>
</tr>
<tr>
<td align="left" ><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{country}</td>
</tr>
<tr>
<td align="left" ><strong>I am Jewish</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" ><?php
$heritage = $form->data['chronoform_data']['heritage'];
if($heritage == 'Jewish'){
	echo "Yes";
}else{
	echo "No";
};
?></td>
</tr>
<tr>
<td align="left" ><strong>I Believe in Jesus</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left"><?php
$belief = $form->data['chronoform_data']['belief'];
if($belief == 'Believe in Jesus' || $belief == 'Do believe in Jesus'){
	echo "Yes";
}else{
	echo "No";
};
?></td>
</tr>
</table>
<!-- Basic Information - End -->
</td>
</tr>
<tr>
<td>
<!-- Camper Information - Start -->
<table width="100%">
<tr>
<td bgcolor="#79BAEC" colspan="7">&nbsp;&nbsp;<strong>CAMPER INFORMATION</strong></td>
</tr>
<tr>
<td align="left" colspan="7"><strong>Number of registered child(ren):</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
</tr>
<tr>
<td><strong>Child's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td><strong>Date of Birth</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td><strong>Gender</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td><strong>Camp</strong></td>
</tr>
<tr>
<td>{child_1_name}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>{child_1_dob}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>{child_1_gender}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>

<?php
	if(input_checkbox_group1 != ''){
		print $form->data['chronoform_data']['input_checkbox_group1'];
	}
	if(input_checkbox_group2 != ''){
		print $form->data['chronoform_data']['input_checkbox_group2'];
	}
	if(input_checkbox_group3 != ''){
		print $form->data['chronoform_data']['input_checkbox_group3'];
	}
?>	
</td>
</tr>
<?php
/* check and loop through all children's records */
$childctr = $form->data['chronoform_data']['child_count'];
for($x = 2;$x <= $childctr; $x++){ 
?>
<tr>
<td>{child_<?php echo $x; ?>_name}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>{child_<?php echo $x; ?>_dob}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>{child_<?php echo $x; ?>_gender}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>
	<?php
		$key = "child_" . $x . "_camps";
		print $form->data['chronoform_data'][$key];
	?>
</td>
</tr>
<?php } ?>
<!--<tr>
<td colspan="7" align="center"><span style="font-weight: bold; color: #ff0000;">Total Registration Fees:</span>&nbsp;$ {total_reg_fee}</td>
</tr>-->
</table>
<!-- Children Information - End -->
</td>
</tr>
<!-- Friend Information - Start -->
<?php
$friendName = $form->data['chronoform_data']['refer_name'];

if($friendName)
{ ?>
<tr>
<td>
<table width="100%">
<tr>
<td bgcolor="#79BAEC" colspan="3">&nbsp;&nbsp;<strong>SEND US A NAME</strong></td>
</tr>
<tr>
<td colspan="3"><em>A Jewish family who might want to send their child(ren) to Camp Gilgal.</em></td>
</tr>
<tr>
<td align="left" ><strong>Family's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_name}</td>
</tr>
<tr>
<td align="left" ><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_address_1}</td>
</tr>
<tr>
<td align="left" ><strong>&nbsp;</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_address_2}</td>
</tr>
<tr>
<td align="left" ><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_city}</td>
</tr>
<tr>
<td align="left" ><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_state}</td>
</tr>
<tr>
<td align="left" ><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_zip}</td>
</tr>
<tr>
<td align="left" ><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_country}</td>
</tr>
<tr>
<td align="left" ><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_phone}</td>
</tr>
</table>
</td>
</tr>
<?php
};
?>
<!-- Friend Information - End -->
<!-- Comments - Start -->
<?php
$comments = $form->data['chronoform_data']['comments'];

if($comments)
{ ?>
<tr>
<td bgcolor="#79BAEC">&nbsp;&nbsp;<strong>OTHER INFORMATION</strong></td>
</tr>
<tr>
<td><em>Comments and questions during the registration.</em>
</td>
</tr>
<tr>
<td>{comments}
</td>
</tr>
<?php
};
?>
<!-- Comments - End -->
<?php
$howDid = $form->data['chronoform_data']['how_did_you'];

if($howDid)
{ ?>
<tr>
<td><p><strong>How did you hear about us?</strong></p>
</td>
</tr>
<tr>
<td>{how_did_you}
</td>
</tr>
<?php
};
?>
</table>