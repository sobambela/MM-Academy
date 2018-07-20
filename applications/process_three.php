<?php
include 'conn.php';
ini_set('max_execution_time', 300);
error_reporting(E_ALL);
// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetFont('dejavusans', '', 10);
// add a page
$pdf->AddPage();

if( $_POST['action'] == 'generate_siblings_html'){
    $num_siblings = $_POST['num_siblings'];
    $html = '';
    for($i = 1; $i <= $num_siblings; $i++){
        $html .= "<li id='$i' style='display: block;' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label gfield_label_before_complex' for='input_2_45_3' >Sibling ".$i." Name:</label>
                    <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_2_45'>
                        <span id='input_2_45_3_container' class='name_first' >
                        <input type='text' name='sibling_".$i."_firstname' id='input_2_45_3' value='' aria-label='First name' tabindex='118'   aria-invalid='false' />
                        <label for='input_2_45_3' >First</label>
                        </span>
                        <span id='input_2_45_6_container' class='name_last' >
                        <input type='text' name='sibling_".$i."_surname' id='input_2_45_6' value='' aria-label='Last name' tabindex='120'   aria-invalid='false' />
                        <label for='input_2_45_6' >Last</label>
                        </span>
                    </div>
                </li>
                <li id='' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label' for='input_2_46' >Sibling ".$i." Present School:</label>
                    <div class='ginput_container ginput_container_text'><input name='sibling_".$i."_present_school' id='input_2_46' type='text' value='' class='medium'  tabindex='127' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout(\"gf_apply_rules(2,[0])\", 300);'   aria-invalid=\"false\" /></div>
                </li>
                <li id='' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label' for='input_2_47' >Sibling ".$i." Present Grade:</label>
                    <div class='ginput_container ginput_container_text'><input name='sibling_".$i."_present_grade' id='input_2_47' type='text' value='' class='medium'  tabindex='129' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout(\"gf_apply_rules(2,[0])\", 300);'   aria-invalid=\"false\" /></div>
                </li>
                <li id='' class='gfield gf_left_half field_sublabel_below field_description_above gfield_visibility_visible' >
                    <label class='gfield_label' for='input_2_53' >Sibling ".$i." Year joining MM Academy:</label>
                    <div class='ginput_container ginput_container_text'><input name='sibling_".$i."_year_joining_mm' id='input_2_53' type='text' value='' class='medium'  tabindex='131' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout(\"gf_apply_rules(2,[0])\", 300);'   aria-invalid=\"false\" /></div>
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
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_firstname"] . ' '. $_POST["sibling_".$i."_surname"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Present School</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_present_school"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Present Grade</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_present_grade"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Sibling '.$i.' Year joining MM Academy</td>
                            <td class="tg-yw4l">'.$_POST["sibling_".$i."_year_joining_mm"].'</td>
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
                            <td class="tg-lqy6">Street Address</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_postal_street_address"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Address Line 2</td>
                            <td class="tg-yw4l">'.$_POST["parent_2_postal_address_line_2"].'</td>
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
            <div style="width:100%;height:190px;background: #475675">
                <img class="vc_single_image-img logo" src="http://www.mm.academy/images/basic/logo-mm-full-new.png" alt="MM badge" title="MM badge" style="width: 100%;margin: 0 auto 0 auto; display: block; padding-top: 28px;">
                <h3 class="title-bottom-attached" style="">APPLICATION FOR ADMISSION</h3>
            </div>
            <div class="wrapper" style="width:100%">
                <div class="inner_wrapper" style="width:80%;border:; margin:0 auto 0 auto;">
                    <h2 class="section-heading">APPLICANT\'S INFORMATION</h2>
                    <table class="tg">
                        <tr>
                            <td class="tg-lqy6">Surname</td>
                            <td class="tg-yw4l">'.$_POST["applicants_surname"].'</td>
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
                        </tr>
                        <tr>
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
                </div>    
                <div class="inner_wrapper" style="width:80%;border:; margin:0 auto 0 auto;">
                    <h2 class="section-heading">APPLICANT\'S BACKGROUND</h2>
                    <table class="tg">
                        <tr>
                            <td class="tg-lqy6">Application for Admission to</td>
                            <td class="tg-yw4l">'.$_POST["application_for_admission_1"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Application for Admission to</td>
                            <td class="tg-yw4l">'.$_POST["application_for_admission_2"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Application for Admission to</td>
                            <td class="tg-yw4l">'.$_POST["application_for_admission_3"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">To start in Year</td>
                            <td class="tg-yw4l">'.$_POST["to_start_in"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">To start in</td>
                            <td class="tg-yw4l">'.$_POST["to_start_in"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Are you interested in boarding?</td>
                            <td class="tg-yw4l">'.$_POST["interested_boarding"].'</td>
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
                            <td class="tg-lqy6">Cultural</td>
                            <td class="tg-yw4l">'.$_POST["cultural_honours_received"].'</td>
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
                </div>    
                <div class="inner_wrapper" style="width:80%;border:; margin:0 auto 0 auto;">
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
                            <td class="tg-lqy6">Street Address</td>
                            <td class="tg-yw4l">'.$_POST["parent_1_postal_street_address"].'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">Address Line 2</td>
                            <td class="tg-yw4l">'.$_POST["parent_1_postal_address_line_2"].'</td>
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
                </div>    
                <div class="inner_wrapper" style="width:80%;border:; margin:0 auto 0 auto;">
                    <h2 class="section-heading">IF PARENTS ARE DIVORCED OR SEPARATED Please indicate:</h2>
                    <table class="tg">
                        <tr>
                            <td class="tg-lqy6">- With whom the student lives:</td>
                            <td class="tg-yw4l">'.$_POST["student_lives_with_parent_1"] . ', '. $_POST["student_lives_with_parent_2"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">- Accounts to be addressed to:</td>
                            <td class="tg-yw4l">'.$_POST["account_payer_parent_1"] . ', '. $_POST["account_payer_parent_2"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">- Correspondence to be addressed to:</td>
                            <td class="tg-yw4l">'.$_POST["correspondence_to_parent_1"] . ', '. $_POST["correspondence_to_parent_2"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">- Reports to be addressed to:</td>
                            <td class="tg-yw4l">'.$_POST["reports_to_parent_1"] . ', '. $_POST["reports_to_parent_2"] .'</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6">How did you hear about us?</td>
                            <td class="tg-yw4l">'.$_POST["how_did_you_hear_about_us"] .'</td>
                        </tr>
                    </table>
                </div>    
                <div class="inner_wrapper" style="width:80%;border:; margin:0 auto 0 auto;">
                    <h2 class="section-heading">Please read through the Terms & Conditions, accept them, and submit your application at the bottom of the page.</h2>
                    <table class="tg">
                        <tr>
                            <td class="" colspan="2">
                                Last revision: October 2015 These Conditions of Entry and Attendance (“Conditions”), duly executed, shall be required to be submitted before the Student is considered for acceptance by MM Academy (the “School”), and shall govern the Student’s attendance at the School, whether at the Early Learning School, Preparatory and/or College, until duly terminated, replaced or renewed by further written agreement between the parties. This agreement is entered into and between: MM Academy (Bedfordview Christian College) (Pty) Ltd, registration number 2003/002059/07 MM Academy (Bedfordview) (Pty) Ltd, registration number 2002/027935/07 MM Academy (Atlantic Seaboard) (Pty) Ltd, registration number 2002/013013/07 MM Academy (Constantia) (Pty) Ltd, registration number 1999/008557/07 MM Academy (Somerset) (Pty) Ltd, registration number 2014/226909/07 MM Academy (Helderfontein) (Pty) Ltd, registration number 2014/066729/07 MM Academy (Durbanville) (Pty) Ltd, registration number 2014/232877/07 MM Academy (Waterfall) (Pty) Ltd, registration number 2009/008607/07 and Mr/Mrs, '. $_POST["parent_1_terms_fullname"] .'
                                (full name and surname of parent/legal guardian) and Mr/Mrs '. $_POST["parent_2_terms_fullname"] .' <em>(full name and surname of second parent/legal guardian)</em> being the parent/guardian of my son/daughter '. $_POST["applicant_full_name_idno"] .' <em>(full name, surname and identity number/passport number of the Student)</em> Instructions to parent/s:
                            </td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">'.$_POST['admission_terms'].'</td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">'.$_POST['terms_2'].'</td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">'.$_POST['terms_3'].'</td>
                        </tr>
                    </table>
                </div>    
            </div>
        <body>
        <html>';
// echo $html; die();
$pdf_name = $_POST['applicants_surname'].'_'.$_POST['applicants_firstnames'].'_'.$_POST['applicants_id_passport'].'.pdf';
$file_location = $_SERVER['DOCUMENT_ROOT']."/applications/application_forms/".strtolower($pdf_name);

$sql = "INSERT INTO `applications` (`applicants_surname`, `applicants_firstnames`, `applicants_preferred_name`, `applicants_dob`, `applicants_age`, `applicants_id_passport`, `applcaication_form_file`, `date_created`) VALUES ('".mysqli_real_escape_string($conn,$_POST['applicants_surname'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_firstnames'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_preferred_name'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_dob'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_age'])."', '".mysqli_real_escape_string($conn,$_POST['applicants_id_passport'])."', '".mysqli_real_escape_string($conn,strtolower($pdf_name))."', '".date('Y-m-d H:m:s')."')";
$conn->query($sql);

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output($file_location, 'I');

$to = 'sobambela@gmail.com';

$subject = 'Application Submitted via mm.academy';

$headers = "From: " . 'no-reply@mm.academy' . "\r\n";
$headers .= "Reply-To: ". 'no-reply@mm.academy' . "\r\n";
$headers .= "CC: christina@mm.academy";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<p>Good day</p>";
$message .= "<p>An application has been submitted through the website.</p>";
$message .= "<p>Please visit <a href='http://wwww.mm.academy/applications/view_applications.php'>http://www.mm.academy/</a></p>";
$message .= "<p>Regards <br />";
$message .= "MM Academy </p>";


// send the email using wp_mail()
if( mail($to, $subject, $message, $headers) ) {
    $contact_errors = true;
    error_log( "Mail sent to $email_address", 0 );
}

