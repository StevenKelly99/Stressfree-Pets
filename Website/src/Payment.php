<?php

namespace src;

class Payment
{
    protected $cardNumber;
    protected $nameOnCard;

    protected $expiry;

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @return mixed
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @return mixed
     */
    public function getExpiry()
    {
        return $this->expiry;
    }


}