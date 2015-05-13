<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS;

/**
 * Class representing FlightDetailsAType
 */
class FlightDetailsAType
{

    /**
     * The total duration of time a flight is airborne.
     *
     * @property \DateInterval $totalFlightTime
     */
    private $totalFlightTime = null;

    /**
     * The total duration of time a flight is on the ground.
     *
     * @property \DateInterval $totalGroundTime
     */
    private $totalGroundTime = null;

    /**
     * The total duration of time required for a flight operation (ground and air).
     *
     * @property \DateInterval $totalTripTime
     */
    private $totalTripTime = null;

    /**
     * Total miles for a flight segment.
     *
     * @property integer $totalMiles
     */
    private $totalMiles = null;

    /**
     * The total quantity of cabins for the departure Airport/City equipment type. This
     * is typically used in conjunction with the FlightLoadInfo information in the
     * FlightLegDetails element.
     *
     * @property integer $cabinQty
     */
    private $cabinQty = null;

    /**
     * Construct for holding flight leg information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType[]
     * $flightLegDetails
     */
    private $flightLegDetails = null;

    /**
     * Gets as totalFlightTime
     *
     * The total duration of time a flight is airborne.
     *
     * @return \DateInterval
     */
    public function getTotalFlightTime()
    {
        return $this->totalFlightTime;
    }

    /**
     * Sets a new totalFlightTime
     *
     * The total duration of time a flight is airborne.
     *
     * @param \DateInterval $totalFlightTime
     * @return self
     */
    public function setTotalFlightTime(\DateInterval $totalFlightTime)
    {
        $this->totalFlightTime = $totalFlightTime;

        return $this;
    }

    /**
     * Gets as totalGroundTime
     *
     * The total duration of time a flight is on the ground.
     *
     * @return \DateInterval
     */
    public function getTotalGroundTime()
    {
        return $this->totalGroundTime;
    }

    /**
     * Sets a new totalGroundTime
     *
     * The total duration of time a flight is on the ground.
     *
     * @param \DateInterval $totalGroundTime
     * @return self
     */
    public function setTotalGroundTime(\DateInterval $totalGroundTime)
    {
        $this->totalGroundTime = $totalGroundTime;

        return $this;
    }

    /**
     * Gets as totalTripTime
     *
     * The total duration of time required for a flight operation (ground and air).
     *
     * @return \DateInterval
     */
    public function getTotalTripTime()
    {
        return $this->totalTripTime;
    }

    /**
     * Sets a new totalTripTime
     *
     * The total duration of time required for a flight operation (ground and air).
     *
     * @param \DateInterval $totalTripTime
     * @return self
     */
    public function setTotalTripTime(\DateInterval $totalTripTime)
    {
        $this->totalTripTime = $totalTripTime;

        return $this;
    }

    /**
     * Gets as totalMiles
     *
     * Total miles for a flight segment.
     *
     * @return integer
     */
    public function getTotalMiles()
    {
        return $this->totalMiles;
    }

    /**
     * Sets a new totalMiles
     *
     * Total miles for a flight segment.
     *
     * @param integer $totalMiles
     * @return self
     */
    public function setTotalMiles($totalMiles)
    {
        $this->totalMiles = $totalMiles;

        return $this;
    }

    /**
     * Gets as cabinQty
     *
     * The total quantity of cabins for the departure Airport/City equipment type. This
     * is typically used in conjunction with the FlightLoadInfo information in the
     * FlightLegDetails element.
     *
     * @return integer
     */
    public function getCabinQty()
    {
        return $this->cabinQty;
    }

    /**
     * Sets a new cabinQty
     *
     * The total quantity of cabins for the departure Airport/City equipment type. This
     * is typically used in conjunction with the FlightLoadInfo information in the
     * FlightLegDetails element.
     *
     * @param integer $cabinQty
     * @return self
     */
    public function setCabinQty($cabinQty)
    {
        $this->cabinQty = $cabinQty;

        return $this;
    }

    /**
     * Adds as flightLegDetails
     *
     * Construct for holding flight leg information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType
     * $flightLegDetails
     */
    public function addToFlightLegDetails(
        \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType $flightLegDetails
    ) {
        $this->flightLegDetails[] = $flightLegDetails;

        return $this;
    }

    /**
     * isset flightLegDetails
     *
     * Construct for holding flight leg information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightLegDetails($index)
    {
        return isset($this->flightLegDetails[$index]);
    }

    /**
     * unset flightLegDetails
     *
     * Construct for holding flight leg information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightLegDetails($index)
    {
        unset($this->flightLegDetails[$index]);
    }

    /**
     * Gets as flightLegDetails
     *
     * Construct for holding flight leg information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType[]
     */
    public function getFlightLegDetails()
    {
        return $this->flightLegDetails;
    }

    /**
     * Sets a new flightLegDetails
     *
     * Construct for holding flight leg information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType[]
     * $flightLegDetails
     * @return self
     */
    public function setFlightLegDetails(array $flightLegDetails)
    {
        $this->flightLegDetails = $flightLegDetails;

        return $this;
    }


}

