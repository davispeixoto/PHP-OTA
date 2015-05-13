<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType;

/**
 * Class representing BookingInfoAType
 */
class BookingInfoAType
{

    /**
     * The booking status code (e.g., HK, WL, SB). Refer to AIRIMP Chapter 7.
     *
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * The booking status expressed as text (e.g., confirmed, waitlisted, standby).
     *
     * @property string $statusName
     */
    private $statusName = null;

    /**
     * The reservation booking class code.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * The original booking class code, if subsequently upgraded.
     *
     * @property string $originalResBookDesigCode
     */
    private $originalResBookDesigCode = null;

    /**
     * The desired upgrade booking class code.
     *
     * @property string $upgradeResBookDesigCode
     */
    private $upgradeResBookDesigCode = null;

    /**
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType\BookingReferenceIDAType[]
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Gets as statusCode
     *
     * The booking status code (e.g., HK, WL, SB). Refer to AIRIMP Chapter 7.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * The booking status code (e.g., HK, WL, SB). Refer to AIRIMP Chapter 7.
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Gets as statusName
     *
     * The booking status expressed as text (e.g., confirmed, waitlisted, standby).
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Sets a new statusName
     *
     * The booking status expressed as text (e.g., confirmed, waitlisted, standby).
     *
     * @param string $statusName
     * @return self
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * The reservation booking class code.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The reservation booking class code.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as originalResBookDesigCode
     *
     * The original booking class code, if subsequently upgraded.
     *
     * @return string
     */
    public function getOriginalResBookDesigCode()
    {
        return $this->originalResBookDesigCode;
    }

    /**
     * Sets a new originalResBookDesigCode
     *
     * The original booking class code, if subsequently upgraded.
     *
     * @param string $originalResBookDesigCode
     * @return self
     */
    public function setOriginalResBookDesigCode($originalResBookDesigCode)
    {
        $this->originalResBookDesigCode = $originalResBookDesigCode;

        return $this;
    }

    /**
     * Gets as upgradeResBookDesigCode
     *
     * The desired upgrade booking class code.
     *
     * @return string
     */
    public function getUpgradeResBookDesigCode()
    {
        return $this->upgradeResBookDesigCode;
    }

    /**
     * Sets a new upgradeResBookDesigCode
     *
     * The desired upgrade booking class code.
     *
     * @param string $upgradeResBookDesigCode
     * @return self
     */
    public function setUpgradeResBookDesigCode($upgradeResBookDesigCode)
    {
        $this->upgradeResBookDesigCode = $upgradeResBookDesigCode;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType\BookingReferenceIDAType
     * $bookingReferenceID
     */
    public function addToBookingReferenceID(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType\BookingReferenceIDAType $bookingReferenceID
    ) {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType\BookingReferenceIDAType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The PNR reference of the carrier (e.g., marketing, operating, validating).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType\BookingInfoAType\BookingReferenceIDAType[]
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }


}

