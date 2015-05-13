<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType;

use Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing NegotiatedFareAType
 */
class NegotiatedFareAType extends FareInfoType
{

    /**
     * Supplier/ carrier airline information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $supplier
     */
    private $supplier = null;

    /**
     * Gets as supplier
     *
     * Supplier/ carrier airline information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * Supplier/ carrier airline information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $supplier
     * @return self
     */
    public function setSupplier(\Davispeixoto\OpenTravelAlliance\CompanyNameType $supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }


}

