<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleResRSAdditionalInfoType
 *
 * The VehicleResRSAdditionalInfoType complex type identifies the supplemental
 * information that is associated with the reservation of a vehicle.
 * XSD Type: VehicleResRSAdditionalInfoType
 */
class VehicleResRSAdditionalInfoType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

