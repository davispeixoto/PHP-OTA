<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleCancelRSAdditionalInfoType
 *
 * The VehicleCancelRSAdditionalInfoType complex type defines the supplemental
 * information that is used as part of the confirmation of the cancellation of a
 * vehicle reservation.
 * XSD Type: VehicleCancelRSAdditionalInfoType
 */
class VehicleCancelRSAdditionalInfoType
{

    /**
     * Details about the reservation that was successfully cancelled.
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
     * Details about the reservation that was successfully cancelled.
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
     * Details about the reservation that was successfully cancelled.
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

