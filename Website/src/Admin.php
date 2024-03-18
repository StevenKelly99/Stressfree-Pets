<?php

namespace src;
include "User.php";

class Admin extends User
{
   protected $adminId;
   protected $username;


    public function __construct()
    {
        $this->username = new User();
    }



    /**
     * @return mixed
     */

    /**
     * @return mixed
     */

    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }
    function get_user($user)
    {
        $user = $this->username;
        return parent::get_user($user);
    }


}