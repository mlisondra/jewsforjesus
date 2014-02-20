window.addEvent('domready', function() {
	
	/* Initialize Children/Camper Information visibility */
	for(i = 1; i <= 10; i++){
		camp = "camp" + i;
		$(camp).setStyle('display','none');
        $(camp).setStyle('clear','both'); 
	}	


	/* Add event change on Child Count drop down box to show/hide Camper Section Information */
	$("child_count").addEvent('change', function(){
		var childCount = $("child_count").value;
		toggle_camp_section(childCount);
	});
	
	/* End of Child Count change event */
	
	var totalFee = 0.00;
	
	/* calculate fee */
	function changeFee(){
		$("total_reg_fee").value = totalFee.toFixed(2);
		$("total_reg_fee_label").innerHTML = totalFee.toFixed(2);
	}
		
	// Array to hold all elements that have a price of $25
	var fees_25 = new Array("child_1_camp_0","child_1_camp_4","child_1_camp_8","child_1_camp_9","child_2_camp_0","child_2_camp_8","child_2_camp_9","child_3_camp_0","child_3_camp_4","child_3_camp_8","child_3_camp_9","child_4_camp_0","child_4_camp_4","child_4_camp_8","child_4_camp_9","child_5_camp_0","child_5_camp_4","child_5_camp_8","child_5_camp_9","child_6_camp_0","child_6_camp_4","child_6_camp_8","child_6_camp_9","child_7_camp_0","child_7_camp_4","child_7_camp_8","child_7_camp_9","child_8_camp_0","child_8_camp_4","child_8_camp_8","child_8_camp_9","child_9_camp_0","child_9_camp_4","child_9_camp_8","child_9_camp_9","child_10_camp_0","child_10_camp_4","child_10_camp_8","child_10_camp_9");

	// Array to hold all elements that have a price of $50
	var fees_50 = new Array("child_1_camp_1","child_1_camp_2","child_1_camp_3","child_1_camp_5","child_1_camp_6","child_1_camp_7","child_1_camp_10","child_1_camp_11","child_1_camp_12","child_2_camp_1","child_2_camp_2","child_2_camp_3","child_2_camp_4","child_2_camp_5","child_2_camp_6","child_2_camp_7","child_2_camp_10","child_2_camp_11","child_2_camp_12","child_3_camp_1","child_3_camp_2","child_3_camp_3","child_3_camp_5","child_3_camp_6","child_3_camp_7","child_3_camp_10","child_3_camp_11","child_3_camp_12","child_4_camp_1","child_4_camp_2","child_4_camp_3","child_4_camp_5","child_4_camp_6","child_4_camp_7","child_4_camp_10","child_4_camp_11","child_4_camp_12","child_5_camp_1","child_5_camp_2","child_5_camp_3","child_5_camp_5","child_5_camp_6","child_5_camp_7","child_5_camp_10","child_5_camp_11","child_5_camp_12","child_6_camp_1","child_6_camp_2","child_6_camp_3","child_6_camp_5","child_6_camp_6","child_6_camp_7","child_6_camp_10","child_6_camp_11","child_6_camp_12","child_7_camp_1","child_7_camp_2","child_7_camp_3","child_7_camp_5","child_7_camp_6","child_7_camp_7","child_7_camp_10","child_7_camp_11","child_7_camp_12","child_8_camp_1","child_8_camp_2","child_8_camp_3","child_8_camp_5","child_8_camp_6","child_8_camp_7","child_8_camp_10","child_8_camp_11","child_8_camp_12","child_9_camp_1","child_9_camp_2","child_9_camp_3","child_9_camp_5","child_9_camp_6","child_9_camp_7","child_9_camp_10","child_9_camp_11","child_9_camp_12","child_10_camp_1","child_10_camp_2","child_10_camp_3","child_10_camp_5","child_10_camp_6","child_10_camp_7","child_10_camp_10","child_10_camp_11","child_10_camp_12");

	// Binding for individual camps (checkboxes)
	$$('input[type=checkbox]').addEvent('change', function(){
		camper_id = this.getParent().getParent().getParent().getProperty('id');
		camp_title = this.value;
		camper_id = camper_id.substring(4,camper_id.length);
		selected_list = "";
		
		if(this.checked){
		
			if(fees_25.indexOf(this.id) > -1 ){
				totalFee = totalFee + 25;
			}else if(fees_50.indexOf(this.id) > -1 ){
				totalFee = totalFee + 50;
			}
		
		/*
				// add camp fee
				switch(this.value){
					case "Junior Camp (Midwest)":
					case "Junior Camp (West)":
					case "Junior Camp (East)":
						totalFee = totalFee + 650;
						break;
					case "Teen Camp (Midwest)":
					case "Teen Camp (West)":
					case "Teen Camp (East)":
						totalFee = totalFee + 325;
						break;
					case "Adventure Camp (Midwest)":
					case "Adventure Camp (West)":
					case "Adventure Camp (East)":
						totalFee = totalFee + 325;
						break;
					case "Wonderful Winter Weekend (Midwest)":
					case "Wonderful Winter Weekend (East)":
					case "WWW Northern California (West)":
					case "WWW Southern California (West)":
						totalFee = totalFee + 95;
						break;
				}
				*/
		}else{
			
			if(fees_25.indexOf(this.id) > -1 ){
				totalFee = totalFee - 25;
			}else if(fees_50.indexOf(this.id) > -1 ){
				totalFee = totalFee - 50;
			}
			/*
				// subtract camp fee
				switch(this.value){
					case "Junior Camp (Midwest)":
					case "Junior Camp (West)":
					case "Junior Camp (East)":
						totalFee = totalFee - 650;
						break;
					case "Teen Camp (Midwest)":
					case "Teen Camp (West)":
					case "Teen Camp (East)":
						totalFee = totalFee - 325;
						break;
					case "Adventure Camp (Midwest)":
					case "Adventure Camp (West)":
					case "Adventure Camp (East)":
						totalFee = totalFee - 325;
						break;
					case "Wonderful Winter Weekend (Midwest)":
					case "Wonderful Winter Weekend (East)":
					case "WWW Northern California (West)":
					case "WWW Southern California (West)":
						totalFee = totalFee - 95;
						break;
				}	
			*/				
		}	
			// get all sibling checkboxes
			checkboxes_group = this.getParent().getElementsByTagName('input');
				for(j = 0; j < checkboxes_group.length; j++){
					if(checkboxes_group[j].checked){
						selected_list = selected_list + ',' + checkboxes_group[j].value;
						$('child_' + camper_id + '_camp').value = selected_list.substring(1,selected_list.length);
					}
				}
		changeFee();

	});

	// Binding for region selection/drop down
	$("select_region").addEvent('change',function(){
		var selected_region = $('select_region').value; // Set global selected_region variable
		
		var region_camps = "";
		  switch(selected_region){
			case "West":
			  region_camps = "west_camps";
			  toggle_regions_off("east_camps");
			  toggle_regions_off("midwest_camps");
			  $("fundid").value = "CAWEST";
			  break;
			case "East":
			  region_camps = "east_camps";
			  toggle_regions_off("west_camps");
			  toggle_regions_off("midwest_camps");
			  $("fundid").value = "CAEAST";
			  break;
			case "Midwest":
			  toggle_regions_off("west_camps");
			  toggle_regions_off("east_camps");			
			  region_camps = "midwest_camps";
			  $("fundid").value = "CAMIDW";
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
			for (var i = 0; i < region_camps.length; i++){
			  region_camps[i].style.display = 'none';
			  
				var camps_checkboxes = region_camps[i].getElementsByTagName('input');
				for(j = 0; j < camps_checkboxes.length; j++){
					camps_checkboxes[j].removeAttribute("checked");
					camps_checkboxes[j].checked = false; // uncheck all checkboxes
				}
				make_input_optional(camps_checkboxes); // make all checkboxes optional
			}
			
			totalFee = 0.00; // Since all the checkboxes associated with region being turned off, the total fee to be paid should be reset to 0 (zero)
			changeFee();

		}
		
	// Add number validation for Additional Gift field	
	add_validation_gift();
	
	// Binding for additional gift field; on blur
	$('additional_gift_input').addEvent('blur',function(){
		// if user enters zero or wipes out what was entered set hidden input to zero 
		// must also adjust total accodingly
		if(this.value == "" || Number(this.value) == 0){
			current_gift = $('additional_gift').value; // get current donation amount
			$('additional_gift').value = 0; // set hidden input to zero
			totalFee = totalFee - Number(current_gift); // remove the previously given donation amount from total fee
			changeFee();
		}else{
			current_gift = $('additional_gift').value; // get current donation
			totalFee = totalFee - Number(current_gift); // subtract the previously entered donation amount from total fee	
			changeFee();
			
			$('additional_gift').value = Number(this.value); // set hidden input to new value
			totalFee = totalFee + Number(this.value); // add new donation amount to total fee
			changeFee();
		}	
		
	});
					
}); // End doc ready; onload


	 function toggle_required(elements_array){

		// Get selected region
		region_camps = get_selected_region();
		
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
				var camp_checkboxes = camp_region[0].getElementsByTagName('input'); // Get all input elements under camp region
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
			formCheck_CampGilgalRegistration_v4.register(checkboxes[i]);	
		 }
	}

	 /**
	 * Take given array of input elements and remove validation class
	 */
	function make_input_optional(checkboxes){
		for(i = 0; i < checkboxes.length; i++){
			checkboxes[i].setProperty('class', '');
			formCheck_CampGilgalRegistration_v4.removeError(checkboxes[i]);
			formCheck_CampGilgalRegistration_v4.dispose(checkboxes[i]);
		}
	}	
	
	function makeRequired(elem_id){ 
		var req = "validate['required']";
		var elem = document.getElementById(elem_id);
		elem.addClass(req);
		formCheck_CampGilgalRegistration_v4.register(elem);	
	}
	
	function makeOptional(elem_id){
		var elem = document.getElementById(elem_id);
		elem.setProperty('class', '');
		formCheck_CampGilgalRegistration_v4.removeError(elem);
		formCheck_CampGilgalRegistration_v4.dispose(elem);
		elem.value = ""; // clear text field
	}
	
	// Input is an integer - essentially the number of children user is registering for
	// take input and iterate that many times and set display for corresponding camper section to display "block" (show)
	// with each iteration remove from local array that index
	// iterate through remaining elements and set corresponding camper section to display "none" (hide)
	function toggle_camp_section(camp_count){
		var all_elements = new Array(1,2,3,4,5,6,7,8,9,10);	
		selected_region = get_selected_region();
		// show camper section
		for(i = 1; i <= camp_count; i++){
			campid = "camp" + i;
			camper_section = document.getElementById(campid);
			camper_section.style.display = "block";
			camp_region = camper_section.getElementsByClassName(selected_region);
			camp_region_checkboxes = camp_region[0].getElementsByTagName('input');
				// Take care of textboxes to make them required
				var elem_id = "child_" + i + "_name";
				makeRequired(elem_id);
				var elem_id = "child_" + i + "_dob";
				makeRequired(elem_id);

				// TODO make the associated checkboxes required
				for(j = 0; j <= camp_region_checkboxes.length - 1; j++){
					// SAMPLE: input_checkbox_group3[]
					group_name = camp_region_checkboxes[j].name;
					group_name1 = group_name.substr(20,group_name.length);
					group_id = group_name1.substring(0, group_name1.length - 2);
					var req_text = "validate['group[" + group_id + "]']"; // build the appropriate class name for current group of checkboxes
					camp_region_checkboxes[j].addClass(req_text);
					formCheck_CampGilgalRegistration_v4.register(camp_region_checkboxes[j]);
					
				}
			
				var found_index = all_elements.indexOf(i);
				if (found_index > -1) {
					all_elements.splice(found_index, 1); // Remove from all elements array
				}
		}

		// hide these camper sections
		for (i = 0; i  < all_elements.length; i++){	
			campid = "camp" + all_elements[i];
			camper_section = document.getElementById(campid);
			camper_section.style.display = "none";
			
				// Take care of textboxes to make them optional
				var elem_id = "child_" + all_elements[i] + "_name";
				makeOptional(elem_id);
				var elem_id = "child_" + all_elements[i] + "_dob";
				makeOptional(elem_id);
				
				var elem_id = "child_" + all_elements[i] + "_gender_0"; // Clear Male option
				document.getElementById(elem_id).checked = false;
				var elem_id = "child_" + all_elements[i] + "_gender_1"; // clear Female option
				document.getElementById(elem_id).checked = false;
				
			// should get all the associated region camps and set display to none
			// then get all checkboxes associated with each region and remove checkboxes
			// east camps
			east_camps = camper_section.getElementsByClassName('east_camps');
			east_camps_checkboxes = east_camps[0].getElementsByTagName('input');
			east_camps_checkboxes[0].checked = false; // or east_camps_checkboxes[0].checked = true; to actually apply check on checkboxs
			for(j = 0; j <= east_camps_checkboxes.length - 1; j++){
				//console.log(east_camps_checkboxes[j].setPropert('class',''));
				east_camps_checkboxes[j].setProperty('class','');
				formCheck_CampGilgalRegistration_v4.removeError(east_camps_checkboxes[j]);
				formCheck_CampGilgalRegistration_v4.dispose(east_camps_checkboxes[j]);
				
			}
					
			// west camps
			west_camps = camper_section.getElementsByClassName('west_camps');
			west_camps_checkboxes = west_camps[0].getElementsByTagName('input');
			west_camps_checkboxes[0].checked = false;
			for(j = 0; j <= west_camps_checkboxes.length - 1; j++){
				west_camps_checkboxes[j].setProperty('class','');
				formCheck_CampGilgalRegistration_v4.removeError(west_camps_checkboxes[j]);
				formCheck_CampGilgalRegistration_v4.dispose(west_camps_checkboxes[j]);	
			}			
			
			// midwest camps
			midwest_camps = camper_section.getElementsByClassName('midwest_camps');
			midwest_camps_checkboxes = midwest_camps[0].getElementsByTagName('input');		
			midwest_camps_checkboxes[0].checked = false;
			for(j = 0; j <= midwest_camps_checkboxes.length - 1; j++){
				midwest_camps_checkboxes[j].setProperty('class','');
				formCheck_CampGilgalRegistration_v4.removeError(midwest_camps_checkboxes[j]);
				formCheck_CampGilgalRegistration_v4.dispose(midwest_camps_checkboxes[j]);
			}				
			
		}
	}
	
	// Pass in camper object
	/**
	function toggle_region_checkboxes(camper_section){
		selected_region = get_selected_region();
		camps = camper_section.getElementsByClassName(selected_region);
		camps_checkboxes = camps[0].getElementsByTagName('input');
		for(i = 0; i < camps_checkboxes.length - 1; i++){
			//console.log(camps_checkboxes[i].id);
		}

	}*/
	
	
	// Get selected region
	function get_selected_region(){
		selected_region = document.getElementById('select_region').value;
		region_camp = selected_region.toLowerCase() + "_camps";
		return region_camp;
	}
	
	function add_validation_gift(){
		validate_text = "validate['number']";
		elem = document.getElementById('additional_gift');
		elem.addClass(validate_text);
	}	