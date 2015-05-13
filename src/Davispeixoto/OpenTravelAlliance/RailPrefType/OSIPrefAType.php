<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing OSIPrefAType
 */
class OSIPrefAType
{

    /**
     * A proprietary code used between systems to identify an Other Service Information
     * (OSI) item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * One or more travelers to whom this request applies
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType\TravelerRefNumberAType[]
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * The operators to which the OSI applies
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     */
    private $operator = null;

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
     * One or more travelers to whom this request applies
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber[] = $travelerRefNumber;

        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies
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
     * One or more travelers to whom this request applies
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
     * One or more travelers to whom this request applies
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType\TravelerRefNumberAType[]
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Gets as operator
     *
     * The operators to which the OSI applies
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The operators to which the OSI applies
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     * @return self
     */
    public function setOperator(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operator)
    {
        $this->operator = $operator;

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

