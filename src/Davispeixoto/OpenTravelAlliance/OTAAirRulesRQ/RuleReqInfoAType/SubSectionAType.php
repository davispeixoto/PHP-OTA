<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirRulesRQ\RuleReqInfoAType;

/**
 * Class representing SubSectionAType
 */
class SubSectionAType
{

    /**
     * @property string $subTitle
     */
    private $subTitle = null;

    /**
     * @property string $subCode
     */
    private $subCode = null;

    /**
     * @property string $subSectionNumber
     */
    private $subSectionNumber = null;

    /**
     * Gets as subTitle
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Gets as subCode
     *
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * Sets a new subCode
     *
     * @param string $subCode
     * @return self
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;

        return $this;
    }

    /**
     * Gets as subSectionNumber
     *
     * @return string
     */
    public function getSubSectionNumber()
    {
        return $this->subSectionNumber;
    }

    /**
     * Sets a new subSectionNumber
     *
     * @param string $subSectionNumber
     * @return self
     */
    public function setSubSectionNumber($subSectionNumber)
    {
        $this->subSectionNumber = $subSectionNumber;

        return $this;
    }


}

