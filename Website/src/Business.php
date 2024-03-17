<?php

namespace src;

use src\User;

class Business extends User

{
    protected $businessName;
    protected $streetAddress;
    protected $city;
    protected $county;
    protected $phoneNumber;
    protected $serviceProvided;
    protected $certQualification;
    protected $certProof;
    protected $images;
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
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getServiceProvided()
    {
        return $this->serviceProvided;
    }

    /**
     * @return mixed
     */
    public function getCertQualification()
    {
        return $this->certQualification;
    }

    /**
     * @return mixed
     */
    public function getCertProof()
    {
        return $this->certProof;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return mixed
     */

}