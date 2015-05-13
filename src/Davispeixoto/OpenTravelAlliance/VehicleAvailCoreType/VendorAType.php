<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType;

use Davispeixoto\OpenTravelAlliance\CompanyNameType;

/**
 * Class representing VendorAType
 */
class VendorAType extends CompanyNameType
{

    /**
     * The participation level of this vendor in a system. Refer to OpenTravel Code
     * List Participation Level (PLC).
     *
     * @property string $participationLevelCode
     */
    private $participationLevelCode = null;

    /**
     * Gets as participationLevelCode
     *
     * The participation level of this vendor in a system. Refer to OpenTravel Code
     * List Participation Level (PLC).
     *
     * @return string
     */
    public function getParticipationLevelCode()
    {
        return $this->participationLevelCode;
    }

    /**
     * Sets a new participationLevelCode
     *
     * The participation level of this vendor in a system. Refer to OpenTravel Code
     * List Participation Level (PLC).
     *
     * @param string $participationLevelCode
     * @return self
     */
    public function setParticipationLevelCode($participationLevelCode)
    {
        $this->participationLevelCode = $participationLevelCode;

        return $this;
    }


}

