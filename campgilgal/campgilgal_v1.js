window.addEvent('domready', function() {

/* Initialize Children Information visibility */
$("camp1").setStyle('display','none');
$("camp2").setStyle('display','none');
$("camp3").setStyle('display','none');
$("camp4").setStyle('display','none');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');

/* Add event change on Child Count drop down box to show/hide Children Information */
$("child_count").addEvent('change', function(){
var childCount = $("child_count").value;
switch(childCount){
case "1":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','none');
$("camp3").setStyle('display','none');
$("camp4").setStyle('display','none');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "2":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','none');
$("camp4").setStyle('display','none');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "3":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','none');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "4":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "5":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "6":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','block');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "7":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','block');
$("camp7").setStyle('display','block');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "8":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','block');
$("camp7").setStyle('display','block');
$("camp8").setStyle('display','block');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;

case "9":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','block');
$("camp7").setStyle('display','block');
$("camp8").setStyle('display','block');
$("camp9").setStyle('display','block');
$("camp10").setStyle('display','none');
break;

case "10":
$("camp1").setStyle('display','block');
$("camp2").setStyle('display','block');
$("camp3").setStyle('display','block');
$("camp4").setStyle('display','block');
$("camp5").setStyle('display','block');
$("camp6").setStyle('display','block');
$("camp7").setStyle('display','block');
$("camp8").setStyle('display','block');
$("camp9").setStyle('display','block');
$("camp10").setStyle('display','block');
break;

default:
$("camp1").setStyle('display','none');
$("camp2").setStyle('display','none');
$("camp3").setStyle('display','none');
$("camp4").setStyle('display','none');
$("camp5").setStyle('display','none');
$("camp6").setStyle('display','none');
$("camp7").setStyle('display','none');
$("camp8").setStyle('display','none');
$("camp9").setStyle('display','none');
$("camp10").setStyle('display','none');
break;																					
};
});
/* End of Child Count change event */

var totalFee = 0.00;

function changeFee(){
	$("total_reg_fee").value = totalFee.toFixed(2);
	$("total_reg_fee_label").innerHTML = totalFee.toFixed(2);
}

/* calculate fee */
$("child_1_camp_0").addEvent('change', function(){
if ($("child_1_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_1_camp_1").addEvent('change', function(){
if ($("child_1_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_1_camp_2").addEvent('change', function(){
if ($("child_1_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_1_camp_3").addEvent('change', function(){
if ($("child_1_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_1_camp_4").addEvent('change', function(){
if ($("child_1_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_1_camp_5").addEvent('change', function(){
if ($("child_1_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_1_camp_6").addEvent('change', function(){
if ($("child_1_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_1_camp_7").addEvent('change', function(){
if ($("child_1_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_1_camp_8").addEvent('change', function(){
if ($("child_1_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_1_camp_9").addEvent('change', function(){
if ($("child_1_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_1_camp_10").addEvent('change', function(){
if ($("child_1_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_1_camp_11").addEvent('change', function(){
if ($("child_1_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_1_camp_12").addEvent('change', function(){
if ($("child_1_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_2_camp_0").addEvent('change', function(){
if ($("child_2_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_2_camp_1").addEvent('change', function(){
if ($("child_2_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_2_camp_2").addEvent('change', function(){
if ($("child_2_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_2_camp_3").addEvent('change', function(){
if ($("child_2_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_2_camp_4").addEvent('change', function(){
if ($("child_2_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_2_camp_5").addEvent('change', function(){
if ($("child_2_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_2_camp_6").addEvent('change', function(){
if ($("child_2_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_2_camp_7").addEvent('change', function(){
if ($("child_2_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_2_camp_8").addEvent('change', function(){
if ($("child_2_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_2_camp_9").addEvent('change', function(){
if ($("child_2_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_2_camp_10").addEvent('change', function(){
if ($("child_2_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_2_camp_11").addEvent('change', function(){
if ($("child_2_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_2_camp_12").addEvent('change', function(){
if ($("child_2_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_3_camp_0").addEvent('change', function(){
if ($("child_3_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_3_camp_1").addEvent('change', function(){
if ($("child_3_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_3_camp_2").addEvent('change', function(){
if ($("child_3_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_3_camp_3").addEvent('change', function(){
if ($("child_3_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_3_camp_4").addEvent('change', function(){
if ($("child_3_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_3_camp_5").addEvent('change', function(){
if ($("child_3_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_3_camp_6").addEvent('change', function(){
if ($("child_3_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_3_camp_7").addEvent('change', function(){
if ($("child_3_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_3_camp_8").addEvent('change', function(){
if ($("child_3_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_3_camp_9").addEvent('change', function(){
if ($("child_3_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_3_camp_10").addEvent('change', function(){
if ($("child_3_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_3_camp_11").addEvent('change', function(){
if ($("child_3_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_3_camp_12").addEvent('change', function(){
if ($("child_3_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_4_camp_0").addEvent('change', function(){
if ($("child_4_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_4_camp_1").addEvent('change', function(){
if ($("child_4_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_4_camp_2").addEvent('change', function(){
if ($("child_4_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_4_camp_3").addEvent('change', function(){
if ($("child_4_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_4_camp_4").addEvent('change', function(){
if ($("child_4_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_4_camp_5").addEvent('change', function(){
if ($("child_4_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_4_camp_6").addEvent('change', function(){
if ($("child_4_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_4_camp_7").addEvent('change', function(){
if ($("child_4_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_4_camp_8").addEvent('change', function(){
if ($("child_4_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_4_camp_9").addEvent('change', function(){
if ($("child_4_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_4_camp_10").addEvent('change', function(){
if ($("child_4_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;

};

changeFee();			
});

$("child_4_camp_11").addEvent('change', function(){
if ($("child_4_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_4_camp_12").addEvent('change', function(){
if ($("child_4_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_5_camp_0").addEvent('change', function(){
if ($("child_5_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_5_camp_1").addEvent('change', function(){
if ($("child_5_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_5_camp_2").addEvent('change', function(){
if ($("child_5_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_5_camp_3").addEvent('change', function(){
if ($("child_5_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_5_camp_4").addEvent('change', function(){
if ($("child_5_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_5_camp_5").addEvent('change', function(){
if ($("child_5_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_5_camp_6").addEvent('change', function(){
if ($("child_5_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_5_camp_7").addEvent('change', function(){
if ($("child_5_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_5_camp_8").addEvent('change', function(){
if ($("child_5_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_5_camp_9").addEvent('change', function(){
if ($("child_5_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_5_camp_10").addEvent('change', function(){
if ($("child_5_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_5_camp_11").addEvent('change', function(){
if ($("child_5_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_5_camp_12").addEvent('change', function(){
if ($("child_5_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_6_camp_0").addEvent('change', function(){
if ($("child_6_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_6_camp_1").addEvent('change', function(){
if ($("child_6_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_6_camp_2").addEvent('change', function(){
if ($("child_6_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_6_camp_3").addEvent('change', function(){
if ($("child_6_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_6_camp_4").addEvent('change', function(){
if ($("child_6_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_6_camp_5").addEvent('change', function(){
if ($("child_6_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_6_camp_6").addEvent('change', function(){
if ($("child_6_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_6_camp_7").addEvent('change', function(){
if ($("child_6_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_6_camp_8").addEvent('change', function(){
if ($("child_6_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_6_camp_9").addEvent('change', function(){
if ($("child_6_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_6_camp_10").addEvent('change', function(){
if ($("child_6_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_6_camp_11").addEvent('change', function(){
if ($("child_6_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_6_camp_12").addEvent('change', function(){
if ($("child_6_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_7_camp_0").addEvent('change', function(){
if ($("child_7_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_7_camp_1").addEvent('change', function(){
if ($("child_7_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_7_camp_2").addEvent('change', function(){
if ($("child_7_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_7_camp_3").addEvent('change', function(){
if ($("child_7_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_7_camp_4").addEvent('change', function(){
if ($("child_7_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_7_camp_5").addEvent('change', function(){
if ($("child_7_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_7_camp_6").addEvent('change', function(){
if ($("child_7_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_7_camp_7").addEvent('change', function(){
if ($("child_7_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_7_camp_8").addEvent('change', function(){
if ($("child_7_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_7_camp_9").addEvent('change', function(){
if ($("child_7_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_7_camp_10").addEvent('change', function(){
if ($("child_7_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_7_camp_11").addEvent('change', function(){
if ($("child_7_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_7_camp_12").addEvent('change', function(){
if ($("child_7_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_8_camp_0").addEvent('change', function(){
if ($("child_8_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_8_camp_1").addEvent('change', function(){
if ($("child_8_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_8_camp_2").addEvent('change', function(){
if ($("child_8_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_8_camp_3").addEvent('change', function(){
if ($("child_8_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_8_camp_4").addEvent('change', function(){
if ($("child_8_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_8_camp_5").addEvent('change', function(){
if ($("child_8_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_8_camp_6").addEvent('change', function(){
if ($("child_8_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_8_camp_7").addEvent('change', function(){
if ($("child_8_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_8_camp_8").addEvent('change', function(){
if ($("child_8_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_8_camp_9").addEvent('change', function(){
if ($("child_8_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_8_camp_10").addEvent('change', function(){
if ($("child_8_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_8_camp_11").addEvent('change', function(){
if ($("child_8_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_8_camp_12").addEvent('change', function(){
if ($("child_8_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_9_camp_0").addEvent('change', function(){
if ($("child_9_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_9_camp_1").addEvent('change', function(){
if ($("child_9_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_9_camp_2").addEvent('change', function(){
if ($("child_9_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_9_camp_3").addEvent('change', function(){
if ($("child_9_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_9_camp_4").addEvent('change', function(){
if ($("child_9_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_9_camp_5").addEvent('change', function(){
if ($("child_9_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_9_camp_6").addEvent('change', function(){
if ($("child_9_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_9_camp_7").addEvent('change', function(){
if ($("child_9_camp_7").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_9_camp_8").addEvent('change', function(){
if ($("child_9_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_9_camp_9").addEvent('change', function(){
if ($("child_9_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_9_camp_10").addEvent('change', function(){
if ($("child_9_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_9_camp_11").addEvent('change', function(){
if ($("child_9_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_9_camp_12").addEvent('change', function(){
if ($("child_9_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});


$("child_10_camp_0").addEvent('change', function(){
if ($("child_10_camp_0").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};	

changeFee();
});

$("child_10_camp_1").addEvent('change', function(){
if ($("child_10_camp_1").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_10_camp_2").addEvent('change', function(){
if ($("child_10_camp_2").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_10_camp_3").addEvent('change', function(){
if ($("child_10_camp_3").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_10_camp_4").addEvent('change', function(){
if ($("child_10_camp_4").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_10_camp_5").addEvent('change', function(){
if ($("child_10_camp_5").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_10_camp_6").addEvent('change', function(){
if ($("child_10_camp_6").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_10_camp_7").addEvent('change', function(){
if ($("child_10_camp_7").checked){
totalFee = totalFee + 50;
}else{

totalFee = totalFee - 50;
};

changeFee();			
});

$("child_10_camp_8").addEvent('change', function(){
if ($("child_10_camp_8").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_10_camp_9").addEvent('change', function(){
if ($("child_10_camp_9").checked){
totalFee = totalFee + 25;
}else{
totalFee = totalFee - 25;
};

changeFee();			
});

$("child_10_camp_10").addEvent('change', function(){
if ($("child_10_camp_10").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};

changeFee();			
});

$("child_10_camp_11").addEvent('change', function(){
if ($("child_10_camp_11").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

$("child_10_camp_12").addEvent('change', function(){
if ($("child_10_camp_12").checked){
totalFee = totalFee + 50;
}else{
totalFee = totalFee - 50;
};	

changeFee();		
});

});