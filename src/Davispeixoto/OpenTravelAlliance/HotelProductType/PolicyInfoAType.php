<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing PolicyInfoAType
 */
class PolicyInfoAType
{

    /**
     * The cancel policy details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicy
     */
    private $cancelPolicy = null;

    /**
     * Guarantee and payment policy details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $guaranteePaymentPolicy
     */
    private $guaranteePaymentPolicy = null;

    /**
     * A collection of booking rules.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     * $bookingRules
     */
    private $bookingRules = null;

    /**
     * Gets as cancelPolicy
     *
     * The cancel policy details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType
     */
    public function getCancelPolicy()
    {
        return $this->cancelPolicy;
    }

    /**
     * Sets a new cancelPolicy
     *
     * The cancel policy details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicy
     * @return self
     */
    public function setCancelPolicy(\Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicy)
    {
        $this->cancelPolicy = $cancelPolicy;

        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Guarantee and payment policy details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToGuaranteePaymentPolicy(
        \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->guaranteePaymentPolicy[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteePaymentPolicy($index)
    {
        return isset($this->guaranteePaymentPolicy[$index]);
    }

    /**
     * unset guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteePaymentPolicy($index)
    {
        unset($this->guaranteePaymentPolicy[$index]);
    }

    /**
     * Gets as guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getGuaranteePaymentPolicy()
    {
        return $this->guaranteePaymentPolicy;
    }

    /**
     * Sets a new guaranteePaymentPolicy
     *
     * Guarantee and payment policy details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $guaranteePaymentPolicy
     * @return self
     */
    public function setGuaranteePaymentPolicy(array $guaranteePaymentPolicy)
    {
        $this->guaranteePaymentPolicy = $guaranteePaymentPolicy;

        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * A collection of booking rules.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType
     * $bookingRule
     */
    public function addToBookingRules(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule
    ) {
        $this->bookingRules[] = $bookingRule;

        return $this;
    }

    /**
     * isset bookingRules
     *
     * A collection of booking rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * A collection of booking rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * A collection of booking rules.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * A collection of booking rules.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     * $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules)
    {
        $this->bookingRules = $bookingRules;

        return $this;
    }


}

