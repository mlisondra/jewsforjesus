<?php
$event = strtolower($_GET['event']);
$uid = $_GET['ref'];

//initialize variables
$tablename = '';
$discountEnd = strtotime(date('Y-m-d'));
$today = strtotime(date('Y-m-d'));
$subtittle = '';
$paymenturl = 'https://store.jewsforjesus.org/index.php/event_payment/?event_type='.$event.'&uid='.$uid;
$discountActive = false;

switch ($event){
	case 'inwest':
		$tablename = "#__chronoforms_data_ingregwc";
		$discountEnd = strtotime('2013-08-30');
		$subtittle = 'West Coast Ingathering';
		break;
	case 'inmidw':
		$tablename = "#__chronoforms_data_ingregmw";
		$discountEnd = strtotime('2013-08-01');
		$subtittle = 'Midwest Ingathering';
		break;
	case 'ineast':
		$tablename = "#__chronoforms_data_ingregec";
		$discountEnd = strtotime('2013-08-01');
		$subtittle = 'East Coast Ingathering';
		break;
	case "campgilgal":
	case "cawest":
	case "caeast":
	case "camidw":
		$tablename = "#__chronoforms_data_campgilgalregistration";
		$subtittle = 'Camp Gilgal';
		break;			
	default:
		$tablename = "#__chronoforms_data_campgilgalregistration";
		$subtittle = 'Camp Gilgal';
		break;	
}

$sql = "SELECT * FROM ".$tablename." WHERE cf_uid = '".$uid."'";
$database = JFactory::getDBO();
$database->setQuery($sql, 0, 1);
$registrationDetails = $database->loadAssoc();

if($event == 'evgilgal' || $event == "campgilgal" || $event == "cawest" || $event == "caeast" || $event == "camidw"){
	$balance = $registrationDetails[total_reg_fee] - $registrationDetails[CurrentPayment];
}else{
	$balance = $registrationDetails[grand_total] - $registrationDetails[CurrentPayment];
}

//check if discount period still active
if($today <= $discountEnd && $event != 'evgilgal'){
	$discountActive = true;
}

?>

<script type="text/javascript">
<!--
function getParameterByName(name)
	{
	  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
	  var regexS = "[\\?&]" + name + "=([^&#]*)";
	  var regex = new RegExp(regexS);
	  var results = regex.exec(window.location.search);
	  if(results == null)
		return "";
	  else
		return decodeURIComponent(results[1].replace(/\+/g, " "));
	};
	
var eventID = getParameterByName("event");
var recordID = getParameterByName("ref");
var eventPayment = "";
var totalPayment = 0;

function takePayment(){
	if($("payment_amount").value == "" || $("payment_amount").value <= 0){
		alert("Please specify the amount");
	}else{
		totalPayment = parseInt($("partialPayment").value) + parseInt($("payment_amount").value);
		eventPayment = "https://store.jewsforjesus.org/index.php/event_payment/?event_type=" + eventID + "&uid=" + recordID + "&amount=" + totalPayment.toString();
		window.location = eventPayment;
	}
}


function isNumberKey(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;
	}else{
        return true;
    }
}

function pay_deposit(){
	console.log($("pay_deposit_button").getProperty("rel"));
	window.location = $("pay_deposit_button").getProperty("rel");
	
}

	//-->
</script>

<h2><?php echo $subtittle.' Registration Summary';?></h2>
<table border="0" cellpadding="5" cellspacing="0">
    <tr>
    	<td><strong>First Name:</strong></td>
        <td><?php echo $registrationDetails[fname];?></td>
    </tr>
    <tr>
    	<td><strong>Last Name:</strong></td>
        <td><?php echo $registrationDetails[lname];?></td>
    </tr>
    <tr>
    	<td><strong>Email:</strong></td>
        <td><?php echo $registrationDetails[email];?></td>
    </tr>
    <tr>
    	<td><strong>Phone:</strong></td>
        <td><?php echo $registrationDetails[phone];?></td>
    </tr>
    <tr>
    	<td><strong>Address:</strong></td>
        <td><?php echo $registrationDetails[address_1];?></td>
    </tr>
    <?php if($registrationDetails[address_2] != ''){?>
    <tr>
    	<td><strong>Address Line 2:</strong></td>
        <td><?php echo $registrationDetails[address_2];?></td>
    </tr>
	<?php }?>
    <tr>
    	<td><strong>City:</strong></td>
        <td><?php echo $registrationDetails[city];?></td>
    </tr>
    <tr>
    	<td><strong>State/Province:</strong></td>
        <td><?php echo $registrationDetails[state_province];?></td>
    </tr>
    <tr>
    	<td><strong>Postal/Zip:</strong></td>
        <td><?php echo $registrationDetails[postal_zip];?></td>
    </tr>
    <tr>
    	<td><strong>Country:</strong></td>
        <td><?php echo $registrationDetails[country];?></td>
    </tr>
    <tr>
    	<td><strong>I am Jewish:</strong></td>
        <td><?php 

			if($registrationDetails[heritage] == 'Jewish'){
				echo 'Yes';
			}else{
				echo 'No';
			}?></td>
    </tr>
    <tr>
    	<td><strong>I believe in Jesus:</strong></td>
        <td><?php 
			if($registrationDetails[belief] == 'Do believe in Jesus' || $registrationDetails[belief] == 'Believe in Jesus'){
				echo 'Yes';
			}else{
				echo 'No';
			}?></td>
    </tr>
    <tr>
    	<td><strong>Total Deposit:</strong></td>
        <td>$<?php echo number_format($registrationDetails[total_reg_fee],2,'.', '');?></td>
    </tr>
    <?php if($event != 'evgilgal'){?>
    <tr>
    	<td><strong>Total Camp Fees:</strong></td>
        <td>$<?php echo number_format($registrationDetails[additional_gift],2,'.', '');?></td>
    </tr>	
    <tr>
    	<td><strong>Additional Gift:</strong></td>
        <td>$<?php echo number_format($registrationDetails[additional_gift],2,'.', '');?></td>
    </tr>
    <?php }?>
    <?php if($registrationDetails[CurrentPayment] > 0){?>
    <tr>
    	<td><strong>Partial Payment:</strong></td>
        <td>$<?php echo number_format($registrationDetails[CurrentPayment],2,'.', '');?></td>
    </tr>
    <tr>
    	<td><strong>Remaining Balance:</strong></td>
        <td>$<?php echo number_format($balance,2,'.', '');?></td>
    </tr>
    <?php }?>
</table>
<input type="hidden" value="<?php echo $registrationDetails[CurrentPayment];?>" id="partialPayment" />
<h2>Payment Options</h2>
<?php
if($event == 'evgilgal'){ ?>
<p>The next step is to make a deposit of $<?php echo number_format($registrationDetails[total_reg_fee],2,'.', '');?>. You can do this by:</p>
<ul>
	<li><a href="<?php echo $paymenturl;?>&amount=<?php echo $registrationDetails[total_reg_fee];?>"><strong>Paying online</strong></a></li>
    <li><strong>Writing a check. Make it payable to Jews for Jesus</strong> and in the memo section write, "Camp Gilgal payment." 
	Mail it to: Jews for Jesus, 60 Haight Street, San Francisco, CA 94102-5895.</li>
    <li>Any questions? Call Cricket – Kathy Nichols at (415) 864-2600, ext. 1153.</li>
</ul>	
<?php }else{ ?>
<p>If you have not made arrangements for payment, you may pay online by selecting an option below.</p>
<ul>
	<li><strong>Option 1:</strong> <a href="<?php echo $paymenturl;?>&amount=<?php echo $registrationDetails[total_reg_fee];?>">Pay Deposit and Additional Gift amount 
	of $<?php echo number_format($registrationDetails[total_reg_fee],2,'.', '');?></a> <input id="pay_deposit_button" type="button" onclick="pay_deposit(this)" value="Pay Deposit" style="margin-left: 20px;" rel="<?php echo $paymenturl;?>&amount=<?php echo $registrationDetails[total_reg_fee];?>" /></li>
    <li><strong>Option 2:</strong> Pay the amount of $&nbsp;<input id="payment_amount" size="6" value="" type="text" onkeypress="return isNumberKey(event)" />&nbsp;
	<input id="make_payment" type="button" value="Pay Other Amount" onclick="takePayment()" /></li>
</ul>
<?php }?>