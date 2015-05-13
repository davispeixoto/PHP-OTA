<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType;

/**
 * Class representing InternationalProcessingInfoAType
 */
class InternationalProcessingInfoAType
{

    /**
     * Indicates the status of the passenger coupon on day of departure. Refer to IATA
     * reso 722c Attachment C (reference # 22). This information is used for mag stripe
     * or bar code. If this element is not provided, the receiving system may choose to
     * print a blank on the mag stripe or bar code.
     *
     * @property string $documentVerification
     */
    private $documentVerification = null;

    /**
     * Specifies the type of document to be checked. Refer to IATA Resolution 722c
     * Attachment C (reference # 61)
     *
     * @property string $airportPassengerProcessingCode
     */
    private $airportPassengerProcessingCode = null;

    /**
     * If true, personal documentation has been verified. If false, additional
     * verification is required prior to issuing an international boarding pass.
     *
     * @property boolean $documentVerifiedInd
     */
    private $documentVerifiedInd = null;

    /**
     * Gets as documentVerification
     *
     * Indicates the status of the passenger coupon on day of departure. Refer to IATA
     * reso 722c Attachment C (reference # 22). This information is used for mag stripe
     * or bar code. If this element is not provided, the receiving system may choose to
     * print a blank on the mag stripe or bar code.
     *
     * @return string
     */
    public function getDocumentVerification()
    {
        return $this->documentVerification;
    }

    /**
     * Sets a new documentVerification
     *
     * Indicates the status of the passenger coupon on day of departure. Refer to IATA
     * reso 722c Attachment C (reference # 22). This information is used for mag stripe
     * or bar code. If this element is not provided, the receiving system may choose to
     * print a blank on the mag stripe or bar code.
     *
     * @param string $documentVerification
     * @return self
     */
    public function setDocumentVerification($documentVerification)
    {
        $this->documentVerification = $documentVerification;

        return $this;
    }

    /**
     * Gets as airportPassengerProcessingCode
     *
     * Specifies the type of document to be checked. Refer to IATA Resolution 722c
     * Attachment C (reference # 61)
     *
     * @return string
     */
    public function getAirportPassengerProcessingCode()
    {
        return $this->airportPassengerProcessingCode;
    }

    /**
     * Sets a new airportPassengerProcessingCode
     *
     * Specifies the type of document to be checked. Refer to IATA Resolution 722c
     * Attachment C (reference # 61)
     *
     * @param string $airportPassengerProcessingCode
     * @return self
     */
    public function setAirportPassengerProcessingCode($airportPassengerProcessingCode)
    {
        $this->airportPassengerProcessingCode = $airportPassengerProcessingCode;

        return $this;
    }

    /**
     * Gets as documentVerifiedInd
     *
     * If true, personal documentation has been verified. If false, additional
     * verification is required prior to issuing an international boarding pass.
     *
     * @return boolean
     */
    public function getDocumentVerifiedInd()
    {
        return $this->documentVerifiedInd;
    }

    /**
     * Sets a new documentVerifiedInd
     *
     * If true, personal documentation has been verified. If false, additional
     * verification is required prior to issuing an international boarding pass.
     *
     * @param boolean $documentVerifiedInd
     * @return self
     */
    public function setDocumentVerifiedInd($documentVerifiedInd)
    {
        $this->documentVerifiedInd = $documentVerifiedInd;

        return $this;
    }


}

