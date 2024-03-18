<?php

namespace src;

class Booking
{
    protected $date;
    protected $time;
    protected $bookingId;

    /**
     * @param $bookingId
     */
    public function __construct($bookingId)
    {
        $this->bookingId = $bookingId;
    }


    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }

    /**
     * @param mixed $bookingId
     */
    public function setBookingId($bookingId): void
    {
        $this->bookingId = $bookingId;
    }


}