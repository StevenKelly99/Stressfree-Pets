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
    public function setCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @return mixed
     */
    public function setNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @return mixed
     */
    public function setExpiry()
    {
        return $this->expiry;
    }


}