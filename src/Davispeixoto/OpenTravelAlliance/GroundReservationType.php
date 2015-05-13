<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundReservationType
 *
 * Detailed information specific to a ground service reservation.
 * XSD Type: GroundReservationType
 */
class GroundReservationType
{

    /**
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     */
    private $confirmation = null;

    /**
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passenger
     */
    private $passenger = null;

    /**
     * Private service information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType
     * $service
     */
    private $service = null;

    /**
     * Shuttle service information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle
     */
    private $shuttle = null;

    /**
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     * $serviceCharge
     */
    private $serviceCharge = null;

    /**
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     */
    private $fee = null;

    /**
     * The estimated total charge for the services associated with this reservation.
     *
     * NOTE: This element typically contains the total of both ServiceCharges and Fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundTotalChargeType $totalCharge
     */
    private $totalCharge = null;

    /**
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\RestrictionsAType[]
     * $restrictions
     */
    private $restrictions = null;

    /**
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     */
    private $payment = null;

    /**
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comments
     */
    private $comments = null;

    /**
     * Gets as confirmation
     *
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets a new confirmation
     *
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     * @return self
     */
    public function setConfirmation(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Gets as passenger
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Sets a new passenger
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passenger
     * @return self
     */
    public function setPassenger(\Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType $passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Gets as service
     *
     * Private service information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Private service information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType
     * $service
     * @return self
     */
    public function setService(\Davispeixoto\OpenTravelAlliance\GroundReservationType\ServiceAType $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Gets as shuttle
     *
     * Shuttle service information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundShuttleResType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Shuttle service information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle
     * @return self
     */
    public function setShuttle(\Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle)
    {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier
     */
    public function addToRateQualifier(\Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier)
    {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType[] $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Adds as serviceCharge
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharge
     */
    public function addToServiceCharge(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharge)
    {
        $this->serviceCharge[] = $serviceCharge;

        return $this;
    }

    /**
     * isset serviceCharge
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceCharge($index)
    {
        return isset($this->serviceCharge[$index]);
    }

    /**
     * unset serviceCharge
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceCharge($index)
    {
        unset($this->serviceCharge[$index]);
    }

    /**
     * Gets as serviceCharge
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     */
    public function getServiceCharge()
    {
        return $this->serviceCharge;
    }

    /**
     * Sets a new serviceCharge
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     * $serviceCharge
     * @return self
     */
    public function setServiceCharge(array $serviceCharge)
    {
        $this->serviceCharge = $serviceCharge;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * The estimated total charge for the services associated with this reservation.
     *
     * NOTE: This element typically contains the total of both ServiceCharges and Fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundTotalChargeType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The estimated total charge for the services associated with this reservation.
     *
     * NOTE: This element typically contains the total of both ServiceCharges and Fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundTotalChargeType $totalCharge
     * @return self
     */
    public function setTotalCharge(\Davispeixoto\OpenTravelAlliance\GroundTotalChargeType $totalCharge)
    {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Adds as restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundReservationType\RestrictionsAType
     * $restrictions
     */
    public function addToRestrictions(
        \Davispeixoto\OpenTravelAlliance\GroundReservationType\RestrictionsAType $restrictions
    ) {
        $this->restrictions[] = $restrictions;

        return $this;
    }

    /**
     * isset restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestrictions($index)
    {
        return isset($this->restrictions[$index]);
    }

    /**
     * unset restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestrictions($index)
    {
        unset($this->restrictions[$index]);
    }

    /**
     * Gets as restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\RestrictionsAType[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationType\RestrictionsAType[]
     * $restrictions
     * @return self
     */
    public function setRestrictions(array $restrictions)
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Adds as payment
     *
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     */
    public function addToPayment(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * isset payment
     *
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * Payment(s) associated with this ground transportation reservation request. NOTE:
     * It is a best practice to ONLY return a masked credit card number in the
     * response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRules
     *
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * Payment rules associated with this ground transportation reservation.
     *
     * NOTE: This instance of PaymentRules is typically used if there are payment rules
     * that are applicable to a specific vehicle or ground service type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;

        return $this;
    }

    /**
     * Adds as comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\FreeTextType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

