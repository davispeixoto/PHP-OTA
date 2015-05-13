<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocDetailRSAdditionalInfoType
 *
 * The Vehicle Location Detail Additional InfoType is used to define supplemental
 * information on the location details of the rental facility.
 * XSD Type: VehicleLocDetailRSAdditionalInfoType
 */
class VehicleLocDetailRSAdditionalInfoType
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

