<?php

namespace HotelBooking;

require_once __DIR__ . '/includes/hotel.php';
require_once __DIR__ . '/includes/luxuryhotel.php';
require_once __DIR__ . '/includes/budgethotel.php';


// Example usage
$luxuryHotel = new LuxuryHotel();
$luxuryHotel->setName("Hotel Murah");
$luxuryHotel->setLocation("Kota Malang");
$luxuryHotel->setCustomerName("Fakhrusy");
$luxuryHotel->setNumNights(5);
$luxuryHotel->setNumRooms(1);

$totalCost = $luxuryHotel->calculateTotalCost($luxuryHotel->getNumNights(), $luxuryHotel->getNumRooms());

echo "Booking Details:\n";
echo "Hotel Name: " . $luxuryHotel->getName() . "\n";
echo "Location: " . $luxuryHotel->getLocation() . "\n";
echo "Customer Name: " . $luxuryHotel->getCustomerName() . "\n";
echo "Number of Nights: " . $luxuryHotel->getNumNights() . "\n";
echo "Number of Rooms: " . $luxuryHotel->getNumRooms() . "\n";
echo "Total Cost: $" . $totalCost . "\n";
