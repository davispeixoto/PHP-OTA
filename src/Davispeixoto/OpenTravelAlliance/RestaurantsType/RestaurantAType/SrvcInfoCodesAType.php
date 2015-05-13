<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType;

/**
 * Class representing SrvcInfoCodesAType
 */
class SrvcInfoCodesAType
{

    /**
     * This identifies the type of service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCode
     */
    private $srvcInfoCode = null;

    /**
     * Adds as srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType
     * $srvcInfoCode
     */
    public function addToSrvcInfoCode(
        \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
    ) {
        $this->srvcInfoCode[] = $srvcInfoCode;

        return $this;
    }

    /**
     * isset srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSrvcInfoCode($index)
    {
        return isset($this->srvcInfoCode[$index]);
    }

    /**
     * unset srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSrvcInfoCode($index)
    {
        unset($this->srvcInfoCode[$index]);
    }

    /**
     * Gets as srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCode()
    {
        return $this->srvcInfoCode;
    }

    /**
     * Sets a new srvcInfoCode
     *
     * This identifies the type of service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCode
     * @return self
     */
    public function setSrvcInfoCode(array $srvcInfoCode)
    {
        $this->srvcInfoCode = $srvcInfoCode;

        return $this;
    }


}

