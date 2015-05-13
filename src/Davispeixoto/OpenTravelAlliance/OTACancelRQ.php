<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACancelRQ
 */
class OTACancelRQ
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
     * PrimaryLangID code MUST conform to ISO 639 language codes. The code MUST define
     * the language of the request. FastRez RECOMMENDS that the response SHOULD match
     * the request, but a response MAY use any language recognized by ISO 639.
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * CancelType identifies the type of cancellation. The FastRez CancelType MUST be
     * Cancel.
     *
     * @property string $cancelType
     */
    private $cancelType = null;

    /**
     * The POS MUST identify the party or connection channel making the request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\POSType $pOS
     */
    private $pOS = null;

    /**
     * UniqueID MUST contain the booking reference for the active reservation to be
     * cancelled. The combination of @ID and @ID_Context MUST be unique for the
     * lifetime of the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Reservation IDs MAY be reused. Therefore Verification MUST be used to provide a
     * means to assert that the reservation being cancelled is the intended
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     */
    private $verification = null;

    /**
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @property string[] $reasons
     */
    private $reasons = null;

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
     * PrimaryLangID code MUST conform to ISO 639 language codes. The code MUST define
     * the language of the request. FastRez RECOMMENDS that the response SHOULD match
     * the request, but a response MAY use any language recognized by ISO 639.
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
     * PrimaryLangID code MUST conform to ISO 639 language codes. The code MUST define
     * the language of the request. FastRez RECOMMENDS that the response SHOULD match
     * the request, but a response MAY use any language recognized by ISO 639.
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
     * Gets as cancelType
     *
     * CancelType identifies the type of cancellation. The FastRez CancelType MUST be
     * Cancel.
     *
     * @return string
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * Sets a new cancelType
     *
     * CancelType identifies the type of cancellation. The FastRez CancelType MUST be
     * Cancel.
     *
     * @param string $cancelType
     * @return self
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;

        return $this;
    }

    /**
     * Gets as pOS
     *
     * The POS MUST identify the party or connection channel making the request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\POSType
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * The POS MUST identify the party or connection channel making the request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\POSType $pOS
     * @return self
     */
    public function setPOS(\Davispeixoto\OpenTravelAlliance\POSType $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * UniqueID MUST contain the booking reference for the active reservation to be
     * cancelled. The combination of @ID and @ID_Context MUST be unique for the
     * lifetime of the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
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
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as verification
     *
     * Reservation IDs MAY be reused. Therefore Verification MUST be used to provide a
     * means to assert that the reservation being cancelled is the intended
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * Reservation IDs MAY be reused. Therefore Verification MUST be used to provide a
     * means to assert that the reservation being cancelled is the intended
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     * @return self
     */
    public function setVerification(\Davispeixoto\OpenTravelAlliance\VerificationType $verification)
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Adds as reason
     *
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @return self
     * @param string $reason
     */
    public function addToReasons($reason)
    {
        $this->reasons[] = $reason;

        return $this;
    }

    /**
     * isset reasons
     *
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReasons($index)
    {
        return isset($this->reasons[$index]);
    }

    /**
     * unset reasons
     *
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReasons($index)
    {
        unset($this->reasons[$index]);
    }

    /**
     * Gets as reasons
     *
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @return string[]
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * Sets a new reasons
     *
     * For reference purposes the Cancel request MAY contain a collection of reasons
     * for this cancellation.
     *
     * @param string[] $reasons
     * @return self
     */
    public function setReasons(array $reasons)
    {
        $this->reasons = $reasons;

        return $this;
    }


}

