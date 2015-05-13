<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RateRulesType
 *
 * Collection of rules pertaining to the rental rate and/or vehicle.
 * XSD Type: RateRulesType
 */
class RateRulesType
{

    /**
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @property \DateInterval $minimumKeep
     */
    private $minimumKeep = null;

    /**
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @property \DateInterval $maximumKeep
     */
    private $maximumKeep = null;

    /**
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @property \DateInterval $maximumRental
     */
    private $maximumRental = null;

    /**
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateRulesType\AdvanceBookingAType
     * $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Pickup and return requirements for a specific rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType[]
     * $pickupReturnRules
     */
    private $pickupReturnRules = null;

    /**
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateRulesType\RateGuaranteeAType
     * $rateGuarantee
     */
    private $rateGuarantee = null;

    /**
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateRulesType\PaymentRulesAType
     * $paymentRules
     */
    private $paymentRules = null;

    /**
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\CancelPenaltyInfoAType[]
     * $cancelPenaltyInfo
     */
    private $cancelPenaltyInfo = null;

    /**
     * Information pertaining to the the deposit.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateRulesType\RateDepositAType
     * $rateDeposit
     */
    private $rateDeposit = null;

    /**
     * Gets as minimumKeep
     *
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @return \DateInterval
     */
    public function getMinimumKeep()
    {
        return $this->minimumKeep;
    }

    /**
     * Sets a new minimumKeep
     *
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @param \DateInterval $minimumKeep
     * @return self
     */
    public function setMinimumKeep(\DateInterval $minimumKeep)
    {
        $this->minimumKeep = $minimumKeep;

        return $this;
    }

    /**
     * Gets as maximumKeep
     *
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @return \DateInterval
     */
    public function getMaximumKeep()
    {
        return $this->maximumKeep;
    }

    /**
     * Sets a new maximumKeep
     *
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @param \DateInterval $maximumKeep
     * @return self
     */
    public function setMaximumKeep(\DateInterval $maximumKeep)
    {
        $this->maximumKeep = $maximumKeep;

        return $this;
    }

    /**
     * Gets as maximumRental
     *
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @return \DateInterval
     */
    public function getMaximumRental()
    {
        return $this->maximumRental;
    }

    /**
     * Sets a new maximumRental
     *
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @param \DateInterval $maximumRental
     * @return self
     */
    public function setMaximumRental(\DateInterval $maximumRental)
    {
        $this->maximumRental = $maximumRental;

        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\AdvanceBookingAType
     * $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\AdvanceBookingAType $advanceBooking
    ) {
        $this->advanceBooking = $advanceBooking;

        return $this;
    }

    /**
     * Adds as pickupReturnRules
     *
     * Pickup and return requirements for a specific rate.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType
     * $pickupReturnRules
     */
    public function addToPickupReturnRules(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType $pickupReturnRules
    ) {
        $this->pickupReturnRules[] = $pickupReturnRules;

        return $this;
    }

    /**
     * isset pickupReturnRules
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPickupReturnRules($index)
    {
        return isset($this->pickupReturnRules[$index]);
    }

    /**
     * unset pickupReturnRules
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPickupReturnRules($index)
    {
        unset($this->pickupReturnRules[$index]);
    }

    /**
     * Gets as pickupReturnRules
     *
     * Pickup and return requirements for a specific rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType[]
     */
    public function getPickupReturnRules()
    {
        return $this->pickupReturnRules;
    }

    /**
     * Sets a new pickupReturnRules
     *
     * Pickup and return requirements for a specific rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType[]
     * $pickupReturnRules
     * @return self
     */
    public function setPickupReturnRules(array $pickupReturnRules)
    {
        $this->pickupReturnRules = $pickupReturnRules;

        return $this;
    }

    /**
     * Gets as rateGuarantee
     *
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\RateGuaranteeAType
     */
    public function getRateGuarantee()
    {
        return $this->rateGuarantee;
    }

    /**
     * Sets a new rateGuarantee
     *
     * Used to indicate how long a specific rate is guaranteed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\RateGuaranteeAType
     * $rateGuarantee
     * @return self
     */
    public function setRateGuarantee(\Davispeixoto\OpenTravelAlliance\RateRulesType\RateGuaranteeAType $rateGuarantee)
    {
        $this->rateGuarantee = $rateGuarantee;

        return $this;
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\PaymentRulesAType
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\PaymentRulesAType
     * $paymentRules
     * @return self
     */
    public function setPaymentRules(\Davispeixoto\OpenTravelAlliance\RateRulesType\PaymentRulesAType $paymentRules)
    {
        $this->paymentRules = $paymentRules;

        return $this;
    }

    /**
     * Adds as cancelPenaltyInfo
     *
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\CancelPenaltyInfoAType
     * $cancelPenaltyInfo
     */
    public function addToCancelPenaltyInfo(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\CancelPenaltyInfoAType $cancelPenaltyInfo
    ) {
        $this->cancelPenaltyInfo[] = $cancelPenaltyInfo;

        return $this;
    }

    /**
     * isset cancelPenaltyInfo
     *
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCancelPenaltyInfo($index)
    {
        return isset($this->cancelPenaltyInfo[$index]);
    }

    /**
     * unset cancelPenaltyInfo
     *
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCancelPenaltyInfo($index)
    {
        unset($this->cancelPenaltyInfo[$index]);
    }

    /**
     * Gets as cancelPenaltyInfo
     *
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\CancelPenaltyInfoAType[]
     */
    public function getCancelPenaltyInfo()
    {
        return $this->cancelPenaltyInfo;
    }

    /**
     * Sets a new cancelPenaltyInfo
     *
     * Information regarding the cancellation or modification policy for this vehicle
     * type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\CancelPenaltyInfoAType[]
     * $cancelPenaltyInfo
     * @return self
     */
    public function setCancelPenaltyInfo(array $cancelPenaltyInfo)
    {
        $this->cancelPenaltyInfo = $cancelPenaltyInfo;

        return $this;
    }

    /**
     * Gets as rateDeposit
     *
     * Information pertaining to the the deposit.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateRulesType\RateDepositAType
     */
    public function getRateDeposit()
    {
        return $this->rateDeposit;
    }

    /**
     * Sets a new rateDeposit
     *
     * Information pertaining to the the deposit.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateRulesType\RateDepositAType
     * $rateDeposit
     * @return self
     */
    public function setRateDeposit(\Davispeixoto\OpenTravelAlliance\RateRulesType\RateDepositAType $rateDeposit)
    {
        $this->rateDeposit = $rateDeposit;

        return $this;
    }


}

