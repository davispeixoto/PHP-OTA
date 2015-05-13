<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType;

/**
 * Class representing GuidelinePricingAType
 */
class GuidelinePricingAType
{

    /**
     * Maximum offer price.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyCurrencyType $maximumPrice
     */
    private $maximumPrice = null;

    /**
     * Pricing method.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyPricingMethodType $method
     */
    private $method = null;

    /**
     * Gets as maximumPrice
     *
     * Maximum offer price.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCurrencyType
     */
    public function getMaximumPrice()
    {
        return $this->maximumPrice;
    }

    /**
     * Sets a new maximumPrice
     *
     * Maximum offer price.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCurrencyType $maximumPrice
     * @return self
     */
    public function setMaximumPrice(\Davispeixoto\OpenTravelAlliance\OntologyCurrencyType $maximumPrice)
    {
        $this->maximumPrice = $maximumPrice;

        return $this;
    }

    /**
     * Gets as method
     *
     * Pricing method.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPricingMethodType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * Pricing method.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPricingMethodType $method
     * @return self
     */
    public function setMethod(\Davispeixoto\OpenTravelAlliance\OntologyPricingMethodType $method)
    {
        $this->method = $method;

        return $this;
    }


}

