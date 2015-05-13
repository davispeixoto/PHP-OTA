<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType;

/**
 * Class representing OriginDestinationOptionsAType
 */
class OriginDestinationOptionsAType
{

    /**
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $originDestinationOption
     */
    private $originDestinationOption = null;

    /**
     * Adds as flightSegment
     *
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType
     * $flightSegment
     */
    public function addToOriginDestinationOption(
        \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType $flightSegment
    ) {
        $this->originDestinationOption[] = $flightSegment;

        return $this;
    }

    /**
     * isset originDestinationOption
     *
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
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
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
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
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * Holds the collection of flight options for this origin-destination pair. There
     * maybe limits imposed by individual supplier that are below the maximum
     * occurrences for this element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }


}

