<?php

namespace Davispeixoto\OpenTravelAlliance\InsCoverageDetailType;

/**
 * Class representing CoveredTripsAType
 */
class CoveredTripsAType
{

    /**
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrip
     */
    private $coveredTrip = null;

    /**
     * Adds as coveredTrip
     *
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType
     * $coveredTrip
     */
    public function addToCoveredTrip(
        \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType $coveredTrip
    ) {
        $this->coveredTrip[] = $coveredTrip;

        return $this;
    }

    /**
     * isset coveredTrip
     *
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTrip($index)
    {
        return isset($this->coveredTrip[$index]);
    }

    /**
     * unset coveredTrip
     *
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTrip($index)
    {
        unset($this->coveredTrip[$index]);
    }

    /**
     * Gets as coveredTrip
     *
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     */
    public function getCoveredTrip()
    {
        return $this->coveredTrip;
    }

    /**
     * Sets a new coveredTrip
     *
     * Information about a single trip for which the traveler(s) are requesting
     * coverage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrip
     * @return self
     */
    public function setCoveredTrip(array $coveredTrip)
    {
        $this->coveredTrip = $coveredTrip;

        return $this;
    }


}

