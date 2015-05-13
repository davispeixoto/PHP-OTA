<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BaggageQueryType
 *
 * Information about baggage associated with a traveler for allowing the offer
 * engine to determine baggage services.
 * XSD Type: BaggageQueryType
 */
class BaggageQueryType
{

    /**
     * A code that points to a valid baggage type and is known to the trading partner
     * system. Note that these item types should map to ancillary item codes.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The baggage origin airport city code.
     *
     * @property string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Identifies the context of the baggage origin city code such as IATA, ARC, or
     * internal code.
     *
     * @property string $originCodeContext
     */
    private $originCodeContext = null;

    /**
     * The baggage destination airport city code.
     *
     * @property string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Identifies the context of the baggage destination city code such as IATA, ARC,
     * or internal code.
     *
     * @property string $destinationCodeContext
     */
    private $destinationCodeContext = null;

    /**
     * A reference to a traveler RPH defined elsewhere in this message.(Developer
     * Notes) RPH value set in:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/TravelerInfo/AirTraveler/@RPH
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * A unique identifier for a flight segment within an O/D priced option. Only use
     * this if you intend to price an item by flight segments. (Developer Notes) The
     * corresponding value for this RPH is set here:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/AirItineraryInfo/PricedAirItinerary/PricedItinerary/AirItinerary/OriginDestinationOptions/OriginDestinationOption/FlightSegment/@RPH
     *
     * @property string $itinerarySegmentRPH
     */
    private $itinerarySegmentRPH = null;

    /**
     * Airline carrier information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BaggageQueryType\AirlineCarrierAType
     * $airlineCarrier
     */
    private $airlineCarrier = null;

    /**
     * Gets as code
     *
     * A code that points to a valid baggage type and is known to the trading partner
     * system. Note that these item types should map to ancillary item codes.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that points to a valid baggage type and is known to the trading partner
     * system. Note that these item types should map to ancillary item codes.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as originCityCode
     *
     * The baggage origin airport city code.
     *
     * @return string
     */
    public function getOriginCityCode()
    {
        return $this->originCityCode;
    }

    /**
     * Sets a new originCityCode
     *
     * The baggage origin airport city code.
     *
     * @param string $originCityCode
     * @return self
     */
    public function setOriginCityCode($originCityCode)
    {
        $this->originCityCode = $originCityCode;

        return $this;
    }

    /**
     * Gets as originCodeContext
     *
     * Identifies the context of the baggage origin city code such as IATA, ARC, or
     * internal code.
     *
     * @return string
     */
    public function getOriginCodeContext()
    {
        return $this->originCodeContext;
    }

    /**
     * Sets a new originCodeContext
     *
     * Identifies the context of the baggage origin city code such as IATA, ARC, or
     * internal code.
     *
     * @param string $originCodeContext
     * @return self
     */
    public function setOriginCodeContext($originCodeContext)
    {
        $this->originCodeContext = $originCodeContext;

        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * The baggage destination airport city code.
     *
     * @return string
     */
    public function getDestinationCityCode()
    {
        return $this->destinationCityCode;
    }

    /**
     * Sets a new destinationCityCode
     *
     * The baggage destination airport city code.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;

        return $this;
    }

    /**
     * Gets as destinationCodeContext
     *
     * Identifies the context of the baggage destination city code such as IATA, ARC,
     * or internal code.
     *
     * @return string
     */
    public function getDestinationCodeContext()
    {
        return $this->destinationCodeContext;
    }

    /**
     * Sets a new destinationCodeContext
     *
     * Identifies the context of the baggage destination city code such as IATA, ARC,
     * or internal code.
     *
     * @param string $destinationCodeContext
     * @return self
     */
    public function setDestinationCodeContext($destinationCodeContext)
    {
        $this->destinationCodeContext = $destinationCodeContext;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * A reference to a traveler RPH defined elsewhere in this message.(Developer
     * Notes) RPH value set in:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/TravelerInfo/AirTraveler/@RPH
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
     * A reference to a traveler RPH defined elsewhere in this message.(Developer
     * Notes) RPH value set in:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/TravelerInfo/AirTraveler/@RPH
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
     * Gets as itinerarySegmentRPH
     *
     * A unique identifier for a flight segment within an O/D priced option. Only use
     * this if you intend to price an item by flight segments. (Developer Notes) The
     * corresponding value for this RPH is set here:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/AirItineraryInfo/PricedAirItinerary/PricedItinerary/AirItinerary/OriginDestinationOptions/OriginDestinationOption/FlightSegment/@RPH
     *
     * @return string
     */
    public function getItinerarySegmentRPH()
    {
        return $this->itinerarySegmentRPH;
    }

    /**
     * Sets a new itinerarySegmentRPH
     *
     * A unique identifier for a flight segment within an O/D priced option. Only use
     * this if you intend to price an item by flight segments. (Developer Notes) The
     * corresponding value for this RPH is set here:
     * OTA_AirGetOfferRQ/RequestCriterion/PreBookingInfo/AirItineraryInfo/PricedAirItinerary/PricedItinerary/AirItinerary/OriginDestinationOptions/OriginDestinationOption/FlightSegment/@RPH
     *
     * @param string $itinerarySegmentRPH
     * @return self
     */
    public function setItinerarySegmentRPH($itinerarySegmentRPH)
    {
        $this->itinerarySegmentRPH = $itinerarySegmentRPH;

        return $this;
    }

    /**
     * Gets as airlineCarrier
     *
     * Airline carrier information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BaggageQueryType\AirlineCarrierAType
     */
    public function getAirlineCarrier()
    {
        return $this->airlineCarrier;
    }

    /**
     * Sets a new airlineCarrier
     *
     * Airline carrier information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BaggageQueryType\AirlineCarrierAType
     * $airlineCarrier
     * @return self
     */
    public function setAirlineCarrier(
        \Davispeixoto\OpenTravelAlliance\BaggageQueryType\AirlineCarrierAType $airlineCarrier
    ) {
        $this->airlineCarrier = $airlineCarrier;

        return $this;
    }


}

