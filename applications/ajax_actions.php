<?php
include 'conn.php';

if( $_POST['same_parent_address'] == 'generate_siblings_html'){
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
                    <div class='ginput_container ginput_container_text'><input name='sibling_1_present_school' id='input_2_46' type='text' value='' class='medium'  tabindex='127' onchange='gf_apply_rules(2,[0]);' onkeyup='clearTimeout(__gf_timeout_handle); __gf_timeout_handle = setTimeout(\"gf_apply_rules(2,[0])\", 300);'   aria-invalid=\"false\" /></div>
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
    echo $html;
    die();
}
