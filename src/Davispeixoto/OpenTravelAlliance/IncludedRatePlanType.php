<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing IncludedRatePlanType
 *
 *
 * XSD Type: IncludedRatePlanType
 */
class IncludedRatePlanType
{

    /**
     * The rate plan code of the item to be included.
     *
     * @property string $planCode
     */
    private $planCode = null;

    /**
     * a unique identifier
     *
     * @property string $serviceCode
     */
    private $serviceCode = null;

    /**
     * The type of component rateplan. Refer to OpenTravel Code List Travel Sector
     * (TVS).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as planCode
     *
     * The rate plan code of the item to be included.
     *
     * @return string
     */
    public function getPlanCode()
    {
        return $this->planCode;
    }

    /**
     * Sets a new planCode
     *
     * The rate plan code of the item to be included.
     *
     * @param string $planCode
     * @return self
     */
    public function setPlanCode($planCode)
    {
        $this->planCode = $planCode;

        return $this;
    }

    /**
     * Gets as serviceCode
     *
     * a unique identifier
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Sets a new serviceCode
     *
     * a unique identifier
     *
     * @param string $serviceCode
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of component rateplan. Refer to OpenTravel Code List Travel Sector
     * (TVS).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of component rateplan. Refer to OpenTravel Code List Travel Sector
     * (TVS).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

