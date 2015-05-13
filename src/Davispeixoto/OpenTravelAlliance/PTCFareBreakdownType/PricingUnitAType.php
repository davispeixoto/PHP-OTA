<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType;

/**
 * Class representing PricingUnitAType
 */
class PricingUnitAType
{

    /**
     * A sequential number that identifies this pricing unit.
     *
     * @property integer $unitNumber
     */
    private $unitNumber = null;

    /**
     * Provides the data for a component of the fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[]
     * $fareComponent
     */
    private $fareComponent = null;

    /**
     * Gets as unitNumber
     *
     * A sequential number that identifies this pricing unit.
     *
     * @return integer
     */
    public function getUnitNumber()
    {
        return $this->unitNumber;
    }

    /**
     * Sets a new unitNumber
     *
     * A sequential number that identifies this pricing unit.
     *
     * @param integer $unitNumber
     * @return self
     */
    public function setUnitNumber($unitNumber)
    {
        $this->unitNumber = $unitNumber;

        return $this;
    }

    /**
     * Adds as fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType\FareComponentAType
     * $fareComponent
     */
    public function addToFareComponent(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType\FareComponentAType $fareComponent
    ) {
        $this->fareComponent[] = $fareComponent;

        return $this;
    }

    /**
     * isset fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareComponent($index)
    {
        return isset($this->fareComponent[$index]);
    }

    /**
     * unset fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareComponent($index)
    {
        unset($this->fareComponent[$index]);
    }

    /**
     * Gets as fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[]
     */
    public function getFareComponent()
    {
        return $this->fareComponent;
    }

    /**
     * Sets a new fareComponent
     *
     * Provides the data for a component of the fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType\FareComponentAType[]
     * $fareComponent
     * @return self
     */
    public function setFareComponent(array $fareComponent)
    {
        $this->fareComponent = $fareComponent;

        return $this;
    }


}

