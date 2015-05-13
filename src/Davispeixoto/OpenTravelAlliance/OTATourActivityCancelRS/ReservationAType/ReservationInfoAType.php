<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType;

/**
 * Class representing ReservationInfoAType
 */
class ReservationInfoAType
{

    /**
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Individual participant, participant category and group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Descriptive information about the tour/activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DescriptionAType
     * $description
     */
    private $description = null;

    /**
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * The tour/ activity location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     */
    private $location = null;

    /**
     * Policy(s) associated with the tour and/or activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PolicyAType
     * $policy
     */
    private $policy = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
     * $supplierOperator
     */
    private $supplierOperator = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as basicInfo
     *
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\BasicInfoAType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType $participantInfo
    ) {
        $this->participantInfo[] = $participantInfo;

        return $this;
    }

    /**
     * isset participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantInfo($index)
    {
        return isset($this->participantInfo[$index]);
    }

    /**
     * unset participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantInfo($index)
    {
        unset($this->participantInfo[$index]);
    }

    /**
     * Gets as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType[]
     */
    public function getParticipantInfo()
    {
        return $this->participantInfo;
    }

    /**
     * Sets a new participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType[]
     * $participantInfo
     * @return self
     */
    public function setParticipantInfo(array $participantInfo)
    {
        $this->participantInfo = $participantInfo;

        return $this;
    }

    /**
     * Adds as paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType $paymentInfo
    ) {
        $this->paymentInfo[] = $paymentInfo;

        return $this;
    }

    /**
     * isset paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentInfo($index)
    {
        return isset($this->paymentInfo[$index]);
    }

    /**
     * unset paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentInfo($index)
    {
        unset($this->paymentInfo[$index]);
    }

    /**
     * Gets as paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType[]
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType[]
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information about the tour/activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DescriptionAType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information about the tour/activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DescriptionAType
     * $description
     * @return self
     */
    public function setDescription(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DescriptionAType $description
    ) {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as discount
     *
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DiscountAType $discount
    ) {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Gets as location
     *
     * The tour/ activity location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The tour/ activity location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as policy
     *
     * Policy(s) associated with the tour and/or activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PolicyAType
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Policy(s) associated with the tour and/or activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PolicyAType
     * $policy
     * @return self
     */
    public function setPolicy(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PolicyAType $policy
    ) {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as supplierOperator
     *
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType
     * $supplierOperator
     */
    public function addToSupplierOperator(\Davispeixoto\OpenTravelAlliance\TourActivitySupplierType $supplierOperator)
    {
        $this->supplierOperator[] = $supplierOperator;

        return $this;
    }

    /**
     * isset supplierOperator
     *
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplierOperator($index)
    {
        return isset($this->supplierOperator[$index]);
    }

    /**
     * unset supplierOperator
     *
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplierOperator($index)
    {
        unset($this->supplierOperator[$index]);
    }

    /**
     * Gets as supplierOperator
     *
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
     */
    public function getSupplierOperator()
    {
        return $this->supplierOperator;
    }

    /**
     * Sets a new supplierOperator
     *
     * Information about the supplier/ operator of the tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
     * $supplierOperator
     * @return self
     */
    public function setSupplierOperator(array $supplierOperator)
    {
        $this->supplierOperator = $supplierOperator;

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

