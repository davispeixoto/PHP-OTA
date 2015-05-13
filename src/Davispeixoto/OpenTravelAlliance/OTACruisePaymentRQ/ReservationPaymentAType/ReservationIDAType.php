<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ\ReservationPaymentAType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ReservationIDAType
 */
class ReservationIDAType extends UniqueIDType
{

    /**
     * Specifies the Synchronization date of the record between GDS's and Cruise Line
     * Providers.
     *
     * @property \DateTime $syncDateTime
     */
    private $syncDateTime = null;

    /**
     * Indicates the Reservation status. Refer to OpenTravel Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as syncDateTime
     *
     * Specifies the Synchronization date of the record between GDS's and Cruise Line
     * Providers.
     *
     * @return \DateTime
     */
    public function getSyncDateTime()
    {
        return $this->syncDateTime;
    }

    /**
     * Sets a new syncDateTime
     *
     * Specifies the Synchronization date of the record between GDS's and Cruise Line
     * Providers.
     *
     * @param \DateTime $syncDateTime
     * @return self
     */
    public function setSyncDateTime(\DateTime $syncDateTime)
    {
        $this->syncDateTime = $syncDateTime;

        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the Reservation status. Refer to OpenTravel Code List Status (STS).
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
     * Indicates the Reservation status. Refer to OpenTravel Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


}

