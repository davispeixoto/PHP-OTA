<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRS\TravelerAType;

use Davispeixoto\OpenTravelAlliance\AirTravelerType;

/**
 * Class representing AirTravelerAType
 */
class AirTravelerAType extends AirTravelerType
{

    /**
     * A unique ID for this traveler that may be referenced elsewhere in this schema to
     * associate the traveler with other information.(Developer Notes) RPH references
     * within this message: RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * If true, indicates that this traveler is the lead traveler or main contact for
     * the trip.
     *
     * @property boolean $isLeadInd
     */
    private $isLeadInd = null;

    /**
     * Gets as rPH
     *
     * A unique ID for this traveler that may be referenced elsewhere in this schema to
     * associate the traveler with other information.(Developer Notes) RPH references
     * within this message: RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this traveler that may be referenced elsewhere in this schema to
     * associate the traveler with other information.(Developer Notes) RPH references
     * within this message: RequestCriterion/CheckedItemInfo/@TravelerRPH
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as isLeadInd
     *
     * If true, indicates that this traveler is the lead traveler or main contact for
     * the trip.
     *
     * @return boolean
     */
    public function getIsLeadInd()
    {
        return $this->isLeadInd;
    }

    /**
     * Sets a new isLeadInd
     *
     * If true, indicates that this traveler is the lead traveler or main contact for
     * the trip.
     *
     * @param boolean $isLeadInd
     * @return self
     */
    public function setIsLeadInd($isLeadInd)
    {
        $this->isLeadInd = $isLeadInd;

        return $this;
    }


}

