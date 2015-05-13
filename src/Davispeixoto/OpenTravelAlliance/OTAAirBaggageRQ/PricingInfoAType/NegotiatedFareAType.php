<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType;

use Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing NegotiatedFareAType
 */
class NegotiatedFareAType extends FareInfoType
{

    /**
     * Supplier/ carrier airline information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $supplier
     */
    private $supplier = null;

    /**
     * Adds as supplier
     *
     * Supplier/ carrier airline information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $supplier
     */
    public function addToSupplier(\Davispeixoto\OpenTravelAlliance\CompanyNameType $supplier)
    {
        $this->supplier[] = $supplier;

        return $this;
    }

    /**
     * isset supplier
     *
     * Supplier/ carrier airline information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplier($index)
    {
        return isset($this->supplier[$index]);
    }

    /**
     * unset supplier
     *
     * Supplier/ carrier airline information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplier($index)
    {
        unset($this->supplier[$index]);
    }

    /**
     * Gets as supplier
     *
     * Supplier/ carrier airline information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $supplier
     * @return self
     */
    public function setSupplier(array $supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }


}

