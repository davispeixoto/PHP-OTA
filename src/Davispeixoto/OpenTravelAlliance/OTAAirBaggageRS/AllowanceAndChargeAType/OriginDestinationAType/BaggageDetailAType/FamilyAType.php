<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType;

use Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType;

/**
 * Class representing FamilyAType
 */
class FamilyAType extends AncillaryServiceDetailType
{

    /**
     * Filed pricing. Make complexType for both pricing elements.
     *
     * @property mixed $filingPricing
     */
    private $filingPricing = null;

    /**
     * Gets as filingPricing
     *
     * Filed pricing. Make complexType for both pricing elements.
     *
     * @return mixed
     */
    public function getFilingPricing()
    {
        return $this->filingPricing;
    }

    /**
     * Sets a new filingPricing
     *
     * Filed pricing. Make complexType for both pricing elements.
     *
     * @param mixed $filingPricing
     * @return self
     */
    public function setFilingPricing($filingPricing)
    {
        $this->filingPricing = $filingPricing;

        return $this;
    }


}

