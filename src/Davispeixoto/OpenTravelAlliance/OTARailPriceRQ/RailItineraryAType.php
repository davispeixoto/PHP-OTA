<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ;

/**
 * Class representing RailItineraryAType
 */
class RailItineraryAType
{

    /**
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @property string $tripType
     */
    private $tripType = null;

    /**
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Gets as tripType
     *
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Identifies the type of the trip, such as one way and open jaw.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Detail about one specific trip between this origin and destination location.
     * This element will be repeated for each trip. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }


}

