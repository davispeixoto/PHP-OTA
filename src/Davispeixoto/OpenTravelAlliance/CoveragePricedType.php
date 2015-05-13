<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CoveragePricedType
 *
 * The CoveragePricedType complex type defines the information that is required to
 * describe a priced coverage, that is, a coverage and a charge.
 * XSD Type: CoveragePricedType
 */
class CoveragePricedType
{

    /**
     * An indication if this particular coverage is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @property boolean $required
     */
    private $required = null;

    /**
     * Details about a coverage, such as text or description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageType $coverage
     */
    private $coverage = null;

    /**
     * The charges as they relate to a single coverage, such as minimum or maximum
     * amounts, taxes, or information on how the charge was calculated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DeductibleType $deductible
     */
    private $deductible = null;

    /**
     * Gets as required
     *
     * An indication if this particular coverage is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication if this particular coverage is required in the vehicle
     * reservation, or is optional, based upon renter preference.
     *  false
     *
     * @param boolean $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Gets as coverage
     *
     * Details about a coverage, such as text or description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Details about a coverage, such as text or description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageType $coverage
     * @return self
     */
    public function setCoverage(\Davispeixoto\OpenTravelAlliance\CoverageType $coverage)
    {
        $this->coverage = $coverage;

        return $this;
    }

    /**
     * Gets as charge
     *
     * The charges as they relate to a single coverage, such as minimum or maximum
     * amounts, taxes, or information on how the charge was calculated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The charges as they relate to a single coverage, such as minimum or maximum
     * amounts, taxes, or information on how the charge was calculated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Gets as deductible
     *
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\DeductibleType
     */
    public function getDeductible()
    {
        return $this->deductible;
    }

    /**
     * Sets a new deductible
     *
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\DeductibleType $deductible
     * @return self
     */
    public function setDeductible(\Davispeixoto\OpenTravelAlliance\DeductibleType $deductible)
    {
        $this->deductible = $deductible;

        return $this;
    }


}

