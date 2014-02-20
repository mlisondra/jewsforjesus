<table width="600px">
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;"><h3>A user has registered for Camp Gilgal</h3></td>
</tr>
<tr>
<td style="font-weight:bold;color:red;font-family:Helvetica, Arial, sans-serif;font-size:10pt;">Please find below the registration information.</td>
</tr>
<tr>
<td>
<!-- Basic Information - Start -->
<table width="100%">
<tr>
<td colspan="3" bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;"><strong>BASIC INFORMATION</strong></td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>User's IP Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{IPADDRESS}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>First Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{fname}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Last Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{lname}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{phone}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Email</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{email}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{address_1}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong> &nbsp; </strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{address_2}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{city}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{state_province}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{postal_zip}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{country}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>I am Jewish</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><?php
$heritage = $form->data['chronoform_data']['heritage'];
if($heritage == 'Jewish'){
	echo "Yes";
}else{
	echo "No";
};
?></td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>I Believe in Jesus</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><?php
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
<td bgcolor="#79BAEC" colspan="7" style="font-family:Helvetica, Arial, sans-serif;"><strong>CAMPER INFORMATION</strong></td>
</tr>
<tr>
<td align="left" colspan="7" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Number of registered child(ren):</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Child's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Date of Birth</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Gender</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Camp</strong></td>
</tr>
<?php
/* check and loop through all children's records */
$childctr = $form->data['chronoform_data']['child_count'];
for($x = 1;$x <= $childctr; $x++){ 
?>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{child_<?php echo $x; ?>_name}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{child_<?php echo $x; ?>_dob}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{child_<?php echo $x; ?>_gender}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{region_label}: 
	<?php
		$key = "child_" . $x . "_camps";
		$camp_label = str_replace("(Midwest)","",$form->data['chronoform_data'][$key]);
		$camp_label = str_replace("(West)","",$camp_label);
		$camp_label = str_replace("(East)","",$camp_label);
		$camp_label = str_replace("WWW Northern California","WWW North",$camp_label);
		$camp_label = str_replace("WWW Southern California","WWW South",$camp_label);
		$camp_label = str_replace("Wonderful Winter Weekend","WWW",$camp_label);
		$camp_label = str_replace(" ,",",",$camp_label);
		
		print $camp_label;
	?>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="7" align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><a href="https://store.jewsforjesus.org/index.php/event_payment/?event_type={event_type}&uid={registration_id}&amount={total_reg_fee}" target="_blank">Payment Link</a></td>
</tr>
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
<td bgcolor="#79BAEC" colspan="3" style="font-family:Helvetica, Arial, sans-serif;"><strong>SEND US A NAME</strong></td>
</tr>
<tr>
<td colspan="3" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><em>A Jewish family who might want to send their child(ren) to Camp Gilgal.</em></td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Family's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_name}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_address_1}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>&nbsp;</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_address_2}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_city}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_state}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_zip}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_country}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_phone}</td>
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
<td bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;">&nbsp;&nbsp;<strong>OTHER INFORMATION</strong></td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><em>Comments and questions during the registration.</em>
</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{comments}
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
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><p><strong>How did you hear about us?</strong></p>
</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{how_did_you}
</td>
</tr>
<?php
};
?>
</table>