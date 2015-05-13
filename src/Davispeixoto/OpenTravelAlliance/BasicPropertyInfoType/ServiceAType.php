<?php

namespace Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * Used to identify a specific business service. Refer to OpenTravel Code list
     * Business Srvc Type (BUS).
     *
     * @property string $businessServiceCode
     */
    private $businessServiceCode = null;

    /**
     * Gets as businessServiceCode
     *
     * Used to identify a specific business service. Refer to OpenTravel Code list
     * Business Srvc Type (BUS).
     *
     * @return string
     */
    public function getBusinessServiceCode()
    {
        return $this->businessServiceCode;
    }

    /**
     * Sets a new businessServiceCode
     *
     * Used to identify a specific business service. Refer to OpenTravel Code list
     * Business Srvc Type (BUS).
     *
     * @param string $businessServiceCode
     * @return self
     */
    public function setBusinessServiceCode($businessServiceCode)
    {
        $this->businessServiceCode = $businessServiceCode;

        return $this;
    }


}

