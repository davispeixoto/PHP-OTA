<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OtherServiceInfoType
 *
 * Other Service Information (OSI) for relevant airlines
 * XSD Type: OtherServiceInfoType
 */
class OtherServiceInfoType
{

    /**
     * A proprietary code used between systems to identify an Other Service Information
     * (OSI) item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * One or more travelers to whom this request applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType\TravelerRefNumberAType[]
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * The airline to which the OSI applies. When applicable to all airlines or an
     * unknown airline use Code="YY".
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * The OSI text.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as code
     *
     * A proprietary code used between systems to identify an Other Service Information
     * (OSI) item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A proprietary code used between systems to identify an Other Service Information
     * (OSI) item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber[] = $travelerRefNumber;

        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType\TravelerRefNumberAType[]
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Gets as airline
     *
     * The airline to which the OSI applies. When applicable to all airlines or an
     * unknown airline use Code="YY".
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
     * The airline to which the OSI applies. When applicable to all airlines or an
     * unknown airline use Code="YY".
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
     * Gets as text
     *
     * The OSI text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The OSI text.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


}

