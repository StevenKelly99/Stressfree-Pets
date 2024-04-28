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
     protected $phoneNumber;

    /**
     * @param $customerId
     */
    public function __construct($userId,$customerId)
    {
        User::__construct($userId);
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */


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
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @param mixed $dogName
     */
    public function setDogName($dogName): void
    {
        $this->dogName = $dogName;
    }

    /**
     * @param mixed $dogType
     */
    public function setDogType($dogType): void
    {
        $this->dogType = $dogType;
    }

    /**
     * @param mixed $dogAge
     */
    public function setDogAge($dogAge): void
    {
        $this->dogAge = $dogAge;
    }

    /**
     * @param mixed $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @param mixed $dogPicture
     */
    public function setDogPicture($dogPicture): void
    {
        $this->dogPicture = $dogPicture;
    }



}