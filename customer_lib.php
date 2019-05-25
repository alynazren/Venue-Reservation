<?php

// ================================================ CUSTOMER class ========================================
    class Customer{
        private $name, $email, $contact;

        // ================================ setter function
        public function setName ($name){
            $this->name = $name;
        }

        public function setEmail ($email){
            $this->email = $email;
        }

        public function setContact ($contact){
            $this->contact = $contact;
        }
        // ================================ getter function

        public function getName(){
            return $this->name ;
        }

        public function getEmail(){
            return $this->email ;
        }

        public function getContact(){
            return $this->contact ;
        }
    }

// ============================================= RESERVATION class =========================================



?>