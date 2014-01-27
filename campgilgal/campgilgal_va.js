window.addEvent('domready', function() {
	
	var selected_region = $('select_region').value;
	
	/* Initialize Children/Camper Information visibility */
	for(i = 1; i <= 10; i++){
		camp = "camp" + i;
		$(camp).setStyle('display','none');
        $(camp).setStyle('clear','both');
		$(camp).set('class','camper');
	}	


	/* Add event change on Child Count drop down box to show/hide Children Information */
	$("child_count").addEvent('change', function(){
		var childCount = $("child_count").value;
		toggle_camp_section(childCount);
		/*
		switch(childCount){
			case "1":
			
			 var my_array = new Array(1);
			 toggle_required(my_array);

			 // get the selected region
			 // get the input boxes associated and make them required
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
			 //console.log(camp_region[0].getElementsByTagName('input'));
			 camp_checkboxes = camp_region[0].getElementsByTagName('input');
			 var req = "validate['required']";
			 for(i = 0; i < camp_checkboxes.length; i++){
				camp_checkboxes[i].addClass(req);
				formCheck_CampGilgalRegistration_v4.register(camp_checkboxes[i]);	
			 }


			break;

			case "2":
			 var my_array = new Array(1,2);
			 toggle_required(my_array);
			break;

			case "3": 
			 var my_array = new Array(1,2,3);
			 toggle_required(my_array);	
			break;

			case "4": 
			var my_array = new Array(1,2,3,4);
			 toggle_required(my_array);
			break;

			case "5":

			 var my_array = new Array(1,2,3,4,5);
			 toggle_required(my_array);			
			break;

			case "6":
			
			 var my_array = new Array(1,2,3,4,5,6);
			 toggle_required(my_array);				
			break;

			case "7":
			
			var my_array = new Array(1,2,3,4,5,6,7);
			 toggle_required(my_array);			
			break;

			case "8":
			
			var my_array = new Array(1,2,3,4,5,6,7,8);
			 toggle_required(my_array);			
			break;

			case "9":
			
		 var my_array = new Array(1,2,3,4,5,6,7,8,9);
			 toggle_required(my_array);				
			break;

			case "10":
			
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
		*/
	});
	
	/* End of Child Count change event */

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
					//console.log("Item unchecked: " + camps_checkboxes[j].value);
				}
				
			}
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
				//console.log("camp region object");
				//console.log(camp_region);
				var camp_checkboxes = camp_region[0].getElementsByTagName('input'); // Get all input elements under camp region
				//console.log(camp_checkboxes);
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
			//console.log(checkboxes[i].name);
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
	}
	
	// Input is an integer - essentially the number of children user is registering for
	// take input and iterate that many times and set display for corresponding camper section to display "block" (show)
	// with each iteration remove from local array that index
	// iterate through remaining elements and set corresponding camper section to display "none" (hide)
	function toggle_camp_section(camp_count){
		var all_elements = new Array(1,2,3,4,5,6,7,8,9,10);	
	
		// show camper section
		for(i = 1; i <= camp_count; i++){
			campid = "camp" + i;
			camper_section = document.getElementById(campid);
			camper_section.style.display = "block";
			// right here get the region camp under the current camper object should be displayed
			selected_region = get_selected_region();
			toggle_region_checkboxes(camper_section);

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
			// should get all the associated region camps and set display to none
			// then get all checkboxes associated with each region and remove checkboxes
			// east camps
			east_camps = camper_section.getElementsByClassName('east_camps');
			east_camps_checkboxes = east_camps[0].getElementsByTagName('input');
			east_camps_checkboxes[0].checked = true; //checkboxes[i].setProperty('class', '');
			//console.log(east_camps_checkboxes);

			//east_camps_checkboxes = east_camps.getElementsByTagName('input');
			//console.log(east_camps_checkboxes);
			//removeAttribute("checked");
			//east_camps.style.display = "none";
			
			//west_camps = camper_section.getElementsByClassName('west_camps');
			//west_camps_checkboxes = west_camps.getElementsByTagName('input');
			//console.log(west_camps_checkboxes);
			//west_camps.style.display = "none";
			
			//midwest_camps = camper_section.getElementsByClassName('midwest_camps');
			//midwest_camps_checkboxes = midwest_camps.getElementsByTagName('input');
			//console.log(midwest_camps_checkboxes);			
			//midwest_camps.style.display = "none";			
		}
	}
	
	// Pass in camper object
	function toggle_region_checkboxes(camper_section){
		selected_region = get_selected_region();
		camps = camper_section.getElementsByClassName(selected_region);
		//console.log(camper_section);
		//console.log(camps);
		camps_checkboxes = camps[0].getElementsByTagName('input');
		console.log(camps_checkboxes.length);
		for(i = 0; i < camps_checkboxes.length - 1; i++){
			console.log(camps_checkboxes[i].id);
		}

	}
	
	
	// Get selected region
	function get_selected_region(){
		selected_region = document.getElementById('select_region').value;
	  switch(selected_region){
			case "West":
			  region_camp = "west_camps";
			  break;
			case "East":
			  region_camp = "east_camps";
			  break;
			case "Midwest":	
			  region_camp = "midwest_camps";
			  break;			  
		 }
		return region_camp;
	}