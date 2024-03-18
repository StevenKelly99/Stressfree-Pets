<?php

namespace src;
include "User.php";

class Admin extends User
{
   protected $adminId;

    /**
     * @param $adminId
     */
    public function __construct($adminId)
    {
        User::__construct($this->username,$this->password);
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
    function get_user()
    {

        require '../lib/config.php';
        $config = require '../lib/config.php';
        try{
            $pdo = new \PDO($config['database_dsn'], $config['database_user'],$config['database_pass']);
            $query = 'INSERT INTO testing values(?,?)';
            $stmnt =  $pdo->prepare($query);
            $stmnt ->bindParam(1,$user);
            $stmnt->bindParam(2,$password);
            $stmnt->execute();}
        catch (PDOException $exception){
            echo "Error couldnt connect";
        }
        return $stmnt->fetch();
    }


}