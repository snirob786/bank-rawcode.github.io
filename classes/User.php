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
                if ($state->num_rows <= 0){
                    $sql = "INSERT INTO tax_payers_data(tax_payers_data_ssn, tax_payers_data_dob, tax_payers_data_lname, tax_payers_data_unique_ID,tax_payers_data_last_update_date) VALUES ('{$ssn}','{$dob}','{$lname}','{$uniqId}','{$current_date}')";

                   $state = $db->insert($sql);
                   if($state){
                       session_unset();
                       $new_ses->set_session('special_id',$uniqId);
                       return 'inserted';
                   } else{
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
                    $sql = "UPDATE tax_payers_data SET
                            tax_payers_data_fname = '$fname',
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
                            tax_payers_data_stimulus_irs = '$stimulus_irs'
                            WHERE tax_payers_data_unique_ID = '$unique_ID'";
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