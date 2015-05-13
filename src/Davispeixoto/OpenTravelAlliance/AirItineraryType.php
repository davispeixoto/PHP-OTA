<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirItineraryType
 *
 * Specifies the origin and destination of the traveler.
 * XSD Type: AirItineraryType
 */
class AirItineraryType
{

    /**
     * Identifies whether travel is: one way, return trip, circle trip, open jaw,
     * other.
     *
     * @property string $directionInd
     */
    private $directionInd = null;

    /**
     * Air itinerary unique ID.
     *
     * @property string $airItineraryRPH
     */
    private $airItineraryRPH = null;

    /**
     * A collection of OriginDestinationOption
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOptions
     */
    private $originDestinationOptions = null;

    /**
     * Gets as directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw,
     * other.
     *
     * @return string
     */
    public function getDirectionInd()
    {
        return $this->directionInd;
    }

    /**
     * Sets a new directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw,
     * other.
     *
     * @param string $directionInd
     * @return self
     */
    public function setDirectionInd($directionInd)
    {
        $this->directionInd = $directionInd;

        return $this;
    }

    /**
     * Gets as airItineraryRPH
     *
     * Air itinerary unique ID.
     *
     * @return string
     */
    public function getAirItineraryRPH()
    {
        return $this->airItineraryRPH;
    }

    /**
     * Sets a new airItineraryRPH
     *
     * Air itinerary unique ID.
     *
     * @param string $airItineraryRPH
     * @return self
     */
    public function setAirItineraryRPH($airItineraryRPH)
    {
        $this->airItineraryRPH = $airItineraryRPH;

        return $this;
    }

    /**
     * Adds as originDestinationOption
     *
     * A collection of OriginDestinationOption
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOptions(
        \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOptions[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationOptions($index)
    {
        return isset($this->originDestinationOptions[$index]);
    }

    /**
     * unset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationOptions($index)
    {
        unset($this->originDestinationOptions[$index]);
    }

    /**
     * Gets as originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOptions()
    {
        return $this->originDestinationOptions;
    }

    /**
     * Sets a new originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOptions
     * @return self
     */
    public function setOriginDestinationOptions(array $originDestinationOptions)
    {
        $this->originDestinationOptions = $originDestinationOptions;

        return $this;
    }


}

