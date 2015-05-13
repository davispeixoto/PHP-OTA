<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricingQualifierType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{

    /**
     * If true, include offers that allow advanced purchase with fares.
     *
     * @property boolean $advancePurchaseInd
     */
    private $advancePurchaseInd = null;

    /**
     * If true, include offers that have fare penalties.
     *
     * @property boolean $farePenaltyInd
     */
    private $farePenaltyInd = null;

    /**
     * Gets as advancePurchaseInd
     *
     * If true, include offers that allow advanced purchase with fares.
     *
     * @return boolean
     */
    public function getAdvancePurchaseInd()
    {
        return $this->advancePurchaseInd;
    }

    /**
     * Sets a new advancePurchaseInd
     *
     * If true, include offers that allow advanced purchase with fares.
     *
     * @param boolean $advancePurchaseInd
     * @return self
     */
    public function setAdvancePurchaseInd($advancePurchaseInd)
    {
        $this->advancePurchaseInd = $advancePurchaseInd;

        return $this;
    }

    /**
     * Gets as farePenaltyInd
     *
     * If true, include offers that have fare penalties.
     *
     * @return boolean
     */
    public function getFarePenaltyInd()
    {
        return $this->farePenaltyInd;
    }

    /**
     * Sets a new farePenaltyInd
     *
     * If true, include offers that have fare penalties.
     *
     * @param boolean $farePenaltyInd
     * @return self
     */
    public function setFarePenaltyInd($farePenaltyInd)
    {
        $this->farePenaltyInd = $farePenaltyInd;

        return $this;
    }


}

