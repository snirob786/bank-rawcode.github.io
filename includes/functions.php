<?php
function debug($arg){
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
    exit;
}


function filepath(){
    $httpurl = sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );

    return str_ireplace('http://','',$httpurl);
}


function document_root(){
    return $_SERVER['DOCUMENT_ROOT'];
}


function pagetitle(){
    $base_url = ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) );
    if ( $base_url === 'Index'){
        return 'HBC Organizer';
    }else{
        return $base_url;
    }
}


function current_url(){

    $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

    return $url;
}


function get_ssn_display($ssn){
    return $splited_string = substr_replace($ssn,"*****",0,-4);
}


function set_dob_display($dob){
    if(empty($dob) || $dob === NULL){
        return date("Y-m-d", strtotime('0001-00-00'));
    }
    else{
        return date("M d, Y", strtotime($dob));
    }
}

function get_dob_display($dob){
    if(empty($dob) || $dob === date("Y-m-d", strtotime('0001-00-00'))){
        return '';
    }
    else{
        return date("M d, Y", strtotime($dob));
    }
}


function get_ssn_display_dashes($ssn){
    return substr($ssn, 0, 3).'-'.substr($ssn, 3, 2).'-'.substr($ssn,5);
}


function option_selector($matcher, $data){

    if(empty($data) && $matcher != 'file_jointly'){
        echo '<option value="" disabled>Choose your option</option>';
        echo '<option value="yes">Yes</option>';
        echo '<option value="no" selected>No</option>';
    } else{
        echo '<option value="" disabled>Choose your option</option>';
        if ($matcher === 'file_jointly'){
            if ($data === 'no'){
                echo '<option value="yes">Yes</option>';
                echo '<option value="no" selected>No</option>';
            }else{
                echo '<option value="yes" selected>Yes</option>';
                echo '<option value="no">No</option>';
            }

        }else{
            foreach ($matcher as $value){
                if ($value === 'married_filling_jointly'){
                    $text = 'Married Filing Jointly';
                }elseif ($value === 'married_filling_separately'){
                    $text = 'Married Filing Separately';
                }elseif($value === 'head_of_house'){
                    $text = 'Head of household';
                }elseif ($value === 'qualifying_widow'){
                    $text = 'Qualifying widow(er)';
                }else{
                    $text = ucfirst($value);
                }
                if ($data === $value){
                    echo '<option value="'.$value.'" selected>'.$text.'</option>';
                }else{
                    echo '<option value="'.$value.'">'.$text.'</option>';
                }

            }
        }
    }
}

function custom_paid_select($array_datas, $data){

    if(empty($data)){
        echo '<option value="none" selected>None</option>';
        echo '<option value="paid">Paid</option>';
        echo '<option value="received">Received</option>';
    }else{
//        echo '<option value="" disabled>Choose your option</option>';
        foreach ($array_datas as $value){
            if ($value === 'paid'){
                $text = 'Paid';
            }elseif ($value === 'received'){
                $text = 'Received';
            }
            elseif ($value === 'none'){
                $text = 'None';
            }
            else{
                $text = ucfirst($value);
            }
            if ($data === $value){
                echo '<option value="'.$value.'" selected>'.$text.'</option>';
            }else{
                echo '<option value="'.$value.'">'.$text.'</option>';
            }

        }
    }
}



function option_checked($matcher,$data, $data_name){
    foreach ($matcher as $value){
        if (empty($value)){
            $value = "no";
        }
        if ($data === $value){
            echo '<label>';
            echo '<input name="'.$data_name.'" type="radio" class="with-gap" value="'.$value.'" checked/>';
            echo '<span class="white-text">'.$value.'</span>';
            echo '</label>';
        }else{
            echo '<label>';
            echo '<input name="'.$data_name.'" type="radio" class="with-gap" value="'.$value.'" checked/>';
            echo '<span class="white-text">'.$value.'</span>';
            echo '</label>';
        }
    }


}



function admin_data_iteration($current_page,$total_data,$data_per_iteration,$total_num_page,$start_index,$last_index,$tax_payer_result){
    if ( $total_data <1){?>
        <h4>No data Found.</h4>
    <?php }
    else {
        ?>
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>SSN</th>
                    <th>Last Update Date</th>
                    <th>Get Pdf</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
            <?php

            $i = $start_index;
            while ($tax_payer_data = $tax_payer_result->fetch_assoc()) {
                $data[$i] = $tax_payer_data;
                $i++;

                if ($i > $last_index) {
                    break;
                }
                    if (!empty($tax_payer_data['tax_payers_data_last_update_date'])){
                        $update_date = date("M d-Y",strtotime($tax_payer_data['tax_payers_data_last_update_date']));
                    }else{
                        $update_date = '';
                    }

                ?>

                <tr>
                    <td><?php echo $i.".";?></td>
                    <td><?php echo $tax_payer_data['tax_payers_data_fname'] . ' ' . $tax_payer_data['tax_payers_data_mname'] . ' ' . $tax_payer_data['tax_payers_data_lname']; ?></td>
                    <td><?php echo get_ssn_display($tax_payer_data['tax_payers_data_ssn']);?></td>
                    <td><?php echo $update_date;?></td>
                    <td><button id="pdf_btn" class="btn-small waves-effect waves-light blue" type="button"><a class="material-icons white-text" href="/pdf-creator.php?special_id=<?php echo $tax_payer_data['tax_payers_data_unique_ID'];?>">get_app</a></button></td>
                    <td><button id="remove_btn" class="btn-small waves-effect waves-light red" type="button"><a class="material-icons white-text" href="/remove.php?special_id=<?php echo $tax_payer_data['tax_payers_data_unique_ID'];?>">-</a></button></td>
                </tr>

                <?php
            }

            $prev_index = $current_page-1;
            $next_index = $current_page+1;

            ?>
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col s12 l2">
                    <button id="prevBtn" class="btn-small waves-effect waves-light  teal lighten-2" type="button" <?php if ($current_page<=1){echo "disabled";}?>><a href="/admin-dashboard?current_page=<?php echo $prev_index;?>" class="blue-grey-text text-darken-4">Prev</a></button>
                </div>
                <div class="col s12 l8">
                    <?php echo $current_page."/".$total_num_page;?>
                </div>
                <div class="col s12 l2">
                    <button id="nextBtn" class="btn-small waves-effect waves-light  teal lighten-2" type="button" <?php if ($current_page>=$total_num_page){echo "disabled";}?>><a href="/admin-dashboard?current_page=<?php echo $next_index;?>" class="blue-grey-text text-darken-4">Next</a></button>
                </div>
            </div>
        </div>

        <?php
    }
}




function admin_user_data_iteration($current_page,$total_data,$data_per_iteration,$total_num_page,$start_index,$last_index,$admin_data_result){
    if ( $total_data <1){?>
        <h4>No data Found.</h4>
    <?php }
    else {
        ?>

        <table class="highlight responsive-table centered">
            <thead>
            <tr>
                <th>Sl. No.</th>
                <th>User ID</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $i = $start_index;
            while ($admin_data_data = $admin_data_result->fetch_assoc()) {
                $data[$i] = $admin_data_data;
                $i++;

                if ($i > $last_index) {
                    break;
                }
                ?>

                <tr>
                    <td><?php echo $i.".";?></td>
                    <td><?php echo $admin_data_data['admin_information_uid']; ?></td>

                </tr>

                <?php
            }

            $prev_index = $current_page-1;
            $next_index = $current_page+1;

            ?>
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col s12 l2">
                    <button id="prevBtn" class="btn-small waves-effect waves-light  teal lighten-2" type="button" <?php if ($current_page<=1){echo "disabled";}?>><a href="/users?current_page=<?php echo $prev_index;?>" class="blue-grey-text text-darken-4">Prev</a></button>
                </div>
                <div class="col s12 l8">
                    <?php echo $current_page."/".$total_num_page;?>
                </div>
                <div class="col s12 l2">
                    <button id="nextBtn" class="btn-small waves-effect waves-light  teal lighten-2" type="button" <?php if ($current_page>=$total_num_page){echo "disabled";}?>><a href="/users?current_page=<?php echo $next_index;?>" class="blue-grey-text text-darken-4">Next</a></button>
                </div>
            </div>
        </div>

        <?php
    }
}



function pdf_call_function($pdf,$string,$rowNumber,$data){
    $cellWidth = 160;
    $cellHeight = 10;

    if ($pdf->GetStringWidth($string)<$cellWidth){
        $line = 1;
    } else{
        $textLength = strlen($string);
        $errMargin=10;		//cell width error margin, just in case
        $startChar=0;		//character start position for each line
        $maxChar=0;			//maximum character in a line, to be incremented later
        $textArray=array();	//to hold the strings for each line
        $tmpString="";		//to hold the string for a line (temporary)

        while ($startChar<$textLength){
            while($pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) && ($startChar+$maxChar) < $textLength ) {
                $maxChar++;
                $tmpString=substr($string,$startChar,$maxChar);
            }

            //move startChar to next line
            $startChar=$startChar+$maxChar;
            //then add it into the array so we know how many line are needed
            array_push($textArray,$tmpString);
            //reset maxChar and tmpString
            $maxChar=0;
            $tmpString='';
        }

        $line = count($textArray);
    }
    $pdf->Cell(10,10,$rowNumber,0,0,"C");
    $xPox = $pdf->GetX();
    $yPos = $pdf->GetY();
    $pdf->MultiCell($cellWidth,$cellHeight,$string,0,"L");
    $pdf->SetXY($xPox + $cellWidth,$yPos);

    $pdf->Cell(20,($line*$cellHeight),$data,0,1,"C");
}


function pdf_check_generator($pdf,$string,$data){
    $cellWidth = 160;
    $cellHeight = 10;

    if ($pdf->GetStringWidth($string)<$cellWidth){
        $line = 1;
    } else{
        $textLength = strlen($string);
        $errMargin=10;		//cell width error margin, just in case
        $startChar=0;		//character start position for each line
        $maxChar=0;			//maximum character in a line, to be incremented later
        $textArray=array();	//to hold the strings for each line
        $tmpString="";		//to hold the string for a line (temporary)

        while ($startChar<$textLength){
            while($pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) && ($startChar+$maxChar) < $textLength ) {
                $maxChar++;
                $tmpString=substr($string,$startChar,$maxChar);
            }

            //move startChar to next line
            $startChar=$startChar+$maxChar;
            //then add it into the array so we know how many line are needed
            array_push($textArray,$tmpString);
            //reset maxChar and tmpString
            $maxChar=0;
            $tmpString='';
        }

        $line = count($textArray);
    }


    if($data === 'on'){
        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();
        $pdf->SetXY($xPos,$yPos);
        $pdf->setFillColor(0,0,0);
        $pdf->SetDrawColor(255,255,255);
        $pdf->SetLineWidth(5);
        $pdf->Cell(5,7,'','T',0,"C",true);
        $pdf->SetLineWidth(0.2);
        $pdf->MultiCell($cellWidth,$cellHeight,$string,0,"L");

    }else{
        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();
        $pdf->SetXY($xPos,$yPos);
        $pdf->setFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetLineWidth(0.2);
        $pdf->Cell(5,5,'',1,0,"C",true);
        $pdf->SetLineWidth(0.2);
        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();
        $pdf->SetXY($xPos,$yPos-2.5);
        $pdf->MultiCell($cellWidth,$cellHeight,$string,0,"L");
    }
}

//MultiCell with bullet
function pdf_multicellblt($pdf,$blt, $txt)
{
    $w = 190;
    $h = 5;
    $border=0;
    $align='L';
    $fill=false;
    //Get bullet width including margins
    $blt_width = $pdf->GetStringWidth($blt)+$pdf->cMargin*2;

    //Save x
    $bak_x = $pdf->x;

    //Output bullet
    $pdf->Cell($blt_width,$h,$blt,0,'',$fill);

    //Output text
    $pdf->MultiCell($w-$blt_width,$h,$txt,$border,$align,$fill);

    //Restore x
    $pdf->x = $bak_x;
}


function checkbox_toggler($data, $handler){
    if ($data === 'no' || empty($data)){
        echo '<input type="hidden" name="<'.$handler.'" value="no"/>';
        echo '<input type="checkbox" id="'.$handler.'" name="'.$handler.'" value="on"/>';
    } elseif ($data === 'on'){
        echo '<input type="hidden" name="'.$handler.'" value="no"/>';
        echo '<input type="checkbox" id="'.$handler.'" name="'.$handler.'" value="on" checked/>';
    }
}

function array_index_exist_checker($data,$index){
    if (array_key_exists($index, $data)){
        return $data[$index];
    } else{
        return 'no';
    }
}


function total_calc($data,$state){
    $first = $data['tax_payers_data_first_install_'.$state];
    $second = $data['tax_payers_data_second_install_'.$state];
    $third = $data['tax_payers_data_third_install_'.$state];
    $fourth = $data['tax_payers_data_fourth_install_'.$state];
    $overpay = $data['tax_payers_data_overpay_install_'.$state];
    if(empty($first)){
        $first = 0;
    }
    if(empty($second)){
        $second = 0;
    }
    if(empty($third)){
        $third = 0;
    }
    if(empty($fourth)){
        $fourth = 0;
    }
    if(empty($overpay)){
        $overpay = 0;
    }

    $total = $first + $second + $third + $fourth + $overpay;
    return $total;
}