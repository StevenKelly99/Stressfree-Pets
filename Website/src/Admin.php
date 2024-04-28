<?php

namespace src;
include "User.php";

class Admin extends User
{
   protected $adminId;

    /**
     * @param $adminId
     */
    public function __construct($userID,$adminId)
    {
        User::__construct($userID);
        $this->adminId = $adminId;
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
    function get_user(int $adminId)
    {


        try{
            require_once "../src/DBConnect.php";
            $query = 'Select * from admin where (id = :id)';
            $stmnt = $connection->prepare($query);
            $stmnt ->bindParam('id',$adminId);
            $stmnt->execute();
            return $stmnt->fetch();

        }
        catch (PDOException $exception){
            echo "Error couldnt connect";
        }


    }


}