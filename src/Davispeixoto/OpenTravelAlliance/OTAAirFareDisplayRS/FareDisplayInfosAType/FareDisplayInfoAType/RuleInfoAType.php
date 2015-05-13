<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType;

use Davispeixoto\OpenTravelAlliance\RuleInfoType;

/**
 * Class representing RuleInfoAType
 */
class RuleInfoAType extends RuleInfoType
{

    /**
     * @property string $ruleNumber
     */
    private $ruleNumber = null;

    /**
     * @property string $tariff
     */
    private $tariff = null;

    /**
     * Gets as ruleNumber
     *
     * @return string
     */
    public function getRuleNumber()
    {
        return $this->ruleNumber;
    }

    /**
     * Sets a new ruleNumber
     *
     * @param string $ruleNumber
     * @return self
     */
    public function setRuleNumber($ruleNumber)
    {
        $this->ruleNumber = $ruleNumber;

        return $this;
    }

    /**
     * Gets as tariff
     *
     * @return string
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     * Sets a new tariff
     *
     * @param string $tariff
     * @return self
     */
    public function setTariff($tariff)
    {
        $this->tariff = $tariff;

        return $this;
    }


}

