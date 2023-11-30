<?php

namespace HotelBooking;

// Abstract class for the Hotel
abstract class Hotel
{
    protected $name;
    protected $location;

    // Abstract method to be implemented by child classes
    abstract public function calculateTotalCost($numNights, $numRooms);

    // Getter and setter methods for properties
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }
}

// Trait for handling booking details
trait BookingDetails
{
    protected $customerName;
    protected $numNights;
    protected $numRooms;

    // Getter and setter methods for trait properties
    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getNumNights()
    {
        return $this->numNights;
    }

    public function setNumNights($numNights)
    {
        $this->numNights = $numNights;
    }

    public function getNumRooms()
    {
        return $this->numRooms;
    }

    public function setNumRooms($numRooms)
    {
        $this->numRooms = $numRooms;
    }
}
