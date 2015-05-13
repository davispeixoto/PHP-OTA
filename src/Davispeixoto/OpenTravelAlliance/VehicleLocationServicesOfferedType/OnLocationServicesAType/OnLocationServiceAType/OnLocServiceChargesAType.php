<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType;

/**
 * Class representing OnLocServiceChargesAType
 */
class OnLocServiceChargesAType
{

    /**
     * One specific charge for this on-location service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     * $onLocServiceCharge
     */
    private $onLocServiceCharge = null;

    /**
     * Adds as onLocServiceCharge
     *
     * One specific charge for this on-location service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType
     * $onLocServiceCharge
     */
    public function addToOnLocServiceCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType $onLocServiceCharge
    ) {
        $this->onLocServiceCharge[] = $onLocServiceCharge;

        return $this;
    }

    /**
     * isset onLocServiceCharge
     *
     * One specific charge for this on-location service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOnLocServiceCharge($index)
    {
        return isset($this->onLocServiceCharge[$index]);
    }

    /**
     * unset onLocServiceCharge
     *
     * One specific charge for this on-location service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOnLocServiceCharge($index)
    {
        unset($this->onLocServiceCharge[$index]);
    }

    /**
     * Gets as onLocServiceCharge
     *
     * One specific charge for this on-location service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     */
    public function getOnLocServiceCharge()
    {
        return $this->onLocServiceCharge;
    }

    /**
     * Sets a new onLocServiceCharge
     *
     * One specific charge for this on-location service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType\OnLocServiceChargesAType\OnLocServiceChargeAType[]
     * $onLocServiceCharge
     * @return self
     */
    public function setOnLocServiceCharge(array $onLocServiceCharge)
    {
        $this->onLocServiceCharge = $onLocServiceCharge;

        return $this;
    }


}

