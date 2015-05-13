<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS;

/**
 * Class representing BaggageListAType
 */
class BaggageListAType
{

    /**
     * Baggage list/ catalog by origin and destination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Adds as originDestination
     *
     * Baggage list/ catalog by origin and destination.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Baggage list/ catalog by origin and destination.
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
     * Baggage list/ catalog by origin and destination.
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
     * Baggage list/ catalog by origin and destination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Baggage list/ catalog by origin and destination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }


}

