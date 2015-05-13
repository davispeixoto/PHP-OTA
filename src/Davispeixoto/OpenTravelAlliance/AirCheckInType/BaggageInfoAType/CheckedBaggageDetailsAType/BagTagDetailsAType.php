<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType;

/**
 * Class representing BagTagDetailsAType
 */
class BagTagDetailsAType
{

    /**
     * Indicates the type of bag tag being issued (e.g., interline, fallback tags,
     * interline expedite). Refer to IATA reso 740 5.1.2a
     *
     * @property string $type
     */
    private $type = null;

    /**
     * BagTag Issuer Code (BTIC) assigned by IATA. Refer to IATA Reso 5.1.2a
     *
     * @property string $issuerCode
     */
    private $issuerCode = null;

    /**
     * The 6-digit bag tag serial number.
     *
     * @property string $serialNumber
     */
    private $serialNumber = null;

    /**
     * Specifies method of bagtag issuance.
     *
     * @property string $issuanceMethod
     */
    private $issuanceMethod = null;

    /**
     * Two to three character airline designator.
     *
     * @property string $carrierCode
     */
    private $carrierCode = null;

    /**
     * Indicates what the bag tag is for (e.g., skis, firearms).
     *
     * @property string $specialType
     */
    private $specialType = null;

    /**
     * If true, a second bag tag needs to be printed with the same bag tag serial
     * number. This is needed when an itinerary requires more transfer fields than are
     * available on a single bag tag.
     *
     * @property boolean $conjunctionBagTagInd
     */
    private $conjunctionBagTagInd = null;

    /**
     * The length of the bag tag (e.g., 17 inces, 21 inches)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType\LengthAType
     * $length
     */
    private $length = null;

    /**
     * Gets as type
     *
     * Indicates the type of bag tag being issued (e.g., interline, fallback tags,
     * interline expedite). Refer to IATA reso 740 5.1.2a
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates the type of bag tag being issued (e.g., interline, fallback tags,
     * interline expedite). Refer to IATA reso 740 5.1.2a
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as issuerCode
     *
     * BagTag Issuer Code (BTIC) assigned by IATA. Refer to IATA Reso 5.1.2a
     *
     * @return string
     */
    public function getIssuerCode()
    {
        return $this->issuerCode;
    }

    /**
     * Sets a new issuerCode
     *
     * BagTag Issuer Code (BTIC) assigned by IATA. Refer to IATA Reso 5.1.2a
     *
     * @param string $issuerCode
     * @return self
     */
    public function setIssuerCode($issuerCode)
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * The 6-digit bag tag serial number.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * The 6-digit bag tag serial number.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Gets as issuanceMethod
     *
     * Specifies method of bagtag issuance.
     *
     * @return string
     */
    public function getIssuanceMethod()
    {
        return $this->issuanceMethod;
    }

    /**
     * Sets a new issuanceMethod
     *
     * Specifies method of bagtag issuance.
     *
     * @param string $issuanceMethod
     * @return self
     */
    public function setIssuanceMethod($issuanceMethod)
    {
        $this->issuanceMethod = $issuanceMethod;

        return $this;
    }

    /**
     * Gets as carrierCode
     *
     * Two to three character airline designator.
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * Sets a new carrierCode
     *
     * Two to three character airline designator.
     *
     * @param string $carrierCode
     * @return self
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * Gets as specialType
     *
     * Indicates what the bag tag is for (e.g., skis, firearms).
     *
     * @return string
     */
    public function getSpecialType()
    {
        return $this->specialType;
    }

    /**
     * Sets a new specialType
     *
     * Indicates what the bag tag is for (e.g., skis, firearms).
     *
     * @param string $specialType
     * @return self
     */
    public function setSpecialType($specialType)
    {
        $this->specialType = $specialType;

        return $this;
    }

    /**
     * Gets as conjunctionBagTagInd
     *
     * If true, a second bag tag needs to be printed with the same bag tag serial
     * number. This is needed when an itinerary requires more transfer fields than are
     * available on a single bag tag.
     *
     * @return boolean
     */
    public function getConjunctionBagTagInd()
    {
        return $this->conjunctionBagTagInd;
    }

    /**
     * Sets a new conjunctionBagTagInd
     *
     * If true, a second bag tag needs to be printed with the same bag tag serial
     * number. This is needed when an itinerary requires more transfer fields than are
     * available on a single bag tag.
     *
     * @param boolean $conjunctionBagTagInd
     * @return self
     */
    public function setConjunctionBagTagInd($conjunctionBagTagInd)
    {
        $this->conjunctionBagTagInd = $conjunctionBagTagInd;

        return $this;
    }

    /**
     * Gets as length
     *
     * The length of the bag tag (e.g., 17 inces, 21 inches)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType\LengthAType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length of the bag tag (e.g., 17 inces, 21 inches)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType\LengthAType
     * $length
     * @return self
     */
    public function setLength(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType\BagTagDetailsAType\LengthAType $length
    ) {
        $this->length = $length;

        return $this;
    }


}

