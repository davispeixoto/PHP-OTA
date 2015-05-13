<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleModifyRSCoreType
 *
 * The VehicleModifyRSCoreType complex type identifies the data that is common when
 * modifing an existing vehicle reservation.
 * XSD Type: VehicleModifyRSCoreType
 */
class VehicleModifyRSCoreType
{

    /**
     * Represents the vehicle rental reservation that was successfully created
     *
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
     * Represents the vehicle rental reservation that was successfully created
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
     * Represents the vehicle rental reservation that was successfully created
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

