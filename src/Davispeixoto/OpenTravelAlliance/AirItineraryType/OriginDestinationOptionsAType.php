<?php

namespace Davispeixoto\OpenTravelAlliance\AirItineraryType;

/**
 * Class representing OriginDestinationOptionsAType
 */
class OriginDestinationOptionsAType
{

    /**
     * A container for OriginDestinationOptionType.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     */
    private $originDestinationOption = null;

    /**
     * Adds as originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOption(
        \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOption[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOption
     *
     * A container for OriginDestinationOptionType.
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
     * A container for OriginDestinationOptionType.
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
     * A container for OriginDestinationOptionType.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * A container for OriginDestinationOptionType.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }


}

