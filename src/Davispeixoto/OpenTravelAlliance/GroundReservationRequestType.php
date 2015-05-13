<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundReservationRequestType
 *
 * A unique reservation ID and/or search criteria used to return existing
 * reservation details.
 * XSD Type: GroundReservationRequestType
 */
class GroundReservationRequestType
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
     * $passengers
     */
    private $passengers = null;

    /**
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     */
    private $locations = null;

    /**
     * Vehicle make and model information associated with this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\VehicleMakeModelAType
     * $vehicleMakeModel
     */
    private $vehicleMakeModel = null;

    /**
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType
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
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType
     * $serviceCharges
     */
    private $serviceCharges = null;

    /**
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

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
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType
     * $restrictions
     */
    private $restrictions = null;

    /**
     * A collection of payment rules associated with this ground transportation
     * reservation.
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
     * Gets as passengers
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Sets a new passengers
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passengers
     * @return self
     */
    public function setPassengers(\Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType $passengers)
    {
        $this->passengers = $passengers;

        return $this;
    }

    /**
     * Gets as locations
     *
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationsType
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Sets a new locations
     *
     * Information about the locations associated with the reservation, including
     * pickup, interim stop(s) and drop-off details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     * @return self
     */
    public function setLocations(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Gets as vehicleMakeModel
     *
     * Vehicle make and model information associated with this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\VehicleMakeModelAType
     */
    public function getVehicleMakeModel()
    {
        return $this->vehicleMakeModel;
    }

    /**
     * Sets a new vehicleMakeModel
     *
     * Vehicle make and model information associated with this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\VehicleMakeModelAType
     * $vehicleMakeModel
     * @return self
     */
    public function setVehicleMakeModel(
        \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\VehicleMakeModelAType $vehicleMakeModel
    ) {
        $this->vehicleMakeModel = $vehicleMakeModel;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType
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
     * @param \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Davispeixoto\OpenTravelAlliance\GroundRateQualifierType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType
     */
    public function getServiceCharges()
    {
        return $this->serviceCharges;
    }

    /**
     * Sets a new serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service for this
     * reservation.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharges
     * @return self
     */
    public function setServiceCharges(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharges)
    {
        $this->serviceCharges = $serviceCharges;

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
    public function addToFees(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
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
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
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
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
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
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees that are applied in addition to the Ground Transportation Service charges
     * for this reservation.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

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
     * Gets as restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType
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
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType
     * $restrictions
     * @return self
     */
    public function setRestrictions(
        \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType $restrictions
    ) {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this ground transportation
     * reservation.
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
     * A collection of payment rules associated with this ground transportation
     * reservation.
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
     * A collection of payment rules associated with this ground transportation
     * reservation.
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
     * A collection of payment rules associated with this ground transportation
     * reservation.
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
     * A collection of payment rules associated with this ground transportation
     * reservation.
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

