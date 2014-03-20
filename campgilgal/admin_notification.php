<?php $base_url = JURI::base(); ?>
<table width="600px">
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;color:#656667;"><h3>Someone has registered for Camp Gilgal</h3></td>
</tr>
<tr>
<td style="font-weight:bold;color:red;font-family:Helvetica, Arial, sans-serif;font-size:10pt;">Please find below the registration information.</td>
</tr>
<tr>
<td>
<!-- Basic Information - Start -->
<table width="100%">
<tr>
<td colspan="3" bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;color:#656667;"><strong>PARENT OR GUARDIAN INFORMATION</strong></td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>First Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{fname}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Last Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{lname}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{phone}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Email</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{email}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{address_1}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong> &nbsp; </strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{address_2}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{city}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{state_province}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{postal_zip}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{country}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>I am Jewish</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><?php
$heritage = $form->data['chronoform_data']['heritage'];
if($heritage == 'Jewish'){
	echo "Yes";
}else{
	echo "No";
};
?></td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>I Believe in Jesus</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><?php
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
<td bgcolor="#79BAEC" colspan="7" style="font-family:Helvetica, Arial, sans-serif;color:#656667;"><strong>CAMPER INFORMATION</strong></td>
</tr>
<tr>
<td align="left" colspan="7" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Number of registered child(ren):</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Child's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Date of Birth</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Gender</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Camp</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Special Considerations</strong></td>
</tr>
<?php
/* check and loop through all children's records */
$childctr = $form->data['chronoform_data']['child_count'];
for($x = 1;$x <= $childctr; $x++){ 
?>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{child_<?php echo $x; ?>_fname} {child_<?php echo $x; ?>_lname}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{child_<?php echo $x; ?>_dob}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{child_<?php echo $x; ?>_gender}</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{region_label}: 
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
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{child_<?php echo $x; ?>_comment}</td>
</tr>
<?php } ?>
<tr>
<td colspan="7" align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">
    <a href="<?php print $base_url; ?>registration-payment?event=<?php echo $form->data['chronoform_data']['fundid'];?>&ref=<?php echo $form->data['chronoform_data']['cf_uid'];?>">Payment Link</a></td>
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
<td bgcolor="#79BAEC" colspan="3" style="font-family:Helvetica, Arial, sans-serif;color:#656667;"><strong>FAMILY REFERRAL</strong></td>
</tr>
<tr>
<td colspan="3" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><em>A Jewish family who might want to send their child(ren) to Camp Gilgal.</em></td>
</tr>

<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Parent/Guardian's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_name}</td>
</tr>

<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Child's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_child}</td>
</tr>

<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Relationship to Family</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_relationship}</td>
</tr>


<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_address_1}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>&nbsp;</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_address_2}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_city}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_state}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_zip}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_country}</td>
</tr>
<tr>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{refer_phone}</td>
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
<td bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;color:#656667;">&nbsp;&nbsp;<strong>OTHER INFORMATION</strong></td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><em>Comments and questions during the registration.</em>
</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{comment}
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
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;"><p><strong>How did you hear about us?</strong></p>
</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;color:#656667;">{how_did_you}
</td>
</tr>
<?php
};
?>
</table>