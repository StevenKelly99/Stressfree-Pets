<?php

namespace src;


 class  User
{
     protected $username;
     protected $password;

    /**
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }


public function getUsername()
{
    return $this->username;
}/**
 * @param mixed $username
 */
public function setUsername($username)
{
    $this->username = $username;
}/**
 * @return mixed
 */
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


}
