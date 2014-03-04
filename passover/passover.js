window.addEvent('domready', function() {

	var banquet_location = getParameterByName("location"); // retrieve url param for location
	var given_location = "";
	
	if(banquet_location != ""){
		for(i = 0; i < events_locations.length; i++){
			if(events_locations[i].city == banquet_location){
				given_location = events_locations[i].location;
			}
		}
		change_location_info(given_location);
	}
	
	// Selection binding for number of adults attending
	$('num_adults').addEvent('change', function(){
		calc_total_fees();
	});
	
	// Selection binding for number of children attending
	$('num_children').addEvent('change', function(){
		calc_total_fees();
	});	      

	// Selection binding for location attending
	$('location').addEvent('change',function(){
		change_location_info($(this).value);
		calc_total_fees(); // recalculate total registration fee
	});
	
	venues_array = [];
	
	// Add each venue to local array
	for(i = 0; i < events_locations.length; i++){
		venues_array.push(events_locations[i].location);
	}	
	venues_array.sort(); // sort
	
	// Add venues to drop down list
	for(i = 0; i < venues_array.length; i++){
		var newoption = new Option(venues_array[i], venues_array[i]);
		if(venues_array[i] == given_location){
			newoption.setProperty('selected', 'selected');
		}		
		$('location').add(newoption, null);
	}	
	
}); // end onload


	var events_locations = [
        {"when":"Monday, April 21, 2014, 7 P.M.",
            "venue":"Antioch Pentecostal Church",
            "address":"201 Atlantic Avenue Brooklyn, NY 11201",
            "menu":"Full Buffet",
            "more_info":"Sandy Epstein at (212) 683-7077 or email ny@jewsforjesus.org",
            "deadline":"Monday, April 18, 2014",
            "cost_adults":"25",
            "cost_children":"10",
			"fundid":"NYBRAN-EV",
			"city":"Brooklyn",
			"state":"NY",
			"location":"Brooklyn, NY",
			"admin_name":"Sandy Epstein",
			"admin_email":"ny@jewsforjesus.org",
			"admin_phone":"(212) 683-7077",
"pdf":"http://www.jewsforjesus.org/files/Passover2014/BRPassoverBanquetflyer.pdf"			
        },
        {
            "when":"Monday, April 21, 2014, 6:30 P.M.",
            "venue":"Alta Villa Banquets",
            "address":"430 North Addison Road, Addison, IL 60101",
            "menu":"matzoh ball soup, garden salad with homemade house vinaigrette dressing, fresh green beans in olive oil and garlic, slow-roasted chicken with chef's special seasoning, roasted vesuvio potatoes, sponge cake for dessert",
            "more_info":"Melanie Rose at (847) 679-2680 or chicago@jewsforjesus.org",
            "deadline":"Tuesday, April 15, 2014",
            "cost_adults":"33",
            "cost_children":"33",
			"fundid":"CHBRAN-EV",
			"city":"Addison",
			"state":"IL",
			"location":"Addison, IL",
			"admin_name":"Melanie Rose",
			"admin_email":"chicago@jewsforjesus.org",
			"admin_phone":"(847) 679-2680",
"pdf":"http://www.jewsforjesus.org/files/Passover2014/CHPassoverBanquetflyer.pdf"				
        },
        {
            "when":"Monday, April 21, 2014, 7 P.M.",
            "venue":"Forcey Bible Church",
            "address":"2130 East Randolph Road, Silver Spring, MD 20904",
            "menu":"Adults: matzoh ball soup, seared breast of chicken with lemon basil sauce, whipped potatoes, steamed vegetables and flourless chocolate torte; <br/>Children: chicken tenders, steamed vegetables and fruit cup",
            "more_info":"Shannon Serrfano (301) 770-4000, fax (301) 770-0900 or email dc@jewsforjesus.org",
			"deadline":"Friday, April 11, 2014",
            "cost_adults":"40",
            "cost_children":"25",
			"fundid":"DCBRAN-EV",
			"city":"Silver Spring",
			"state":"MD",
			"location":"Silver Spring, MD",
			"admin_name":"Shannon Serrfano",
			"admin_email":"dc@jewsforjesus.org",
			"admin_phone":"(301) 770-4000",
			"pdf":"http://www.jewsforjesus.org/files/Passover2014/DCPassoverBanquetflyer.pdf"
        },
        {
            "when":"Monday April 21, 2014, 6:30 P.M.",
            "venue":"Embassy Suites – Miami International Airport",
            "address":"3974 NW South River Drive, Miami, FL 33142",
            "menu":"Chicken or vegetarian",
            "more_info":"Robyn Wilk (954) 616-5050 or email florida@jewsforjesus.org",
            "deadline":"Monday, April 14, 2014",
            "cost_adults":"39",
            "cost_children":"30",
			"fundid":"FLBRAN-EV",
			"city":"Miami",
			"state":"FL",
			"location":"Miami, FL",
			"admin_name":"Robyn Wilk",
			"admin_email":"florida@jewsforjesus.org",
			"admin_phone":"(954) 616-5050",
			"pdf":"http://www.jewsforjesus.org/files/Passover2014/FLPassoverBanquetflyer.pdf"
        },
        {
            "when":"Monday, April 14, 2014, 6:30 P.M",
            "venue":"The Olympic Collection Banquet and Conference Center",
            "address":"11301 Olympic Blvd. West, Los Angeles, CA 90064",
            "menu":'Please contact us',
            "more_info":"(310) 637-7424 (310-MESSIAH) or la@jewsforjesus.org",
            "deadline":"Tuesday, April 8, 2014",
            "cost_adults":"45",
            "cost_children":"15",
			"fundid":"LABRAN-EV",
			"city":"Los Angeles",
			"state":"CA",
			"location":"Los Angeles, CA",
			"admin_name":"",
			"admin_email":"la@jewsforjesus.org",
			"admin_phone":"(310) 637-7424",
			"pdf":"http://www.jewsforjesus.org/files/Passover2014/LAPassoverBanquetflyer.pdf"
			
        },
        {
            "when":"Monday, April 21, 2014, 6:30 P.M.",
            "venue":"Valley Baptist Church",
            "address":"3 North San Pedro Road, San Rafael, CA 94903",
            "menu":"Please contact us",
            "more_info":"Rob Wertheim at (415) 864-2600 x 1113 or email rob.wertheim@jewsforjesus.org",
            "deadline":"Monday, April 14, 2014",
            "cost_adults":"40",
            "cost_children":"15",
			"fundid":"SFBRAN-EV",
			"city":"San Rafael",
			"state":"CA",
			"location":"San Rafael, CA",
			"admin_name":"Sandy Wertheim",
			"admin_email":"sandy.wertheim@jewsforjesus.org",
			"admin_phone":"(415) 864-2600 x 1113",
			"pdf":"http://www.jewsforjesus.org/files/Passover2014/SFPassoverBanquetflyer.pdf"
        },
        {
            "when":"Monday, April 21, 2014, 6:30 P.M.",
            "venue":"St. Mark Lutheran Church",
            "address":"125 East Arques Avenue, Sunnyvale, CA 94085",
            "menu":"Please contact us",
            "more_info":"Rob Wertheim at (415) 864-2600 x 1113 or email rob.wertheim@jewsforjesus.org",
            "deadline":"Monday, April 14, 2014",
            "cost_adults":"42",
            "cost_children":"15",
			"fundid":"SFBRAN-EV",
			"city":"Sunnyvale",
			"state":"CA",
			"location":"Sunnyvale, CA",
			"admin_name":"Sandy Wertheim",
			"admin_email":"sandy.wertheim@jewsforjesus.org",
			"admin_phone":"(415) 864-2600 x 1113",
			"pdf":"http://www.jewsforjesus.org/files/Passover2014/SFPassoverBanquetflyer.pdf"
    }];

function calc_adults_fees(){
	fee = 0;
	venue_obj = get_selected_venue();
	if(venue_obj != 0){
		num_adults = $('num_adults').value;
		fee = num_adults * venue_obj.cost_adults;
		return fee;	
	}else{
		return fee;
	}
}

function calc_children_fees(){
	fee = 0;
	venue_obj = get_selected_venue();
	if(venue_obj != 0){
		num_adults = $('num_children').value;
		fee = num_adults * venue_obj.cost_children;
		return fee;	
	}else{
		return fee;
	}
}

function calc_total_fees(){
	adult_fees = calc_adults_fees();
	children_fees = calc_children_fees();
	total_reg_fee = adult_fees + children_fees;
	$('total_reg_fee').value = total_reg_fee;
	$('registration_fee_display').set('html',total_reg_fee);
}

// Change the UI for event details
function change_location_info(location){
	if(location == ""){
		$$('div.info td.when').set('html','');
		$$('div.info td.where').set('html','');
		$$('div.info td.cost').set('html','');
		$$('div.info td.menu').set('html','');
		$$('div.info td.more_info').set('html','');
		$$('div.info td.deadline').set('html','');	
		$('when').value = '';
		$('where').value = '';
		$('admin_name').value = '';
		$('admin_email').value = '';
		$('admin_phone').value = '';
		$('fundid').value = '';
		$$('div.info td.flyer').set('html','');
	}else{
		for(i = 0; i < events_locations.length; i++){
			//venue = events_locations[i].venue;
			venue = events_locations[i].location;
			if(venue == location){
				// get all the information associated with the venue
				$$('div.info td.when').set('html',events_locations[i].when);
				locale = events_locations[i].venue + '<br/>' + events_locations[i].address;
				$$('div.info td.where').set('html',locale);
				cost = '$' + events_locations[i].cost_adults + ' (adults) ' + '$' + events_locations[i].cost_children + ' (children)';
				$$('div.info td.cost').set('html',cost);
				$$('div.info td.menu').set('html',events_locations[i].menu);
				$$('div.info td.more_info').set('html',events_locations[i].more_info);
				$$('div.info td.deadline').set('html',events_locations[i].deadline);
				$('when').value = events_locations[i].when;
				$('where').value = events_locations[i].venue;
				$('admin_name').value = events_locations[i].admin_name;
				$('admin_email').value = events_locations[i].admin_email;
				$('admin_phone').value = events_locations[i].admin_phone;
				$('fundid').value = events_locations[i].fundid;
				link_to_flyer = '<a href="' + events_locations[i].pdf + '" target="_blank">View Flyer</a>';
				$$('div.info td.flyer').set('html',link_to_flyer);
			}
		   
		}
	}	
}

// Get the current venue selected
// returns 0 if a valid location has not been selected
function get_selected_venue(){
	selected_venue = $('location').value;
	if(selected_venue != ""){
		for(i = 0; i < events_locations.length; i++){
			//venue = events_locations[i].venue;
			venue = events_locations[i].location;
			if(venue == selected_venue){
				return events_locations[i];
			}
		}
	}else{
		return 0;
	}
}


function getParameterByName(name){
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.search);
  if(results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
	
	// example use
	// var formID = getParameterByName("form-id");
};