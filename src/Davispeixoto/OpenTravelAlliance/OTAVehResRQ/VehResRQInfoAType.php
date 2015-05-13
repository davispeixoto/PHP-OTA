<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResRQ;

use Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType;

/**
 * Class representing VehResRQInfoAType
 */
class VehResRQInfoAType extends VehicleReservationRQAdditionalInfoType
{

    /**
     * Used to specify action which should be taken on the customer's entire
     * reservation.
     *
     * @property string $resStatus
     */
    private $resStatus = null;

    /**
     * Gets as resStatus
     *
     * Used to specify action which should be taken on the customer's entire
     * reservation.
     *
     * @return string
     */
    public function getResStatus()
    {
        return $this->resStatus;
    }

    /**
     * Sets a new resStatus
     *
     * Used to specify action which should be taken on the customer's entire
     * reservation.
     *
     * @param string $resStatus
     * @return self
     */
    public function setResStatus($resStatus)
    {
        $this->resStatus = $resStatus;

        return $this;
    }


}

