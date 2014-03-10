    <?php
    $base_url = JURI::base();
    ?>
    <table width="100%" style="width:100%;">
        <tr>
            <td style="font-family:Helvetica, Arial, sans-serif;"><h3>Thank you, {fname}, you for registering for Camp Gilgal</h3>
            <h3 style="font-weight:bold;color:red;font-family:Helvetica, Arial, sans-serif;">
                For balance information and future payment, please use link in Payment and Balance section.
            </h3>
            </td>
        </tr>

    <tr>
    <td>
    <!-- Start Camper Information -->
    <?php

    $childctr = $form->data['chronoform_data']['child_count'];

    if($childctr > 0){
    ?>
    <table width="100%">
    <tr>
    <td bgcolor="#79BAEC" colspan="7" style="font-family:Helvetica, Arial, sans-serif;"><strong>CAMPER INFORMATION</strong></td>
    </tr>

    <tr>
    <td align="left" colspan="7" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">
        <strong>Number of registered child(ren)</strong>&nbsp;&nbsp;&nbsp;{child_count}</td>
    </tr>
    <tr>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Camper's Name</strong></td>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Camp</strong></td>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Special Considerations</strong></td>
        <td colspan="4"></td>
    </tr>
    <?php
        for($x=1;$x<=$childctr;$x++)
    {?>
    <tr>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{child_<?php echo $x; ?>_fname} {child_<?php echo $x; ?>_lname}</td>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{region_label}: 
            <?php

                    $key = "child_" . $x . "_camps";
                    $camp_label = str_replace("(Midwest)","",$form->data['chronoform_data'][$key]);
                    $camp_label = str_replace("(West)","",$camp_label);
                    $camp_label = str_replace("(East)","",$camp_label);
                    $camp_label = str_replace("WWW Northern California","WWW North",$camp_label);
                    $camp_label = str_replace("WWW Southern California","WWW South",$camp_label);
                    $camp_label = str_replace("Wonderful Winter Weekend","WWW",$camp_label);
                    $camp_label = str_replace(" ,",",",$camp_label);
                    print $camp_label;
            ?>
        </td>
        <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{child_<?php echo $x; ?>_comment}</td>
         <td colspan="4"></td>
    </tr>
    <?php
    };
    ?>
    </table>
    <?php 
    };
    ?>
    <!-- End Camper Information -->
    </td>
    </tr>

    <!-- Payment  Information -->
    <tr>
    <td bgcolor="#79BAEC" style="font-family:Helvetica, Arial, sans-serif;"><strong>PAYMENT AND BALANCE INFORMATION</strong></td>
    </tr>
    <tr>
    <td style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">
            <ul>
                <li>
                    <a href="<?php print $base_url; ?>registration-payment?event=<?php echo $form->data['chronoform_data']['fundid'];?>&ref=<?php echo $form->data['chronoform_data']['cf_uid'];?>"><strong>Click here to pay online</strong></a>
                    By clicking this link you will be directed to your current Camp Gilgal registration. Most information will already be filled out for you.
                    </p>
                </li>
                <li>
                  <p><strong>Mail a check.</strong> Make payable to Jews for Jesus with memo: &rdquo;Camp Gilgal payment&rdquo;. Mail to: Jews  for Jesus, 60 Haight Street, San Francisco, CA 94102-5895. </p>
                </li>
                <li>
                    <p><strong>Make a credit card payment by phone.</strong> Call LouAnn Gonzalez at (415) 864-2600 ext. 1119.</p>
                </li>
            </ul>
            <p>Any questions? Call <strong>Kathy &quot;Cricket&quot; Nichols</strong> at (415) 864-2600 ext. 1153 or via email kathy.nichols@jewsforjesus.org.</p>

    </td>
    </tr>
    <!-- End Payment  Information -->

    <!-- Friend Information - Start -->
    <?php
    $friendName = $form->data['chronoform_data']['refer_name'];

    if($friendName)
    { ?>
    <tr>
    <td>
    <table width="100%">
    <tr>
    <td bgcolor="#79BAEC" colspan="3" style="font-family:Helvetica, Arial, sans-serif;"><strong>FAMILY REFERRAL</strong></td>
    </tr>
    <tr>
    <td colspan="3" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><em>A Jewish family who might want to send their child(ren) to Camp Gilgal.</em></td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Parent/Guardian's Name</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_name}</td>
    </tr>
    
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Child's Name</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_child}</td>
    </tr>
    
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Relationship to Family</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_relationship}</td>
    </tr>
    
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Address</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_address_1}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>&nbsp;</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_address_2}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>City</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_city}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>State/Province</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_state}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Postal/Zip Code</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_zip}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Country</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_country}</td>
    </tr>
    <tr>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;"><strong>Phone</strong></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">{refer_phone}</td>
    </tr>
    </table>
    </td>
    </tr>
    <?php
    };
    ?>
    <!-- Friend Information - End -->


    <tr>
        <td align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:10pt;">
        <br />
        <p>
            <img src="http://www.jewsforjesus.org/images/logo/jews-for-jesus-logo300.png" width="300" height="45" border="0" /></p>
            <p style="font-family: Helvetica, Arial; font-size: 13px;line-height:1.2em;margin:1em 0;">&copy; Copyright <a href="http://www.jewsforjesus.org">Jews for Jesus</a> All Rights Reserved | <a href="http://www.jewsforjesus.org/what-we-do/privacy">Privacy Policy</a><br />
           60 Haight Street, San Francisco, CA 94102 | Phone 415-864-2600</p></td>
    </tr>
    </table>