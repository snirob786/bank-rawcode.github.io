<?php
    include_once "../init.php";




    class User{

        private $error = false;



        public function is_there($data){

            $new_ses = new Session();
            $db = new DB();

            $lname = ucfirst($db->real_escape($data['lname']));
            $ssn = $db->real_escape($data['ssn']);
            $dob = date("Y-m-d", strtotime($data['dob']));
            $current_date = date("Y-m-d H:i:s");
            $uniqId = uniqid();


            if(empty($dob) || empty($lname) || empty($ssn)){
                $this->error = true;
                return 'empty_fields';
            } else if( !is_numeric($ssn)){
                $this->error = true;
                return 'ssn_numeric';
            } else if (strlen($ssn) != 9){
                $this->error = true;
                return 'ssn_not_equal_nine';
            } else if( preg_match("/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/", str_replace('-', '', $ssn)) ){
                $this->error = true;
                return 'valid_ssn';

            }


            if ($this->error === false){
                $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_ssn = '$ssn'";
                $state = $db->select($sql);
                if ($state->num_rows === 0){
                    $sql = "INSERT INTO tax_payers_data(tax_payers_data_ssn, tax_payers_data_dob, tax_payers_data_lname, tax_payers_data_unique_ID,tax_payers_data_last_update_date) VALUES ('{$ssn}','{$dob}','{$lname}','{$uniqId}','{$current_date}')";
                   $state = $db->insert($sql);
                   if($state){
                       session_unset();
                       $new_ses->set_session('special_id',$uniqId);
                       return 'inserted';
                   }
                    else{
                        return $db->error();
                    }
                } else{
                    session_unset();
                    $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_ssn='$ssn'";
                    $result = $db->select($sql);
                    $result_array = $result->fetch_assoc();
                    if($result_array['tax_payers_data_lname'] === $lname && $result_array['tax_payers_data_dob'] === $dob){
                        $new_ses->set_session('special_id',$result_array['tax_payers_data_unique_ID']);
                        return 'already_exist';
                    }elseif ($result_array['tax_payers_data_lname'] != $lname){
                        return 'last_name_mismatch';
                    }elseif ($result_array['tax_payers_data_dob'] != $dob){
                        return 'dob_mismatch';
                    }


                }
            }


        }

        public function updater_personal($data)
        {
            $new_ses = new Session();
            $db = new DB();

            // Data Decleration:
            $fname = $db->real_escape($data['fname']);
            $mname = $db->real_escape($data['mname']);
            $lname = $db->real_escape($data['lname']);
            $dob = date("Y-m-d", strtotime($data['dob']));
            $ocupation = $db->real_escape($data['ocupation']);
            $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
            $phone = $db->real_escape($data['phone']);
            $spfname = $db->real_escape($data['spfname']);
            $spmname = $db->real_escape($data['spmname']);
            $splname = $db->real_escape($data['splname']);
            $spssn = $db->real_escape($data['spssn']);
            $spdob = date("Y-m-d", strtotime($data['spdob']));
            $spocupation = $db->real_escape($data['spocupation']);
            $spphone = $db->real_escape($data['spphone']);
            $spemail = filter_var($data['spemail'], FILTER_SANITIZE_EMAIL);
            $street = $db->real_escape($data['street']);
            $apt = $db->real_escape($data['apt']);
            $city = $db->real_escape($data['city']);
            $state = $db->real_escape($data['state']);
            $zip = $db->real_escape($data['zip']);


            $isblind = $data['isblind'];
            $isspblind = $data['isspblind'];
            $isdisable = $data['isdisable'];
            $isspdisable = $data['isspdisable'];
            $marital_status = $data['marital_status'];
            $spousedead = $db->real_escape($data['spousedead']);
//            $filejointly = $data['filejointly'];


            //Starting of select options:
            $addresschange = $data['addresschange'];
            $claimeddependant = $data['claimeddependant'];
            $notifiedirs = $data['notifiedirs'];
            $permdisabled = $data['permdisabled'];
            $healthinsurance = $data['healthinsurance'];
            $marketplace = $data['marketplace'];
            $rentfrom = $data['rentfrom'];
            $foreignbankaccount = $data['foreignbankaccount'];
            $immediatefamilyadoptaion = $data['immediatefamilyadoptaion'];
            $moreforeignfinance = $data['moreforeignfinance'];
            $foreignincome = $data['foreignincome'];
            $pensionplan = $data['pensionplan'];
            $msa_has = $data['msa_has'];
            $digitalcurrency = $data['digitalcurrency'];
            $interestonstudentloan = $data['interestonstudentloan'];
            $tutionform1098 = $data['tutionform1098'];
            $dependantqtp = $data['dependantqtp'];
            $techvehicle = $data['techvehicle'];
            $energyproperty = $data['energyproperty'];
            $moreforeignfinance = $data['moreforeignfinance'];
            $purchasenewhome = $data['purchasenewhome'];
            $didusell = $data['didusell'];
            $donate_charitable = $data['donate_charitable'];
            $debtscancelled = $data['debtscancelled'];
            $bankruptcy = $data['bankruptcy'];
            $additional_note = $data['additional_note'];
            $current_date = date("Y-m-d H:i:s");
            $stimulus_irs = $data['stimulus_irs'];

//                     New Update December 2021
            $spstreet = $data['spstreet'];
            $spapt = $data['spapt'];
            $spcity = $data['spcity'];
            $spstate = $data['spstate'];
            $spzip = $data['spzip'];
            $rcvalimony = $data['rcvalimony'];
            $rcvalimonyamnt = $data['rcvalimonyamnt'];
            $rcpntssn = $data['rcpntssn'];
            $doseparation = date("Y-m-d", strtotime($data['doseparation']));
            $purchase_health = $data['purchase_health'];
            $ded_retirement = $data['ded_retirement'];
            $pay_domestic = $data['pay_domestic'];
            $pur_new_energy = $data['pur_new_energy'];
            $mem_military = $data['mem_military'];
            $stateofresidency = $data['stateofresidency'];
            $lived_foreign = $data['lived_foreign'];
            $foreigncountryname = $data['foreigncountryname'];
            $rcv_ecn_impact = $data['rcv_ecn_impact'];
            $impactpayments = $data['impactpayments'];
            $impactpaymentsdate = date("Y-m-d", strtotime($data['impactpaymentsdate']));
            $adopted_child = $data['adopted_child'];
            $child_tax_credit = $data['child_tax_credit'];
            $unearned_children = $data['unearned_children'];
            $rollover_retirement_acnt = $data['rollover_retirement_acnt'];
            $installmentsale = $data['installmentsale'];
            $investment_theft = $data['investment_theft'];
            $employee_stock = $data['employee_stock'];
            $dispose_financial_interest = $data['dispose_financial_interest'];
            $contributee_hsa = $data['contributee_hsa'];
            $interest_loan_rv = $data['interest_loan_rv'];
            $taxes_major_purchase = $data['taxes_major_purchase'];
            $work_from_home = $data['work_from_home'];
            $income_sharing_economy = $data['income_sharing_economy'];
            $interest_part_venture = $data['interest_part_venture'];
            $homebuyer_credit = $data['homebuyer_credit'];
            $refinance_mortgage = $data['refinance_mortgage'];
            $substantially_improve_home = $data['substantially_improve_home'];
            $energy_efficient_improvements = $data['energy_efficient_improvements'];
            $child_attending_college = $data['child_attending_college'];
            $atnd_clg_year = $data['atnd_clg_year'];
            $atnd_clg_you_tution = $data['atnd_clg_you_tution'];
            $atnd_clg_you_loan = $data['atnd_clg_you_loan'];
            $atnd_clg_you_books = $data['atnd_clg_you_books'];
            $atnd_clg_student_tution = $data['atnd_clg_student_tution'];
            $atnd_clg_student_loan = $data['atnd_clg_student_loan'];
            $atnd_clg_student_books = $data['atnd_clg_student_books'];
            $tution_for_private = $data['tution_for_private'];
            $tution_for_private_stud = $data['tution_for_private_stud'];
            $tution_for_private_amount = $data['tution_for_private_amount'];
            $tution_for_private_schl = $data['tution_for_private_schl'];
            $depcare = $data['depcare'];
            $depcare_prov = $data['depcare_prov'];
            $depcare_prov_ssn = $data['depcare_prov_ssn'];
            $depcare_prov_add = $data['depcare_prov_add'];
            $depcare_prov_amnt = $data['depcare_prov_amnt'];
            $first_install_fed_date = date("Y-m-d", strtotime($data['first_install_fed_date']));
            $first_install_fed = $data['first_install_fed'];
            $first_install_state_date = date("Y-m-d", strtotime($data['first_install_state_date']));
            $first_install_state = $data['first_install_state'];
            $second_install_fed_date = date("Y-m-d", strtotime($data['second_install_fed_date']));
            $second_install_fed = $data['second_install_fed'];
            $second_install_state_date = date("Y-m-d", strtotime($data['second_install_state_date']));
            $second_install_state = $data['second_install_state'];
            $third_install_fed_date = date("Y-m-d", strtotime($data['third_install_fed_date']));
            $third_install_fed = $data['third_install_fed'];
            $third_install_state_date = date("Y-m-d", strtotime($data['third_install_state_date']));
            $third_install_state = $data['third_install_state'];
            $fourth_install_fed_date = date("Y-m-d", strtotime($data['fourth_install_fed_date']));
            $fourth_install_fed = $data['fourth_install_fed'];
            $fourth_install_state_date = date("Y-m-d", strtotime($data['fourth_install_state_date']));
            $fourth_install_state = $data['fourth_install_state'];
            $overpay_install_fed = $data['overpay_install_fed'];
            $overpay_install_state = $data['overpay_install_state'];
            $pay_rec_july = $data['pay_rec_july'];
            $pay_rec_august = $data['pay_rec_august'];
            $pay_rec_sept = $data['pay_rec_sept'];
            $pay_rec_oct = $data['pay_rec_oct'];
            $pay_rec_nov = $data['pay_rec_nov'];
            $pay_rec_dec = $data['pay_rec_dec'];
            $tax_initial_sig = $data['tax_initial_sig'];
            $tax_sp_initial_sig = $data['tax_sp_initial_sig'];
            $sign_date = date("Y-m-d", strtotime($data['sign_date']));
            $w2_form = array_index_exist_checker($data,'w2_form');
            $a1095_form = array_index_exist_checker($data,'a1095_form');
            $new_client_last_copy = array_index_exist_checker($data,'new_client_last_copy');
            $not_to_fill_out_org = array_index_exist_checker($data,'not_to_fill_out_org');
            $copy_closing_state = array_index_exist_checker($data,'copy_closing_state');
            $mile_fig_auto = array_index_exist_checker($data,'mile_fig_auto');
            $detail_any_tax_made = array_index_exist_checker($data,'detail_any_tax_made');
            $inc_ded_cat = array_index_exist_checker($data,'inc_ded_cat');
            $list_item_ded_cat = array_index_exist_checker($data,'list_item_ded_cat');
            $copy_all_acknow = array_index_exist_checker($data,'copy_all_acknow');

            $unique_ID =  $new_ses->get_session('special_id');


            if (empty($fname) || empty($lname) || empty($dob) || empty($marital_status)){
                $this->error = true;
                return 'empty_fields';
            }else if( preg_match("/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/", str_replace('-', '', $spssn)) ){
                $this->error = true;
                return 'invalid_spssn';
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->error = true;
                return 'invalid_email';
            }else{
                if ($this->error === false){
                    $sql = "UPDATE tax_payers_data
SET    tax_payers_data_fname = '$fname',
       tax_payers_data_mname = '$mname',
       tax_payers_data_lname = '$lname',
       tax_payers_data_dob = '$dob',
       tax_payers_data_ocupation = '$ocupation',
       tax_payers_data_phone = '$phone',
       tax_payers_data_email = '$email',
       tax_payers_data_spfname = '$spfname',
       tax_payers_data_spmname = '$spmname',
       tax_payers_data_splname = '$splname',
       tax_payers_data_spssn = '$spssn',
       tax_payers_data_spdob = '$spdob',
       tax_payers_data_spocupation = '$spocupation',
       tax_payers_data_spphone = '$spphone',
       tax_payers_data_spemail = '$spemail',
       tax_payers_data_street = '$street',
       tax_payers_data_apt = '$apt',
       tax_payers_data_city = '$city',
       tax_payers_data_state = '$state',
       tax_payers_data_zip = '$zip',
       tax_payers_data_isblind = '$isblind',
       tax_payers_data_isspblind = '$isspblind',
       tax_payers_data_isdisable = '$isdisable',
       tax_payers_data_isspdisable = '$isspdisable',
       tax_payers_data_marital_status = '$marital_status',
       tax_payers_data_spousedead = '$spousedead',
       tax_payers_data_addresschange = '$addresschange',
       tax_payers_data_claimeddependant = '$claimeddependant',
       tax_payers_data_notifiedirs = '$notifiedirs',
       tax_payers_data_permdisabled = '$permdisabled',
       tax_payers_data_healthinsurance = '$healthinsurance',
       tax_payers_data_marketplace = '$marketplace',
       tax_payers_data_rentfrom = '$rentfrom',
       tax_payers_data_foreignbankaccount = '$foreignbankaccount',
       tax_payers_data_immediatefamilyadoptaion = '$immediatefamilyadoptaion',
       tax_payers_data_moreforeignfinance = '$moreforeignfinance',
       tax_payers_data_foreignincome = '$foreignincome',
       tax_payers_data_pensionplan = '$pensionplan',
       tax_payers_data_msa_has = '$msa_has',
       tax_payers_data_digitalcurrency = '$digitalcurrency',
       tax_payers_data_interestonstudentloan = '$interestonstudentloan',
       tax_payers_data_tutionform1098 = '$tutionform1098',
       tax_payers_data_dependantqtp = '$dependantqtp',
       tax_payers_data_techvehicle = '$techvehicle',
       tax_payers_data_energyproperty = '$energyproperty',
       tax_payers_data_moreforeignfinance = '$moreforeignfinance',
       tax_payers_data_purchasenewhome = '$purchasenewhome',
       tax_payers_data_didusell = '$didusell',
       tax_payers_data_donate_charitable = '$donate_charitable',
       tax_payers_data_debtscancelled = '$debtscancelled',
       tax_payers_data_bankruptcy = '$bankruptcy',
       tax_payers_data_additional_note = '$additional_note',
       tax_payers_data_last_update_date = '$current_date',
       tax_payers_data_stimulus_irs = '$stimulus_irs',
       tax_payers_data_spstreet = '$spstreet',
       tax_payers_data_spapt = '$spapt',
       tax_payers_data_spcity = '$spcity',
       tax_payers_data_spstate = '$spstate',
       tax_payers_data_spzip = '$spzip',
       tax_payers_data_rcvalimony = '$rcvalimony',
       tax_payers_data_rcvalimonyamnt = '$rcvalimonyamnt',
       tax_payers_data_rcpntssn = '$rcpntssn',
       tax_payers_data_doseparation = '$doseparation',
       tax_payers_data_purchase_health = '$purchase_health',
       tax_payers_data_ded_retirement = '$ded_retirement',
       tax_payers_data_pay_domestic = '$pay_domestic',
       tax_payers_data_pur_new_energy = '$pur_new_energy',
       tax_payers_data_mem_military = '$mem_military',
       tax_payers_data_stateofresidency = '$stateofresidency',
       tax_payers_data_lived_foreign = '$lived_foreign',
       tax_payers_data_foreigncountryname = '$foreigncountryname',
       tax_payers_data_rcv_ecn_impact = '$rcv_ecn_impact',
       tax_payers_data_impactpayments = '$impactpayments',
       tax_payers_data_impactpaymentsdate = '$impactpaymentsdate',
       tax_payers_data_adopted_child = '$adopted_child',
       tax_payers_data_child_tax_credit = '$child_tax_credit',
       tax_payers_data_unearned_children = '$unearned_children',
       tax_payers_data_rollover_retirement_acnt = '$rollover_retirement_acnt',
       tax_payers_data_installmentsale = '$installmentsale',
       tax_payers_data_investment_theft = '$investment_theft',
       tax_payers_data_employee_stock = '$employee_stock',
       tax_payers_data_dispose_financial_interest =
       '$dispose_financial_interest',
       tax_payers_data_contributee_hsa = '$contributee_hsa',
       tax_payers_data_interest_loan_rv = '$interest_loan_rv',
       tax_payers_data_taxes_major_purchase = '$taxes_major_purchase',
       tax_payers_data_work_from_home = '$work_from_home',
       tax_payers_data_income_sharing_economy = '$income_sharing_economy',
       tax_payers_data_interest_part_venture = '$interest_part_venture',
       tax_payers_data_homebuyer_credit = '$homebuyer_credit',
       tax_payers_data_refinance_mortgage = '$refinance_mortgage',
       tax_payers_data_substantially_improve_home =
       '$substantially_improve_home',
       tax_payers_data_energy_efficient_improvements =
       '$energy_efficient_improvements',
       tax_payers_data_child_attending_college = '$child_attending_college',
       tax_payers_data_atnd_clg_year = '$atnd_clg_year',
       tax_payers_data_atnd_clg_you_tution = '$atnd_clg_you_tution',
       tax_payers_data_atnd_clg_you_loan = '$atnd_clg_you_loan',
       tax_payers_data_atnd_clg_you_books = '$atnd_clg_you_books',
       tax_payers_data_atnd_clg_student_tution = '$atnd_clg_student_tution',
       tax_payers_data_atnd_clg_student_loan = '$atnd_clg_student_loan',
       tax_payers_data_atnd_clg_student_books = '$atnd_clg_student_books',
       tax_payers_data_tution_for_private = '$tution_for_private',
       tax_payers_data_tution_for_private_stud = '$tution_for_private_stud',
       tax_payers_data_tution_for_private_amount = '$tution_for_private_amount',
       tax_payers_data_tution_for_private_schl = '$tution_for_private_schl',
       tax_payers_data_depcare = '$depcare',
       tax_payers_data_depcare_prov = '$depcare_prov',
       tax_payers_data_depcare_prov_ssn = '$depcare_prov_ssn',
       tax_payers_data_depcare_prov_add = '$depcare_prov_add',
       tax_payers_data_depcare_prov_amnt = '$depcare_prov_amnt',
       tax_payers_data_first_install_fed_date = '$first_install_fed_date',
       tax_payers_data_first_install_fed = '$first_install_fed',
       tax_payers_data_first_install_state_date = '$first_install_state_date',
       tax_payers_data_first_install_state = '$first_install_state',
       tax_payers_data_second_install_fed_date = '$second_install_fed_date',
       tax_payers_data_second_install_fed = '$second_install_fed',
       tax_payers_data_second_install_state_date = '$second_install_state_date',
       tax_payers_data_third_install_fed_date = '$third_install_fed_date',
       tax_payers_data_third_install_fed = '$third_install_fed',
       tax_payers_data_third_install_state_date = '$third_install_state_date',
       tax_payers_data_third_install_state = '$third_install_state',
       tax_payers_data_fourth_install_fed_date = '$fourth_install_fed_date',
       tax_payers_data_fourth_install_fed = '$fourth_install_fed',
       tax_payers_data_fourth_install_state_date = '$fourth_install_state_date',
       tax_payers_data_fourth_install_state = '$fourth_install_state',
       tax_payers_data_overpay_install_fed = '$overpay_install_fed',
       tax_payers_data_overpay_install_state = '$overpay_install_state',
       tax_payers_data_pay_rec_july = '$pay_rec_july',
       tax_payers_data_pay_rec_august = '$pay_rec_august',
       tax_payers_data_pay_rec_sept = '$pay_rec_sept',
       tax_payers_data_pay_rec_oct = '$pay_rec_oct',
       tax_payers_data_pay_rec_nov = '$pay_rec_nov',
       tax_payers_data_pay_rec_dec = '$pay_rec_dec',
       tax_payers_data_tax_initial_sig = '$tax_initial_sig',
       tax_payers_data_tax_sp_initial_sig = '$tax_sp_initial_sig',
       tax_payers_data_sign_date = '$sign_date',
       tax_payers_data_w2_form = '$w2_form',
       tax_payers_data_a1095_form = '$a1095_form',
       tax_payers_data_new_client_last_copy = '$new_client_last_copy',
       tax_payers_data_not_to_fill_out_org = '$not_to_fill_out_org',
       tax_payers_data_copy_closing_state = '$copy_closing_state',
       tax_payers_data_mile_fig_auto = '$mile_fig_auto',
       tax_payers_data_detail_any_tax_made = '$detail_any_tax_made',
       tax_payers_data_inc_ded_cat = '$inc_ded_cat',
       tax_payers_data_list_item_ded_cat = '$list_item_ded_cat',
       tax_payers_data_copy_all_acknow = '$copy_all_acknow'
WHERE  tax_payers_data_unique_id = '$unique_ID' ";

                    $result = $db->update($sql);
                    if ($result){
                        return 'updated';
                    } else{
                        return 'not_updated';
                    }
                }
            }
            
        }



        public function dep_updater($data, $counter){
            $new_ses = new Session();
            $db = new DB();
            $this->error = false;
            $unique_ID =  $new_ses->get_session('special_id');



            for($i = 1; $i<=$counter;$i++){
                $depname = $db->real_escape($data['depname'.$i]);
                $deprel = $db->real_escape($data['deprel'.$i]);
                $depdob = date("Y-m-d", strtotime($data['depdob'.$i]));
                $depssn = $db->real_escape($data['depssn'.$i]);
                $deplived = $db->real_escape($data['deplived'.$i]);
                $depdsiabled = $data['depdsiabled'.$i];
                $depfullstudent = $data['depfullstudent'.$i];
                $current_date = date("Y-m-d H:i:s");
                $uniqId = uniqid();

                if( preg_match("/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/", str_replace('-', '',$depssn )) ){
                    $this->error = true;
                    return 'invalid_depssn';
                }else{
                    if ($this->error == false){

                        $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_unique_ID='$unique_ID'";
                        $result = $db->select($sql);
                        $result_array = $result->fetch_assoc();
                        $ssn = $result_array['tax_payers_data_ssn'];

                        $sql = "SELECT * FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_depssn='$depssn' AND tax_payers_dependants_data_owner_ssn = '$ssn'";
                        $result = $db->select($sql);

                        if ($result->num_rows > 0 ){
                            $sql= "UPDATE tax_payers_dependants_data SET
                            tax_payers_dependants_data_depname = '$depname',
                            tax_payers_dependants_data_rel = '$deprel',
                            tax_payers_dependants_data_depdob = '$depdob',
                            tax_payers_dependants_data_depssn = '$depssn',
                            tax_payers_dependants_data_deplived = '$deplived',
                            tax_payers_dependants_data_depdsiabled = '$depdsiabled',
                            tax_payers_dependants_data_depfullstudent = '$depfullstudent',
                            tax_payers_dependants_data_last_update_date = '$current_date'";
                            $result = $db->update($sql);
                        }else{
                            $sql = "INSERT INTO tax_payers_dependants_data(tax_payers_dependants_data_depname,tax_payers_dependants_data_rel, tax_payers_dependants_data_depdob, tax_payers_dependants_data_depssn, tax_payers_dependants_data_deplived,tax_payers_dependants_data_depdsiabled,tax_payers_dependants_data_depfullstudent,tax_payers_dependants_data_owner_ssn,tax_payers_dependants_data_last_update_date,tax_payers_dependants_data_unique_id) VALUES ('{$depname}','{$deprel}','{$depdob}','{$depssn}','{$deplived}','{$depdsiabled}','{$depfullstudent}','{$ssn}','{$current_date}','{$uniqId}')";
                            $state = $db->insert($sql);
                        }

                    }
                }

            }
        }


        
    }

$user = new User();