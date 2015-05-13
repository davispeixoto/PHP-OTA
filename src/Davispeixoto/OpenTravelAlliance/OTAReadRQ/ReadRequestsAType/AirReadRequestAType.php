<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing AirReadRequestAType
 */
class AirReadRequestAType
{

    /**
     * To specify a seat number to be used as criteria for requesting a booking record.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * When requesting booking records by frequent flyer level, this is used to
     * indicate that booking records with the codeshare equivalent partner level should
     * also be returned.
     *
     * @property boolean $includeFFEquivPartnerLev
     */
    private $includeFFEquivPartnerLev = null;

    /**
     * To specify that FF number should be returned for each booking record in the
     * list. The default is do not return, set to true, the FF number should be
     * returned.
     *
     * @property boolean $returnFFNumber
     */
    private $returnFFNumber = null;

    /**
     * To specify that downline segment info should be returned. The default is do not
     * return, set to true, the information should be returned.
     *
     * @property boolean $returnDownlineSeg
     */
    private $returnDownlineSeg = null;

    /**
     * To specify the type of list requested. Refer to OpenTravel Code List Information
     * To Return (ITR).
     *
     * @property string $infoToReturn
     */
    private $infoToReturn = null;

    /**
     * To specify criteria as to whether to return only the FF level specified or
     * levels above and below.
     *
     * @property string $fFRequestCriteria
     */
    private $fFRequestCriteria = null;

    /**
     * When true, do not send SSRs in the response. When false, SSRs would be included
     * in the response.
     *
     * @property boolean $noSSRInd
     */
    private $noSSRInd = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specify airline on which the person is booked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Specific flight number on which the passenger is booked.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Flight Origin - IATA 3 letter code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Request a reservation with this departure date.
     *
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * Request a reservation based on a passenger name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * Request a reservation based on a telephone number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * Request booking records based on frequent flyer information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Request booking records by credit card information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCardInfo
     */
    private $creditCardInfo = null;

    /**
     * Request booking record by ticket number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketingInfoRSType $ticketNumber
     */
    private $ticketNumber = null;

    /**
     * Requests items from a booking file queue.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType
     * $queueInfo
     */
    private $queueInfo = null;

    /**
     * Specifies a departure date range.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\DateAType
     * $date
     */
    private $date = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as seatNumber
     *
     * To specify a seat number to be used as criteria for requesting a booking record.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * To specify a seat number to be used as criteria for requesting a booking record.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Gets as includeFFEquivPartnerLev
     *
     * When requesting booking records by frequent flyer level, this is used to
     * indicate that booking records with the codeshare equivalent partner level should
     * also be returned.
     *
     * @return boolean
     */
    public function getIncludeFFEquivPartnerLev()
    {
        return $this->includeFFEquivPartnerLev;
    }

    /**
     * Sets a new includeFFEquivPartnerLev
     *
     * When requesting booking records by frequent flyer level, this is used to
     * indicate that booking records with the codeshare equivalent partner level should
     * also be returned.
     *
     * @param boolean $includeFFEquivPartnerLev
     * @return self
     */
    public function setIncludeFFEquivPartnerLev($includeFFEquivPartnerLev)
    {
        $this->includeFFEquivPartnerLev = $includeFFEquivPartnerLev;

        return $this;
    }

    /**
     * Gets as returnFFNumber
     *
     * To specify that FF number should be returned for each booking record in the
     * list. The default is do not return, set to true, the FF number should be
     * returned.
     *
     * @return boolean
     */
    public function getReturnFFNumber()
    {
        return $this->returnFFNumber;
    }

    /**
     * Sets a new returnFFNumber
     *
     * To specify that FF number should be returned for each booking record in the
     * list. The default is do not return, set to true, the FF number should be
     * returned.
     *
     * @param boolean $returnFFNumber
     * @return self
     */
    public function setReturnFFNumber($returnFFNumber)
    {
        $this->returnFFNumber = $returnFFNumber;

        return $this;
    }

    /**
     * Gets as returnDownlineSeg
     *
     * To specify that downline segment info should be returned. The default is do not
     * return, set to true, the information should be returned.
     *
     * @return boolean
     */
    public function getReturnDownlineSeg()
    {
        return $this->returnDownlineSeg;
    }

    /**
     * Sets a new returnDownlineSeg
     *
     * To specify that downline segment info should be returned. The default is do not
     * return, set to true, the information should be returned.
     *
     * @param boolean $returnDownlineSeg
     * @return self
     */
    public function setReturnDownlineSeg($returnDownlineSeg)
    {
        $this->returnDownlineSeg = $returnDownlineSeg;

        return $this;
    }

    /**
     * Gets as infoToReturn
     *
     * To specify the type of list requested. Refer to OpenTravel Code List Information
     * To Return (ITR).
     *
     * @return string
     */
    public function getInfoToReturn()
    {
        return $this->infoToReturn;
    }

    /**
     * Sets a new infoToReturn
     *
     * To specify the type of list requested. Refer to OpenTravel Code List Information
     * To Return (ITR).
     *
     * @param string $infoToReturn
     * @return self
     */
    public function setInfoToReturn($infoToReturn)
    {
        $this->infoToReturn = $infoToReturn;

        return $this;
    }

    /**
     * Gets as fFRequestCriteria
     *
     * To specify criteria as to whether to return only the FF level specified or
     * levels above and below.
     *
     * @return string
     */
    public function getFFRequestCriteria()
    {
        return $this->fFRequestCriteria;
    }

    /**
     * Sets a new fFRequestCriteria
     *
     * To specify criteria as to whether to return only the FF level specified or
     * levels above and below.
     *
     * @param string $fFRequestCriteria
     * @return self
     */
    public function setFFRequestCriteria($fFRequestCriteria)
    {
        $this->fFRequestCriteria = $fFRequestCriteria;

        return $this;
    }

    /**
     * Gets as noSSRInd
     *
     * When true, do not send SSRs in the response. When false, SSRs would be included
     * in the response.
     *
     * @return boolean
     */
    public function getNoSSRInd()
    {
        return $this->noSSRInd;
    }

    /**
     * Sets a new noSSRInd
     *
     * When true, do not send SSRs in the response. When false, SSRs would be included
     * in the response.
     *
     * @param boolean $noSSRInd
     * @return self
     */
    public function setNoSSRInd($noSSRInd)
    {
        $this->noSSRInd = $noSSRInd;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Adds as source
     *
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * To request a list of reservations made by specified travel agent, ERSP, booking
     * channel, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify airline on which the person is booked.
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
     * Specify airline on which the person is booked.
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
     * Gets as flightNumber
     *
     * Specific flight number on which the passenger is booked.
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
     * Specific flight number on which the passenger is booked.
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
     * Gets as departureAirport
     *
     * Flight Origin - IATA 3 letter code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Flight Origin - IATA 3 letter code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(\Davispeixoto\OpenTravelAlliance\LocationType $departureAirport)
    {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * Request a reservation with this departure date.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * Request a reservation with this departure date.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as name
     *
     * Request a reservation based on a passenger name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Request a reservation based on a passenger name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * Request a reservation based on a telephone number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Request a reservation based on a telephone number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\TelephoneAType
     * $telephone
     * @return self
     */
    public function setTelephone(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\TelephoneAType $telephone
    ) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * Request booking records based on frequent flyer information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Request booking records based on frequent flyer information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Gets as creditCardInfo
     *
     * Request booking records by credit card information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentCardType
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * Sets a new creditCardInfo
     *
     * Request booking records by credit card information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCardInfo
     * @return self
     */
    public function setCreditCardInfo(\Davispeixoto\OpenTravelAlliance\PaymentCardType $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;

        return $this;
    }

    /**
     * Gets as ticketNumber
     *
     * Request booking record by ticket number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TicketingInfoRSType
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Sets a new ticketNumber
     *
     * Request booking record by ticket number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TicketingInfoRSType $ticketNumber
     * @return self
     */
    public function setTicketNumber(\Davispeixoto\OpenTravelAlliance\TicketingInfoRSType $ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Gets as queueInfo
     *
     * Requests items from a booking file queue.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType
     */
    public function getQueueInfo()
    {
        return $this->queueInfo;
    }

    /**
     * Sets a new queueInfo
     *
     * Requests items from a booking file queue.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType
     * $queueInfo
     * @return self
     */
    public function setQueueInfo(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType $queueInfo
    ) {
        $this->queueInfo = $queueInfo;

        return $this;
    }

    /**
     * Gets as date
     *
     * Specifies a departure date range.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\DateAType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies a departure date range.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\DateAType
     * $date
     * @return self
     */
    public function setDate(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\DateAType $date
    ) {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

