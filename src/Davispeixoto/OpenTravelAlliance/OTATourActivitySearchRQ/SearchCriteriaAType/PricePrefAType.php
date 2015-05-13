<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

/**
 * Class representing PricePrefAType
 */
class PricePrefAType
{

    /**
     * The lowest price for a price range search.
     *
     * @property float $minPrice
     */
    private $minPrice = null;

    /**
     * The highest price for a price range search.
     *
     * @property float $maxPrice
     */
    private $maxPrice = null;

    /**
     * A price which the supplier can use as the base for a price search.
     *
     * @property float $guidelinePrice
     */
    private $guidelinePrice = null;

    /**
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType\PricingTypeAType
     * $pricingType
     */
    private $pricingType = null;

    /**
     * Gets as minPrice
     *
     * The lowest price for a price range search.
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Sets a new minPrice
     *
     * The lowest price for a price range search.
     *
     * @param float $minPrice
     * @return self
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * Gets as maxPrice
     *
     * The highest price for a price range search.
     *
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Sets a new maxPrice
     *
     * The highest price for a price range search.
     *
     * @param float $maxPrice
     * @return self
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Gets as guidelinePrice
     *
     * A price which the supplier can use as the base for a price search.
     *
     * @return float
     */
    public function getGuidelinePrice()
    {
        return $this->guidelinePrice;
    }

    /**
     * Sets a new guidelinePrice
     *
     * A price which the supplier can use as the base for a price search.
     *
     * @param float $guidelinePrice
     * @return self
     */
    public function setGuidelinePrice($guidelinePrice)
    {
        $this->guidelinePrice = $guidelinePrice;

        return $this;
    }

    /**
     * Gets as pricingType
     *
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType\PricingTypeAType
     */
    public function getPricingType()
    {
        return $this->pricingType;
    }

    /**
     * Sets a new pricingType
     *
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType\PricingTypeAType
     * $pricingType
     * @return self
     */
    public function setPricingType(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\PricePrefAType\PricingTypeAType $pricingType
    ) {
        $this->pricingType = $pricingType;

        return $this;
    }


}

