<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleResRSCoreType
 *
 * Identifies the core, or common, information that is associated with the
 * reservation of a vehicle.
 * XSD Type: VehicleResRSCoreType
 */
class VehicleResRSCoreType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationType
     * $vehReservation
     */
    private $vehReservation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as vehReservation
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationType
     */
    public function getVehReservation()
    {
        return $this->vehReservation;
    }

    /**
     * Sets a new vehReservation
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationType $vehReservation
     * @return self
     */
    public function setVehReservation(\Davispeixoto\OpenTravelAlliance\VehicleReservationType $vehReservation)
    {
        $this->vehReservation = $vehReservation;

        return $this;
    }

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

