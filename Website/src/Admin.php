<?php

namespace src;
include "User.php";

class Admin extends User
{
   protected $adminId;

    /**
     * @param $adminId
     */
    public function __construct($userId,$adminId)
    {
        User::__construct($this->userID);
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
    function get_user($adminId)
    {

        require '../lib/config.php';
        $config = require '../lib/config.php';
        try{
            $pdo = new \PDO($config['database_dsn'], $config['database_user'],$config['database_pass']);
            $query = 'Select * from streesfreepets.admin where (adminId = ?)';
            $stmnt =  $pdo->prepare($query);
            $stmnt ->bindParam(1,$adminId);

            $stmnt->execute();}
        catch (PDOException $exception){
            echo "Error couldnt connect";
        }

        return $stmnt->fetch();

    }


}