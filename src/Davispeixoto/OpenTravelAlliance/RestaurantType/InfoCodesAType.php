<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantType;

/**
 * Class representing InfoCodesAType
 */
class InfoCodesAType
{

    /**
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     * $infoCode
     */
    private $infoCode = null;

    /**
     * Adds as infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType
     * $infoCode
     */
    public function addToInfoCode(
        \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode
    ) {
        $this->infoCode[] = $infoCode;

        return $this;
    }

    /**
     * isset infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfoCode($index)
    {
        return isset($this->infoCode[$index]);
    }

    /**
     * unset infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfoCode($index)
    {
        unset($this->infoCode[$index]);
    }

    /**
     * Gets as infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     */
    public function getInfoCode()
    {
        return $this->infoCode;
    }

    /**
     * Sets a new infoCode
     *
     * Indicates the generic type of restaurant such as fast food, cafe, fine dining,
     * etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     * $infoCode
     * @return self
     */
    public function setInfoCode(array $infoCode)
    {
        $this->infoCode = $infoCode;

        return $this;
    }


}

