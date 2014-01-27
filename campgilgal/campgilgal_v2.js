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
			
			 var my_array = new Array(1);
			 toggle_required(my_array);

			 // get the selected region
			 // get the input boxes associated and make them required
			 console.log(document.getElementById('select_region').value);
				  switch(document.getElementById('select_region').value){
					case "West":
					  region_camps = "west_camps";
					  break;
					case "East":
					  region_camps = "east_camps";
					  break;
					case "Midwest":	
					  region_camps = "midwest_camps";
					  break;			  
				 }			
			 var camp = document.getElementById("camp1");
			 var camp_region = camp.getElementsByClassName(region_camps);
			 console.log(camp_region[0].getElementsByTagName('input'));
			 camp_checkboxes = camp_region[0].getElementsByTagName('input');
			 var req = "validate['required']";
			 for(i = 0; i < camp_checkboxes.length; i++){
				camp_checkboxes[i].addClass(req);
				formCheck_CampGilgalRegistration_v2.register(camp_checkboxes[i]);	
			 }
			 console.log(camp_checkboxes.length);

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
			
			 var my_array = new Array(1,2);
			 toggle_required(my_array);
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
			 var my_array = new Array(1,2,3);
			 toggle_required(my_array);	
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
			var my_array = new Array(1,2,3,4);
			 toggle_required(my_array);
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
			 var my_array = new Array(1,2,3,4,5);
			 toggle_required(my_array);			
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
			 var my_array = new Array(1,2,3,4,5,6);
			 toggle_required(my_array);				
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
		 var my_array = new Array(1,2,3,4,5,6,7);
			 toggle_required(my_array);			
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
		 var my_array = new Array(1,2,3,4,5,6,7,8);
			 toggle_required(my_array);			
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
		 var my_array = new Array(1,2,3,4,5,6,7,8,9);
			 toggle_required(my_array);				
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
		 var my_array = new Array(1,2,3,4,5,6,7,8,9,10);
			 toggle_required(my_array);				
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
	
	$("child_1_camp_0").addEvent('change', function(){ alert('change fee');
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


	$("select_region").addEvent('change',function(){
		var selected_region = $('select_region').value;
		var region_camps = "";
		  switch(selected_region){
			case "West":
			  region_camps = "west_camps";
			  toggle_regions_off("east_camps");
			  toggle_regions_off("midwest_camps");
			  break;
			case "East":
			  region_camps = "east_camps";
			  toggle_regions_off("west_camps");
			  toggle_regions_off("midwest_camps");
			  break;
			case "Midwest":
			  toggle_regions_off("west_camps");
			  toggle_regions_off("east_camps");			
			  region_camps = "midwest_camps";
			  break;			  
		 }
			var region_camps = document.getElementsByClassName(region_camps);
			for (var i=0; i < region_camps.length; i+=1){
			  region_camps[i].style.display = 'block';
			}

		$('child_count_container_div').setStyle('display','block');

	});
		/**
		* Hides the given region
		* Also it goes through the associated checkboxes and removes the checked attribute
		*/
		function toggle_regions_off(region){

			var region_camps = document.getElementsByClassName(region);
			for (var i=0; i < region_camps.length; i++){
			  region_camps[i].style.display = 'none';
			  
				var camps_checkboxes = region_camps[i].getElementsByTagName('input');
				for(j = 0; j < camps_checkboxes.length; j++){
					camps_checkboxes[j].removeAttribute("checked");
					camps_checkboxes[j].checked = false;
					console.log("Item unchecked: " + camps_checkboxes[j].value);
				}
				
			}
		}
	

	function makeRequired(elem_id){
		var req = "validate['required']";
		var elem = document.getElementById(elem_id);
		elem.addClass(req);
		formCheck_CampGilgalRegistration_v2.register(elem);		
	}
	
	
}); // End doc ready; onload



	 function toggle_required(elements_array){

			// Get selected region
		  switch(document.getElementById('select_region').value){
			case "West":
			  region_camps = "west_camps";
			  break;
			case "East":
			  region_camps = "east_camps";
			  break;
			case "Midwest":	
			  region_camps = "midwest_camps";
			  break;			  
		 }
				 
		var all_elements = new Array(1,2,3,4,5,6,7,8,9,10);	
		if(elements_array.length == 1){
			var found_index = all_elements.indexOf(1);
			all_elements.splice(found_index, 1); // Remove from all elements array
			var elem_id = "child_1_name";
			makeRequired(elem_id);
			var elem_id = "child_1_dob";
			makeRequired(elem_id);
			
			var camp = document.getElementById("camp1"); // Get the specific camper
			var camp_region = camp.getElementsByClassName(region_camps); // Get all camp regions under current camp
			camp_checkboxes = camp_region[0].getElementsByTagName('input'); // Get all input elements under camp region
			make_input_required(camp_checkboxes); // Pass array of input elements to local function

		}else if(elements_array.length > 1){
			// Take the given elements array, elements_array, and make them required
			// Then remove each element item from all_elements
			 for (var i=0; i<elements_array.length; i++){	
				var current = elements_array[i];
				var elem_id = "child_" + current + "_name";
				makeRequired(elem_id);
				var elem_id = "child_" + current + "_dob";
				makeRequired(elem_id);				
				
				var temp = i + 1;
				var current_camper = "camp" + temp;
				var camp = document.getElementById(current_camper); // Get the specific camper
				var camp_region = camp.getElementsByClassName(region_camps); // Get all camp regions under current camp
				//console.log(camp_region);
				var camp_checkboxes = camp_region[0].getElementsByTagName('input'); // Get all input elements under camp region
				//console.log(camp_checkboxes);
				make_input_required(camp_checkboxes); // Pass array of input elements to local function
			
				var found_index = all_elements.indexOf(current);
				if (found_index > -1) {
					all_elements.splice(found_index, 1); // Remove from all elements array
				}			
			 }
			 
		}
		
		// Make remaining elements in array optional
		for (var i=0; i<all_elements.length; i++){	
			var current = all_elements[i];
			var elem_id = "child_" + current + "_name";
			makeOptional(elem_id);
			var elem_id = "child_" + current + "_dob";
			makeOptional(elem_id);		
			
				var temp = i + 1;
				var current_camper = "camp" + current;
				var camp = document.getElementById(current_camper); // Get the specific camper
				var camp_region = camp.getElementsByClassName(region_camps); // Get all camp regions under current camp
				console.log("camp region object");
				console.log(camp_region);
				var camp_checkboxes = camp_region[0].getElementsByTagName('input'); // Get all input elements under camp region
				console.log(camp_checkboxes);
				make_input_optional(camp_checkboxes); // Pass array of input elements to local function			

		}
	 }

	 /**
	 * Take given array of input elements and add validate required class to it
	 */
	function make_input_required(checkboxes){
		var req = "validate['required']";
		for(i = 0; i < checkboxes.length; i++){
			checkboxes[i].addClass(req);
			console.log(checkboxes[i].name);
			formCheck_CampGilgalRegistration_v2.register(checkboxes[i]);	
		 }
	}

	 /**
	 * Take given array of input elements and remove validation class
	 */
	function make_input_optional(checkboxes){
		for(i = 0; i < checkboxes.length; i++){
			checkboxes[i].setProperty('class', '');
			formCheck_CampGilgalRegistration_v2.removeError(checkboxes[i]);
			formCheck_CampGilgalRegistration_v2.dispose(checkboxes[i]);
		}
	}	
	
	function makeRequired(elem_id){ 
		var req = "validate['required']";
		var elem = document.getElementById(elem_id);
		elem.addClass(req);
		formCheck_CampGilgalRegistration_v2.register(elem);	
	}
	
	function makeOptional(elem_id){
		var elem = document.getElementById(elem_id);
		elem.setProperty('class', '');
		formCheck_CampGilgalRegistration_v2.removeError(elem);
		formCheck_CampGilgalRegistration_v2.dispose(elem);
	}