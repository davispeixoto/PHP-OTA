<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAHotelResRS
 */
class OTAHotelResRS
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
     * The POS MUST identify the party or connection channel making the request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType $pOS
     */
    private $pOS = null;

    /**
     * An empty Success element MUST be returned in order to in indicate the successful
     * processing of the request message.
     *
     * @property string $success
     */
    private $success = null;

    /**
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     * $warnings
     */
    private $warnings = null;

    /**
     * The HotelReservations container allows for future expansion of the message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType
     * $hotelReservations
     */
    private $hotelReservations = null;

    /**
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[] $errors
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
     * Gets as pOS
     *
     * The POS MUST identify the party or connection channel making the request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType
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
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType $pOS
     * @return self
     */
    public function setPOS(\Davispeixoto\OpenTravelAlliance\OTAHotelResRS\POSAType $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as success
     *
     * An empty Success element MUST be returned in order to in indicate the successful
     * processing of the request message.
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
     * processing of the request message.
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
     * more business errors or informational alerts associated with the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType
     * $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the reservation.
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
     * more business errors or informational alerts associated with the reservation.
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
     * more business errors or informational alerts associated with the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Warnings MAY be used in conjunction with the Success element to define one or
     * more business errors or informational alerts associated with the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     * $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Gets as hotelReservations
     *
     * The HotelReservations container allows for future expansion of the message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType
     */
    public function getHotelReservations()
    {
        return $this->hotelReservations;
    }

    /**
     * Sets a new hotelReservations
     *
     * The HotelReservations container allows for future expansion of the message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType
     * $hotelReservations
     * @return self
     */
    public function setHotelReservations(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType $hotelReservations
    ) {
        $this->hotelReservations = $hotelReservations;

        return $this;
    }

    /**
     * Adds as error
     *
     * Errors MUST be returned if the message was not successfully processed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType
     * $error
     */
    public function addToErrors(\Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType $error)
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
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[]
     * $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }


}

