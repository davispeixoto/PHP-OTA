<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehModifyRS;

use Davispeixoto\OpenTravelAlliance\VehicleModifyRSCoreType;

/**
 * Class representing VehModifyRSCoreAType
 */
class VehModifyRSCoreAType extends VehicleModifyRSCoreType
{

    /**
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehModifyRS\VehModifyRSCoreAType\ModifyStatusAType
     * $modifyStatus
     */
    private $modifyStatus = null;

    /**
     * Gets as modifyStatus
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehModifyRS\VehModifyRSCoreAType\ModifyStatusAType
     */
    public function getModifyStatus()
    {
        return $this->modifyStatus;
    }

    /**
     * Sets a new modifyStatus
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionStatusType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @param VehModifyRSCoreAType $modifyStatus
     * @return self
     */
    public function setModifyStatus(VehModifyRSCoreAType $modifyStatus)
    {
        $this->modifyStatus = $modifyStatus;

        return $this;
    }


}

