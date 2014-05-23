window.addEvent('domready', function() {
	
	//early bird discount check
	var discountDate = new Date('08-29-2014'),
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
	$("onsite_adult_deluxe_double").addEvent('change', function(){
		$("onsite_adult_deluxe_double_total").innerHTML = ($("onsite_adult_deluxe_double").value * 305.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_select_double").addEvent('change', function(){
		$("onsite_adult_select_double_total").innerHTML = ($("onsite_adult_select_double").value * 280.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_standard_double").addEvent('change', function(){
		$("onsite_adult_standard_double_total").innerHTML = ($("onsite_adult_standard_double").value * 210.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_economy_double").addEvent('change', function(){
		$("onsite_adult_economy_double_total").innerHTML = ($("onsite_adult_economy_double").value * 175.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_deluxe_single").addEvent('change', function(){
		$("onsite_adult_deluxe_single_total").innerHTML = ($("onsite_adult_deluxe_single").value * 355.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_select_single").addEvent('change', function(){
		$("onsite_adult_select_single_total").innerHTML = ($("onsite_adult_select_single").value * 330.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_college").addEvent('change', function(){
		$("onsite_college_total").innerHTML = ($("onsite_college").value * 160.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_teens").addEvent('change', function(){
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
	
	$("partial_adult").addEvent('change', function(){
		$("partial_adult_total").innerHTML = ($("partial_adult").value * 50.00).toFixed(2);
		computeRegistration();
	});
	
	$("partial_children").addEvent('change', function(){
		computeChildCount();
	});
	
	$("adult_1_dinner").addEvent('change', function(){
		$("adult_1_dinner_total").innerHTML = ($("adult_1_dinner").value * 14.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_1_dinner").addEvent('change', function(){
		$("children_1_dinner_total").innerHTML = ($("children_1_dinner").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_2_breakfast").addEvent('change', function(){
		$("adult_2_breakfast_total").innerHTML = ($("adult_2_breakfast").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_2_lunch").addEvent('change', function(){
		$("adult_2_lunch_total").innerHTML = ($("adult_2_lunch").value * 10.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_2_dinner").addEvent('change', function(){
		$("adult_2_dinner_total").innerHTML = ($("adult_2_dinner").value * 14.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_2_breakfast").addEvent('change', function(){
		$("children_2_breakfast_total").innerHTML = ($("children_2_breakfast").value * 4.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_2_lunch").addEvent('change', function(){
		$("children_2_lunch_total").innerHTML = ($("children_2_lunch").value * 7.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_2_dinner").addEvent('change', function(){
		$("children_2_dinner_total").innerHTML = ($("children_2_dinner").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_3_breakfast").addEvent('change', function(){
		$("adult_3_breakfast_total").innerHTML = ($("adult_3_breakfast").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_3_lunch").addEvent('change', function(){
		$("adult_3_lunch_total").innerHTML = ($("adult_3_lunch").value * 10.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_3_dinner").addEvent('change', function(){
		$("adult_3_dinner_total").innerHTML = ($("adult_3_dinner").value * 14.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_3_breakfast").addEvent('change', function(){
		$("children_3_breakfast_total").innerHTML = ($("children_3_breakfast").value * 4.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_3_lunch").addEvent('change', function(){
		$("children_3_lunch_total").innerHTML = ($("children_3_lunch").value * 7.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_3_dinner").addEvent('change', function(){
		$("children_3_dinner_total").innerHTML = ($("children_3_dinner").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_4_breakfast").addEvent('change', function(){
		$("adult_4_breakfast_total").innerHTML = ($("adult_4_breakfast").value * 8.00).toFixed(2);
		computeRegistration();
	});
	
	$("adult_4_lunch").addEvent('change', function(){
		$("adult_4_lunch_total").innerHTML = ($("adult_4_lunch").value * 10.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_4_breakfast").addEvent('change', function(){
		$("children_4_breakfast_total").innerHTML = ($("children_4_breakfast").value * 4.00).toFixed(2);
		computeRegistration();
	});
	
	$("children_4_lunch").addEvent('change', function(){
		$("children_4_lunch_total").innerHTML = ($("children_4_lunch").value * 7.00).toFixed(2);
		computeRegistration();
	});
	
	$("additional_gift").addEvent('change', function(){
		computeRegistration();
	});
	
		function computeRegistration(){
		var totalRegistration = 0;
		
		totalRegistration += parseFloat($("onsite_adult_deluxe_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_select_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_standard_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_economy_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_deluxe_single_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_select_single_total").innerHTML);
		totalRegistration += parseFloat($("onsite_college_total").innerHTML);
		totalRegistration += parseFloat($("onsite_teens_total").innerHTML);
		totalRegistration += parseFloat($("onsite_children_total").innerHTML);
		
		totalRegistration += parseFloat($("partial_adult_total").innerHTML);
		
		totalRegistration += parseFloat($("adult_1_dinner_total").innerHTML);
		totalRegistration += parseFloat($("children_1_dinner_total").innerHTML);
		
		totalRegistration += parseFloat($("adult_2_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("adult_2_lunch_total").innerHTML);
		totalRegistration += parseFloat($("adult_2_dinner_total").innerHTML);
		totalRegistration += parseFloat($("children_2_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("children_2_lunch_total").innerHTML);
		totalRegistration += parseFloat($("children_2_dinner_total").innerHTML);
		
		totalRegistration += parseFloat($("adult_3_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("adult_3_lunch_total").innerHTML);
		totalRegistration += parseFloat($("adult_3_dinner_total").innerHTML);
		totalRegistration += parseFloat($("children_3_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("children_3_lunch_total").innerHTML);
		totalRegistration += parseFloat($("children_3_dinner_total").innerHTML);
		
		totalRegistration += parseFloat($("adult_4_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("adult_4_lunch_total").innerHTML);
		totalRegistration += parseFloat($("children_4_breakfast_total").innerHTML);
		totalRegistration += parseFloat($("children_4_lunch_total").innerHTML);
		
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
		adultCount += parseInt($("onsite_adult_deluxe_double").value);
		adultCount += parseInt($("onsite_adult_select_double").value);
		adultCount += parseInt($("onsite_adult_standard_double").value);
		adultCount += parseInt($("onsite_adult_economy_double").value);
		adultCount += parseInt($("onsite_adult_deluxe_single").value);
		adultCount += parseInt($("onsite_adult_select_single").value);
		
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
			$("onsite_children_total").innerHTML = "0.00";
		}else{
			//teen is less than 3, compute for teen and check for children count
			$("onsite_teens_total").innerHTML = ($("onsite_teens").value * 150.00).toFixed(2);
			
			remainingChild -= $("onsite_teens").value;
			if($("onsite_children").value >= remainingChild){
				//children is greater than remaining child, compute only for the remaining child
				$("onsite_children_total").innerHTML = (remainingChild * 120.00).toFixed(2);
			}else{
				$("onsite_children_total").innerHTML = ($("onsite_children").value * 120.00).toFixed(2);
			}
		}
	};
	
	function computeChildCount(){
		//compute for the number of children needed for children info
		var childCount = 0;
		childCount += parseInt($("onsite_teens").value);
		childCount += parseInt($("onsite_children").value);
		childCount += parseInt($("onsite_infant").value);
		childCount += parseInt($("partial_children").value);
		
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