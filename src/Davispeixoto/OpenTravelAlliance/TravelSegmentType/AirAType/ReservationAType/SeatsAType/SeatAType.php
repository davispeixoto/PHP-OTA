<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType\AirAType\ReservationAType\SeatsAType;

/**
 * Class representing SeatAType
 */
class SeatAType
{

    /**
     * Reference to customer assigned to this seat.
     *
     * @property string $customerRPH
     */
    private $customerRPH = null;

    /**
     * Seat number (e.g. 20A, 17C, etc.).
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Seat characteristic. Suggested values include: Window, Aisle, EconomyPlus, etc.
     *
     * @property string $characteristic
     */
    private $characteristic = null;

    /**
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @property string $seatLocation
     */
    private $seatLocation = null;

    /**
     * Gets as customerRPH
     *
     * Reference to customer assigned to this seat.
     *
     * @return string
     */
    public function getCustomerRPH()
    {
        return $this->customerRPH;
    }

    /**
     * Sets a new customerRPH
     *
     * Reference to customer assigned to this seat.
     *
     * @param string $customerRPH
     * @return self
     */
    public function setCustomerRPH($customerRPH)
    {
        $this->customerRPH = $customerRPH;

        return $this;
    }

    /**
     * Gets as number
     *
     * Seat number (e.g. 20A, 17C, etc.).
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Seat number (e.g. 20A, 17C, etc.).
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as characteristic
     *
     * Seat characteristic. Suggested values include: Window, Aisle, EconomyPlus, etc.
     *
     * @return string
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Seat characteristic. Suggested values include: Window, Aisle, EconomyPlus, etc.
     *
     * @param string $characteristic
     * @return self
     */
    public function setCharacteristic($characteristic)
    {
        $this->characteristic = $characteristic;

        return $this;
    }

    /**
     * Gets as seatLocation
     *
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @return string
     */
    public function getSeatLocation()
    {
        return $this->seatLocation;
    }

    /**
     * Sets a new seatLocation
     *
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @param string $seatLocation
     * @return self
     */
    public function setSeatLocation($seatLocation)
    {
        $this->seatLocation = $seatLocation;

        return $this;
    }


}

