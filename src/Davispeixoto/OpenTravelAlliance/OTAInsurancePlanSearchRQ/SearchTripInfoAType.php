<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ;

/**
 * Class representing SearchTripInfoAType
 */
class SearchTripInfoAType
{

    /**
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string[] $travelSector
     */
    private $travelSector = null;

    /**
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\TotalTripCostAType
     * $totalTripCost
     */
    private $totalTripCost = null;

    /**
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength
     */
    private $maximumTripLength = null;

    /**
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrips
     */
    private $coveredTrips = null;

    /**
     * Adds as travelSector
     *
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return self
     * @param string $travelSector
     */
    public function addToTravelSector($travelSector)
    {
        $this->travelSector[] = $travelSector;

        return $this;
    }

    /**
     * isset travelSector
     *
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelSector($index)
    {
        return isset($this->travelSector[$index]);
    }

    /**
     * unset travelSector
     *
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelSector($index)
    {
        unset($this->travelSector[$index]);
    }

    /**
     * Gets as travelSector
     *
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string[]
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * Code used to indicate the travel sector (air, car, hotel, cruise) associated
     * with the trips. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector(array $travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\TotalTripCostAType
     */
    public function getTotalTripCost()
    {
        return $this->totalTripCost;
    }

    /**
     * Sets a new totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\TotalTripCostAType
     * $totalTripCost
     * @return self
     */
    public function setTotalTripCost(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\TotalTripCostAType $totalTripCost
    ) {
        $this->totalTripCost = $totalTripCost;

        return $this;
    }

    /**
     * Gets as maximumTripLength
     *
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeDurationType
     */
    public function getMaximumTripLength()
    {
        return $this->maximumTripLength;
    }

    /**
     * Sets a new maximumTripLength
     *
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength
     * @return self
     */
    public function setMaximumTripLength(\Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength)
    {
        $this->maximumTripLength = $maximumTripLength;

        return $this;
    }

    /**
     * Adds as coveredTrip
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\CoveredTripsAType\CoveredTripAType
     * $coveredTrip
     */
    public function addToCoveredTrips(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\CoveredTripsAType\CoveredTripAType $coveredTrip
    ) {
        $this->coveredTrips[] = $coveredTrip;

        return $this;
    }

    /**
     * isset coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTrips($index)
    {
        return isset($this->coveredTrips[$index]);
    }

    /**
     * unset coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTrips($index)
    {
        unset($this->coveredTrips[$index]);
    }

    /**
     * Gets as coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\CoveredTripsAType\CoveredTripAType[]
     */
    public function getCoveredTrips()
    {
        return $this->coveredTrips;
    }

    /**
     * Sets a new coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTripInfoAType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrips
     * @return self
     */
    public function setCoveredTrips(array $coveredTrips)
    {
        $this->coveredTrips = $coveredTrips;

        return $this;
    }


}

