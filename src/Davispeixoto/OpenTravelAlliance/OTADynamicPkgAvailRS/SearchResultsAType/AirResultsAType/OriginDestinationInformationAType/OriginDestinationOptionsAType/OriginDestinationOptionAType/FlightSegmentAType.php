<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType;

use Davispeixoto\OpenTravelAlliance\FlightSegmentType;

/**
 * Class representing FlightSegmentAType
 *
 * Flight segment information returned for an availability request including
 * ancillary information.
 */
class FlightSegmentAType extends FlightSegmentType
{

    /**
     * The duration of the flight from departure location to destination location.
     *
     * @property \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Specifies the Dept. of Transport on time rate of the flight.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @property string $ticket
     */
    private $ticket = null;

    /**
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List 'Participation Level Code' (PLC).
     *
     * @property string $participationLevelCode
     */
    private $participationLevelCode = null;

    /**
     * The duration of a ground stop.
     *
     * @property \DateInterval $groundDuration
     */
    private $groundDuration = null;

    /**
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @property \DateInterval $accumulatedDuration
     */
    private $accumulatedDuration = null;

    /**
     * Miles acquired per flight segment, usually used for earning of frequent flyer
     * miles.
     *
     * @property integer $distance
     */
    private $distance = null;

    /**
     * When true, this flight is a codeshare flight.
     *
     * @property boolean $codeshareInd
     */
    private $codeshareInd = null;

    /**
     * When true, FLIFO information exists for this flight.
     *
     * @property boolean $flifoInd
     */
    private $flifoInd = null;

    /**
     * When present, contains the number of days by which the flight's arrival date
     * differs from its departure date (e.g., +1, -1).
     *
     * @property string $dateChangeNbr
     */
    private $dateChangeNbr = null;

    /**
     * The sequence number of this flight segment with respect to all flight segments
     * returned in the response.
     *
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * Traffic restriction information for a specific flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
     * $trafficRestrictionInfo
     */
    private $trafficRestrictionInfo = null;

    /**
     * Any special comments on the leg. eg. operated by XX.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * The airline specific branding for cabins.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MarketingCabinType[] $marketingCabin
     */
    private $marketingCabin = null;

    /**
     * Booking codes available to be sold for a particular flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType[]
     * $bookingClassAvail
     */
    private $bookingClassAvail = null;

    /**
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\StopLocationAType[]
     * $stopLocation
     */
    private $stopLocation = null;

    /**
     * Gets as journeyDuration
     *
     * The duration of the flight from departure location to destination location.
     *
     * @return \DateInterval
     */
    public function getJourneyDuration()
    {
        return $this->journeyDuration;
    }

    /**
     * Sets a new journeyDuration
     *
     * The duration of the flight from departure location to destination location.
     *
     * @param \DateInterval $journeyDuration
     * @return self
     */
    public function setJourneyDuration(\DateInterval $journeyDuration)
    {
        $this->journeyDuration = $journeyDuration;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as onTimeRate
     *
     * Specifies the Dept. of Transport on time rate of the flight.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Specifies the Dept. of Transport on time rate of the flight.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * Gets as ticket
     *
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Sets a new ticket
     *
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @param string $ticket
     * @return self
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Gets as participationLevelCode
     *
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List 'Participation Level Code' (PLC).
     *
     * @return string
     */
    public function getParticipationLevelCode()
    {
        return $this->participationLevelCode;
    }

    /**
     * Sets a new participationLevelCode
     *
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List 'Participation Level Code' (PLC).
     *
     * @param string $participationLevelCode
     * @return self
     */
    public function setParticipationLevelCode($participationLevelCode)
    {
        $this->participationLevelCode = $participationLevelCode;

        return $this;
    }

    /**
     * Gets as groundDuration
     *
     * The duration of a ground stop.
     *
     * @return \DateInterval
     */
    public function getGroundDuration()
    {
        return $this->groundDuration;
    }

    /**
     * Sets a new groundDuration
     *
     * The duration of a ground stop.
     *
     * @param \DateInterval $groundDuration
     * @return self
     */
    public function setGroundDuration(\DateInterval $groundDuration)
    {
        $this->groundDuration = $groundDuration;

        return $this;
    }

    /**
     * Gets as accumulatedDuration
     *
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @return \DateInterval
     */
    public function getAccumulatedDuration()
    {
        return $this->accumulatedDuration;
    }

    /**
     * Sets a new accumulatedDuration
     *
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @param \DateInterval $accumulatedDuration
     * @return self
     */
    public function setAccumulatedDuration(\DateInterval $accumulatedDuration)
    {
        $this->accumulatedDuration = $accumulatedDuration;

        return $this;
    }

    /**
     * Gets as distance
     *
     * Miles acquired per flight segment, usually used for earning of frequent flyer
     * miles.
     *
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * Miles acquired per flight segment, usually used for earning of frequent flyer
     * miles.
     *
     * @param integer $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Gets as codeshareInd
     *
     * When true, this flight is a codeshare flight.
     *
     * @return boolean
     */
    public function getCodeshareInd()
    {
        return $this->codeshareInd;
    }

    /**
     * Sets a new codeshareInd
     *
     * When true, this flight is a codeshare flight.
     *
     * @param boolean $codeshareInd
     * @return self
     */
    public function setCodeshareInd($codeshareInd)
    {
        $this->codeshareInd = $codeshareInd;

        return $this;
    }

    /**
     * Gets as flifoInd
     *
     * When true, FLIFO information exists for this flight.
     *
     * @return boolean
     */
    public function getFlifoInd()
    {
        return $this->flifoInd;
    }

    /**
     * Sets a new flifoInd
     *
     * When true, FLIFO information exists for this flight.
     *
     * @param boolean $flifoInd
     * @return self
     */
    public function setFlifoInd($flifoInd)
    {
        $this->flifoInd = $flifoInd;

        return $this;
    }

    /**
     * Gets as dateChangeNbr
     *
     * When present, contains the number of days by which the flight's arrival date
     * differs from its departure date (e.g., +1, -1).
     *
     * @return string
     */
    public function getDateChangeNbr()
    {
        return $this->dateChangeNbr;
    }

    /**
     * Sets a new dateChangeNbr
     *
     * When present, contains the number of days by which the flight's arrival date
     * differs from its departure date (e.g., +1, -1).
     *
     * @param string $dateChangeNbr
     * @return self
     */
    public function setDateChangeNbr($dateChangeNbr)
    {
        $this->dateChangeNbr = $dateChangeNbr;

        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The sequence number of this flight segment with respect to all flight segments
     * returned in the response.
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The sequence number of this flight segment with respect to all flight segments
     * returned in the response.
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Adds as trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType
     * $trafficRestrictionInfo
     */
    public function addToTrafficRestrictionInfo(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType $trafficRestrictionInfo
    ) {
        $this->trafficRestrictionInfo[] = $trafficRestrictionInfo;

        return $this;
    }

    /**
     * isset trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrafficRestrictionInfo($index)
    {
        return isset($this->trafficRestrictionInfo[$index]);
    }

    /**
     * unset trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrafficRestrictionInfo($index)
    {
        unset($this->trafficRestrictionInfo[$index]);
    }

    /**
     * Gets as trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
     */
    public function getTrafficRestrictionInfo()
    {
        return $this->trafficRestrictionInfo;
    }

    /**
     * Sets a new trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
     * $trafficRestrictionInfo
     * @return self
     */
    public function setTrafficRestrictionInfo(array $trafficRestrictionInfo)
    {
        $this->trafficRestrictionInfo = $trafficRestrictionInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Any special comments on the leg. eg. operated by XX.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\FreeTextType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Any special comments on the leg. eg. operated by XX.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Any special comments on the leg. eg. operated by XX.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Any special comments on the leg. eg. operated by XX.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any special comments on the leg. eg. operated by XX.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Adds as marketingCabin
     *
     * The airline specific branding for cabins.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MarketingCabinType $marketingCabin
     */
    public function addToMarketingCabin(\Davispeixoto\OpenTravelAlliance\MarketingCabinType $marketingCabin)
    {
        $this->marketingCabin[] = $marketingCabin;

        return $this;
    }

    /**
     * isset marketingCabin
     *
     * The airline specific branding for cabins.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingCabin($index)
    {
        return isset($this->marketingCabin[$index]);
    }

    /**
     * unset marketingCabin
     *
     * The airline specific branding for cabins.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingCabin($index)
    {
        unset($this->marketingCabin[$index]);
    }

    /**
     * Gets as marketingCabin
     *
     * The airline specific branding for cabins.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MarketingCabinType[]
     */
    public function getMarketingCabin()
    {
        return $this->marketingCabin;
    }

    /**
     * Sets a new marketingCabin
     *
     * The airline specific branding for cabins.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MarketingCabinType[] $marketingCabin
     * @return self
     */
    public function setMarketingCabin(array $marketingCabin)
    {
        $this->marketingCabin = $marketingCabin;

        return $this;
    }

    /**
     * Adds as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType
     * $bookingClassAvail
     */
    public function addToBookingClassAvail(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType $bookingClassAvail
    ) {
        $this->bookingClassAvail[] = $bookingClassAvail;

        return $this;
    }

    /**
     * isset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClassAvail($index)
    {
        return isset($this->bookingClassAvail[$index]);
    }

    /**
     * unset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClassAvail($index)
    {
        unset($this->bookingClassAvail[$index]);
    }

    /**
     * Gets as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType[]
     */
    public function getBookingClassAvail()
    {
        return $this->bookingClassAvail;
    }

    /**
     * Sets a new bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType[]
     * $bookingClassAvail
     * @return self
     */
    public function setBookingClassAvail(array $bookingClassAvail)
    {
        $this->bookingClassAvail = $bookingClassAvail;

        return $this;
    }

    /**
     * Adds as stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\StopLocationAType
     * $stopLocation
     */
    public function addToStopLocation(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\StopLocationAType $stopLocation
    ) {
        $this->stopLocation[] = $stopLocation;

        return $this;
    }

    /**
     * isset stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStopLocation($index)
    {
        return isset($this->stopLocation[$index]);
    }

    /**
     * unset stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStopLocation($index)
    {
        unset($this->stopLocation[$index]);
    }

    /**
     * Gets as stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\StopLocationAType[]
     */
    public function getStopLocation()
    {
        return $this->stopLocation;
    }

    /**
     * Sets a new stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\StopLocationAType[]
     * $stopLocation
     * @return self
     */
    public function setStopLocation(array $stopLocation)
    {
        $this->stopLocation = $stopLocation;

        return $this;
    }


}

