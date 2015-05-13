<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType;

/**
 * Class representing CoverageFeeAType
 */
class CoverageFeeAType
{

    /**
     * Provides full information on the specific charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[]
     * $vehicles
     */
    private $vehicles = null;

    /**
     * The deductible/excess amount and liability amount for this coverage of a
     * vehicle(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\DeductibleType $deductible
     */
    private $deductible = null;

    /**
     * Gets as charge
     *
     * Provides full information on the specific charge.
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
     * Provides full information on the specific charge.
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
     * Adds as vehicle
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType
     * $vehicle
     */
    public function addToVehicles(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType $vehicle
    ) {
        $this->vehicles[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when
     * the charge is not the same charge for all vehicle types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[]
     * $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Gets as deductible
     *
     * The deductible/excess amount and liability amount for this coverage of a
     * vehicle(s).
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
     * The deductible/excess amount and liability amount for this coverage of a
     * vehicle(s).
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

