<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing SystemCodesAType
 */
class SystemCodesAType
{

    /**
     * Indicates whether the collection of System Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @property boolean $systemCodesInclusive
     */
    private $systemCodesInclusive = null;

    /**
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[]
     * $systemCode
     */
    private $systemCode = null;

    /**
     * Gets as systemCodesInclusive
     *
     * Indicates whether the collection of System Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @return boolean
     */
    public function getSystemCodesInclusive()
    {
        return $this->systemCodesInclusive;
    }

    /**
     * Sets a new systemCodesInclusive
     *
     * Indicates whether the collection of System Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @param boolean $systemCodesInclusive
     * @return self
     */
    public function setSystemCodesInclusive($systemCodesInclusive)
    {
        $this->systemCodesInclusive = $systemCodesInclusive;

        return $this;
    }

    /**
     * Adds as systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType
     * $systemCode
     */
    public function addToSystemCode(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType $systemCode
    ) {
        $this->systemCode[] = $systemCode;

        return $this;
    }

    /**
     * isset systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSystemCode($index)
    {
        return isset($this->systemCode[$index]);
    }

    /**
     * unset systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSystemCode($index)
    {
        unset($this->systemCode[$index]);
    }

    /**
     * Gets as systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[]
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }

    /**
     * Sets a new systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[]
     * $systemCode
     * @return self
     */
    public function setSystemCode(array $systemCode)
    {
        $this->systemCode = $systemCode;

        return $this;
    }


}

