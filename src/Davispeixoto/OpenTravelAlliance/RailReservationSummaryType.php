<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailReservationSummaryType
 *
 * Defines the summary data that identifies a reservation. This information also
 * helps in selecting a specific reservation.
 * XSD Type: RailReservationSummaryType
 */
class RailReservationSummaryType
{

    /**
     * The reservation ID number or PNR locator.
     *
     * @property string $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * The date the reservation booking was created.
     *
     * @property \DateTime $dateBooked
     */
    private $dateBooked = null;

    /**
     * The status of the reservation.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType[]
     * $oDInfo
     */
    private $oDInfo = null;

    /**
     * Relevant passenger information for a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as bookingReferenceID
     *
     * The reservation ID number or PNR locator.
     *
     * @return string
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The reservation ID number or PNR locator.
     *
     * @param string $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID($bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Gets as dateBooked
     *
     * The date the reservation booking was created.
     *
     * @return \DateTime
     */
    public function getDateBooked()
    {
        return $this->dateBooked;
    }

    /**
     * Sets a new dateBooked
     *
     * The date the reservation booking was created.
     *
     * @param \DateTime $dateBooked
     * @return self
     */
    public function setDateBooked(\DateTime $dateBooked)
    {
        $this->dateBooked = $dateBooked;

        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the reservation.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the reservation.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as oDInfo
     *
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType
     * $oDInfo
     */
    public function addToODInfo(\Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType $oDInfo)
    {
        $this->oDInfo[] = $oDInfo;

        return $this;
    }

    /**
     * isset oDInfo
     *
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetODInfo($index)
    {
        return isset($this->oDInfo[$index]);
    }

    /**
     * unset oDInfo
     *
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetODInfo($index)
    {
        unset($this->oDInfo[$index]);
    }

    /**
     * Gets as oDInfo
     *
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType[]
     */
    public function getODInfo()
    {
        return $this->oDInfo;
    }

    /**
     * Sets a new oDInfo
     *
     * The rail booking origin/destination summary information contained in the
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType[]
     * $oDInfo
     * @return self
     */
    public function setODInfo(array $oDInfo)
    {
        $this->oDInfo = $oDInfo;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType
     * $passengerInfo
     */
    public function addToPassengerInfo(\Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Relevant passenger information for a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

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

