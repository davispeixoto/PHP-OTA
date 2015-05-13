<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ConfIDAType
 */
class ConfIDAType extends UniqueIDType
{

    /**
     * Used to specify the status of the item identified by the ConfID.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * Used to specify the status of the item identified by the ConfID.
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
     * Used to specify the status of the item identified by the ConfID.
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

