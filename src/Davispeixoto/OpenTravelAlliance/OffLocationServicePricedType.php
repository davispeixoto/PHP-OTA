<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OffLocationServicePricedType
 *
 * The OffLocationServicePricedType complex type describes the data that is used to
 * describe a priced off-location service, that is, an off-location service and the
 * corresponding charge.
 * XSD Type: OffLocationServicePricedType
 */
class OffLocationServicePricedType
{

    /**
     * Information on a specific off-airport service, for example, vehicle delivery,
     * customer pickup.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     */
    private $offLocService = null;

    /**
     * Charge information associated with this specific off-airport service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * Gets as offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery,
     * customer pickup.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceType
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on a specific off-airport service, for example, vehicle delivery,
     * customer pickup.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     * @return self
     */
    public function setOffLocService(\Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService)
    {
        $this->offLocService = $offLocService;

        return $this;
    }

    /**
     * Gets as charge
     *
     * Charge information associated with this specific off-airport service.
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
     * Charge information associated with this specific off-airport service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}

