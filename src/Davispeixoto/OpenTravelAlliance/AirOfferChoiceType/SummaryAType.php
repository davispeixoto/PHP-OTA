<?php

namespace Davispeixoto\OpenTravelAlliance\AirOfferChoiceType;

use Davispeixoto\OpenTravelAlliance\AirOfferType;

/**
 * Class representing SummaryAType
 */
class SummaryAType extends AirOfferType
{

    /**
     * Applicable flight segment.
     *
     * @property string $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * Applicable itinerary.
     *
     * @property string $itineraryRPH
     */
    private $itineraryRPH = null;

    /**
     * Applicable origin/ destination pair.
     *
     * @property string $origDestRPH
     */
    private $origDestRPH = null;

    /**
     * Applicable traveler.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as flightSegmentRPH
     *
     * Applicable flight segment.
     *
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * Applicable flight segment.
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }

    /**
     * Gets as itineraryRPH
     *
     * Applicable itinerary.
     *
     * @return string
     */
    public function getItineraryRPH()
    {
        return $this->itineraryRPH;
    }

    /**
     * Sets a new itineraryRPH
     *
     * Applicable itinerary.
     *
     * @param string $itineraryRPH
     * @return self
     */
    public function setItineraryRPH($itineraryRPH)
    {
        $this->itineraryRPH = $itineraryRPH;

        return $this;
    }

    /**
     * Gets as origDestRPH
     *
     * Applicable origin/ destination pair.
     *
     * @return string
     */
    public function getOrigDestRPH()
    {
        return $this->origDestRPH;
    }

    /**
     * Sets a new origDestRPH
     *
     * Applicable origin/ destination pair.
     *
     * @param string $origDestRPH
     * @return self
     */
    public function setOrigDestRPH($origDestRPH)
    {
        $this->origDestRPH = $origDestRPH;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * Applicable traveler.
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
     * Applicable traveler.
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

