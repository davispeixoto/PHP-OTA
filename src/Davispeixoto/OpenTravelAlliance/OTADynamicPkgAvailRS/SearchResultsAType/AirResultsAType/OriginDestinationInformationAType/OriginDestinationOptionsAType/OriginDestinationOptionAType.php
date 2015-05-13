<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType
{

    /**
     * Details of the flight option for an origin destination pair.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $flightSegment
     */
    private $flightSegment = null;

    /**
     * Adds as flightSegment
     *
     * Details of the flight option for an origin destination pair.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType
     * $flightSegment
     */
    public function addToFlightSegment(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType $flightSegment
    ) {
        $this->flightSegment[] = $flightSegment;

        return $this;
    }

    /**
     * isset flightSegment
     *
     * Details of the flight option for an origin destination pair.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * Details of the flight option for an origin destination pair.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * Details of the flight option for an origin destination pair.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * Details of the flight option for an origin destination pair.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }


}

