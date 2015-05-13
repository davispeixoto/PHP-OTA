<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType;

/**
 * Class representing OffLocServiceChargesAType
 */
class OffLocServiceChargesAType
{

    /**
     * One specific charge for this off-location service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     * $offLocServiceCharge
     */
    private $offLocServiceCharge = null;

    /**
     * Adds as offLocServiceCharge
     *
     * One specific charge for this off-location service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType
     * $offLocServiceCharge
     */
    public function addToOffLocServiceCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType $offLocServiceCharge
    ) {
        $this->offLocServiceCharge[] = $offLocServiceCharge;

        return $this;
    }

    /**
     * isset offLocServiceCharge
     *
     * One specific charge for this off-location service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocServiceCharge($index)
    {
        return isset($this->offLocServiceCharge[$index]);
    }

    /**
     * unset offLocServiceCharge
     *
     * One specific charge for this off-location service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocServiceCharge($index)
    {
        unset($this->offLocServiceCharge[$index]);
    }

    /**
     * Gets as offLocServiceCharge
     *
     * One specific charge for this off-location service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     */
    public function getOffLocServiceCharge()
    {
        return $this->offLocServiceCharge;
    }

    /**
     * Sets a new offLocServiceCharge
     *
     * One specific charge for this off-location service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType\OffLocServiceChargesAType\OffLocServiceChargeAType[]
     * $offLocServiceCharge
     * @return self
     */
    public function setOffLocServiceCharge(array $offLocServiceCharge)
    {
        $this->offLocServiceCharge = $offLocServiceCharge;

        return $this;
    }


}

