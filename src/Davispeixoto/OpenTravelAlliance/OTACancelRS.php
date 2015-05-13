<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACancelRS
 */
class OTACancelRS
{

    /**
     * EchoToken MAY provide a reference for additional message identification,
     * assigned by the requesting host system. This attribute SHOULD NOT be used to
     * maintain state, but SHOULD only be used for diagnostic purposes. When a request
     * message includes an echo token the corresponding response message MUST include
     * an echo token with an identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * TimeStamp MUST indicate the creation date and time of the message in UTC using
     * the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time
     * values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes
     * 2003-11-20T13:59:38Z).
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Version MUST be consistent with the underlying schema baseline.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * PrimaryLangID MUST conform to ISO 639 language codes. The code MUST define the
     * language of the request. FastRez RECOMMENDS that the response SHOULD match the
     * request, but a response MAY use any language recognized by ISO 639.
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * Status MUST identify the status of the reservation cancellation. The Status for
     * FastRez MUST be Cancelled or Unsuccessful. If the status is Unsuccessful, the
     * reason for the cancellation being unsuccessful MUST be sent in either the
     * Warning element or the Error element depending on why the cancellation was not
     * processed.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * An empty Success element MUST be returned in order to in indicate the successful
     * processing of the cancellation request message.
     *
     * @property string $success
     */
    private $success = null;

    /**
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\WarningsAType\WarningAType[]
     * $warnings
     */
    private $warnings = null;

    /**
     * UniqueID MUST contain the booking reference for the active reservation to be
     * cancelled. The combination of @ID and @ID_Context MUST be unique for the
     * lifetime of the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACancelRS\UniqueIDAType $uniqueID
     */
    private $uniqueID = null;

    /**
     * CancelInfoRS MUST contain the supplier's cancellation number if the reservation
     * was successfully cancelled and MAY contain rules associated with cancelling the
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType
     * $cancelInfoRS
     */
    private $cancelInfoRS = null;

    /**
     * Comment MAY contain textual information regarding the cancellation of the
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACancelRS\CommentAType $comment
     */
    private $comment = null;

    /**
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTACancelRS\ErrorsAType\ErrorAType[]
     * $errors
     */
    private $errors = null;

    /**
     * Gets as echoToken
     *
     * EchoToken MAY provide a reference for additional message identification,
     * assigned by the requesting host system. This attribute SHOULD NOT be used to
     * maintain state, but SHOULD only be used for diagnostic purposes. When a request
     * message includes an echo token the corresponding response message MUST include
     * an echo token with an identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * EchoToken MAY provide a reference for additional message identification,
     * assigned by the requesting host system. This attribute SHOULD NOT be used to
     * maintain state, but SHOULD only be used for diagnostic purposes. When a request
     * message includes an echo token the corresponding response message MUST include
     * an echo token with an identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * TimeStamp MUST indicate the creation date and time of the message in UTC using
     * the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time
     * values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes
     * 2003-11-20T13:59:38Z).
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * TimeStamp MUST indicate the creation date and time of the message in UTC using
     * the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time
     * values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes
     * 2003-11-20T13:59:38Z).
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as version
     *
     * Version MUST be consistent with the underlying schema baseline.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Version MUST be consistent with the underlying schema baseline.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * PrimaryLangID MUST conform to ISO 639 language codes. The code MUST define the
     * language of the request. FastRez RECOMMENDS that the response SHOULD match the
     * request, but a response MAY use any language recognized by ISO 639.
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * PrimaryLangID MUST conform to ISO 639 language codes. The code MUST define the
     * language of the request. FastRez RECOMMENDS that the response SHOULD match the
     * request, but a response MAY use any language recognized by ISO 639.
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * Gets as status
     *
     * Status MUST identify the status of the reservation cancellation. The Status for
     * FastRez MUST be Cancelled or Unsuccessful. If the status is Unsuccessful, the
     * reason for the cancellation being unsuccessful MUST be sent in either the
     * Warning element or the Error element depending on why the cancellation was not
     * processed.
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
     * Status MUST identify the status of the reservation cancellation. The Status for
     * FastRez MUST be Cancelled or Unsuccessful. If the status is Unsuccessful, the
     * reason for the cancellation being unsuccessful MUST be sent in either the
     * Warning element or the Error element depending on why the cancellation was not
     * processed.
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
     * Gets as success
     *
     * An empty Success element MUST be returned in order to in indicate the successful
     * processing of the cancellation request message.
     *
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * An empty Success element MUST be returned in order to in indicate the successful
     * processing of the cancellation request message.
     *
     * @param string $success
     * @return self
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\WarningsAType\WarningAType
     * $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\OTACancelRS\WarningsAType\WarningAType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\WarningsAType\WarningAType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the cancellation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\WarningsAType\WarningAType[]
     * $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * UniqueID MUST contain the booking reference for the active reservation to be
     * cancelled. The combination of @ID and @ID_Context MUST be unique for the
     * lifetime of the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACancelRS\UniqueIDAType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * UniqueID MUST contain the booking reference for the active reservation to be
     * cancelled. The combination of @ID and @ID_Context MUST be unique for the
     * lifetime of the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\UniqueIDAType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\OTACancelRS\UniqueIDAType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as cancelInfoRS
     *
     * CancelInfoRS MUST contain the supplier's cancellation number if the reservation
     * was successfully cancelled and MAY contain rules associated with cancelling the
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType
     */
    public function getCancelInfoRS()
    {
        return $this->cancelInfoRS;
    }

    /**
     * Sets a new cancelInfoRS
     *
     * CancelInfoRS MUST contain the supplier's cancellation number if the reservation
     * was successfully cancelled and MAY contain rules associated with cancelling the
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType
     * $cancelInfoRS
     * @return self
     */
    public function setCancelInfoRS(\Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType $cancelInfoRS)
    {
        $this->cancelInfoRS = $cancelInfoRS;

        return $this;
    }

    /**
     * Gets as comment
     *
     * Comment MAY contain textual information regarding the cancellation of the
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACancelRS\CommentAType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comment MAY contain textual information regarding the cancellation of the
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\CommentAType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\OTACancelRS\CommentAType $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Adds as error
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\ErrorsAType\ErrorAType
     * $error
     */
    public function addToErrors(\Davispeixoto\OpenTravelAlliance\OTACancelRS\ErrorsAType\ErrorAType $error)
    {
        $this->errors[] = $error;

        return $this;
    }

    /**
     * isset errors
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACancelRS\ErrorsAType\ErrorAType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRS\ErrorsAType\ErrorAType[]
     * $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }


}

