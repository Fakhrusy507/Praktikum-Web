<?php

namespace HotelBooking;

// Class for a specific hotel type
class LuxuryHotel extends Hotel
{
    use BookingDetails;

    protected $roomRate = 1000;

    // Implementation of abstract method
    public function calculateTotalCost($numNights, $numRooms)
    {
        return $this->roomRate * $numNights * $numRooms;
    }
}
