<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType;

/**
 * Class representing RuleIDAType
 */
class RuleIDAType
{

    /**
     * An identifier for the rule.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * An identifier for the rule.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An identifier for the rule.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }


}

