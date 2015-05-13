<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{

    /**
     * To specify the action to be taken on this information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * To specify booking information for a specific reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     * $bookingSource
     */
    private $bookingSource = null;

    /**
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationType
     * $vehReservation
     */
    private $vehReservation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as processingInfo
     *
     * To specify the action to be taken on this information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * To specify the action to be taken on this information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

        return $this;
    }

    /**
     * Adds as source
     *
     * To specify booking information for a specific reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType
     * $source
     */
    public function addToBookingSource(
        \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType $source
    ) {
        $this->bookingSource[] = $source;

        return $this;
    }

    /**
     * isset bookingSource
     *
     * To specify booking information for a specific reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingSource($index)
    {
        return isset($this->bookingSource[$index]);
    }

    /**
     * unset bookingSource
     *
     * To specify booking information for a specific reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingSource($index)
    {
        unset($this->bookingSource[$index]);
    }

    /**
     * Gets as bookingSource
     *
     * To specify booking information for a specific reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     */
    public function getBookingSource()
    {
        return $this->bookingSource;
    }

    /**
     * Sets a new bookingSource
     *
     * To specify booking information for a specific reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     * $bookingSource
     * @return self
     */
    public function setBookingSource(array $bookingSource)
    {
        $this->bookingSource = $bookingSource;

        return $this;
    }

    /**
     * Gets as vehReservation
     *
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationType
     */
    public function getVehReservation()
    {
        return $this->vehReservation;
    }

    /**
     * Sets a new vehReservation
     *
     * Represents the vehicle rental reservation that was successfully created.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationType $vehReservation
     * @return self
     */
    public function setVehReservation(\Davispeixoto\OpenTravelAlliance\VehicleReservationType $vehReservation)
    {
        $this->vehReservation = $vehReservation;

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

