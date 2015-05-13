<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRS;

/**
 * Class representing OriginDestinationOptionsAType
 *
 * Holds the collection of train options for this origin-destination pair. There
 * maybe limits imposed by individual supplier that are below the maximum
 * occurrences for this element.
 */
class OriginDestinationOptionsAType
{

    /**
     * Travel origin location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel destination location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Train segment information and train segment comments.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     */
    private $originDestinationOption = null;

    /**
     * Gets as originLocation
     *
     * Travel origin location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel origin location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel destination location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel destination location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as originDestinationOption
     *
     * Train segment information and train segment comments.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOption(
        \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOption[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOption
     *
     * Train segment information and train segment comments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationOption($index)
    {
        return isset($this->originDestinationOption[$index]);
    }

    /**
     * unset originDestinationOption
     *
     * Train segment information and train segment comments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationOption($index)
    {
        unset($this->originDestinationOption[$index]);
    }

    /**
     * Gets as originDestinationOption
     *
     * Train segment information and train segment comments.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * Train segment information and train segment comments.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }


}

