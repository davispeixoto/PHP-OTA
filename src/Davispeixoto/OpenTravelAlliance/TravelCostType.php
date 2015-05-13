<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelCostType
 *
 * Form of payment and entire itinerary pricing.
 * XSD Type: TravelCostType
 */
class TravelCostType
{

    /**
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $formOfPayment
     */
    private $formOfPayment = null;

    /**
     * Total cost associated with the ENTIRE itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelCostType\CostTotalsAType
     * $costTotals
     */
    private $costTotals = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as formOfPayment
     *
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $formOfPayment
     */
    public function addToFormOfPayment(\Davispeixoto\OpenTravelAlliance\PaymentFormType $formOfPayment)
    {
        $this->formOfPayment[] = $formOfPayment;

        return $this;
    }

    /**
     * isset formOfPayment
     *
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormOfPayment($index)
    {
        return isset($this->formOfPayment[$index]);
    }

    /**
     * unset formOfPayment
     *
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormOfPayment($index)
    {
        unset($this->formOfPayment[$index]);
    }

    /**
     * Gets as formOfPayment
     *
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getFormOfPayment()
    {
        return $this->formOfPayment;
    }

    /**
     * Sets a new formOfPayment
     *
     * Form of payment information (e.g. VISA, Debit Card, Check).
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $formOfPayment
     * @return self
     */
    public function setFormOfPayment(array $formOfPayment)
    {
        $this->formOfPayment = $formOfPayment;

        return $this;
    }

    /**
     * Gets as costTotals
     *
     * Total cost associated with the ENTIRE itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelCostType\CostTotalsAType
     */
    public function getCostTotals()
    {
        return $this->costTotals;
    }

    /**
     * Sets a new costTotals
     *
     * Total cost associated with the ENTIRE itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelCostType\CostTotalsAType
     * $costTotals
     * @return self
     */
    public function setCostTotals(\Davispeixoto\OpenTravelAlliance\TravelCostType\CostTotalsAType $costTotals)
    {
        $this->costTotals = $costTotals;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

