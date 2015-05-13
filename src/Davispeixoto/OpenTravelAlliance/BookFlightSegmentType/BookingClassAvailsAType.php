<?php

namespace Davispeixoto\OpenTravelAlliance\BookFlightSegmentType;

/**
 * Class representing BookingClassAvailsAType
 */
class BookingClassAvailsAType
{

    /**
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * Booking codes available to be sold for a particular flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[]
     * $bookingClassAvail
     */
    private $bookingClassAvail = null;

    /**
     * Gets as cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }

    /**
     * Adds as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType
     * $bookingClassAvail
     */
    public function addToBookingClassAvail(
        \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType $bookingClassAvail
    ) {
        $this->bookingClassAvail[] = $bookingClassAvail;

        return $this;
    }

    /**
     * isset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClassAvail($index)
    {
        return isset($this->bookingClassAvail[$index]);
    }

    /**
     * unset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClassAvail($index)
    {
        unset($this->bookingClassAvail[$index]);
    }

    /**
     * Gets as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[]
     */
    public function getBookingClassAvail()
    {
        return $this->bookingClassAvail;
    }

    /**
     * Sets a new bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[]
     * $bookingClassAvail
     * @return self
     */
    public function setBookingClassAvail(array $bookingClassAvail)
    {
        $this->bookingClassAvail = $bookingClassAvail;

        return $this;
    }


}

