<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType;

/**
 * Class representing PolicyAType
 */
class PolicyAType
{

    /**
     * Defines the default minimum number of days in advance that a booking must be
     * made at this hotel.
     *
     * @property integer $defaultValidBookingMinOffset
     */
    private $defaultValidBookingMinOffset = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * The code identifying this policy.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The date and time when the policy information for this hotel was last updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

    /**
     * Defines the cancellation policy of the hotel facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicy
     */
    private $cancelPolicy = null;

    /**
     * A collection of deposit policies, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GuaranteePaymentPolicyAType
     * $guaranteePaymentPolicy
     */
    private $guaranteePaymentPolicy = null;

    /**
     * Detailed property policy information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     * $policyInfoCodes
     */
    private $policyInfoCodes = null;

    /**
     * Checkout charges and information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     * $checkoutCharges
     */
    private $checkoutCharges = null;

    /**
     * Basic property policy information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoAType
     * $policyInfo
     */
    private $policyInfo = null;

    /**
     * Property tax policies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     * $taxPolicies
     */
    private $taxPolicies = null;

    /**
     * Property pet policies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType
     * $petsPolicies
     */
    private $petsPolicies = null;

    /**
     * Collection of stay requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     * $stayRequirements
     */
    private $stayRequirements = null;

    /**
     * Used to define the property's high-level commission policy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CommissionPolicyAType
     * $commissionPolicy
     */
    private $commissionPolicy = null;

    /**
     * A collection of fees that may apply to a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicies
     */
    private $feePolicies = null;

    /**
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     * $ratePolicies
     */
    private $ratePolicies = null;

    /**
     * A collection of group policy information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     * $groupPolicies
     */
    private $groupPolicies = null;

    /**
     * Gets as defaultValidBookingMinOffset
     *
     * Defines the default minimum number of days in advance that a booking must be
     * made at this hotel.
     *
     * @return integer
     */
    public function getDefaultValidBookingMinOffset()
    {
        return $this->defaultValidBookingMinOffset;
    }

    /**
     * Sets a new defaultValidBookingMinOffset
     *
     * Defines the default minimum number of days in advance that a booking must be
     * made at this hotel.
     *
     * @param integer $defaultValidBookingMinOffset
     * @return self
     */
    public function setDefaultValidBookingMinOffset($defaultValidBookingMinOffset)
    {
        $this->defaultValidBookingMinOffset = $defaultValidBookingMinOffset;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as code
     *
     * The code identifying this policy.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code identifying this policy.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * The date and time when the policy information for this hotel was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the policy information for this hotel was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * Gets as cancelPolicy
     *
     * Defines the cancellation policy of the hotel facility.
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
     * Defines the cancellation policy of the hotel facility.
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
     * Gets as guaranteePaymentPolicy
     *
     * A collection of deposit policies, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GuaranteePaymentPolicyAType
     */
    public function getGuaranteePaymentPolicy()
    {
        return $this->guaranteePaymentPolicy;
    }

    /**
     * Sets a new guaranteePaymentPolicy
     *
     * A collection of deposit policies, guarantees policy, and/or accepted forms of
     * payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GuaranteePaymentPolicyAType
     * $guaranteePaymentPolicy
     * @return self
     */
    public function setGuaranteePaymentPolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GuaranteePaymentPolicyAType $guaranteePaymentPolicy
    ) {
        $this->guaranteePaymentPolicy = $guaranteePaymentPolicy;

        return $this;
    }

    /**
     * Adds as policyInfoCode
     *
     * Detailed property policy information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType
     * $policyInfoCode
     */
    public function addToPolicyInfoCodes(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType $policyInfoCode
    ) {
        $this->policyInfoCodes[] = $policyInfoCode;

        return $this;
    }

    /**
     * isset policyInfoCodes
     *
     * Detailed property policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicyInfoCodes($index)
    {
        return isset($this->policyInfoCodes[$index]);
    }

    /**
     * unset policyInfoCodes
     *
     * Detailed property policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicyInfoCodes($index)
    {
        unset($this->policyInfoCodes[$index]);
    }

    /**
     * Gets as policyInfoCodes
     *
     * Detailed property policy information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     */
    public function getPolicyInfoCodes()
    {
        return $this->policyInfoCodes;
    }

    /**
     * Sets a new policyInfoCodes
     *
     * Detailed property policy information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoCodesAType\PolicyInfoCodeAType[]
     * $policyInfoCodes
     * @return self
     */
    public function setPolicyInfoCodes(array $policyInfoCodes)
    {
        $this->policyInfoCodes = $policyInfoCodes;

        return $this;
    }

    /**
     * Adds as checkoutCharge
     *
     * Checkout charges and information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType
     * $checkoutCharge
     */
    public function addToCheckoutCharges(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType $checkoutCharge
    ) {
        $this->checkoutCharges[] = $checkoutCharge;

        return $this;
    }

    /**
     * isset checkoutCharges
     *
     * Checkout charges and information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckoutCharges($index)
    {
        return isset($this->checkoutCharges[$index]);
    }

    /**
     * unset checkoutCharges
     *
     * Checkout charges and information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckoutCharges($index)
    {
        unset($this->checkoutCharges[$index]);
    }

    /**
     * Gets as checkoutCharges
     *
     * Checkout charges and information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     */
    public function getCheckoutCharges()
    {
        return $this->checkoutCharges;
    }

    /**
     * Sets a new checkoutCharges
     *
     * Checkout charges and information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CheckoutChargesAType\CheckoutChargeAType[]
     * $checkoutCharges
     * @return self
     */
    public function setCheckoutCharges(array $checkoutCharges)
    {
        $this->checkoutCharges = $checkoutCharges;

        return $this;
    }

    /**
     * Gets as policyInfo
     *
     * Basic property policy information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoAType
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Basic property policy information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoAType
     * $policyInfo
     * @return self
     */
    public function setPolicyInfo(\Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PolicyInfoAType $policyInfo)
    {
        $this->policyInfo = $policyInfo;

        return $this;
    }

    /**
     * Adds as taxPolicy
     *
     * Property tax policies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType
     * $taxPolicy
     */
    public function addToTaxPolicies(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType $taxPolicy
    ) {
        $this->taxPolicies[] = $taxPolicy;

        return $this;
    }

    /**
     * isset taxPolicies
     *
     * Property tax policies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxPolicies($index)
    {
        return isset($this->taxPolicies[$index]);
    }

    /**
     * unset taxPolicies
     *
     * Property tax policies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxPolicies($index)
    {
        unset($this->taxPolicies[$index]);
    }

    /**
     * Gets as taxPolicies
     *
     * Property tax policies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     */
    public function getTaxPolicies()
    {
        return $this->taxPolicies;
    }

    /**
     * Sets a new taxPolicies
     *
     * Property tax policies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     * $taxPolicies
     * @return self
     */
    public function setTaxPolicies(array $taxPolicies)
    {
        $this->taxPolicies = $taxPolicies;

        return $this;
    }

    /**
     * Gets as petsPolicies
     *
     * Property pet policies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType
     */
    public function getPetsPolicies()
    {
        return $this->petsPolicies;
    }

    /**
     * Sets a new petsPolicies
     *
     * Property pet policies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType
     * $petsPolicies
     * @return self
     */
    public function setPetsPolicies(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType $petsPolicies
    ) {
        $this->petsPolicies = $petsPolicies;

        return $this;
    }

    /**
     * Adds as stayRequirement
     *
     * Collection of stay requirements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType
     * $stayRequirement
     */
    public function addToStayRequirements(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType $stayRequirement
    ) {
        $this->stayRequirements[] = $stayRequirement;

        return $this;
    }

    /**
     * isset stayRequirements
     *
     * Collection of stay requirements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayRequirements($index)
    {
        return isset($this->stayRequirements[$index]);
    }

    /**
     * unset stayRequirements
     *
     * Collection of stay requirements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayRequirements($index)
    {
        unset($this->stayRequirements[$index]);
    }

    /**
     * Gets as stayRequirements
     *
     * Collection of stay requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     */
    public function getStayRequirements()
    {
        return $this->stayRequirements;
    }

    /**
     * Sets a new stayRequirements
     *
     * Collection of stay requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     * $stayRequirements
     * @return self
     */
    public function setStayRequirements(array $stayRequirements)
    {
        $this->stayRequirements = $stayRequirements;

        return $this;
    }

    /**
     * Gets as commissionPolicy
     *
     * Used to define the property's high-level commission policy.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CommissionPolicyAType
     */
    public function getCommissionPolicy()
    {
        return $this->commissionPolicy;
    }

    /**
     * Sets a new commissionPolicy
     *
     * Used to define the property's high-level commission policy.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CommissionPolicyAType
     * $commissionPolicy
     * @return self
     */
    public function setCommissionPolicy(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\CommissionPolicyAType $commissionPolicy
    ) {
        $this->commissionPolicy = $commissionPolicy;

        return $this;
    }

    /**
     * Adds as feePolicy
     *
     * A collection of fees that may apply to a reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $feePolicy
     */
    public function addToFeePolicies(\Davispeixoto\OpenTravelAlliance\FeeType $feePolicy)
    {
        $this->feePolicies[] = $feePolicy;

        return $this;
    }

    /**
     * isset feePolicies
     *
     * A collection of fees that may apply to a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeePolicies($index)
    {
        return isset($this->feePolicies[$index]);
    }

    /**
     * unset feePolicies
     *
     * A collection of fees that may apply to a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeePolicies($index)
    {
        unset($this->feePolicies[$index]);
    }

    /**
     * Gets as feePolicies
     *
     * A collection of fees that may apply to a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFeePolicies()
    {
        return $this->feePolicies;
    }

    /**
     * Sets a new feePolicies
     *
     * A collection of fees that may apply to a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicies
     * @return self
     */
    public function setFeePolicies(array $feePolicies)
    {
        $this->feePolicies = $feePolicies;

        return $this;
    }

    /**
     * Adds as ratePolicy
     *
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType
     * $ratePolicy
     */
    public function addToRatePolicies(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType $ratePolicy
    ) {
        $this->ratePolicies[] = $ratePolicy;

        return $this;
    }

    /**
     * isset ratePolicies
     *
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePolicies($index)
    {
        return isset($this->ratePolicies[$index]);
    }

    /**
     * unset ratePolicies
     *
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePolicies($index)
    {
        unset($this->ratePolicies[$index]);
    }

    /**
     * Gets as ratePolicies
     *
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     */
    public function getRatePolicies()
    {
        return $this->ratePolicies;
    }

    /**
     * Sets a new ratePolicies
     *
     * Defines the policies for various rate types (e.g. government rates, preferred
     * rates, etc.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     * $ratePolicies
     * @return self
     */
    public function setRatePolicies(array $ratePolicies)
    {
        $this->ratePolicies = $ratePolicies;

        return $this;
    }

    /**
     * Adds as groupPolicy
     *
     * A collection of group policy information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType
     * $groupPolicy
     */
    public function addToGroupPolicies(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType $groupPolicy
    ) {
        $this->groupPolicies[] = $groupPolicy;

        return $this;
    }

    /**
     * isset groupPolicies
     *
     * A collection of group policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroupPolicies($index)
    {
        return isset($this->groupPolicies[$index]);
    }

    /**
     * unset groupPolicies
     *
     * A collection of group policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroupPolicies($index)
    {
        unset($this->groupPolicies[$index]);
    }

    /**
     * Gets as groupPolicies
     *
     * A collection of group policy information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     */
    public function getGroupPolicies()
    {
        return $this->groupPolicies;
    }

    /**
     * Sets a new groupPolicies
     *
     * A collection of group policy information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType\GroupPolicyAType[]
     * $groupPolicies
     * @return self
     */
    public function setGroupPolicies(array $groupPolicies)
    {
        $this->groupPolicies = $groupPolicies;

        return $this;
    }


}

