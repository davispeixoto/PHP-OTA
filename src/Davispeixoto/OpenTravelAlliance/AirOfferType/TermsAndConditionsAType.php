<?php

namespace Davispeixoto\OpenTravelAlliance\AirOfferType;

/**
 * Class representing TermsAndConditionsAType
 */
class TermsAndConditionsAType
{

    /**
     * If true, the item(s) associated with the offer are refundable.
     *
     * @property boolean $refundableInd
     */
    private $refundableInd = null;

    /**
     * If true, the funds are reusable.
     *
     * @property boolean $reusableFundsInd
     */
    private $reusableFundsInd = null;

    /**
     * Specifies a voluntary change charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType
     * $voluntaryChanges
     */
    private $voluntaryChanges = null;

    /**
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType
     * $voluntaryRefunds
     */
    private $voluntaryRefunds = null;

    /**
     * Other terms and conditions that apply to offer.
     *
     * @property string $other
     */
    private $other = null;

    /**
     * Gets as refundableInd
     *
     * If true, the item(s) associated with the offer are refundable.
     *
     * @return boolean
     */
    public function getRefundableInd()
    {
        return $this->refundableInd;
    }

    /**
     * Sets a new refundableInd
     *
     * If true, the item(s) associated with the offer are refundable.
     *
     * @param boolean $refundableInd
     * @return self
     */
    public function setRefundableInd($refundableInd)
    {
        $this->refundableInd = $refundableInd;

        return $this;
    }

    /**
     * Gets as reusableFundsInd
     *
     * If true, the funds are reusable.
     *
     * @return boolean
     */
    public function getReusableFundsInd()
    {
        return $this->reusableFundsInd;
    }

    /**
     * Sets a new reusableFundsInd
     *
     * If true, the funds are reusable.
     *
     * @param boolean $reusableFundsInd
     * @return self
     */
    public function setReusableFundsInd($reusableFundsInd)
    {
        $this->reusableFundsInd = $reusableFundsInd;

        return $this;
    }

    /**
     * Gets as voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType
     */
    public function getVoluntaryChanges()
    {
        return $this->voluntaryChanges;
    }

    /**
     * Sets a new voluntaryChanges
     *
     * Specifies a voluntary change charge.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType
     * $voluntaryChanges
     * @return self
     */
    public function setVoluntaryChanges(
        \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryChangesAType $voluntaryChanges
    ) {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }

    /**
     * Gets as voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType
     */
    public function getVoluntaryRefunds()
    {
        return $this->voluntaryRefunds;
    }

    /**
     * Sets a new voluntaryRefunds
     *
     * Specifies a Voluntary Refund (cancellation) charge.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType
     * $voluntaryRefunds
     * @return self
     */
    public function setVoluntaryRefunds(
        \Davispeixoto\OpenTravelAlliance\AirOfferType\TermsAndConditionsAType\VoluntaryRefundsAType $voluntaryRefunds
    ) {
        $this->voluntaryRefunds = $voluntaryRefunds;

        return $this;
    }

    /**
     * Gets as other
     *
     * Other terms and conditions that apply to offer.
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Other terms and conditions that apply to offer.
     *
     * @param string $other
     * @return self
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }


}

