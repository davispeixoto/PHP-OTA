<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType;

use Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType;

/**
 * Class representing PassengerTypeQuantityAType
 */
class PassengerTypeQuantityAType extends PassengerTypeQuantityType
{

    /**
     * Specify a desired reduction amount or percentage for this passenger type
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType\ReductionPrefAType
     * $reductionPref
     */
    private $reductionPref = null;

    /**
     * Gets as reductionPref
     *
     * Specify a desired reduction amount or percentage for this passenger type
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType\ReductionPrefAType
     */
    public function getReductionPref()
    {
        return $this->reductionPref;
    }

    /**
     * Sets a new reductionPref
     *
     * Specify a desired reduction amount or percentage for this passenger type
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType\ReductionPrefAType
     * $reductionPref
     * @return self
     */
    public function setReductionPref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType\ReductionPrefAType $reductionPref
    ) {
        $this->reductionPref = $reductionPref;

        return $this;
    }


}

