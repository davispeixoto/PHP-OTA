<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType;

/**
 * Class representing GroundServiceAType
 */
class GroundServiceAType
{

    /**
     * Pickup, interim stops and drop-off details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType
     * $service
     */
    private $service = null;

    /**
     * Shuttle schedule and locations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundShuttleType[] $shuttle
     */
    private $shuttle = null;

    /**
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundPromotionType[] $promotions
     */
    private $promotions = null;

    /**
     * Restrictions that apply to this vehicle/ ground transportation service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\RestrictionsAType[]
     * $restrictions
     */
    private $restrictions = null;

    /**
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     * $serviceCharges
     */
    private $serviceCharges = null;

    /**
     * Fees that are applied in addition to the Ground Transportation Service charges.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[] $fees
     */
    private $fees = null;

    /**
     * The estimated total charge for the service.
     *
     * NOTE: This element typically contains the total of both ServiceCharges and Fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundTotalChargeType $totalCharge
     */
    private $totalCharge = null;

    /**
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $reference
     */
    private $reference = null;

    /**
     * A collection of payment rules associated with this ground transportation
     * availability. This instance of PaymentRules is typically used if there are
     * payment rules that are applicable to a specific vehicle or ground service type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\PaymentRulesAType
     * $paymentRules
     */
    private $paymentRules = null;

    /**
     * Gets as service
     *
     * Pickup, interim stops and drop-off details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Pickup, interim stops and drop-off details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType
     * $service
     * @return self
     */
    public function setService(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType $service
    ) {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as shuttle
     *
     * Shuttle schedule and locations.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleType $shuttle
     */
    public function addToShuttle(\Davispeixoto\OpenTravelAlliance\GroundShuttleType $shuttle)
    {
        $this->shuttle[] = $shuttle;

        return $this;
    }

    /**
     * isset shuttle
     *
     * Shuttle schedule and locations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttle($index)
    {
        return isset($this->shuttle[$index]);
    }

    /**
     * unset shuttle
     *
     * Shuttle schedule and locations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttle($index)
    {
        unset($this->shuttle[$index]);
    }

    /**
     * Gets as shuttle
     *
     * Shuttle schedule and locations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundShuttleType[]
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Shuttle schedule and locations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleType[] $shuttle
     * @return self
     */
    public function setShuttle(array $shuttle)
    {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifying information associated with this vehicle/ ground transportation
     * service.
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
     * service.
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
     * service.
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
     * service.
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
     * service.
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
     * Adds as promotions
     *
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundPromotionType $promotions
     */
    public function addToPromotions(\Davispeixoto\OpenTravelAlliance\GroundPromotionType $promotions)
    {
        $this->promotions[] = $promotions;

        return $this;
    }

    /**
     * isset promotions
     *
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotions($index)
    {
        return isset($this->promotions[$index]);
    }

    /**
     * unset promotions
     *
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotions($index)
    {
        unset($this->promotions[$index]);
    }

    /**
     * Gets as promotions
     *
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPromotionType[]
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Sets a new promotions
     *
     * Promotions associated with this vehicle/ ground transportation service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundPromotionType[] $promotions
     * @return self
     */
    public function setPromotions(array $promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }

    /**
     * Adds as restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\RestrictionsAType
     * $restrictions
     */
    public function addToRestrictions(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\RestrictionsAType $restrictions
    ) {
        $this->restrictions[] = $restrictions;

        return $this;
    }

    /**
     * isset restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service.
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
     * Restrictions that apply to this vehicle/ ground transportation service.
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
     * Restrictions that apply to this vehicle/ ground transportation service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\RestrictionsAType[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * Restrictions that apply to this vehicle/ ground transportation service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\RestrictionsAType[]
     * $restrictions
     * @return self
     */
    public function setRestrictions(array $restrictions)
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Adds as serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharges
     */
    public function addToServiceCharges(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $serviceCharges)
    {
        $this->serviceCharges[] = $serviceCharges;

        return $this;
    }

    /**
     * isset serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceCharges($index)
    {
        return isset($this->serviceCharges[$index]);
    }

    /**
     * unset serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceCharges($index)
    {
        unset($this->serviceCharges[$index]);
    }

    /**
     * Gets as serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     */
    public function getServiceCharges()
    {
        return $this->serviceCharges;
    }

    /**
     * Sets a new serviceCharges
     *
     * Charges that apply to this vehicle/ ground transportation service.
     *
     * NOTE: Non-base charges, such as gratuity, are typically specified in the Fees
     * element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     * $serviceCharges
     * @return self
     */
    public function setServiceCharges(array $serviceCharges)
    {
        $this->serviceCharges = $serviceCharges;

        return $this;
    }

    /**
     * Adds as fees
     *
     * Fees that are applied in addition to the Ground Transportation Service charges.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $fees
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType $fees)
    {
        $this->fees[] = $fees;

        return $this;
    }

    /**
     * isset fees
     *
     * Fees that are applied in addition to the Ground Transportation Service charges.
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
     * Fees that are applied in addition to the Ground Transportation Service charges.
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
     * Fees that are applied in addition to the Ground Transportation Service charges.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees that are applied in addition to the Ground Transportation Service charges.
     *
     * NOTE: Non-base charges, such as the basic price of the service are typically
     * specified in the ServiceCharges element, while additional fees, such as
     * gratuity, are specified here.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType[] $fees
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
     * The estimated total charge for the service.
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
     * The estimated total charge for the service.
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
     * Gets as reference
     *
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference code for the available service(s) returned in this message that may
     * be used in a booking message. This is used as a reference number in the booking
     * request so availability service details do not need to be replicated in the
     * booking request message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reference
     * @return self
     */
    public function setReference(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this ground transportation
     * availability. This instance of PaymentRules is typically used if there are
     * payment rules that are applicable to a specific vehicle or ground service type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\PaymentRulesAType
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this ground transportation
     * availability. This instance of PaymentRules is typically used if there are
     * payment rules that are applicable to a specific vehicle or ground service type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\PaymentRulesAType
     * $paymentRules
     * @return self
     */
    public function setPaymentRules(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\PaymentRulesAType $paymentRules
    ) {
        $this->paymentRules = $paymentRules;

        return $this;
    }


}

