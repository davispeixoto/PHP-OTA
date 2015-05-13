<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TripInsuranceAType;

use Davispeixoto\OpenTravelAlliance\SearchTravelerType;

/**
 * Class representing CoveredTravelerAType
 */
class CoveredTravelerAType extends SearchTravelerType
{

    /**
     * A reference to a unique traveler ID specified elsewhere in this
     * message.(Developer Notes) RPH references within this message:
     * RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as travelerRPH
     *
     * A reference to a unique traveler ID specified elsewhere in this
     * message.(Developer Notes) RPH references within this message:
     * RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A reference to a unique traveler ID specified elsewhere in this
     * message.(Developer Notes) RPH references within this message:
     * RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }


}

