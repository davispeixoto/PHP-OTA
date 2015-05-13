<?php

namespace Davispeixoto\OpenTravelAlliance\CategoryOptionType;

/**
 * Class representing PriceInfosAType
 */
class PriceInfosAType
{

    /**
     * Contains the pricing monetary information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     * $priceInfo
     */
    private $priceInfo = null;

    /**
     * Adds as priceInfo
     *
     * Contains the pricing monetary information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfo(
        \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfo[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfo
     *
     * Contains the pricing monetary information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfo($index)
    {
        return isset($this->priceInfo[$index]);
    }

    /**
     * unset priceInfo
     *
     * Contains the pricing monetary information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfo($index)
    {
        unset($this->priceInfo[$index]);
    }

    /**
     * Gets as priceInfo
     *
     * Contains the pricing monetary information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Contains the pricing monetary information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryOptionType\PriceInfosAType\PriceInfoAType[]
     * $priceInfo
     * @return self
     */
    public function setPriceInfo(array $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }


}

