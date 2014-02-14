<?php
$base_url = JURI::base();
?>
<table width="720px">
	<tr>
		<td><h2>Camp Gilgal Registration Confirmation</h2></td>
	</tr>
	<tr>
		<td><h3>Thank you for registering for Camp Gilgal</h3></td>
	</tr>
<tr>
<td>Please find below your registration information.</td>
</tr>
<tr>
<td>
<!-- Basic Information - Start -->
<table width="100%">
<tr>
<td colspan="3" bgcolor="#79BAEC">&nbsp;&nbsp;<strong>BASIC INFORMATION</strong></td>
</tr>
<tr>
<td align="left"><strong>First Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{fname}</td>
</tr>
<tr>
<td align="left"><strong>Last Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{lname}</td>
</tr>
<tr>
<td align="left"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{phone}</td>
</tr>
<tr>
<td align="left"><strong>Email</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{email}</td>
</tr>
<tr>
<td align="left"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{address_1}</td>
</tr>
<tr>
<td align="left"><strong> &nbsp; </strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{address_2}</td>
</tr>
<tr>
<td align="left"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{city}</td>
</tr>
<tr>
<td align="left" ><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{state_province}</td>
</tr>
<tr>
<td align="left" ><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{postal_zip}</td>
</tr>
<tr>
<td align="left"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{country}</td>
</tr>
<tr>
<td align="left"><strong>I am Jewish</strong></td>
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
<td align="left"><strong>I Believe in Jesus</strong></td>
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
<!-- Children Information - Start -->
<?php
/* check and loop through all children's records */
$childctr = $form->data['chronoform_data']['child_count'];

if($childctr > 0){
?>
<table width="100%">
<tr>
<td bgcolor="#79BAEC" colspan="7">&nbsp;&nbsp;<strong>CAMPER INFORMATION</strong></td>
</tr>
<tr>
<td colspan="7"><p><strong>Note: </strong>To complete your  registration, <strong>please include a deposit $50 per camper for summer camp</strong> and <strong>$25 per camper 
for winter camp</strong>, unless other arrangements have been made. Your  deposit will be credited as a partial payment of your camp fees.</p>
</td>
</tr>
<tr>
<td align="left" colspan="7"><strong>Number of registered child(ren)</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
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
<?php
for($x=1;$x<=$childctr;$x++)
{?>
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
<?php
};
?>
<tr>
<td colspan="7" align="center"><span style="font-weight: bold; color: #ff0000;">Total Registration Fees:</span>&nbsp;$ {total_reg_fee}</td>
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
<td bgcolor="#79BAEC" colspan="3">&nbsp;&nbsp;<strong>SEND US A NAME</strong></td>
</tr>
<tr>
<td colspan="3"><em>A Jewish family who might want to send their child(ren) to Camp Gilgal.</em></td>
</tr>
<tr>
<td align="left"><strong>Family's Name</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_name}</td>
</tr>
<tr>
<td align="left"><strong>Address</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_address_1}</td>
</tr>
<tr>
<td align="left"><strong>&nbsp;</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{refer_address_2}</td>
</tr>
<tr>
<td align="left"><strong>City</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{refer_city}</td>
</tr>
<tr>
<td align="left"><strong>State/Province</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{refer_state}</td>
</tr>
<tr>
<td align="left"><strong>Postal/Zip Code</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{refer_zip}</td>
</tr>
<tr>
<td align="left"><strong>Country</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left" >{refer_country}</td>
</tr>
<tr>
<td align="left"><strong>Phone</strong></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td align="left">{refer_phone}</td>
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
<td><em>You have added the following comments and questions during the registration:</em>
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
<tr>
<td bgcolor="#79BAEC">&nbsp;&nbsp;<strong>PAYMENT OPTIONS</strong></td>
</tr>
<tr>
<td><p>The next step is to make a deposit of ${total_reg_fee}. You can do this by:</p>
	<ul>
		<li>
			<a href="<?php print $base_url; ?>registration-payment?event=<?php echo $form->data['chronoform_data']['fundid'];?>&ref=<?php echo $form->data['chronoform_data']['cf_uid'];?>"><strong>Click here to pay online</strong></a></p>
			<p>By clicking  this link you will be directed to the donation  section of the Jews for Jesus website. You can make  a payment for Camp Gilgal or donate to this ministry there. 
			Most information  will already be filled out for you. What we need from you is:</p>
			<p>You can also include a donation along with your payment by  clicking the blue Add Another Gift button. Simply select Project, choose Camp 
			Gilgal from the drop down menu, and enter the amount you would like to give.  All gifts to Camp Gilgal are tax-deductible.</p>
		</li>
		<li>
		  <p><strong>Writing a check.</strong>Make it payable to Jews  for Jesus and in the memo section write, &rdquo;Camp Gilgal payment.&rdquo; Mail it to: Jews  for Jesus, 60 Haight Street, San Francisco, CA 94102-5895. </p>
		</li>
		<li>
			<p><strong>Call LouAnn Gonzalez</strong> at (415) 864-2600 at extension 119 to make a credit card payment by phone.</p>
		</li>
	</ul>
	<p>Any questions? Call <strong>Kathy &quot;Cricket&quot; Nichols</strong> at (415) 864-2600, ext. 1153.</p>
	<p>Please be sure to see our other resources on our website and connect with us on <a href="https://www.facebook.com/jewsforjesus">Facebook</a>, <a href="http://www.youtube.com/jewsforjesus">YouTube</a>, and <a href="https://twitter.com/JewsforJesus">Twitter!</a></p>
</td>
</tr>
<tr>
<td align="center">
<br />
<p><img src="http://www.jewsforjesus.org/images/logo/jews-for-jesus-logo300.png" width="300" height="45" border="0" /></p>
<p style="font-family: Helvetica, Arial; font-size: 13px;line-height:1.2em;margin:1em 0;">&copy; Copyright <a href="http://www.jewsforjesus.org">Jews for Jesus</a> All Rights Reserved | <a href="http://www.jewsforjesus.org/what-we-do/privacy">Privacy Policy</a><br />
       60 Haight Street, San Francisco, CA 94102 | Phone 415-864-2600</p></td>
</tr>
</table>