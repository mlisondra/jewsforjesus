window.addEvent('domready', function() {
	
	//early bird discount check
	var discountDate = new Date('08-01-2014'),
	currentDate = new Date(),
	discountEnable = false;
	
	if(currentDate <= discountDate){
		$("earlybird_discount_label").setStyle('display','block');
		discountEnable = true;
	}else{
		$("earlybird_discount_label").setStyle('display','none');
		discountEnable = false;
	};
	
	//init child info view
	$("child_1_info").setStyle('display','none');
	$("child_2_info").setStyle('display','none');
	$("child_3_info").setStyle('display','none');
	$("child_4_info").setStyle('display','none');
	$("child_5_info").setStyle('display','none');
	$("child_6_info").setStyle('display','none');
	$("child_7_info").setStyle('display','none');
	$("child_8_info").setStyle('display','none');
	$("child_9_info").setStyle('display','none');
	$("child_10_info").setStyle('display','none');
	
	//compute for each option
	$("onsite_adult_double").addEvent('change', function(){
		$("onsite_adult_double_total").innerHTML = ($("onsite_adult_double").value * 230.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_single").addEvent('change', function(){
		$("onsite_adult_single_total").innerHTML = ($("onsite_adult_single").value * 275.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_college").addEvent('change', function(){
		$("onsite_college_total").innerHTML = ($("onsite_college").value * 150.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_teens").addEvent('change', function(){
		computeChildren();
		computeChildCount();
		computeRegistration();
	});
	
	$("onsite_children_2").addEvent('change', function(){
		computeChildren();
		computeChildCount();
		computeRegistration();
	});
	
	$("onsite_children").addEvent('change', function(){
		computeChildren();
		computeChildCount();
		computeRegistration();
	});
	
	$("onsite_infant").addEvent('change', function(){
		computeChildCount();
	});
	
	$("transportation").addEvent('change', function(){
		$("transportation_total").innerHTML = ($("transportation").value * 30.00).toFixed(2);
		computeRegistration();
	});
	
        // Lunch for ages 13 and up
	$("lunch").addEvent('change', function(){
		$("lunch_total").innerHTML = ($("lunch").value * 12.50).toFixed(2);
		computeRegistration();
	});
        
        // Lunch for ages 3 - 12
	$("lunch2").addEvent('change', function(){
		$("lunch2_total").innerHTML = ($("lunch2").value * 8.50).toFixed(2);
		computeRegistration();
	});        
	
	$("additional_gift").addEvent('change', function(){
		computeRegistration();
	});
	
	function computeRegistration(){
		var totalRegistration = 0;
		
		totalRegistration += parseFloat($("onsite_adult_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_single_total").innerHTML);
		totalRegistration += parseFloat($("onsite_college_total").innerHTML);
		totalRegistration += parseFloat($("onsite_teens_total").innerHTML);
		totalRegistration += parseFloat($("onsite_children_total").innerHTML);
		totalRegistration += parseFloat($("onsite_children_2_total").innerHTML);
		
		totalRegistration += parseFloat($("transportation_total").innerHTML);
		totalRegistration += parseFloat($("lunch_total").innerHTML);
                
                totalRegistration += parseFloat($("lunch2_total").innerHTML); // Lunch for ages 3 - 12
		
		$("registration_fees_label").innerHTML = (totalRegistration).toFixed(2);
		$("total_reg_fee").value = (totalRegistration).toFixed(2);
		
		//compute for grand total (total registration + additional gift)
		var grandTotal = 0;
		grandTotal += totalRegistration;
		if($("additional_gift").value > 0){
			grandTotal += parseFloat($("additional_gift").value);
		}
		
		$("total_reg_fee_label").innerHTML = (grandTotal).toFixed(2);
		$("grand_total").value = (grandTotal).toFixed(2);
		
		computeDeposit();
	};
	
	function computeDeposit(){
		var adultCount = 0;
		adultCount = (parseInt($("onsite_adult_double").value) + parseInt($("onsite_adult_single").value));
		$("deposit_total").value = (adultCount * 50.00).toFixed(2);
		$("deposit_total_label").innerHTML =  $("deposit_total").value;
		$("deposit_total_label_2").innerHTML =  $("deposit_total").value;
		
		computeDiscount(adultCount);
	};
	
	function computeDiscount(adultCount){
		if(discountEnable = true){
			var discount =  (parseInt(adultCount)) * 10;
			$("discounted_fees_label").innerHTML = (parseFloat($("registration_fees_label").innerHTML) - discount).toFixed(2);
			
			$("discount_amount").value = (discount).toFixed(2);
		};
	};
	
	function computeChildren(){
		var remainingChild = 3;
		
		if($("onsite_teens").value >= remainingChild){
			//compute only for 3 teens
			$("onsite_teens_total").innerHTML = (3 * 150.00).toFixed(2);
			$("onsite_children_2_total").innerHTML = "0.00";
			$("onsite_children_total").innerHTML = "0.00";
		}else{
			//teen is less than 3, compute for teen and check for children count
			$("onsite_teens_total").innerHTML = ($("onsite_teens").value * 150.00).toFixed(2);
			
			remainingChild -= $("onsite_teens").value;
			if($("onsite_children_2").value >= remainingChild){
				//children 2 is greater than remaining child, compute only for the remaining child
				$("onsite_children_2_total").innerHTML = (remainingChild * 75.00).toFixed(2);
				$("onsite_children_total").innerHTML = "0.00";
			}else{
				//children 2 is less than remaining child, compute for children 2 and check for children
				$("onsite_children_2_total").innerHTML = ($("onsite_children_2").value * 75.00).toFixed(2);
				
				remainingChild -= $("onsite_children_2").value;
				if($("onsite_children").value >= remainingChild){
					//children is greater than remaining child, compute for remaining child
					$("onsite_children_total").innerHTML = (remainingChild * 40.00).toFixed(2);
				}else{
					//compute for children
					$("onsite_children_total").innerHTML = ($("onsite_children").value * 40.00).toFixed(2);
				}
			}
		}
	};
	
	function computeChildCount(){
		//compute for the number of children needed for children info
		var childCount = 0;
		childCount += parseInt($("onsite_teens").value);
		childCount += parseInt($("onsite_children_2").value);
		childCount += parseInt($("onsite_children").value);
		childCount += parseInt($("onsite_infant").value);
		
		//display child info based on child count
		switch(childCount)
		{
			case 1:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','none');
				$("child_3_info").setStyle('display','none');
				$("child_4_info").setStyle('display','none');
				$("child_5_info").setStyle('display','none');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 2:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','none');
				$("child_4_info").setStyle('display','none');
				$("child_5_info").setStyle('display','none');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 3:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','none');
				$("child_5_info").setStyle('display','none');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 4:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','none');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 5:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 6:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','block');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 7:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','block');
				$("child_7_info").setStyle('display','block');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 8:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','block');
				$("child_7_info").setStyle('display','block');
				$("child_8_info").setStyle('display','block');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
			case 9:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','block');
				$("child_7_info").setStyle('display','block');
				$("child_8_info").setStyle('display','block');
				$("child_9_info").setStyle('display','block');
				$("child_10_info").setStyle('display','none');
				break;
			case 10:
				$("child_1_info").setStyle('display','block');
				$("child_2_info").setStyle('display','block');
				$("child_3_info").setStyle('display','block');
				$("child_4_info").setStyle('display','block');
				$("child_5_info").setStyle('display','block');
				$("child_6_info").setStyle('display','block');
				$("child_7_info").setStyle('display','block');
				$("child_8_info").setStyle('display','block');
				$("child_9_info").setStyle('display','block');
				$("child_10_info").setStyle('display','block');
				break;
			default:
				$("child_1_info").setStyle('display','none');
				$("child_2_info").setStyle('display','none');
				$("child_3_info").setStyle('display','none');
				$("child_4_info").setStyle('display','none');
				$("child_5_info").setStyle('display','none');
				$("child_6_info").setStyle('display','none');
				$("child_7_info").setStyle('display','none');
				$("child_8_info").setStyle('display','none');
				$("child_9_info").setStyle('display','none');
				$("child_10_info").setStyle('display','none');
				break;
		}
	};
	
});