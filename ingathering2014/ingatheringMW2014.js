window.addEvent('domready', function() {
	
	//early bird discount check
	var discountDate = new Date('08-01-2013'),
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
		$("onsite_adult_double_total").innerHTML = ($("onsite_adult_double").value * 172.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_adult_single").addEvent('change', function(){
		$("onsite_adult_single_total").innerHTML = ($("onsite_adult_single").value * 232.00).toFixed(2);
		computeRegistration();
	});
	
	$("onsite_college").addEvent('change', function(){
		$("onsite_college_total").innerHTML = ($("onsite_college").value * 125.00).toFixed(2);
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
	
	$("partial_adult_one").addEvent('change', function(){
		$("partial_adult_one_total").innerHTML = ($("partial_adult_one").value * 94.00).toFixed(2);
		computeRegistration();
	});
	
	$("partial_college_one").addEvent('change', function(){
		$("partial_college_one_total").innerHTML = ($("partial_college_one").value * 80.00).toFixed(2);
		computeRegistration();
	});
	
	$("partial_teens_one").addEvent('change', function(){
		$("partial_teens_one_total").innerHTML = ($("partial_teens_one").value * 80.00).toFixed(2);
		computeRegistration();
		computeChildCount();
	});
	
	$("partial_children_one").addEvent('change', function(){
		$("partial_children_one_total").innerHTML = ($("partial_children_one").value * 45.00).toFixed(2);
		computeChildCount();
		computeRegistration();
	});
	
	$("partial_adult_two").addEvent('change', function(){
		$("partial_adult_two_total").innerHTML = ($("partial_adult_two").value * 129.00).toFixed(2);
		computeRegistration();
	});
	
	$("partial_college_two").addEvent('change', function(){
		$("partial_college_two_total").innerHTML = ($("partial_college_two").value * 100.00).toFixed(2);
		computeRegistration();
	});
	
	$("partial_teens_two").addEvent('change', function(){
		$("partial_teens_two_total").innerHTML = ($("partial_teens_two").value * 100.00).toFixed(2);
		computeChildCount();
		computeRegistration();
	});
	
	$("partial_children_two").addEvent('change', function(){
		$("partial_children_two_total").innerHTML = ($("partial_children_two").value * 70.00).toFixed(2);
		computeChildCount();
		computeRegistration();
	});
	
	$("additional_gift").addEvent('change', function(){
		computeRegistration();
	});
	
	$("partial_meal_one_0").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_1").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_2").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_3").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_4").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_5").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_6").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_one_7").addEvent('change', function(){
		mealCount(1);
	});
	
	$("partial_meal_two_0").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_1").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_2").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_3").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_4").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_5").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_6").addEvent('change', function(){
		mealCount(2);
	});
	
	$("partial_meal_two_7").addEvent('change', function(){
		mealCount(2);
	});
	
	function mealCount(meal){	
		var mealOneCtr = 0,	
		mealTwoCtr = 0;
		
		if(meal == 1){
			if($("partial_meal_one_0").checked){ mealOneCtr++; };
			if($("partial_meal_one_1").checked){ mealOneCtr++; };
			if($("partial_meal_one_2").checked){ mealOneCtr++; };
			if($("partial_meal_one_3").checked){ mealOneCtr++; };
			if($("partial_meal_one_4").checked){ mealOneCtr++; };
			if($("partial_meal_one_5").checked){ mealOneCtr++; };
			if($("partial_meal_one_6").checked){ mealOneCtr++; };
			if($("partial_meal_one_7").checked){ mealOneCtr++; };
			
			if(mealOneCtr > 4){
				alert("You have selected more than four meals.");
			};
		}else{
			if($("partial_meal_two_0").checked){ mealTwoCtr++; };
			if($("partial_meal_two_1").checked){ mealTwoCtr++; };
			if($("partial_meal_two_2").checked){ mealTwoCtr++; };
			if($("partial_meal_two_3").checked){ mealTwoCtr++; };
			if($("partial_meal_two_4").checked){ mealTwoCtr++; };
			if($("partial_meal_two_5").checked){ mealTwoCtr++; };
			if($("partial_meal_two_6").checked){ mealTwoCtr++; };
			if($("partial_meal_two_7").checked){ mealTwoCtr++; };
			
			if(mealTwoCtr > 6){
				alert("You have selected more than six meals.");
			};
		};
	};
	
	
	
	function computeRegistration(){
		var totalRegistration = 0;
		
		totalRegistration += parseFloat($("onsite_adult_double_total").innerHTML);
		totalRegistration += parseFloat($("onsite_adult_single_total").innerHTML);
		totalRegistration += parseFloat($("onsite_college_total").innerHTML);
		totalRegistration += parseFloat($("onsite_teens_total").innerHTML);
		totalRegistration += parseFloat($("onsite_children_total").innerHTML);
		
		totalRegistration += parseFloat($("partial_adult_one_total").innerHTML);
		totalRegistration += parseFloat($("partial_college_one_total").innerHTML);
		totalRegistration += parseFloat($("partial_teens_one_total").innerHTML);
		totalRegistration += parseFloat($("partial_children_one_total").innerHTML);
		
		totalRegistration += parseFloat($("partial_adult_two_total").innerHTML);
		totalRegistration += parseFloat($("partial_college_two_total").innerHTML);
		totalRegistration += parseFloat($("partial_teens_two_total").innerHTML);
		totalRegistration += parseFloat($("partial_children_two_total").innerHTML);
		
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
			$("onsite_teens_total").innerHTML = (3 * 125.00).toFixed(2);
			$("onsite_children_total").innerHTML = "0.00";
		}else{
			//teen is less than 3, compute for teen and check for children count
			$("onsite_teens_total").innerHTML = ($("onsite_teens").value * 125.00).toFixed(2);
			
			remainingChild -= $("onsite_teens").value;
			if($("onsite_children").value >= remainingChild){
				//children is greater than remaining child, compute only for the remaining child
				$("onsite_children_total").innerHTML = (remainingChild * 115.00).toFixed(2);
			}else{
				$("onsite_children_total").innerHTML = ($("onsite_children").value * 115.00).toFixed(2);
			}
		}
	};
	
	function computeChildCount(){
		//compute for the number of children needed for children info
		var childCount = 0;
		childCount += parseInt($("onsite_teens").value);
		childCount += parseInt($("onsite_children").value);
		childCount += parseInt($("onsite_infant").value);
		childCount += parseInt($("partial_teens_one").value);
		childCount += parseInt($("partial_children_one").value);
		childCount += parseInt($("partial_teens_two").value);
		childCount += parseInt($("partial_children_two").value);
		
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