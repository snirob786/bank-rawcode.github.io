<?php

    class Session{
        public function __construct(){
            if (!isset($_SESSION)){
                $this->init_session();
            }
        }


        public function init_session(){
            session_start();
        }


        public function set_session($key,$val){
            $_SESSION[$key] = $val;
        }

        public function get_session($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }
        }

    }
