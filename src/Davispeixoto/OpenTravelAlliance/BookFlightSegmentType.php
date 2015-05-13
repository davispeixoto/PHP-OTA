<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BookFlightSegmentType
 *
 * Container for the flight segment data plus the MarriageGrp. Construct for
 * holding the booked flight segment information.
 * XSD Type: BookFlightSegmentType
 */
class BookFlightSegmentType extends FlightSegmentType
{

    /**
     * Number of travelers associated with this segment.
     *
     * @property integer $numberInParty
     */
    private $numberInParty = null;

    /**
     * Code providing status information for this segment. Refer to OpenTravel Code
     * List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Specifies whether a flight segment is eligible for electronic ticketing.
     *
     * @property string $eTicketEligibility
     */
    private $eTicketEligibility = null;

    /**
     * The applicable meal service code for this flight.
     *
     * @property string $mealCode
     */
    private $mealCode = null;

    /**
     * The day of the week of the departure.
     *
     * @property string $departureDay
     */
    private $departureDay = null;

    /**
     * When true a stopover is permitted (airline display "O"). When false a stopover
     * is not permitted (airline display "X").
     *
     * @property boolean $stopoverInd
     */
    private $stopoverInd = null;

    /**
     * A number that corresponds to a line in a previous response of flight segments.
     *
     * @property integer $lineNumber
     */
    private $lineNumber = null;

    /**
     * Used to provide the type of connection for this flight segment.
     *
     * @property string $connectionType
     */
    private $connectionType = null;

    /**
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC).
     *
     * @property string $participationLevelCode
     */
    private $participationLevelCode = null;

    /**
     * Miles acquired per flight segment, usually used for earning of frequent flyer
     * miles.
     *
     * @property integer $distance
     */
    private $distance = null;

    /**
     * The number of days by which the flight's arrival date differs from its departure
     * date (e.g., +1, -1).
     *
     * @property string $dateChangeNbr
     */
    private $dateChangeNbr = null;

    /**
     * When true, this flight segment constitutes a valid connection.
     *
     * @property boolean $validConnectionInd
     */
    private $validConnectionInd = null;

    /**
     * Many airlines link connection flights together by terming them married segments.
     * When two or more segments are married, they must be processed as one unit. The
     * segments must be moved, cancelled, and/or priced together. The value of the
     * marriage group must be the same for all segments.
     *
     * @property string $marriageGrp
     */
    private $marriageGrp = null;

    /**
     * A collection of availability counts per booking class.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType[]
     * $bookingClassAvails
     */
    private $bookingClassAvails = null;

    /**
     * Free text information that the marketing carrier may send about this flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\StopLocationAType[]
     * $stopLocation
     */
    private $stopLocation = null;

    /**
     * Gets as numberInParty
     *
     * Number of travelers associated with this segment.
     *
     * @return integer
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }

    /**
     * Sets a new numberInParty
     *
     * Number of travelers associated with this segment.
     *
     * @param integer $numberInParty
     * @return self
     */
    public function setNumberInParty($numberInParty)
    {
        $this->numberInParty = $numberInParty;

        return $this;
    }

    /**
     * Gets as status
     *
     * Code providing status information for this segment. Refer to OpenTravel Code
     * List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Code providing status information for this segment. Refer to OpenTravel Code
     * List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as eTicketEligibility
     *
     * Specifies whether a flight segment is eligible for electronic ticketing.
     *
     * @return string
     */
    public function getETicketEligibility()
    {
        return $this->eTicketEligibility;
    }

    /**
     * Sets a new eTicketEligibility
     *
     * Specifies whether a flight segment is eligible for electronic ticketing.
     *
     * @param string $eTicketEligibility
     * @return self
     */
    public function setETicketEligibility($eTicketEligibility)
    {
        $this->eTicketEligibility = $eTicketEligibility;

        return $this;
    }

    /**
     * Gets as mealCode
     *
     * The applicable meal service code for this flight.
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * The applicable meal service code for this flight.
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;

        return $this;
    }

    /**
     * Gets as departureDay
     *
     * The day of the week of the departure.
     *
     * @return string
     */
    public function getDepartureDay()
    {
        return $this->departureDay;
    }

    /**
     * Sets a new departureDay
     *
     * The day of the week of the departure.
     *
     * @param string $departureDay
     * @return self
     */
    public function setDepartureDay($departureDay)
    {
        $this->departureDay = $departureDay;

        return $this;
    }

    /**
     * Gets as stopoverInd
     *
     * When true a stopover is permitted (airline display "O"). When false a stopover
     * is not permitted (airline display "X").
     *
     * @return boolean
     */
    public function getStopoverInd()
    {
        return $this->stopoverInd;
    }

    /**
     * Sets a new stopoverInd
     *
     * When true a stopover is permitted (airline display "O"). When false a stopover
     * is not permitted (airline display "X").
     *
     * @param boolean $stopoverInd
     * @return self
     */
    public function setStopoverInd($stopoverInd)
    {
        $this->stopoverInd = $stopoverInd;

        return $this;
    }

    /**
     * Gets as lineNumber
     *
     * A number that corresponds to a line in a previous response of flight segments.
     *
     * @return integer
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * Sets a new lineNumber
     *
     * A number that corresponds to a line in a previous response of flight segments.
     *
     * @param integer $lineNumber
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }

    /**
     * Gets as connectionType
     *
     * Used to provide the type of connection for this flight segment.
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * Sets a new connectionType
     *
     * Used to provide the type of connection for this flight segment.
     *
     * @param string $connectionType
     * @return self
     */
    public function setConnectionType($connectionType)
    {
        $this->connectionType = $connectionType;

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
     * Gets as dateChangeNbr
     *
     * The number of days by which the flight's arrival date differs from its departure
     * date (e.g., +1, -1).
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
     * The number of days by which the flight's arrival date differs from its departure
     * date (e.g., +1, -1).
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
     * Gets as validConnectionInd
     *
     * When true, this flight segment constitutes a valid connection.
     *
     * @return boolean
     */
    public function getValidConnectionInd()
    {
        return $this->validConnectionInd;
    }

    /**
     * Sets a new validConnectionInd
     *
     * When true, this flight segment constitutes a valid connection.
     *
     * @param boolean $validConnectionInd
     * @return self
     */
    public function setValidConnectionInd($validConnectionInd)
    {
        $this->validConnectionInd = $validConnectionInd;

        return $this;
    }

    /**
     * Gets as marriageGrp
     *
     * Many airlines link connection flights together by terming them married segments.
     * When two or more segments are married, they must be processed as one unit. The
     * segments must be moved, cancelled, and/or priced together. The value of the
     * marriage group must be the same for all segments.
     *
     * @return string
     */
    public function getMarriageGrp()
    {
        return $this->marriageGrp;
    }

    /**
     * Sets a new marriageGrp
     *
     * Many airlines link connection flights together by terming them married segments.
     * When two or more segments are married, they must be processed as one unit. The
     * segments must be moved, cancelled, and/or priced together. The value of the
     * marriage group must be the same for all segments.
     *
     * @param string $marriageGrp
     * @return self
     */
    public function setMarriageGrp($marriageGrp)
    {
        $this->marriageGrp = $marriageGrp;

        return $this;
    }

    /**
     * Adds as bookingClassAvails
     *
     * A collection of availability counts per booking class.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType
     * $bookingClassAvails
     */
    public function addToBookingClassAvails(
        \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType $bookingClassAvails
    ) {
        $this->bookingClassAvails[] = $bookingClassAvails;

        return $this;
    }

    /**
     * isset bookingClassAvails
     *
     * A collection of availability counts per booking class.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClassAvails($index)
    {
        return isset($this->bookingClassAvails[$index]);
    }

    /**
     * unset bookingClassAvails
     *
     * A collection of availability counts per booking class.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClassAvails($index)
    {
        unset($this->bookingClassAvails[$index]);
    }

    /**
     * Gets as bookingClassAvails
     *
     * A collection of availability counts per booking class.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType[]
     */
    public function getBookingClassAvails()
    {
        return $this->bookingClassAvails;
    }

    /**
     * Sets a new bookingClassAvails
     *
     * A collection of availability counts per booking class.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\BookingClassAvailsAType[]
     * $bookingClassAvails
     * @return self
     */
    public function setBookingClassAvails(array $bookingClassAvails)
    {
        $this->bookingClassAvails = $bookingClassAvails;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Free text information that the marketing carrier may send about this flight.
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
     * Free text information that the marketing carrier may send about this flight.
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
     * Free text information that the marketing carrier may send about this flight.
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
     * Free text information that the marketing carrier may send about this flight.
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
     * Free text information that the marketing carrier may send about this flight.
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
     * Adds as stopLocation
     *
     * A location where the flight is scheduled to stop en route to its destination for
     * this flight segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\StopLocationAType
     * $stopLocation
     */
    public function addToStopLocation(
        \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\StopLocationAType $stopLocation
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
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\StopLocationAType[]
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
     * \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType\StopLocationAType[]
     * $stopLocation
     * @return self
     */
    public function setStopLocation(array $stopLocation)
    {
        $this->stopLocation = $stopLocation;

        return $this;
    }


}

