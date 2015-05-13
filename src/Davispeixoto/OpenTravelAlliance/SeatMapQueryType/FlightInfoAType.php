<?php

namespace Davispeixoto\OpenTravelAlliance\SeatMapQueryType;

/**
 * Class representing FlightInfoAType
 */
class FlightInfoAType
{

    /**
     * The number of the flight for the seat map.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * A unique ID for a traveler defined elsewhere in this message.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * The airline the seat map is requested for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Origin and destination information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Detailed air itinerary information, including origin/destination options by
     * flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItineraryDetail
     */
    private $airItineraryDetail = null;

    /**
     * Gets as flightNumber
     *
     * The number of the flight for the seat map.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The number of the flight for the seat map.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * A unique ID for a traveler defined elsewhere in this message.
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
     * A unique ID for a traveler defined elsewhere in this message.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Gets as airline
     *
     * The airline the seat map is requested for.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * The airline the seat map is requested for.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Gets as originDestination
     *
     * Origin and destination information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Origin and destination information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType
     * $originDestination
     * @return self
     */
    public function setOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType $originDestination
    ) {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Gets as airItineraryDetail
     *
     * Detailed air itinerary information, including origin/destination options by
     * flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirItineraryType
     */
    public function getAirItineraryDetail()
    {
        return $this->airItineraryDetail;
    }

    /**
     * Sets a new airItineraryDetail
     *
     * Detailed air itinerary information, including origin/destination options by
     * flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItineraryDetail
     * @return self
     */
    public function setAirItineraryDetail(\Davispeixoto\OpenTravelAlliance\AirItineraryType $airItineraryDetail)
    {
        $this->airItineraryDetail = $airItineraryDetail;

        return $this;
    }


}

