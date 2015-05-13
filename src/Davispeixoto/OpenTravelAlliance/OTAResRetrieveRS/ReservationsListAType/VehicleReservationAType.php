<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType;

/**
 * Class representing VehicleReservationAType
 */
class VehicleReservationAType
{

    /**
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehResSummary
     */
    private $vehResSummary = null;

    /**
     * Adds as vehResSummary
     *
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType
     * $vehResSummary
     */
    public function addToVehResSummary(\Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType $vehResSummary)
    {
        $this->vehResSummary[] = $vehResSummary;

        return $this;
    }

    /**
     * isset vehResSummary
     *
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehResSummary($index)
    {
        return isset($this->vehResSummary[$index]);
    }

    /**
     * unset vehResSummary
     *
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehResSummary($index)
    {
        unset($this->vehResSummary[$index]);
    }

    /**
     * Gets as vehResSummary
     *
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     */
    public function getVehResSummary()
    {
        return $this->vehResSummary;
    }

    /**
     * Sets a new vehResSummary
     *
     * Summary information of a reservation, to allow a reservation to be identified
     * from several reservations that matched the previous request criteria.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehResSummary
     * @return self
     */
    public function setVehResSummary(array $vehResSummary)
    {
        $this->vehResSummary = $vehResSummary;

        return $this;
    }


}

