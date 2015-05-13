<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirRulesRS;

use Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType;

/**
 * Class representing FareRuleResponseInfoAType
 */
class FareRuleResponseInfoAType extends FareRuleResponseInfoType
{

    /**
     * Specifies an item number associated with the information in this fare rule.
     *
     * @property integer $itemNumber
     */
    private $itemNumber = null;

    /**
     * Gets as itemNumber
     *
     * Specifies an item number associated with the information in this fare rule.
     *
     * @return integer
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Sets a new itemNumber
     *
     * Specifies an item number associated with the information in this fare rule.
     *
     * @param integer $itemNumber
     * @return self
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }


}

