<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RFPRequestSegmentsType
 *
 * Provides request data for an event.
 * XSD Type: RFP_RequestSegmentsType
 */
class RFPRequestSegmentsType
{

    /**
     * This specifies the number of people who will attend the function and/or need
     * rooms.
     *
     * @property integer $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The date the requestor requires a response/proposal.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue
     */
    private $responseDue = null;

    /**
     * The date the requestor intends to decide on a particular site.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue
     */
    private $decisionDue = null;

    /**
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $responseFormat
     */
    private $responseFormat = null;

    /**
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @property string $responseLanguage
     */
    private $responseLanguage = null;

    /**
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @property boolean $preliminaryCutIndicator
     */
    private $preliminaryCutIndicator = null;

    /**
     * Defines the date that the preliminary cut will be made.
     *
     * @property \DateTime $preliminaryCutDate
     */
    private $preliminaryCutDate = null;

    /**
     * Date the RFP or RFPs were distributed.
     *
     * @property \DateTime $rFPDistributionDate
     */
    private $rFPDistributionDate = null;

    /**
     * Date the RFP or RFPs were published.
     *
     * @property \DateTime $rFPPublishedDate
     */
    private $rFPPublishedDate = null;

    /**
     * The date the RFP was created.
     *
     * @property \DateTime $rFPCreationDate
     */
    private $rFPCreationDate = null;

    /**
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType[]
     * $rFPRequestSegment
     */
    private $rFPRequestSegment = null;

    /**
     * Gets as attendeeQuantity
     *
     * This specifies the number of people who will attend the function and/or need
     * rooms.
     *
     * @return integer
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * This specifies the number of people who will attend the function and/or need
     * rooms.
     *
     * @param integer $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;

        return $this;
    }

    /**
     * Gets as responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getResponseDue()
    {
        return $this->responseDue;
    }

    /**
     * Sets a new responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue
     * @return self
     */
    public function setResponseDue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue)
    {
        $this->responseDue = $responseDue;

        return $this;
    }

    /**
     * Gets as decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDecisionDue()
    {
        return $this->decisionDue;
    }

    /**
     * Sets a new decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue
     * @return self
     */
    public function setDecisionDue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue)
    {
        $this->decisionDue = $decisionDue;

        return $this;
    }

    /**
     * Gets as responseFormat
     *
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getResponseFormat()
    {
        return $this->responseFormat;
    }

    /**
     * Sets a new responseFormat
     *
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $responseFormat
     * @return self
     */
    public function setResponseFormat($responseFormat)
    {
        $this->responseFormat = $responseFormat;

        return $this;
    }

    /**
     * Gets as responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @return string
     */
    public function getResponseLanguage()
    {
        return $this->responseLanguage;
    }

    /**
     * Sets a new responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @param string $responseLanguage
     * @return self
     */
    public function setResponseLanguage($responseLanguage)
    {
        $this->responseLanguage = $responseLanguage;

        return $this;
    }

    /**
     * Gets as preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @return boolean
     */
    public function getPreliminaryCutIndicator()
    {
        return $this->preliminaryCutIndicator;
    }

    /**
     * Sets a new preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @param boolean $preliminaryCutIndicator
     * @return self
     */
    public function setPreliminaryCutIndicator($preliminaryCutIndicator)
    {
        $this->preliminaryCutIndicator = $preliminaryCutIndicator;

        return $this;
    }

    /**
     * Gets as preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @return \DateTime
     */
    public function getPreliminaryCutDate()
    {
        return $this->preliminaryCutDate;
    }

    /**
     * Sets a new preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @param \DateTime $preliminaryCutDate
     * @return self
     */
    public function setPreliminaryCutDate(\DateTime $preliminaryCutDate)
    {
        $this->preliminaryCutDate = $preliminaryCutDate;

        return $this;
    }

    /**
     * Gets as rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @return \DateTime
     */
    public function getRFPDistributionDate()
    {
        return $this->rFPDistributionDate;
    }

    /**
     * Sets a new rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @param \DateTime $rFPDistributionDate
     * @return self
     */
    public function setRFPDistributionDate(\DateTime $rFPDistributionDate)
    {
        $this->rFPDistributionDate = $rFPDistributionDate;

        return $this;
    }

    /**
     * Gets as rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @return \DateTime
     */
    public function getRFPPublishedDate()
    {
        return $this->rFPPublishedDate;
    }

    /**
     * Sets a new rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @param \DateTime $rFPPublishedDate
     * @return self
     */
    public function setRFPPublishedDate(\DateTime $rFPPublishedDate)
    {
        $this->rFPPublishedDate = $rFPPublishedDate;

        return $this;
    }

    /**
     * Gets as rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @return \DateTime
     */
    public function getRFPCreationDate()
    {
        return $this->rFPCreationDate;
    }

    /**
     * Sets a new rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @param \DateTime $rFPCreationDate
     * @return self
     */
    public function setRFPCreationDate(\DateTime $rFPCreationDate)
    {
        $this->rFPCreationDate = $rFPCreationDate;

        return $this;
    }

    /**
     * Adds as rFPRequestSegment
     *
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType
     * $rFPRequestSegment
     */
    public function addToRFPRequestSegment(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType $rFPRequestSegment
    ) {
        $this->rFPRequestSegment[] = $rFPRequestSegment;

        return $this;
    }

    /**
     * isset rFPRequestSegment
     *
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPRequestSegment($index)
    {
        return isset($this->rFPRequestSegment[$index]);
    }

    /**
     * unset rFPRequestSegment
     *
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPRequestSegment($index)
    {
        unset($this->rFPRequestSegment[$index]);
    }

    /**
     * Gets as rFPRequestSegment
     *
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType[]
     */
    public function getRFPRequestSegment()
    {
        return $this->rFPRequestSegment;
    }

    /**
     * Sets a new rFPRequestSegment
     *
     * This is the request data for an event, whether it be a block of rooms and/or
     * meeting space.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType[]
     * $rFPRequestSegment
     * @return self
     */
    public function setRFPRequestSegment(array $rFPRequestSegment)
    {
        $this->rFPRequestSegment = $rFPRequestSegment;

        return $this;
    }


}

