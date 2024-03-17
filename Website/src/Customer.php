<?php

namespace src;

use src\User;

class Customer extends User
{
    protected $customerId;
     protected $firstName;
     protected $lastName;
     protected $address;
     protected $dogName;
     protected $dogType;
     protected $dogAge;
     protected $additionalInfo;
     protected $dogPicture;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getDogName()
    {
        return $this->dogName;
    }

    /**
     * @return mixed
     */
    public function getDogType()
    {
        return $this->dogType;
    }

    /**
     * @return mixed
     */
    public function getDogAge()
    {
        return $this->dogAge;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @return mixed
     */
    public function getDogPicture()
    {
        return $this->dogPicture;
    }




}