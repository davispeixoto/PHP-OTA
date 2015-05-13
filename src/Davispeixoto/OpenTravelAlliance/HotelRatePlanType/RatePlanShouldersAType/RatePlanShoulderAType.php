<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanShouldersAType;

/**
 * Class representing RatePlanShoulderAType
 */
class RatePlanShoulderAType
{

    /**
     * This is a reference placeholder, used as an index for this object.
     *
     * @property string $shoulderRPH
     */
    private $shoulderRPH = null;

    /**
     * Limit of inventory that can be sold before the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @property integer $preShoulderSellLimit
     */
    private $preShoulderSellLimit = null;

    /**
     * Limit of inventory that can be sold after the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @property integer $postShoulderSellLimit
     */
    private $postShoulderSellLimit = null;

    /**
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $preShoulderStartDate
     */
    private $preShoulderStartDate = null;

    /**
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $postShoulderEndDate
     */
    private $postShoulderEndDate = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     * $sellableProducts
     */
    private $sellableProducts = null;

    /**
     * Gets as shoulderRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @return string
     */
    public function getShoulderRPH()
    {
        return $this->shoulderRPH;
    }

    /**
     * Sets a new shoulderRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @param string $shoulderRPH
     * @return self
     */
    public function setShoulderRPH($shoulderRPH)
    {
        $this->shoulderRPH = $shoulderRPH;

        return $this;
    }

    /**
     * Gets as preShoulderSellLimit
     *
     * Limit of inventory that can be sold before the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @return integer
     */
    public function getPreShoulderSellLimit()
    {
        return $this->preShoulderSellLimit;
    }

    /**
     * Sets a new preShoulderSellLimit
     *
     * Limit of inventory that can be sold before the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @param integer $preShoulderSellLimit
     * @return self
     */
    public function setPreShoulderSellLimit($preShoulderSellLimit)
    {
        $this->preShoulderSellLimit = $preShoulderSellLimit;

        return $this;
    }

    /**
     * Gets as postShoulderSellLimit
     *
     * Limit of inventory that can be sold after the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @return integer
     */
    public function getPostShoulderSellLimit()
    {
        return $this->postShoulderSellLimit;
    }

    /**
     * Sets a new postShoulderSellLimit
     *
     * Limit of inventory that can be sold after the StayDateRange. It should be
     * understood that any stay must book at least one date in the StayDateRange.
     *
     * @param integer $postShoulderSellLimit
     * @return self
     */
    public function setPostShoulderSellLimit($postShoulderSellLimit)
    {
        $this->postShoulderSellLimit = $postShoulderSellLimit;

        return $this;
    }

    /**
     * Gets as preShoulderStartDate
     *
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPreShoulderStartDate()
    {
        return $this->preShoulderStartDate;
    }

    /**
     * Sets a new preShoulderStartDate
     *
     * The earliest stay date that this rate plan/inventory block can be sold.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $preShoulderStartDate
     * @return self
     */
    public function setPreShoulderStartDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $preShoulderStartDate)
    {
        $this->preShoulderStartDate = $preShoulderStartDate;

        return $this;
    }

    /**
     * Gets as postShoulderEndDate
     *
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPostShoulderEndDate()
    {
        return $this->postShoulderEndDate;
    }

    /**
     * Sets a new postShoulderEndDate
     *
     * The latest stay date that this rate plan/inventory block can be sold.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $postShoulderEndDate
     * @return self
     */
    public function setPostShoulderEndDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $postShoulderEndDate)
    {
        $this->postShoulderEndDate = $postShoulderEndDate;

        return $this;
    }

    /**
     * Adds as sellableProduct
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType
     * $sellableProduct
     */
    public function addToSellableProducts(
        \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType $sellableProduct
    ) {
        $this->sellableProducts[] = $sellableProduct;

        return $this;
    }

    /**
     * isset sellableProducts
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSellableProducts($index)
    {
        return isset($this->sellableProducts[$index]);
    }

    /**
     * unset sellableProducts
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSellableProducts($index)
    {
        unset($this->sellableProducts[$index]);
    }

    /**
     * Gets as sellableProducts
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     */
    public function getSellableProducts()
    {
        return $this->sellableProducts;
    }

    /**
     * Sets a new sellableProducts
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType[]
     * $sellableProducts
     * @return self
     */
    public function setSellableProducts(array $sellableProducts)
    {
        $this->sellableProducts = $sellableProducts;

        return $this;
    }


}

