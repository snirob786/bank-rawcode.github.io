<?php
    include_once "../init.php";


    class Admin {

        private $error = false;

        public function admin_log($data){
            $new_ses = new Session();
            $db = new DB();

            $userid = $db->real_escape($data['userid']);
            $userpass = $db->real_escape($data['userpass']);

            if (empty($userid) || empty($userpass)){
                $this->error = true;
                return 'empty_fields';
            }


            if ($this->error === false){
                $sql = "SELECT * FROM admin_information WHERE admin_information_uid='$userid'";
                $admin_details = $db->select($sql);
                if ($admin_details->num_rows <= 0){
                    $this->error = true;
                    return 'no_data_found';
                } else{
                    $result = $admin_details->fetch_assoc();

                    if (md5($userpass) === $result['admin_information_pass']){
                        session_unset();
                        $new_ses->set_session('user_type','admin');
                        $new_ses->set_session('current_page',1);
                        $new_ses->set_session('special_id',$result['admin_information_unique_id']);

                        email_admin_sender();
                        return 'logged_in';
                    } else{
                        return 'password_mismatch';
                    }

                }
            }

        }


        public function add_new_user($data){
            $new_ses = new Session();
            $db = new DB();
            $userid = $db->real_escape($data['userid']);
            $currentPass = $db->real_escape($data['cpass']);
            $newPass = $db->real_escape($data['newpass']);
            $conPass = $db->real_escape($data['conpass']);
            $uniqId = uniqid();

            //            Current User Data
            $current_specialID = $new_ses->get_session('special_id');
            $sql = "SELECT * FROM admin_information WHERE admin_information_unique_id='$current_specialID'";
            $current_admin_db = $db->select($sql);
            $current_admin_data = $current_admin_db->fetch_assoc();

            //            New User Data Check
            $sql = "SELECT * FROM admin_information WHERE admin_information_uid='$userid'";
            $userDataCheck = $db->select($sql);

            if (empty($userid) || empty($currentPass) || empty($newPass) || empty($conPass)){
                $this->error = true;
                return 'empty_fields';
            } elseif(md5($currentPass) != $current_admin_data['admin_information_pass']){
                $this->error = true;
                return 'current_pass_mismatch';
            }elseif($newPass != $conPass){
                $this->error = true;
                return 'confirm_pass_mismatch';
            }elseif($userDataCheck->num_rows>0){
                $this->error = true;
                return 'already_exist';
            }else{
                $pass = md5($newPass);
                $sql = "INSERT INTO admin_information(admin_information_uid,admin_information_pass,admin_information_unique_id) VALUES ('{$userid}','($pass)','($uniqId)')";
                $state = $db->insert($sql);
                if($state){
                    return 'user_inserted';
                }else{
                    return 'not_inserted';
                }
            }


        }


        public function change_password($data){
            $new_ses = new Session();
            $db = new DB();
            $currentPass = $db->real_escape($data['cpass']);
            $newPass = $db->real_escape($data['newpass']);
            $conPass = $db->real_escape($data['conpass']);
            $current_specialID = $new_ses->get_session('special_id');

            //            Current User Data
            $sql = "SELECT * FROM admin_information WHERE admin_information_unique_id='$current_specialID'";
            $current_admin_db = $db->select($sql);
            $current_admin_data = $current_admin_db->fetch_assoc();

            if (empty($currentPass) || empty($newPass) || empty($conPass)){
                $this->error = true;
                return 'empty_fields';
            } else if (md5($currentPass) != $current_admin_data['admin_information_pass']){
                $this->error = true;
                return 'current_pass_mismatch';
            }elseif($newPass != $conPass){
                $this->error = true;
                return 'confirm_pass_mismatch';
            }else{
                $pass = md5($newPass);
                $sql = "UPDATE admin_information SET
                            admin_information_pass = '$pass'
                        WHERE admin_information_unique_id = '$current_specialID'";
                $state = $db->update($sql);
                if($state){
                    return 'user_updated';
                }else{
                    return 'not_updated';
                }
            }
        }

    }

    $admin = new Admin();
    