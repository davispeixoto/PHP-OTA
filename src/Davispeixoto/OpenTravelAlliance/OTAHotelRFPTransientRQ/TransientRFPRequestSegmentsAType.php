<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ;

/**
 * Class representing TransientRFPRequestSegmentsAType
 */
class TransientRFPRequestSegmentsAType
{

    /**
     * This defines how the detailed response to the RFP should be communicated (e.g.,
     * http, e-mail, telephone). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $responseMethod
     */
    private $responseMethod = null;

    /**
     * This defines the format in which the response to the RFP should be communicated
     * (e.g., XML, Excel, hardcopy). Refer to OpenTravel Code List Format Type (FMT).
     *
     * @property string $responseFormat
     */
    private $responseFormat = null;

    /**
     * The date the requestor requires a response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDueDate
     */
    private $responseDueDate = null;

    /**
     * The date the requestor intends to make a decision.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDueDate
     */
    private $decisionDueDate = null;

    /**
     * This specifies the intended length of time to which this request applies.
     *
     * @property \DateInterval $contractDuration
     */
    private $contractDuration = null;

    /**
     * The intended originating contract year or year and month
     *
     * @property \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $contractStart
     */
    private $contractStart = null;

    /**
     * A collection of RequestedInfo elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType
     * $requestedInfos
     */
    private $requestedInfos = null;

    /**
     * Provides the details of the data being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType[]
     * $transientRFPRequestSegment
     */
    private $transientRFPRequestSegment = null;

    /**
     * A collection of Comment elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     * $comments
     */
    private $comments = null;

    /**
     * Gets as responseMethod
     *
     * This defines how the detailed response to the RFP should be communicated (e.g.,
     * http, e-mail, telephone). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getResponseMethod()
    {
        return $this->responseMethod;
    }

    /**
     * Sets a new responseMethod
     *
     * This defines how the detailed response to the RFP should be communicated (e.g.,
     * http, e-mail, telephone). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $responseMethod
     * @return self
     */
    public function setResponseMethod($responseMethod)
    {
        $this->responseMethod = $responseMethod;

        return $this;
    }

    /**
     * Gets as responseFormat
     *
     * This defines the format in which the response to the RFP should be communicated
     * (e.g., XML, Excel, hardcopy). Refer to OpenTravel Code List Format Type (FMT).
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
     * This defines the format in which the response to the RFP should be communicated
     * (e.g., XML, Excel, hardcopy). Refer to OpenTravel Code List Format Type (FMT).
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
     * Gets as responseDueDate
     *
     * The date the requestor requires a response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getResponseDueDate()
    {
        return $this->responseDueDate;
    }

    /**
     * Sets a new responseDueDate
     *
     * The date the requestor requires a response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDueDate
     * @return self
     */
    public function setResponseDueDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDueDate)
    {
        $this->responseDueDate = $responseDueDate;

        return $this;
    }

    /**
     * Gets as decisionDueDate
     *
     * The date the requestor intends to make a decision.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDecisionDueDate()
    {
        return $this->decisionDueDate;
    }

    /**
     * Sets a new decisionDueDate
     *
     * The date the requestor intends to make a decision.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDueDate
     * @return self
     */
    public function setDecisionDueDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDueDate)
    {
        $this->decisionDueDate = $decisionDueDate;

        return $this;
    }

    /**
     * Gets as contractDuration
     *
     * This specifies the intended length of time to which this request applies.
     *
     * @return \DateInterval
     */
    public function getContractDuration()
    {
        return $this->contractDuration;
    }

    /**
     * Sets a new contractDuration
     *
     * This specifies the intended length of time to which this request applies.
     *
     * @param \DateInterval $contractDuration
     * @return self
     */
    public function setContractDuration(\DateInterval $contractDuration)
    {
        $this->contractDuration = $contractDuration;

        return $this;
    }

    /**
     * Gets as contractStart
     *
     * The intended originating contract year or year and month
     *
     * @return \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     */
    public function getContractStart()
    {
        return $this->contractStart;
    }

    /**
     * Sets a new contractStart
     *
     * The intended originating contract year or year and month
     *
     * @param \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $contractStart
     * @return self
     */
    public function setContractStart(\Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $contractStart)
    {
        $this->contractStart = $contractStart;

        return $this;
    }

    /**
     * Gets as requestedInfos
     *
     * A collection of RequestedInfo elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType
     */
    public function getRequestedInfos()
    {
        return $this->requestedInfos;
    }

    /**
     * Sets a new requestedInfos
     *
     * A collection of RequestedInfo elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType
     * $requestedInfos
     * @return self
     */
    public function setRequestedInfos(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType $requestedInfos
    ) {
        $this->requestedInfos = $requestedInfos;

        return $this;
    }

    /**
     * Adds as transientRFPRequestSegment
     *
     * Provides the details of the data being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType
     * $transientRFPRequestSegment
     */
    public function addToTransientRFPRequestSegment(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType $transientRFPRequestSegment
    ) {
        $this->transientRFPRequestSegment[] = $transientRFPRequestSegment;

        return $this;
    }

    /**
     * isset transientRFPRequestSegment
     *
     * Provides the details of the data being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransientRFPRequestSegment($index)
    {
        return isset($this->transientRFPRequestSegment[$index]);
    }

    /**
     * unset transientRFPRequestSegment
     *
     * Provides the details of the data being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransientRFPRequestSegment($index)
    {
        unset($this->transientRFPRequestSegment[$index]);
    }

    /**
     * Gets as transientRFPRequestSegment
     *
     * Provides the details of the data being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType[]
     */
    public function getTransientRFPRequestSegment()
    {
        return $this->transientRFPRequestSegment;
    }

    /**
     * Sets a new transientRFPRequestSegment
     *
     * Provides the details of the data being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\TransientRFPRequestSegmentAType[]
     * $transientRFPRequestSegment
     * @return self
     */
    public function setTransientRFPRequestSegment(array $transientRFPRequestSegment)
    {
        $this->transientRFPRequestSegment = $transientRFPRequestSegment;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType
     * $comment
     */
    public function addToComments(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType $comment
    ) {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of Comment elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of Comment elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of Comment elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of Comment elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\CommentsAType\CommentAType[]
     * $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

