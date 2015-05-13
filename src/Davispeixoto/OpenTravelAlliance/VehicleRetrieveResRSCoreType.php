<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleRetrieveResRSCoreType
 *
 * The VehicleRetrieveResRSCoreType complex type identifies the core, or common,
 * information that is associated with a retrieved reservation, or a list of
 * reservations when one exact match could not be identified.
 * XSD Type: VehicleRetrieveResRSCoreType
 */
class VehicleRetrieveResRSCoreType
{

    /**
     * Information on one reservation when the request results in exactly one matching
     * reservation being located.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationType
     * $vehReservation
     */
    private $vehReservation = null;

    /**
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehResSummaries
     */
    private $vehResSummaries = null;

    /**
     * Gets as vehReservation
     *
     * Information on one reservation when the request results in exactly one matching
     * reservation being located.
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
     * Information on one reservation when the request results in exactly one matching
     * reservation being located.
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
     * Adds as vehResSummary
     *
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType
     * $vehResSummary
     */
    public function addToVehResSummaries(\Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType $vehResSummary)
    {
        $this->vehResSummaries[] = $vehResSummary;

        return $this;
    }

    /**
     * isset vehResSummaries
     *
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehResSummaries($index)
    {
        return isset($this->vehResSummaries[$index]);
    }

    /**
     * unset vehResSummaries
     *
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehResSummaries($index)
    {
        unset($this->vehResSummaries[$index]);
    }

    /**
     * Gets as vehResSummaries
     *
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     */
    public function getVehResSummaries()
    {
        return $this->vehResSummaries;
    }

    /**
     * Sets a new vehResSummaries
     *
     * A list of 2 or more reservations that match the criteria in the request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehResSummaries
     * @return self
     */
    public function setVehResSummaries(array $vehResSummaries)
    {
        $this->vehResSummaries = $vehResSummaries;

        return $this;
    }


}

