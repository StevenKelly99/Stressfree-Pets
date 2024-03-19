<?php

namespace src;

include "User.php";


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
    protected $businessID;

    /**
     * @param $businessID
     */
    public function __construct($businessID)
    {
        User::__construct($this->userID);
        $this->businessID = $businessID;
    }

    /**
     * @param mixed $businessName
     */
    public function setBusinessName($businessName): void
    {
        $this->businessName = $businessName;
    }

    /**
     * @param mixed $streetAddress
     */
    public function setStreetAddress($streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county): void
    {
        $this->county = $county;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param mixed $serviceProvided
     */
    public function setServiceProvided($serviceProvided): void
    {
        $this->serviceProvided = $serviceProvided;
    }

    /**
     * @param mixed $certQualification
     */
    public function setCertQualification($certQualification): void
    {
        $this->certQualification = $certQualification;
    }

    /**
     * @param mixed $certProof
     */
    public function setCertProof($certProof): void
    {
        $this->certProof = $certProof;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }

    /**
     * @param mixed $businessID
     */
    public function setBusinessID($businessID): void
    {
        $this->businessID = $businessID;
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
    function get_business()
    {

        require '../lib/config.php';
        $config = require '../lib/config.php';
        try{
            $pdo = new \PDO($config['database_dsn'], $config['database_user'],$config['database_pass']);
            $query = 'Select * from streesfreepets.businessess';
            $stmnt =  $pdo->prepare($query);


            $stmnt->execute();}
        catch (PDOException $exception){
            echo "Error couldnt connect";
        }
        $business = $stmnt->fetchAll();
        return $business;

    }


}