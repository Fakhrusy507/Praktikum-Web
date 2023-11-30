<?php

namespace HotelBooking;

// Class for a budget hotel type
class BudgetHotel extends Hotel
{
    use BookingDetails;

    // Implementation of abstract method
    public function calculateTotalCost($numNights, $numRooms)
    {
        return $this->roomRate * $numNights * $numRooms;
    }
}
