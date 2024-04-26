<?php

namespace src;
 class  User
{
    protected $userID;
    protected $email;
    protected $password;
    public function __construct($userID)
    {

        $this->userID = $userID;
    }

     /**
      * @return mixed
      */
     public function getEmail()
     {
         return $this->email;
     }

     /**
      * @param mixed $email
      */
     public function setEmail($email)
     {
         $this->email = $email;
     }

        public function getPassword()
        {
            return $this->password;
        }/**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

     /**
      * @return mixed
      */
     public function getUserID()
     {
         return $this->userID;
     }

     /**
      * @param mixed $userID
      */
     public function setUserID($userID)
     {
         $this->userID = $userID;
     }
}

