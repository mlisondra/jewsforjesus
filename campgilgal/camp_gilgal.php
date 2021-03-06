<h2>Camp Gilgal Registration and Referral</h2>

<p><span style="font-weight: bold; color: #FF0000;">* Starred fields are required.</span></p>

<div style="background-color:#79BAEC; font-weight:bold">&nbsp;&nbsp;PARENT OR GUARDIAN INFORMATION</div>
<br />
    <div class="ccms_form_element cfdiv_text" id="fname_container_div" style="">
            <label for="fname">First Name*</label>
                <input id="fname" maxlength="150" size="30" class=" validate['required']" title="Enter First Name" type="text" value="" name="fname" />
            <div class="clear"></div>
            <div id="error-message-fname"></div>
    </div>
	
	<div class="ccms_form_element cfdiv_text" id="lname_container_div" style="">
            <label for="lname">Last Name*</label>
            <input id="lname" maxlength="150" size="30" class="validate['required']" title="Enter Last Name" type="text" value="" name="lname" />
            <div class="clear"></div>

            <div id="error-message-lname"></div>
        </div>

<div class="ccms_form_element cfdiv_text" id="relationship_container_div" style="">
	<label for="fname">Relationship to Camper(s)*</label>
		<input id="relationship_to_campers" maxlength="150" size="30" class=" validate['required']" title="Enter Relationship" type="text" value="" name="relationship_to_campers" />
	<div class="clear"></div>
	<div id="error-message-relationship_to_campers"></div>
</div>

<div class="ccms_form_element cfdiv_text" id="phone_container_div" style="">
<label for="phone">Phone*</label>
<input id="phone" maxlength="150" size="30" class=" validate['required','phone']" title="Enter Phone Number" type="text" value="" name="phone" />
<div class="clear"></div><div id="error-message-phone"></div></div><div class="ccms_form_element cfdiv_text" id="email_container_div" style=""><label for="email">Email*</label><input id="email" maxlength="150" size="30" class=" validate['required','email']" title="Enter Email" type="text" value="" name="email" />
<div class="clear"></div><div id="error-message-email"></div></div><div class="ccms_form_element cfdiv_text" id="address_1_container_div" style=""><label for="address_1">Address</label><input id="address_1" maxlength="150" size="30" class="" title="" type="text" value="" name="address_1" />
<div class="clear"></div><div id="error-message-address_1"></div></div><div class="ccms_form_element cfdiv_text" id="address_2_container_div" style=""><label for="address_2">Address Line 2</label><input id="address_2" maxlength="150" size="30" class="" title="" type="text" value="" name="address_2" />
<div class="clear"></div><div id="error-message-address_2"></div></div><div class="ccms_form_element cfdiv_text" id="city_container_div" style=""><label for="city">City</label><input id="city" maxlength="150" size="30" class="" title="" type="text" value="" name="city" />
<div class="clear"></div><div id="error-message-city"></div></div><div class="ccms_form_element cfdiv_text" id="state_province_container_div" style=""><label for="state_province">State/Province</label><input id="state_province" maxlength="150" size="30" class="" title="" type="text" value="" name="state_province" />
<div class="clear"></div><div id="error-message-state_province"></div></div><div class="ccms_form_element cfdiv_text" id="postal_zip_container_div" style=""><label for="postal_zip">Postal/Zip Code</label><input id="postal_zip" maxlength="150" size="30" class="" title="" type="text" value="" name="postal_zip" />
<div class="clear"></div><div id="error-message-postal_zip"></div></div><div class="ccms_form_element cfdiv_text" id="country_container_div" style=""><label for="country">Country</label><input id="country" maxlength="150" size="30" class="" title="" type="text" value="" name="country" />
<div class="clear"></div><div id="error-message-country"></div></div><div class="ccms_form_element cfdiv_radio" id="heritage_container_div" style="">
<label for="heritage">I am Jewish*</label><input type="hidden" name="heritage" value="" alt="ghost" />
<div style="float:left; clear:none;">
	<input type="radio" name="heritage" id="heritage_0" title="Please select one" value="Jewish" class="validate['required']" />
<label for="heritage_0">Yes</label>
<input type="radio" name="heritage" id="heritage_1" title="Please select one" value="Gentile" class="validate['required']" />
<label for="heritage_1">No</label>
</div><div class="clear"></div><div id="error-message-heritage"></div></div><div class="ccms_form_element cfdiv_radio" id="belief_container_div" style=""><label for="belief">I Believe in Jesus*</label><input type="hidden" name="belief" value="" alt="ghost" />
<div style="float:left; clear:none;"><input type="radio" name="belief" id="belief_0" title="" value="Believe in Jesus" class="validate['required']" />
<label for="belief_0">Yes</label>
<input type="radio" name="belief" id="belief_1" title="" value="Don't believe in Jesus" class="validate['required']" />
<label for="belief_1">No</label>
</div><div class="clear"></div><div id="error-message-belief"></div></div>
<div style="background-color:#79BAEC; font-weight:bold">&nbsp;&nbsp;CAMPER INFORMATION AND REGISTRATION</div>
<p><strong>Note: </strong>To complete your registration, <strong>please include a deposit $50 per camper for summer camp</strong> and <strong>$25  per camper for winter camp</strong>, unless other arrangements have been made. Your deposit will be credited as a partial payment of your camp fees. <em>Clicking &ldquo;Submit&rdquo; at the bottom of this page will direct you to the site where you can pay your deposit.</em></p>

<p>
	<strong>Select Region</strong>
	<select size="1" id="select_region" title="" name="select_region" class=" validate['required']">
		<option value="Select Region ">Select Region</option>
		<option value="East">East</option>
		<option value="Midwest">Midwest</option>
		<option value="West">West</option>
	</select>
</p>

	<div class="ccms_form_element cfdiv_select" id="child_count_container_div" style="display:none;">
		<p><strong>Please register my child(ren) for the following camp(s):</strong></p>
		<label for="child_count">Select number of campers</label>
		<select size="1" id="child_count" class=" validate['required']" title="" name="child_count">
			<option value="">(Please select)</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	<div class="clear"></div>
	<div id="error-message-child_count"></div></div>




<!-- Camper 1 -->
<div id="camp1">

	<input type="hidden" id="child_1_camp" name="child_1_camp" value="" alt="ghost"/>
	<hr size="1">
        	<span style="font-weight: bold; color: #FF0000;">* Starred fields are required.<br/></span>
        	<p style="padding-left:5px;"><strong>Child 1</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_1_fname_container_div" style="float:left; clear:left;">
		<label for="child_1_fname">First Name*</label>
		<input id="child_1_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_1_fname" />
	<div class="clear"></div>
	<div id="error-message-child_1_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_1_lname_container_div" style="float:left;clear:none;">
		<label for="child_1_lname">Last Name*</label>
		<input id="child_1_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_1_lname" />
	<div class="clear"></div>
	<div id="error-message-child_1_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_1_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_1_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_1_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_1_dob" />
		<div class="clear"></div>
		<div id="error-message-child_1_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_1_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_1_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_1_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_1_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_1_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_1_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_1_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_1_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_1_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_1_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_1_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_1_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_1_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_1_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_1_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_1_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_1_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_1_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_1_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_1_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_1_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_1_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_1_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_1_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_1_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_1_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_1_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_1_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_1_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_1_gender">Gender*</label>
                <input type="hidden" name="child_1_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_1_gender" id="child_1_gender_0" title="" value="Male" class="" />
                <label for="child_1_gender_0">Male</label>
                <input type="radio" name="child_1_gender" id="child_1_gender_1" title="" value="Female" class="" />
                        <label for="child_1_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_1_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_1_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_1_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_1_comment" maxlength="150" class="" title="" type="text" value="" name="child_1_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_1_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 2 -->
<div id="camp2">

	<input type="hidden" id="child_2_camp" name="child_2_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 2</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_2_fname_container_div" style="float:left; clear:left;">
		<label for="child_2_fname">First Name*</label>
		<input id="child_2_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_2_fname" />
	<div class="clear"></div>
	<div id="error-message-child_2_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_2_lname_container_div" style="float:left;clear:none;">
		<label for="child_2_lname">Last Name*</label>
		<input id="child_2_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_2_lname" />
	<div class="clear"></div>
	<div id="error-message-child_2_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_2_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_2_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_2_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_2_dob" />
		<div class="clear"></div>
		<div id="error-message-child_2_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_2_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_2_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_2_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_2_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_2_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_2_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_2_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_2_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_2_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_2_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_2_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_2_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_2_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_2_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_2_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_2_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_2_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_2_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_2_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_2_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_2_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_2_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_2_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_2_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_2_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_2_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_2_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_2_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_2_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_2_gender">Gender*</label>
                <input type="hidden" name="child_2_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_2_gender" id="child_2_gender_0" title="" value="Male" class="" />
                <label for="child_2_gender_0">Male</label>
                <input type="radio" name="child_2_gender" id="child_2_gender_1" title="" value="Female" class="" />
                        <label for="child_2_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_2_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_2_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_2_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_2_comment" maxlength="150" class="" title="" type="text" value="" name="child_2_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_2_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 3 -->
<div id="camp3">

	<input type="hidden" id="child_3_camp" name="child_3_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 3</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_3_fname_container_div" style="float:left; clear:left;">
		<label for="child_3_fname">First Name*</label>
		<input id="child_3_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_3_fname" />
	<div class="clear"></div>
	<div id="error-message-child_3_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_3_lname_container_div" style="float:left;clear:none;">
		<label for="child_3_lname">Last Name*</label>
		<input id="child_3_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_3_lname" />
	<div class="clear"></div>
	<div id="error-message-child_3_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_3_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_3_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_3_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_3_dob" />
		<div class="clear"></div>
		<div id="error-message-child_3_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_3_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_3_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_3_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_3_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_3_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_3_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_3_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_3_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_3_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_3_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_3_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_3_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_3_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_3_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_3_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_3_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_3_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_3_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_3_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_3_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_3_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_3_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_3_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_3_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_3_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_3_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_3_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_3_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_3_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_3_gender">Gender*</label>
                <input type="hidden" name="child_3_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_3_gender" id="child_3_gender_0" title="" value="Male" class="" />
                <label for="child_3_gender_0">Male</label>
                <input type="radio" name="child_3_gender" id="child_3_gender_1" title="" value="Female" class="" />
                        <label for="child_3_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_3_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_3_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_3_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_3_comment" maxlength="150" class="" title="" type="text" value="" name="child_3_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_3_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 4 -->
<div id="camp4">

	<input type="hidden" id="child_4_camp" name="child_4_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 4</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_4_fname_container_div" style="float:left; clear:left;">
		<label for="child_4_fname">First Name*</label>
		<input id="child_4_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_4_fname" />
	<div class="clear"></div>
	<div id="error-message-child_4_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_4_lname_container_div" style="float:left;clear:none;">
		<label for="child_4_lname">Last Name*</label>
		<input id="child_4_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_4_lname" />
	<div class="clear"></div>
	<div id="error-message-child_4_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_4_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_4_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_4_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_4_dob" />
		<div class="clear"></div>
		<div id="error-message-child_4_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_4_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_4_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_4_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_4_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_4_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_4_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_4_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_4_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_4_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_4_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_4_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_4_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_4_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_4_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_4_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_4_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_4_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_4_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_4_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_4_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_4_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_4_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_4_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_4_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_4_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_4_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_4_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_4_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_4_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_4_gender">Gender*</label>
                <input type="hidden" name="child_4_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_4_gender" id="child_4_gender_0" title="" value="Male" class="" />
                <label for="child_4_gender_0">Male</label>
                <input type="radio" name="child_4_gender" id="child_4_gender_1" title="" value="Female" class="" />
                        <label for="child_4_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_4_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_4_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_4_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_4_comment" maxlength="150" class="" title="" type="text" value="" name="child_4_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_4_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 5 -->
<div id="camp5">

	<input type="hidden" id="child_5_camp" name="child_5_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 5</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_5_fname_container_div" style="float:left; clear:left;">
		<label for="child_5_fname">First Name*</label>
		<input id="child_5_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_5_fname" />
	<div class="clear"></div>
	<div id="error-message-child_5_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_5_lname_container_div" style="float:left;clear:none;">
		<label for="child_5_lname">Last Name*</label>
		<input id="child_5_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_5_lname" />
	<div class="clear"></div>
	<div id="error-message-child_5_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_5_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_5_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_5_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_5_dob" />
		<div class="clear"></div>
		<div id="error-message-child_5_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_5_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_5_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_5_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_5_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_5_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_5_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_5_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_5_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_5_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_5_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_5_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_5_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_5_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_5_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_5_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_5_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_5_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_5_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_5_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_5_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_5_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_5_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_5_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_5_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_5_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_5_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_5_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_5_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_5_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_5_gender">Gender*</label>
                <input type="hidden" name="child_5_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_5_gender" id="child_5_gender_0" title="" value="Male" class="" />
                <label for="child_5_gender_0">Male</label>
                <input type="radio" name="child_5_gender" id="child_5_gender_1" title="" value="Female" class="" />
                        <label for="child_5_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_5_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_5_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_5_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_5_comment" maxlength="150" class="" title="" type="text" value="" name="child_5_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_5_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 6 -->
<div id="camp6">

	<input type="hidden" id="child_6_camp" name="child_6_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 6</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_6_fname_container_div" style="float:left; clear:left;">
		<label for="child_6_fname">First Name*</label>
		<input id="child_6_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_6_fname" />
	<div class="clear"></div>
	<div id="error-message-child_6_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_6_lname_container_div" style="float:left;clear:none;">
		<label for="child_6_lname">Last Name*</label>
		<input id="child_6_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_6_lname" />
	<div class="clear"></div>
	<div id="error-message-child_6_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_6_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_6_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_6_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_6_dob" />
		<div class="clear"></div>
		<div id="error-message-child_6_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_6_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_6_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_6_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_6_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_6_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_6_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_6_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_6_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_6_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_6_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_6_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_6_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_6_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_6_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_6_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_6_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_6_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_6_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_6_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_6_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_6_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_6_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_6_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_6_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_6_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_6_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_6_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_6_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_6_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_6_gender">Gender*</label>
                <input type="hidden" name="child_6_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_6_gender" id="child_6_gender_0" title="" value="Male" class="" />
                <label for="child_6_gender_0">Male</label>
                <input type="radio" name="child_6_gender" id="child_6_gender_1" title="" value="Female" class="" />
                        <label for="child_6_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_6_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_6_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_6_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_6_comment" maxlength="150" class="" title="" type="text" value="" name="child_6_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_6_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 7 -->
<div id="camp7">

	<input type="hidden" id="child_7_camp" name="child_7_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 7</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_7_fname_container_div" style="float:left; clear:left;">
		<label for="child_7_fname">First Name*</label>
		<input id="child_7_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_7_fname" />
	<div class="clear"></div>
	<div id="error-message-child_7_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_7_lname_container_div" style="float:left;clear:none;">
		<label for="child_7_lname">Last Name*</label>
		<input id="child_7_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_7_lname" />
	<div class="clear"></div>
	<div id="error-message-child_7_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_7_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_7_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_7_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_7_dob" />
		<div class="clear"></div>
		<div id="error-message-child_7_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_7_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_7_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_7_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_7_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_7_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_7_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_7_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_7_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_7_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_7_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_7_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_7_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_7_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_7_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_7_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_7_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_7_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_7_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_7_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_7_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_7_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_7_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_7_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_7_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_7_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_7_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_7_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_7_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_7_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_7_gender">Gender*</label>
                <input type="hidden" name="child_7_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_7_gender" id="child_7_gender_0" title="" value="Male" class="" />
                <label for="child_7_gender_0">Male</label>
                <input type="radio" name="child_7_gender" id="child_7_gender_1" title="" value="Female" class="" />
                        <label for="child_7_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_7_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_7_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_7_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_7_comment" maxlength="150" class="" title="" type="text" value="" name="child_7_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_7_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 8 -->
<div id="camp8">

	<input type="hidden" id="child_8_camp" name="child_8_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 8</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_8_fname_container_div" style="float:left; clear:left;">
		<label for="child_8_fname">First Name*</label>
		<input id="child_8_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_8_fname" />
	<div class="clear"></div>
	<div id="error-message-child_8_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_8_lname_container_div" style="float:left;clear:none;">
		<label for="child_8_lname">Last Name*</label>
		<input id="child_8_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_8_lname" />
	<div class="clear"></div>
	<div id="error-message-child_8_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_8_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_8_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_8_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_8_dob" />
		<div class="clear"></div>
		<div id="error-message-child_8_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_8_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_8_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_8_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_8_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_8_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_8_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_8_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_8_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_8_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_8_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_8_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_8_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_8_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_8_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_8_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_8_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_8_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_8_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_8_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_8_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_8_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_8_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_8_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_8_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_8_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_8_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_8_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_8_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_8_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_8_gender">Gender*</label>
                <input type="hidden" name="child_8_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_8_gender" id="child_8_gender_0" title="" value="Male" class="" />
                <label for="child_8_gender_0">Male</label>
                <input type="radio" name="child_8_gender" id="child_8_gender_1" title="" value="Female" class="" />
                        <label for="child_8_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_8_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_8_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_8_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_8_comment" maxlength="150" class="" title="" type="text" value="" name="child_8_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_8_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 9 -->
<div id="camp9">

	<input type="hidden" id="child_9_camp" name="child_9_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 9</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_9_fname_container_div" style="float:left; clear:left;">
		<label for="child_9_fname">First Name*</label>
		<input id="child_9_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_9_fname" />
	<div class="clear"></div>
	<div id="error-message-child_9_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_9_lname_container_div" style="float:left;clear:none;">
		<label for="child_9_lname">Last Name*</label>
		<input id="child_9_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_9_lname" />
	<div class="clear"></div>
	<div id="error-message-child_9_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_9_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_9_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_9_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_9_dob" />
		<div class="clear"></div>
		<div id="error-message-child_9_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_9_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_9_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_9_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_9_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_9_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_9_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_9_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_9_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_9_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_9_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_9_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_9_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_9_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_9_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_9_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_9_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_9_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_9_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_9_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_9_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_9_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_9_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_9_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_9_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_9_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_9_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_9_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_9_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_9_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_9_gender">Gender*</label>
                <input type="hidden" name="child_9_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_9_gender" id="child_9_gender_0" title="" value="Male" class="" />
                <label for="child_9_gender_0">Male</label>
                <input type="radio" name="child_9_gender" id="child_9_gender_1" title="" value="Female" class="" />
                        <label for="child_9_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_9_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_9_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_9_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_9_comment" maxlength="150" class="" title="" type="text" value="" name="child_9_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_9_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>
<!-- Camper 10 -->
<div id="camp10">

	<input type="hidden" id="child_10_camp" name="child_10_camp" value="" alt="ghost"/>
	<hr size="1">
        	<p style="padding-left:5px;"><strong>Child 10</strong></p>
	<div class="ccms_form_element cfdiv_text label_over" id="child_10_fname_container_div" style="float:left; clear:left;">
		<label for="child_10_fname">First Name*</label>
		<input id="child_10_fname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_10_fname" />
	<div class="clear"></div>
	<div id="error-message-child_10_fname"></div>
	</div>

	<div class="ccms_form_element cfdiv_text label_over" id="child_10_lname_container_div" style="float:left;clear:none;">
		<label for="child_10_lname">Last Name*</label>
		<input id="child_10_lname" maxlength="150" size="30" class="" title="" type="text" value="" name="child_10_lname" />
	<div class="clear"></div>
	<div id="error-message-child_10_lname"></div>
	</div>
	
	<div class="ccms_form_element cfdiv_text label_over" id="child_10_dob_container_div" style="float:left; clear:none; padding-left:5px;">
		<label for="child_10_dob">Date of Birth (mm/dd/yyyy)*</label>
		<input id="child_10_dob" maxlength="150" size="30" class="" title="" type="text" value="" name="child_10_dob" />
		<div class="clear"></div>
		<div id="error-message-child_10_dob"></div>
	</div>

        
	<div class="clear"></div>
	
	<div class="ccms_form_element cfdiv_checkboxgroup radios_over" id="child_10_camp_container_div" style="float:left; clear:none;width:230px;">
            <strong>Camps*</strong>
            <div style="float:left; clear:none;display:none;" class="east_camps">
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_10_camp_1" title="" value="Junior Camp (East)" class="" rel="50.00" />
                    <label for="child_10_camp_1">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_10_camp_2" title="" value="Teen Camp (East)" class="" />
                    <label for="child_10_camp_2">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_10_camp_3" title="" value="Adventure Camp (East)" class="" />
                    <label for="child_10_camp_3">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group1[]" id="child_10_camp_0" title="" value="Wonderful Winter Weekend (East)" class="" />
                    <label for="child_10_camp_0">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="midwest_camps">
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_10_camp_5" title="" value="Junior Camp (Midwest)" class="" />
                    <label for="child_10_camp_5">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_10_camp_6" title="" value="Teen Camp (Midwest)" class="" />
                    <label for="child_10_camp_6">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_10_camp_7" title="" value="Adventure Camp (Midwest)" class="" />
                    <label for="child_10_camp_7">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group2[]" id="child_10_camp_4" title="" value="Wonderful Winter Weekend (Midwest)" class="" />
                    <label for="child_10_camp_4">Wonderful Winter Weekend ($95)</label>
            </div>
            <div style="float:left; clear:none;display:none;" class="west_camps">
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_10_camp_10" title="" value="Junior Camp (West)" class="" />
                    <label for="child_10_camp_10">Junior Camp ($650)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_10_camp_11" title="" value="Teen Camp (West)" class="" />
                    <label for="child_10_camp_11">Teen Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_10_camp_12" title="" value="Adventure Camp (West)" class="" />
                    <label for="child_10_camp_12">Adventure Camp ($325)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_10_camp_8" title="" value="WWW Southern California (West)" class="" />
                    <label for="child_10_camp_8">WWW Southern California ($95)</label>
                    <input type="checkbox" name="input_checkbox_group3[]" id="child_10_camp_9" title="" value="WWW Northern California (West)" class="" />
                    <label for="child_10_camp_9">WWW Northern California ($95)</label>
            </div>
            <div class="clear"></div>
           
        <div id="error-message-child_10_camp"></div>
        </div>

        <div class="gender_comment_container" style="float:left;clear:none;">
            <div class="ccms_form_element cfdiv_radio label_over" id="child_10_gender_container_div" style="float:left; clear:none; padding-left:0px;">
                <label for="child_10_gender">Gender*</label>
                <input type="hidden" name="child_10_gender" value="" alt="ghost" />
                <div style="float:left; clear:none;"><input type="radio" name="child_10_gender" id="child_10_gender_0" title="" value="Male" class="" />
                <label for="child_10_gender_0">Male</label>
                <input type="radio" name="child_10_gender" id="child_10_gender_1" title="" value="Female" class="" />
                        <label for="child_10_gender_1">Female</label>
                </div>
                <div class="clear"></div><div id="error-message-child_10_gender"></div>	
            </div>
            <div class="clear"></div>
            <div class="ccms_form_element cfdiv_text label_over" id="child_10_comment_container_div" style="float:left;clear:none;width:440px;">
                    <label for="child_10_comment">Please describe any food allergies or other special considerations here</label>
                    <textarea id="child_10_comment" maxlength="150" class="" title="" type="text" value="" name="child_10_comment" style="resize:none;height:50px;width:100%"/></textarea>
                    <div class="clear"></div>
                    <div id="error-message-child_10_comment"></div>
            </div> 
        </div>     
</div>

<div style="clear:both;"></div>

<div style="clear:left; color: #FF0000;padding-top:10px;">
    <hr size="1">
    <p>
        Total Camp Balance: <strong>$<label id="total_camp_fee_label" name="total_camp_fee_label">0.00</label></strong><br/>
        Total Deposit: <strong>$<label id="total_reg_fee_label" name="total_reg_fee_label">0.00</label></strong><br/>
        <!-- Remaining Balance: <strong>$<label id="remaining_balance_label" name="remaining_balance_label">0.00</label></strong><br/> -->
    </p>
</div>
        
<div>
    <p><strong><label id="additional_gift_label" name="additional_gift_label">Additional Gift<strong></label> 
        <strong>$<input type="text" id="additional_gift_input" name="additional_gift_input" style="width:50px;" value="0.00" /></strong>
        (Your donation here will help families in need send their campers to Camp Gilgal)
    </p>
</div>

<div style="background-color:#79BAEC; font-weight:bold">&nbsp;&nbsp;FAMILY REFERRAL</div>
<p><em>I know a Jewish family who might want to send their child(ren) to Camp Gilgal.</em></p>

<div class="ccms_form_element cfdiv_text" id="refer_name_container_div" style="">
    <label for="refer_name">Parent/Guardian's Name</label>
    <input id="refer_name" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_name" />    
    <div class="clear"></div>    
    <div id="error-message-refer_name"></div>        
</div>

<div class="ccms_form_element cfdiv_text" id="refer_child_container_div" style="">
    <label for="refer_child">Child's Name</label>
    <input id="refer_child" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_child" />    
    <div class="clear"></div>    
    <div id="error-message-refer_child"></div>        
</div>

    <div class="ccms_form_element cfdiv_text" id="refer_address_1_container_div" style=""><label for="refer_address_1">Address</label><input id="refer_address_1" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_address_1" />
<div class="clear"></div><div id="error-message-refer_address_1"></div></div><div class="ccms_form_element cfdiv_text" id="refer_address_2_container_div" style=""><label for="refer_address_2">Address Line 2</label><input id="refer_address_2" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_address_2" />
<div class="clear"></div><div id="error-message-refer_address_2"></div></div><div class="ccms_form_element cfdiv_text" id="refer_city_container_div" style=""><label for="refer_city">City</label><input id="refer_city" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_city" />
<div class="clear"></div><div id="error-message-refer_city"></div></div><div class="ccms_form_element cfdiv_text" id="refer_state_container_div" style=""><label for="refer_state">State/Province</label><input id="refer_state" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_state" />
<div class="clear"></div><div id="error-message-refer_state"></div></div><div class="ccms_form_element cfdiv_text" id="refer_zip_container_div" style=""><label for="refer_zip">Postal/Zip Code</label><input id="refer_zip" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_zip" />
<div class="clear"></div><div id="error-message-refer_zip"></div></div><div class="ccms_form_element cfdiv_text" id="refer_country_container_div" style=""><label for="refer_country">Country</label><input id="refer_country" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_country" />
<div class="clear"></div><div id="error-message-refer_country"></div></div>
<div class="ccms_form_element cfdiv_text" id="refer_phone_container_div" style=""><label for="refer_phone">Phone</label>
<input id="refer_phone" maxlength="150" size="30" class="" title="" type="text" value="" name="refer_phone" />
<div class="clear"></div><div id="error-message-refer_phone"></div></div>

<table width="100%">
<tr bgcolor="#D6DCEB">

<td><strong>How did you hear about us?</strong><br/>
(ex.: search engine, from a friend, through Jews for Jesus, etc.)</td>
<td><div class="ccms_form_element cfdiv_text" id="how_did_you_container_div" style="">
<label for="how_did_you" style="display:none;">How did you hear</label><input id="how_did_you" maxlength="150" size="30" class="" title="" type="text" value="" name="how_did_you" />
<div class="clear"></div><div id="error-message-how_did_you"></div></div></td>
</tr>
</table>
<input id="CurrentPayment" type="hidden" value="0.00" name="CurrentPayment" />
<input id="appeal_code" type="hidden" value="gilgal" name="appeal_code" />
<input id="total_reg_fee" type="hidden" value="0.00" name="total_reg_fee" />
<input id="total_camp_fee" type="hidden" value="0.00" name="total_camp_fee" />
<input id="additional_gift" type="hidden" value="0.00" name="additional_gift" />
<input id="fundid" name="fundid" type="hidden" value="" />
<input id="comments" name="comments" type="hidden" value=""/>
<div class="ccms_form_element cfdiv_submit" id="submit_container_div" style="text-align:left;margin-top: 15px;padding:0px;">
<input name="submit" id="submit" class="" value="Submit" type="submit" />
&nbsp;<input type='reset' name='reset' value='Reset' /><div class="clear"></div><div id="error-message-submit"></div></div> 