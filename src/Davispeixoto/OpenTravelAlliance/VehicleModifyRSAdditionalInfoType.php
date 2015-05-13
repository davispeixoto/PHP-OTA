<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleModifyRSAdditionalInfoType
 *
 * The VehicleModifyRSAdditionalInfoType complex type identifies the data that is
 * supplemental when modifing an existing vehicle reservation.
 * XSD Type: VehicleModifyRSAdditionalInfoType
 */
class VehicleModifyRSAdditionalInfoType
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

