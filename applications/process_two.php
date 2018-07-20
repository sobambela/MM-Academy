<?php
include 'conn.php';
ini_set('max_execution_time', 300);
error_reporting(E_ALL);
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if( $_POST['action'] == 'generate_siblings_html'){
    $num_siblings = $_POST['num_siblings'];
    $html = '';
    for($i = 1; $i <= $num_siblings; $i++){
        $html = "<li id='field_2_45' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label gfield_label_before_complex' for='input_2_45_3' >Sibling ".$i." Name:</label>
                    <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_2_45'>
                        <span id='input_2_45_3_container' class='name_first' >
                        <input type='text' name='sibling_".$i."_firstname' id='input_2_45_3' value='' aria-label='First name' tabindex='118'   aria-invalid='false' />
                        <label for='input_2_45_3' >First</label>
                        </span>
                        <span id='input_2_45_6_container' class='name_last' >
                        <input type='text' name='sibling_".$i."_firstname' id='input_2_45_6' value='' aria-label='Last name' tabindex='120'   aria-invalid='false' />
                        <label for='input_2_45_6' >Last</label>
                        </span>
                    </div>
                </li>
                <li id='field_2_46' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label' for='input_2_46' >Sibling ".$i." Present School:</label>
                    <div class='ginput_container ginput_container_text'><input name='sibling_".$i."_present_school' id='input_2_46' type='text' value='' class='medium'  tabindex='127' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout(\"gf_apply_rules(2,[0])\", 300);'   aria-invalid=\"false\" /></div>
                </li>
                <li id='field_2_47' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label' for='input_2_47' >Sibling ".$i." Present Grade:</label>
                    <div class='ginput_container ginput_container_text'>";
         $html .= '<select name="sibling_'.$i.'_present_grade" id="num_siblings" onchange="gf_apply_rules(2,[0]);" class="medium gfield_select" tabindex="35" aria-invalid="false">
                        <option value="">-- Please Select --</option>

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


                        <option value="11">11</option>


                        <option value="12">12</option>

            </select>';               
         $html .= "</div>
                </li>";
    }
    
    die($html);
}

$num_siblings = $_POST['num_siblings'];
$sibling_html = '<tr>
                    <td class="" colspan="2" style="text-align:center;">PARTICULARS OF SIBLINGS</td>
                </tr>';
for($i = 1; $i <= $num_siblings; $i++){
    $sibling_html .= '<tr>
                        <td class="" colspan="2" style="text-align:center;">Sibling '.$i.'</td>
                    </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Name</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_firstname"] . ' '. $_POST["sibling_".$i."_lastname"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Present School</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_present_school"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Present Grade</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_present_grade"].'</td>
                        </tr>';
}

$parrent_2_address = '';
if($_POST['same_parent_address'] == '1'){
   $parrent_2_address = '<tr>
                            <td class="" colspan="2" style="text-align:center;">Parent 2 Residential Address</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Street Address</td>
                            <td class="tg-yw4l">Same as parent 1</td>
                        </tr>'; 
}else{
    $parrent_2_address = '<tr>
                            <td class="" colspan="2" style="text-align:center;">Parent 2 Residential Address</td>
                        </tr>';
                        if(isset($_POST['parent_2_res_estate_number'])){
                            $html .= '<tr>
                                <td class="tg-lqy6">Unit/House Number</td>
                                <td class="tg-yw4l">'.$_POST["parent_2_res_estate_number"].'</td>
                            </tr>';
                        }
                        if(isset($_POST['parent_2_res_estate_name'])){
                            $html .= '<tr>
                                <td class="tg-lqy6">Complex/Estate Name</td>
                                <td class="tg-yw4l">'.$_POST["parent_2_res_estate_name"].'</td>
                            </tr>';
                        }
                        $html .= '
                        <tr>
                            <td class="tg-lqy6">House Number</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_house_number"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Street Address</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_street_address"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Address Line 2</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_address_line_2"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">City</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_city"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">ZIP / Postal Code </td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_postal_code"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Country</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_res_country"].'</td>
                        </tr>
                        <tr>
                            <td class="" colspan="2" style="text-align:center;">Parent 2 Postal Address <em>(If different to residential address)</em></td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">'.$_POST["parrent_1_postal_type"].'</td>
                            <td class="tg-yw4l">'.$_POST["parent_1_postal_number"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Suite (If applicable)</td>
                            <td class="tg-yw4l">'.$_POST["parent_1_postal_suite"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">City</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_postal_city"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">ZIP / Postal Code </td>
                            <td class="tg-yw4l">'.$_POST["parent_2_postal_postal_code"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Country</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_postal_country"].'</td>
                        </tr>';
}

$subjects = $_POST['subjects'];
if(isset($subjects)){
    $subjects_list = '';
    foreach($subjects as $k => $subject){
        foreach($subject as $sub){
            if($sub == ''){
                continue;
            }
            $subjects_list .= $sub.'<br/>';
        }

    }
}
if(isset($_POST['afrikaans-exmption'])){
    $subjects_list .= '<b>Afrikaans exemption required</b>';
}

$html = '<html>
        <head>
            <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script type="text/javascript" src="http://reddam.house/wp-content/themes/parallelus-vellum/assets/js/modernizr-2.7.1-respond-1.4.0.min.js?ver=2.7.1"></script>
            <style>
                h2.section-heading{
                    display: block;
                    padding: 3px;
                    font-size: 20px;
                    padding-top: 5px;
                    margin-bottom: 9px;
                    margin-top: 11px;
                    text-transform: uppercase;
                    background: #475675;
                    color: #fff;
                }
                h3.title-bottom-attached{
                    font-size: 25px;
                    color: #fff;
                    margin-top: 166px ;
                    margin-left:70px ;
                    margin-bottom: 0 ;
                    margin-right :auto;
                    display: block;
                    width: 100%;
                }
                .tg  {border-collapse:collapse;border-spacing:0;width: 100%;}
                .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                .tg .tg-lqy6{text-align:right;vertical-align:top; width: 25%;}
                .tg .tg-yw4l{vertical-align:top; width:74%;}
            </style>
        </head>
        <body>
            <table style="width:100%;height: 310px;background: #475675">
                <tr>
                    <td>
                        <img class="vc_single_image-img logo" src="http://www.mm.academy/images/basic/logo-mm-full-new.png" alt="MM badge" title="MM badge" style="width: 100%;margin: 0 auto 0 auto; display: block; padding-top: 28px;">
                        <h3 class="title-bottom-attached" style="">APPLICATION FOR ADMISSION</h3>
                    </td>
                </tr>
            </table>
                <h2 class="section-heading">APPLICANT\'S INFORMATION</h2>
                <table class="tg" border="1">
                    <tr>
                        <td class="tg-lqy6;" style="text-align: right;">Surname</td>
                        <td class="vertical-align:top; width:74%;">'.$_POST["applicants_surname"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Firstnames</td>
                        <td class="tg-yw4l">'.$_POST["applicants_firstnames"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Preferred Name</td>
                        <td class="tg-yw4l">'.$_POST["applicants_preferred_name"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Gender</td>
                        <td class="tg-yw4l">'.$_POST["applicants_gender"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Date of Birth</td>
                        <td class="tg-yw4l">'.$_POST["applicants_dob"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Age</td>
                        <td class="tg-yw4l">'.$_POST["applicants_age"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Citizenship</td>
                        <td class="tg-yw4l">'.$_POST["applicants_citizenship"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ID or Passport No</td>
                        <td class="tg-yw4l">'.$_POST["applicants_id_passport"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Permanent Residential Address of Applicant</td>
                    </tr>';
                    if(isset($_POST['applicants_estate_number'])){
                        $html .= '<tr>
                            <td class="tg-lqy6">Unit/House Number</td>
                            <td class="tg-yw4l">'.$_POST["applicants_estate_number"].'</td>
                        </tr>';
                    }
                    if(isset($_POST['applicants_estate_name'])){
                        $html .= '<tr>
                            <td class="tg-lqy6">Complex/Estate Name</td>
                            <td class="tg-yw4l">'.$_POST["applicants_estate_name"].'</td>
                        </tr>';
                    }
                    $html .= '
                    <tr>
                        <td class="tg-lqy6">House Number</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_house_number"].'</td>
                    </tr><tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_1"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_postal"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["applicants_address_country"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Cell Phone (if available)</td>
                        <td class="tg-yw4l">'.$_POST["applicants_cell"].'</td>
                    </tr>
                </table>
                <h2 class="section-heading">APPLICANT\'S BACKGROUND</h2>
                <table class="tg">
                    <tr>
                        <td class="tg-lqy6">Application for Admission to</td>
                        <td class="tg-yw4l">'.$_POST["application_for_admission_1"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Subject Choice</td>
                        <td class="tg-yw4l">'.$subjects_list.'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">To start in Year</td>
                        <td class="tg-yw4l">'.$_POST["year_to_start"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">To start in</td>
                        <td class="tg-yw4l">'.$_POST["to_start_in"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Academic History</td>
                        <td class="tg-yw4l">'.$_POST["academic_history"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Academics</td>
                        <td class="tg-yw4l">'.$_POST["academic_honours_received"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Sport</td>
                        <td class="tg-yw4l">'.$_POST["sporting_honours_received'"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Extra-Curricular Activities</td>
                        <td class="tg-yw4l">'.$_POST["extra_caurricular_ctivities"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Special circumstances (e.g. ill health, physical disability)</td>
                        <td class="tg-yw4l">'.$_POST["special_circumstances"].'</td>
                    </tr>
                </table>
                <h2 class="section-heading">PARTICULARS OF PARENTS</h2>
                <table class="tg">
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">PARENT 1</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Full Name</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_firstname"] . ' '. $_POST["parent_1_lastname"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 ID/Passport Number</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_idno"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Home Phone</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_home_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 mobile Phoner</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_mobile_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Work Phone</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_work_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Additional Contact Number</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_additional_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Email</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_email"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Occupation</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_occupation"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Business Name</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_name"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 1 Type of Business</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_type"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 1 Business Address</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_street_address"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_address_line_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_country"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 1 Business Postal Address <em>(If different to business physical address)</em></td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_street"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_address_line_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">County / State / Region / Province</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_region"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_business_postal_country"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 1 Residential Address</td>
                    </tr>';
                    if(isset($_POST['parrent_1_res_estate_number'])){
                        $html .= '<tr>
                            <td class="tg-lqy6">Unit/House Number</td>
                            <td class="tg-yw4l">'.$_POST["parrent_1_res_estate_number"].'</td>
                        </tr>';
                    }
                    if(isset($_POST['parrent_1_res_estate_name'])){
                        $html .= '<tr>
                            <td class="tg-lqy6">Complex/Estate Name</td>
                            <td class="tg-yw4l">'.$_POST["parrent_1_res_estate_name"].'</td>
                        </tr>';
                    }
                    $html .= '
                    <tr>
                        <td class="tg-lqy6">House Number</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_house_number"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_street_address"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_address_line_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code </td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_street_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_res_country"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 1 Postal Address <em>(If different to residential address)</em></td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">'.$_POST["parrent_2_postal_type"].'</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_postal_number"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Suite (If applicable)</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_postal_suite"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_postal_address_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code </td>
                        <td class="tg-yw4l">'.$_POST["parent_1_postal_address_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_1_postal_address_country"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">PARENT 2</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Full Name</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_firstname"] . ' '. $_POST["parent_2_lastname"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ID/Passport Number</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_idno"] .'</td>
                    </tr>
                    '. $parrent_2_address .
                    '
                    <tr>
                        <td class="tg-lqy6">Parent 2 Home Phone</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_home_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 mobile Phoner</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_mobile_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Work Phone</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_work_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Additional Contact Number</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_additional_phone"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Email</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_email"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Occupation</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_occupation"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Business Name</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_name"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Parent 2 Type of Business</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_type"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 2 Business Address</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_street_address"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_address_line_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_country"].'</td>
                    </tr>
                    <tr>
                        <td class="" colspan="2" style="text-align:center;">Parent 2 Business Postal Address <em>(If different to business physical address)</em></td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Street Address</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_street_address"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Address Line 2</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_address_line_2"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">City</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_city"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">County / State / Region / Province</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_region"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">ZIP / Postal Code</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_postal_code"].'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">Country</td>
                        <td class="tg-yw4l">'.$_POST["parent_2_business_postal_country"].'</td>
                    </tr>'.$sibling_html.'
                </table>
                <h2 class="section-heading">IF PARENTS ARE DIVORCED OR SEPARATED Please indicate:</h2>
                <table class="tg">
                    <tr>
                        <td class="tg-lqy6">- With whom the student lives:</td>
                        <td class="tg-yw4l">'.$_POST["student_lives_with_parent_1"] . ', '. $_POST["student_lives_with_parent_2"]. ', '. $_POST["student_lives_with_parent_3"]. ', '. $_POST["astudent_lives_with_parent_4"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">- Accounts to be addressed to:</td>
                        <td class="tg-yw4l">'.$_POST["account_payer_parent_1"] . ', '. $_POST["account_payer_parent_2"]. ', '. $_POST["account_payer_parent_3"]. ', '. $_POST["account_payer_parent_4"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">- Correspondence to be addressed to:</td>
                        <td class="tg-yw4l">'.$_POST["correspondence_to_parent_1"] . ', '. $_POST["correspondence_to_parent_2"]. ', '. $_POST["correspondence_to_parent_3"]. ', '. $_POST["correspondence_to_parent_4"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">- Reports to be addressed to:</td>
                        <td class="tg-yw4l">'.$_POST["reports_to_parent_1"] . ', '. $_POST["reports_to_parent_2"]. ', '. $_POST["reports_to_parent_3"]. ', '. $_POST["reports_to_parent_4"] .'</td>
                    </tr>
                    <tr>
                        <td class="tg-lqy6">How did you hear about us?</td>
                        <td class="tg-yw4l">'.$_POST["how_did_you_hear_about_us"] .'</td>
                    </tr>
                </table>
        <body>
        <html>';
$pdf_name = $_POST['applicants_surname'].'_'.$_POST['applicants_firstnames'].'_'.$_POST['applicants_id_passport'].'.pdf';
$file_location = $_SERVER['DOCUMENT_ROOT']."/applications/application_forms/".strtolower($pdf_name);

$sql = "INSERT INTO `applications` (`applicants_surname`, `applicants_firstnames`, `applicants_preferred_name`, `applicants_dob`, `applicants_age`, `applicants_id_passport`, `applcaication_form_file`, `date_created`) VALUES ('".mysqli_real_escape_string($conn,$_POST['applicants_surname'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_firstnames'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_preferred_name'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_dob'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_age'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_id_passport'])."', '".mysqli_real_escape_string($conn,strtolower($pdf_name))."', '".date('Y-m-d H:m:s')."')";
$conn->query($sql);

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output($file_location, 'F');

$to = 'mmacademy.notifications@gmail.com,christina@mm.academy';
//$to = 'sobambela@gmail.com';

$subject = 'Application Submitted via mm.academy';

$headers = "From: " . 'no-reply@mm.academy' . "\r\n";
$headers .= "Reply-To: ". 'no-reply@mm.academy' . "\r\n";
$headers .= "CC: christina@mm.academy";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<p>Good day</p>";
$message .= "<p>An application has been submitted through the website.</p>";
$message .= "<p>Please visit <a href='http://www.mm.academy/applications/view_applications.php'>http://www.mm.academy/</a></p>";
$message .= "<p>Regards <br />";
$message .= "MM Academy </p>";


// send the email using php mail()
if( mail($to, $subject, $message, $headers) ) {
    $contact_errors = true;
    error_log( "Mail sent to $email_address", 0 );
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Montgomery &amp; Miller Academy | Educated for Success</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link href='../custom.css' rel='stylesheet' type='text/css'>
    <link href="../countdown_with_background.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="../js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../js/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../js/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="../js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="../js/flexslider/flexslider.css">
    <link rel="stylesheet" href="../js/isotope/isotope.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../js/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fixes.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="../css/icomoon/style.css" type="text/css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- SKIN -->
    <link rel="stylesheet" href="../css/color-scheme/gold.css" type="text/css">


    <link rel='shortcut icon' href='../favicon.ico' type='image/x-icon' />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>
    <![endif]-->




</head>

<body>



    <div class="outer-wrapper">

        <!-- TOPBAR -->
        <div id="top-bar" class="hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-content">
                            <p>Have any questions? <span></span><i class="icon-mobile2"></i> (021) 851 43 81 <span></span>&bull;<span></span> <i class="icon-mail3"></i><a href="#">info@mm.academy</a></p>
                        </div>
                        <div class="nav-social-icons">
                            <ul class="social-icons">
                                <li class="facebook">
                                    <a href="http://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="http://instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div>
   
        <!-- NEWS SECTION
=========================================================================== -->
        <section class="border-bottom-fix" id="news-section">
            <a class="scroll smoothScroll" href="#news-section" title="Next Section">Next Section</a>
            <section class="parallax-bg5 padding60">
                <div class="container home-blog">
                    <!-- <div class="space60"></div> -->
                    <h2 class="text-center section-title-blue">Online Application</h2>
                    <div class="line-gold"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center space40">
                                <h2> You application has been received. </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra-padding" style="padding-bottom: 20px;"></div>
            </section>
        </section>

    <!-- FOOTER -->
    <footer>

    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>&copy; Copyright 2016. Montgomery & Miller Academy (Pty) Ltd.</p>
                </div>
                <div class="col-md-4">
                    <div class="f-social pull-right">
                        <a class="fa fa-instagram" href="#"></a>
                        <a class="fa fa-facebook" href="#"></a>
                        <!-- <a class="fa fa-linkedin" href="#"></a>
                        <a class="fa fa-dribbble" href="#"></a>
                        <a class="fa fa-google-plus" href="#"></a>
                        <a class="fa fa-skype" href="#"></a>
                        <a class="fa fa-behance" href="#"></a>
                        <a class="fa fa-stumbleupon" href="#"></a>
                        <a class="fa fa-rss" href="#"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Plugins -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/loader.js"></script>
    <script src="../js/owl-carousel/owl.carousel.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/isotope/isotope.pkgd.js"></script>
    <script src="../js/jflickrfeed.min.js"></script>
    <script src="../js/tweecool.js"></script>
    <script src="../js/flexslider/jquery.flexslider.js"></script>
    <script src="../js/easypie/jquery.easypiechart.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.inview.js"></script>
    <!--<script src="../js/jquery.countdown_chris.min.js"></script>-->
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.matchHeight-min.js"></script>

    <script src="../js/main.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="../js/gmaps/greyscale.js"></script>


    <!-- <script type="text/javascript" src="../http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="../js/smoothscroll.js"></script>


    <!--      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script> -->
<script src="../js/countdown_with_background.js" type="text/javascript"></script>
<script src="../js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script>

	
</script>

</body>

</html>
