<?php

namespace Davispeixoto\OpenTravelAlliance\TripFeaturesType;

/**
 * Class representing DestinationsAType
 */
class DestinationsAType
{

    /**
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     * $destination
     */
    private $destination = null;

    /**
     * Adds as destination
     *
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType
     * $destination
     */
    public function addToDestination(
        \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType $destination
    ) {
        $this->destination[] = $destination;

        return $this;
    }

    /**
     * isset destination
     *
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestination($index)
    {
        return isset($this->destination[$index]);
    }

    /**
     * unset destination
     *
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestination($index)
    {
        unset($this->destination[$index]);
    }

    /**
     * Gets as destination
     *
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Identifies a single destination point of the traveler(s) journey as well as
     * arrival and departure dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     * $destination
     * @return self
     */
    public function setDestination(array $destination)
    {
        $this->destination = $destination;

        return $this;
    }


}

