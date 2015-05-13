<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResStatusNotifRQ;

use Davispeixoto\OpenTravelAlliance\VehicleResRSCoreType;

/**
 * Class representing VehResStatusNotifRQCoreAType
 */
class VehResStatusNotifRQCoreAType extends VehicleResRSCoreType
{

    /**
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 code such
     * as an IATA status code.
     *
     * @property string $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Gets as reservationStatus
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 code such
     * as an IATA status code.
     *
     * @return string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 code such
     * as an IATA status code.
     *
     * @param string $reservationStatus
     * @return self
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }


}

