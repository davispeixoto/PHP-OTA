<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRetResRQ;

use Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType;

/**
 * Class representing VehRetResRQCoreAType
 */
class VehRetResRQCoreAType extends VehicleRetrieveResRQCoreType
{

    /**
     * Used to specify the status of the contract.
     *
     * @property string $contractStatus
     */
    private $contractStatus = null;

    /**
     * Used to specify the status of the reservation.
     *
     * @property string $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Gets as contractStatus
     *
     * Used to specify the status of the contract.
     *
     * @return string
     */
    public function getContractStatus()
    {
        return $this->contractStatus;
    }

    /**
     * Sets a new contractStatus
     *
     * Used to specify the status of the contract.
     *
     * @param string $contractStatus
     * @return self
     */
    public function setContractStatus($contractStatus)
    {
        $this->contractStatus = $contractStatus;

        return $this;
    }

    /**
     * Gets as reservationStatus
     *
     * Used to specify the status of the reservation.
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
     * Used to specify the status of the reservation.
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

