<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SpecificFlightInfoType
 *
 * Specify actual airline, flight number, or booking class
 * XSD Type: SpecificFlightInfoType
 */
class SpecificFlightInfoType
{

    /**
     * Specific flight number to request availability for. Requires that Airline is
     * also supplied.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Specify airline to request availability for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType\BookingClassPrefAType[]
     * $bookingClassPref
     */
    private $bookingClassPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as flightNumber
     *
     * Specific flight number to request availability for. Requires that Airline is
     * also supplied.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * Specific flight number to request availability for. Requires that Airline is
     * also supplied.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify airline to request availability for.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specify airline to request availability for.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Adds as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType\BookingClassPrefAType
     * $bookingClassPref
     */
    public function addToBookingClassPref(
        \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType\BookingClassPrefAType $bookingClassPref
    ) {
        $this->bookingClassPref[] = $bookingClassPref;

        return $this;
    }

    /**
     * isset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClassPref($index)
    {
        return isset($this->bookingClassPref[$index]);
    }

    /**
     * unset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClassPref($index)
    {
        unset($this->bookingClassPref[$index]);
    }

    /**
     * Gets as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType\BookingClassPrefAType[]
     */
    public function getBookingClassPref()
    {
        return $this->bookingClassPref;
    }

    /**
     * Sets a new bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType\BookingClassPrefAType[]
     * $bookingClassPref
     * @return self
     */
    public function setBookingClassPref(array $bookingClassPref)
    {
        $this->bookingClassPref = $bookingClassPref;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

