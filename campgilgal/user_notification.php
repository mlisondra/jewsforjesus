<?php
$base_url = JURI::base();
?>
<table width="100%" style="width:100%;">
	<tr>
		<td style="font-family:Helvetica, Arial, sans-serif;"><h3>Thank you for registering for Camp Gilgal</h3></td>
	</tr>
<tr>
<td style="font-weight:bold;color:red;font-family:Helvetica, Arial, sans-serif;font-size:10pt;">Please note that the Payment Options section of this email contains a link to simplify future payments.</td>
</tr>
<tr>
<td>
<!-- Basic Information - Start -->
<table width="100%" style="font-family:Helvetica, Arial, sans-serif;">
<tr>
<td colspan="3" bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;"><strong>BASIC INFORMATION</strong></td>
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
<!-- Children Information - Start -->
<?php
/* check and loop through all children's records */
$childctr = $form->data['chronoform_data']['child_count'];

if($childctr > 0){
?>
<table width="100%">
<tr>
<td bgcolor="#79BAEC" colspan="7" style="font-family:Helvetica, Arial, sans-serif;"><strong>CAMPER INFORMATION</strong></td>
</tr>
<tr>
<td colspan="7" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><p><strong>Note: </strong>To complete your  registration, <strong>please include a deposit $50 per camper for summer camp</strong> and <strong>$25 per camper 
for winter camp</strong>, unless other arrangements have been made. Your  deposit will be credited as a partial payment of your camp fees.</p>
</td>
</tr>
<tr>
<td align="left" colspan="7" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Number of registered child(ren)</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Child's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Date of Birth</strong></td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Gender</strong></td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">&nbsp;&nbsp;&nbsp;</td>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Camp</strong></td>
</tr>
<?php
for($x=1;$x<=$childctr;$x++)
{?>
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
		//print $form->data['chronoform_data'][$key];
		$camp_label = str_replace("(Midwest)","",$form->data['chronoform_data'][$key]);
		$camp_label = str_replace("(West)","",$camp_label);
		$camp_label = str_replace("(East)","",$camp_label);
		$camp_label = str_replace("WWW Northern California","WWW North",$camp_label);
		$camp_label = str_replace("WWW Southern California","WWW South",$camp_label);
		$camp_label = str_replace("Wonderful Winter Weekend","WWW",$camp_label);
		$camp_label = str_replace(" ,",",",$camp_label);
		/*
		switch($form->data['chronoform_data'][$key]){
			case "Junior Camp (Midwest)":
			case "Junior Camp (West)":
			case "Junior Camp (East)":
				$camp_label = "Junior Camp";
				break;
			case "Teen Camp (Midwest)":
			case "Teen Camp (West)":
			case "Teen Camp (East)":
				$camp_label = "Teen Camp";
				break;
			case "Adventure Camp (Midwest)":
			case "Adventure Camp (West)":
			case "Adventure Camp (East)":
				$camp_label = "Adventure Camp";
				break;
			case "Wonderful Winter Weekend (Midwest)":
			case "Wonderful Winter Weekend (East)":
				$camp_label = "WWW";
				break;
			case "WWW Northern California (West)":
				$camp_label = "WWW North";
				break;
			case "WWW Southern California (West)":
				$camp_label = "WWW South";
				break;					
		}
		*/
		print $camp_label;
	?>
</td>
</tr>
<?php
};
?>
<tr>
<td colspan="7" align="center" style="font-family:Helvetica, Arial, sans-serif;font-weight: bold; color: #ff0000;font-size:10pt;"><span>Total Deposit:</span>&nbsp;$ {total_reg_fee}</td>
</tr>
</table>
<?php 
};
?>
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
<td bgcolor="#79BAEC" colspan="3" style="font-family:Helvetica, Arial, sans-serif;">&nbsp;&nbsp;<strong>SEND US A NAME</strong></td>
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
<td bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;"><strong>OTHER INFORMATION</strong></td>
</tr>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;"><em>You have added the following comments and questions during the registration:</em>
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
<tr>
<td bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;"><strong>PAYMENT OPTIONS</strong></td>
</tr>
<tr>
<td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><p>The next step is to make a deposit of ${total_reg_fee}, if you have not already.</p>
	<ul>
		<li>
			<a href="<?php print $base_url; ?>registration-payment?event=<?php echo $form->data['chronoform_data']['fundid'];?>&ref=<?php echo $form->data['chronoform_data']['cf_uid'];?>"><strong>Click here to pay online</strong></a>
			By clicking this link you will be directed to your current Camp Gilgal registration. Most information will already be filled out for you.
			</p>
		</li>
		<li>
		  <p><strong>Write a check.</strong> Make it payable to Jews for Jesus and in the memo section write, &rdquo;Camp Gilgal payment.&rdquo; Mail it to: Jews  for Jesus, 60 Haight Street, San Francisco, CA 94102-5895. </p>
		</li>
		<li>
			<p><strong>Call LouAnn Gonzalez</strong> at (415) 864-2600 at extension 1119 to make a credit card payment by phone.</p>
		</li>
	</ul>
	<p>Any questions? Call <strong>Kathy &quot;Cricket&quot; Nichols</strong> at (415) 864-2600, ext. 1153 or via email kathy.nichols@jewsforjesus.org.</p>
	<p>Please be sure to see our other resources on our website and connect with us on <a href="https://www.facebook.com/jewsforjesus">Facebook</a>, <a href="http://www.youtube.com/jewsforjesus">YouTube</a>, and <a href="https://twitter.com/JewsforJesus">Twitter!</a></p>
</td>
</tr>
<tr>
<td align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">
<br />
<p><img src="http://www.jewsforjesus.org/images/logo/jews-for-jesus-logo300.png" width="300" height="45" border="0" /></p>
<p style="font-family: Helvetica, Arial; font-size: 13px;line-height:1.2em;margin:1em 0;">&copy; Copyright <a href="http://www.jewsforjesus.org">Jews for Jesus</a> All Rights Reserved | <a href="http://www.jewsforjesus.org/what-we-do/privacy">Privacy Policy</a><br />
       60 Haight Street, San Francisco, CA 94102 | Phone 415-864-2600</p></td>
</tr>
</table>