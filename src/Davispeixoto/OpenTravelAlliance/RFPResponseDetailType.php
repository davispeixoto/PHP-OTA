<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RFPResponseDetailType
 *
 * Provides an area to send comments regarding the response.
 * XSD Type: RFP_ResponseDetailType
 */
class RFPResponseDetailType
{

    /**
     * This is an indicator that denotes whether the message contains detailed
     * information; if false this indicates the message is an acknowledgement only, if
     * true this indicates that detailed information is included in this message.
     *
     * @property boolean $detailIncludedIndicator
     */
    private $detailIncludedIndicator = null;

    /**
     * Specifies the earliest time within which the detailed response will be
     * communicated. Used in conjunction with MaximumTime to define a range (e.g. the 2
     * in "2-4 days").
     *
     * @property \DateInterval $minimumTime
     */
    private $minimumTime = null;

    /**
     * Specifies the latest time the detailed response will be communicated. Used in
     * conjunction with MinimumTime to define a range (e.g. the 4 in "2-4 days").
     *
     * @property \DateInterval $maximumTime
     */
    private $maximumTime = null;

    /**
     * Specifies how the detailed response will be communicated (e.g. XML, e-mail,
     * phone call). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $responseMethod
     */
    private $responseMethod = null;

    /**
     * This defines the type of day or time span to which the minimum and maximum
     * duration refers, either business day or elapsed time (e.g. if the expected
     * response time is one business day, the ResponseTimeUnit value would equal
     * business day and the MaximumTime attribute value would be P1D).
     *
     * @property string $responseTimeUnit
     */
    private $responseTimeUnit = null;

    /**
     * If true, the supplier cannot accomodate the request and will not send detailed
     * response information. If false, the supplier plans to respond.
     *
     * @property boolean $declineIndicator
     */
    private $declineIndicator = null;

    /**
     * Identifies the reason the request is being declined. Refer to OpenTravel Code
     * List Decline Reason (DEC).
     *
     * @property string $declineReasonCode
     */
    private $declineReasonCode = null;

    /**
     * This is intended for use as a customized DeclineReasonCode. This may be used
     * when "other" is stated as the DeclineReasonCode or to give additional
     * information with other DeclineReasonCodes.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Collection of comments used for additional data about the response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as detailIncludedIndicator
     *
     * This is an indicator that denotes whether the message contains detailed
     * information; if false this indicates the message is an acknowledgement only, if
     * true this indicates that detailed information is included in this message.
     *
     * @return boolean
     */
    public function getDetailIncludedIndicator()
    {
        return $this->detailIncludedIndicator;
    }

    /**
     * Sets a new detailIncludedIndicator
     *
     * This is an indicator that denotes whether the message contains detailed
     * information; if false this indicates the message is an acknowledgement only, if
     * true this indicates that detailed information is included in this message.
     *
     * @param boolean $detailIncludedIndicator
     * @return self
     */
    public function setDetailIncludedIndicator($detailIncludedIndicator)
    {
        $this->detailIncludedIndicator = $detailIncludedIndicator;

        return $this;
    }

    /**
     * Gets as minimumTime
     *
     * Specifies the earliest time within which the detailed response will be
     * communicated. Used in conjunction with MaximumTime to define a range (e.g. the 2
     * in "2-4 days").
     *
     * @return \DateInterval
     */
    public function getMinimumTime()
    {
        return $this->minimumTime;
    }

    /**
     * Sets a new minimumTime
     *
     * Specifies the earliest time within which the detailed response will be
     * communicated. Used in conjunction with MaximumTime to define a range (e.g. the 2
     * in "2-4 days").
     *
     * @param \DateInterval $minimumTime
     * @return self
     */
    public function setMinimumTime(\DateInterval $minimumTime)
    {
        $this->minimumTime = $minimumTime;

        return $this;
    }

    /**
     * Gets as maximumTime
     *
     * Specifies the latest time the detailed response will be communicated. Used in
     * conjunction with MinimumTime to define a range (e.g. the 4 in "2-4 days").
     *
     * @return \DateInterval
     */
    public function getMaximumTime()
    {
        return $this->maximumTime;
    }

    /**
     * Sets a new maximumTime
     *
     * Specifies the latest time the detailed response will be communicated. Used in
     * conjunction with MinimumTime to define a range (e.g. the 4 in "2-4 days").
     *
     * @param \DateInterval $maximumTime
     * @return self
     */
    public function setMaximumTime(\DateInterval $maximumTime)
    {
        $this->maximumTime = $maximumTime;

        return $this;
    }

    /**
     * Gets as responseMethod
     *
     * Specifies how the detailed response will be communicated (e.g. XML, e-mail,
     * phone call). Refer to OpenTravel Code List Distribution Type (DTB).
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
     * Specifies how the detailed response will be communicated (e.g. XML, e-mail,
     * phone call). Refer to OpenTravel Code List Distribution Type (DTB).
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
     * Gets as responseTimeUnit
     *
     * This defines the type of day or time span to which the minimum and maximum
     * duration refers, either business day or elapsed time (e.g. if the expected
     * response time is one business day, the ResponseTimeUnit value would equal
     * business day and the MaximumTime attribute value would be P1D).
     *
     * @return string
     */
    public function getResponseTimeUnit()
    {
        return $this->responseTimeUnit;
    }

    /**
     * Sets a new responseTimeUnit
     *
     * This defines the type of day or time span to which the minimum and maximum
     * duration refers, either business day or elapsed time (e.g. if the expected
     * response time is one business day, the ResponseTimeUnit value would equal
     * business day and the MaximumTime attribute value would be P1D).
     *
     * @param string $responseTimeUnit
     * @return self
     */
    public function setResponseTimeUnit($responseTimeUnit)
    {
        $this->responseTimeUnit = $responseTimeUnit;

        return $this;
    }

    /**
     * Gets as declineIndicator
     *
     * If true, the supplier cannot accomodate the request and will not send detailed
     * response information. If false, the supplier plans to respond.
     *
     * @return boolean
     */
    public function getDeclineIndicator()
    {
        return $this->declineIndicator;
    }

    /**
     * Sets a new declineIndicator
     *
     * If true, the supplier cannot accomodate the request and will not send detailed
     * response information. If false, the supplier plans to respond.
     *
     * @param boolean $declineIndicator
     * @return self
     */
    public function setDeclineIndicator($declineIndicator)
    {
        $this->declineIndicator = $declineIndicator;

        return $this;
    }

    /**
     * Gets as declineReasonCode
     *
     * Identifies the reason the request is being declined. Refer to OpenTravel Code
     * List Decline Reason (DEC).
     *
     * @return string
     */
    public function getDeclineReasonCode()
    {
        return $this->declineReasonCode;
    }

    /**
     * Sets a new declineReasonCode
     *
     * Identifies the reason the request is being declined. Refer to OpenTravel Code
     * List Decline Reason (DEC).
     *
     * @param string $declineReasonCode
     * @return self
     */
    public function setDeclineReasonCode($declineReasonCode)
    {
        $this->declineReasonCode = $declineReasonCode;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * This is intended for use as a customized DeclineReasonCode. This may be used
     * when "other" is stated as the DeclineReasonCode or to give additional
     * information with other DeclineReasonCodes.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * This is intended for use as a customized DeclineReasonCode. This may be used
     * when "other" is stated as the DeclineReasonCode or to give additional
     * information with other DeclineReasonCodes.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Collection of comments used for additional data about the response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * Collection of comments used for additional data about the response.
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
     * Collection of comments used for additional data about the response.
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
     * Collection of comments used for additional data about the response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Collection of comments used for additional data about the response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

