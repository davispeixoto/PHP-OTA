<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType;

use Davispeixoto\OpenTravelAlliance\FlightSegmentType;

/**
 * Class representing FlightSegmentAType
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
     * Identifies the start date for the scheduled flight.
     *
     * @property \DateTime $scheduleValidStartDate
     */
    private $scheduleValidStartDate = null;

    /**
     * Identifies the end date for the scheduled flight.
     *
     * @property \DateTime $scheduleValidEndDate
     */
    private $scheduleValidEndDate = null;

    /**
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC).
     *
     * @property string $participationLevelCode
     */
    private $participationLevelCode = null;

    /**
     * When present, contains the number of days by which the flight's arrival date
     * differs from its departure date.
     *
     * @property string $dateChangeNbr
     */
    private $dateChangeNbr = null;

    /**
     * When true, FLIFO information exists for this flight.
     *
     * @property boolean $fLIFOInd
     */
    private $fLIFOInd = null;

    /**
     * Any special comments on the leg. eg. operated by XX.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MarketingCabinType[] $marketingCabin
     */
    private $marketingCabin = null;

    /**
     * Identifies the days of week the flight operates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $daysOfOperation
     */
    private $daysOfOperation = null;

    /**
     * Reservation booking codes for a particular flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType[]
     * $bookingClass
     */
    private $bookingClass = null;

    /**
     * Traffic restriction information for a specific flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
     * $trafficRestrictionInfo
     */
    private $trafficRestrictionInfo = null;

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
     * Gets as scheduleValidStartDate
     *
     * Identifies the start date for the scheduled flight.
     *
     * @return \DateTime
     */
    public function getScheduleValidStartDate()
    {
        return $this->scheduleValidStartDate;
    }

    /**
     * Sets a new scheduleValidStartDate
     *
     * Identifies the start date for the scheduled flight.
     *
     * @param \DateTime $scheduleValidStartDate
     * @return self
     */
    public function setScheduleValidStartDate(\DateTime $scheduleValidStartDate)
    {
        $this->scheduleValidStartDate = $scheduleValidStartDate;

        return $this;
    }

    /**
     * Gets as scheduleValidEndDate
     *
     * Identifies the end date for the scheduled flight.
     *
     * @return \DateTime
     */
    public function getScheduleValidEndDate()
    {
        return $this->scheduleValidEndDate;
    }

    /**
     * Sets a new scheduleValidEndDate
     *
     * Identifies the end date for the scheduled flight.
     *
     * @param \DateTime $scheduleValidEndDate
     * @return self
     */
    public function setScheduleValidEndDate(\DateTime $scheduleValidEndDate)
    {
        $this->scheduleValidEndDate = $scheduleValidEndDate;

        return $this;
    }

    /**
     * Gets as participationLevelCode
     *
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC).
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
     * OpenTravel Code List Participation Level Code (PLC).
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
     * Gets as dateChangeNbr
     *
     * When present, contains the number of days by which the flight's arrival date
     * differs from its departure date.
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
     * differs from its departure date.
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
     * Gets as fLIFOInd
     *
     * When true, FLIFO information exists for this flight.
     *
     * @return boolean
     */
    public function getFLIFOInd()
    {
        return $this->fLIFOInd;
    }

    /**
     * Sets a new fLIFOInd
     *
     * When true, FLIFO information exists for this flight.
     *
     * @param boolean $fLIFOInd
     * @return self
     */
    public function setFLIFOInd($fLIFOInd)
    {
        $this->fLIFOInd = $fLIFOInd;

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
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
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
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
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
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
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
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
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
     * Identifies the marketing name for the cabin. This is the supplier cabin
     * identifier as opposed to the generic industry term for the cabin.
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
     * Gets as daysOfOperation
     *
     * Identifies the days of week the flight operates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getDaysOfOperation()
    {
        return $this->daysOfOperation;
    }

    /**
     * Sets a new daysOfOperation
     *
     * Identifies the days of week the flight operates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType $daysOfOperation
     * @return self
     */
    public function setDaysOfOperation(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $daysOfOperation)
    {
        $this->daysOfOperation = $daysOfOperation;

        return $this;
    }

    /**
     * Adds as bookingClass
     *
     * Reservation booking codes for a particular flight segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType
     * $bookingClass
     */
    public function addToBookingClass(
        \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType $bookingClass
    ) {
        $this->bookingClass[] = $bookingClass;

        return $this;
    }

    /**
     * isset bookingClass
     *
     * Reservation booking codes for a particular flight segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClass($index)
    {
        return isset($this->bookingClass[$index]);
    }

    /**
     * unset bookingClass
     *
     * Reservation booking codes for a particular flight segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClass($index)
    {
        unset($this->bookingClass[$index]);
    }

    /**
     * Gets as bookingClass
     *
     * Reservation booking codes for a particular flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType[]
     */
    public function getBookingClass()
    {
        return $this->bookingClass;
    }

    /**
     * Sets a new bookingClass
     *
     * Reservation booking codes for a particular flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType[]
     * $bookingClass
     * @return self
     */
    public function setBookingClass(array $bookingClass)
    {
        $this->bookingClass = $bookingClass;

        return $this;
    }

    /**
     * Adds as trafficRestrictionInfo
     *
     * Traffic restriction information for a specific flight.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType
     * $trafficRestrictionInfo
     */
    public function addToTrafficRestrictionInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType $trafficRestrictionInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\TrafficRestrictionInfoAType[]
     * $trafficRestrictionInfo
     * @return self
     */
    public function setTrafficRestrictionInfo(array $trafficRestrictionInfo)
    {
        $this->trafficRestrictionInfo = $trafficRestrictionInfo;

        return $this;
    }


}

