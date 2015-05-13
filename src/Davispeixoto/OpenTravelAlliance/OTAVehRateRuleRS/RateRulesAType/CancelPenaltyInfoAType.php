<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType;

/**
 * Class representing CancelPenaltyInfoAType
 */
class CancelPenaltyInfoAType
{

    /**
     * When true, a guarantee is required.
     *
     * @property boolean $guaranteeRequiredInd
     */
    private $guaranteeRequiredInd = null;

    /**
     * When true, this indicates the penalty information is for a modification rather
     * than a cancellation.
     *
     * @property boolean $modifyPenaltyInd
     */
    private $modifyPenaltyInd = null;

    /**
     * When true indicates the amount was converted from another currency.
     *
     * @property boolean $rateConvertedInd
     */
    private $rateConvertedInd = null;

    /**
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\DeadlineAType[]
     * $deadline
     */
    private $deadline = null;

    /**
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\PenaltyFeeAType
     * $penaltyFee
     */
    private $penaltyFee = null;

    /**
     * Provides additional information about the cancel penalty.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as guaranteeRequiredInd
     *
     * When true, a guarantee is required.
     *
     * @return boolean
     */
    public function getGuaranteeRequiredInd()
    {
        return $this->guaranteeRequiredInd;
    }

    /**
     * Sets a new guaranteeRequiredInd
     *
     * When true, a guarantee is required.
     *
     * @param boolean $guaranteeRequiredInd
     * @return self
     */
    public function setGuaranteeRequiredInd($guaranteeRequiredInd)
    {
        $this->guaranteeRequiredInd = $guaranteeRequiredInd;

        return $this;
    }

    /**
     * Gets as modifyPenaltyInd
     *
     * When true, this indicates the penalty information is for a modification rather
     * than a cancellation.
     *
     * @return boolean
     */
    public function getModifyPenaltyInd()
    {
        return $this->modifyPenaltyInd;
    }

    /**
     * Sets a new modifyPenaltyInd
     *
     * When true, this indicates the penalty information is for a modification rather
     * than a cancellation.
     *
     * @param boolean $modifyPenaltyInd
     * @return self
     */
    public function setModifyPenaltyInd($modifyPenaltyInd)
    {
        $this->modifyPenaltyInd = $modifyPenaltyInd;

        return $this;
    }

    /**
     * Gets as rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @return boolean
     */
    public function getRateConvertedInd()
    {
        return $this->rateConvertedInd;
    }

    /**
     * Sets a new rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @param boolean $rateConvertedInd
     * @return self
     */
    public function setRateConvertedInd($rateConvertedInd)
    {
        $this->rateConvertedInd = $rateConvertedInd;

        return $this;
    }

    /**
     * Adds as deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\DeadlineAType
     * $deadline
     */
    public function addToDeadline(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\DeadlineAType $deadline
    ) {
        $this->deadline[] = $deadline;

        return $this;
    }

    /**
     * isset deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeadline($index)
    {
        return isset($this->deadline[$index]);
    }

    /**
     * unset deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeadline($index)
    {
        unset($this->deadline[$index]);
    }

    /**
     * Gets as deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\DeadlineAType[]
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Time by which a cancellation must be made before penalty fees are incurred or
     * defines a period of time for which a specific fee is applied if a cancellation
     * were to occur.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\DeadlineAType[]
     * $deadline
     * @return self
     */
    public function setDeadline(array $deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Gets as penaltyFee
     *
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\PenaltyFeeAType
     */
    public function getPenaltyFee()
    {
        return $this->penaltyFee;
    }

    /**
     * Sets a new penaltyFee
     *
     * The amounts of the penalty fee if cancellation is received after the deadline.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\PenaltyFeeAType
     * $penaltyFee
     * @return self
     */
    public function setPenaltyFee(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\CancelPenaltyInfoAType\PenaltyFeeAType $penaltyFee
    ) {
        $this->penaltyFee = $penaltyFee;

        return $this;
    }

    /**
     * Gets as description
     *
     * Provides additional information about the cancel penalty.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Provides additional information about the cancel penalty.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description = $description;

        return $this;
    }


}

