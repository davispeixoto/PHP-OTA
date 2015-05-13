<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

    /**
     * The lowest price for the tour/ activity.
     *
     * @property float $minPrice
     */
    private $minPrice = null;

    /**
     * The highest price for the tour/ activity.
     *
     * @property float $maxPrice
     */
    private $maxPrice = null;

    /**
     * If true, additional tax amounts may be imposed.
     *
     * @property mixed $taxInd
     */
    private $taxInd = null;

    /**
     * If true, a guarantee payment or hold is required.
     *
     * @property boolean $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * The pricing type, e.g. per person and per group. Select a predefined pricing
     * type from the list or select the "Other_" value and enter a pricing type known
     * to your trading partners in the @Extension field.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType\PricingTypeAType
     * $pricingType
     */
    private $pricingType = null;

    /**
     * Gets as minPrice
     *
     * The lowest price for the tour/ activity.
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
     * The lowest price for the tour/ activity.
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
     * The highest price for the tour/ activity.
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
     * The highest price for the tour/ activity.
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
     * Gets as taxInd
     *
     * If true, additional tax amounts may be imposed.
     *
     * @return mixed
     */
    public function getTaxInd()
    {
        return $this->taxInd;
    }

    /**
     * Sets a new taxInd
     *
     * If true, additional tax amounts may be imposed.
     *
     * @param mixed $taxInd
     * @return self
     */
    public function setTaxInd($taxInd)
    {
        $this->taxInd = $taxInd;

        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @return boolean
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @param boolean $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;

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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType\PricingTypeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType\PricingTypeAType
     * $pricingType
     * @return self
     */
    public function setPricingType(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType\PricingTypeAType $pricingType
    ) {
        $this->pricingType = $pricingType;

        return $this;
    }


}

