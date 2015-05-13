<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehCancelRS;

use Davispeixoto\OpenTravelAlliance\CancelInfoRSType;

/**
 * Class representing VehCancelRSCoreAType
 */
class VehCancelRSCoreAType extends CancelInfoRSType
{

    /**
     * The status of the canceled reservation.
     *
     * @property string $cancelStatus
     */
    private $cancelStatus = null;

    /**
     * Gets as cancelStatus
     *
     * The status of the canceled reservation.
     *
     * @return string
     */
    public function getCancelStatus()
    {
        return $this->cancelStatus;
    }

    /**
     * Sets a new cancelStatus
     *
     * The status of the canceled reservation.
     *
     * @param string $cancelStatus
     * @return self
     */
    public function setCancelStatus($cancelStatus)
    {
        $this->cancelStatus = $cancelStatus;

        return $this;
    }


}

