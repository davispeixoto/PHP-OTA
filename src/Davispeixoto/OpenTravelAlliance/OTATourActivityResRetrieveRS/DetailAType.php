<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS;

/**
 * Class representing DetailAType
 */
class DetailAType
{

    /**
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Commission information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissionInfo
     */
    private $commissionInfo = null;

    /**
     * The confirmation number of the sucessfully booked reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     */
    private $confirmation = null;

    /**
     * Descriptive information about the tour/activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DescriptionAType
     * $description
     */
    private $description = null;

    /**
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Extra amenities that were requested and/or reserved.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

    /**
     * Existing insurance information for a participant and/or group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\InsuranceAType[]
     * $insurance
     */
    private $insurance = null;

    /**
     * The tour/ activity location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     */
    private $location = null;

    /**
     * Negotiated rate information applied to the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     * $negotiatedRate
     */
    private $negotiatedRate = null;

    /**
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @property string[] $otherInstructions
     */
    private $otherInstructions = null;

    /**
     * Individual participant, participant category and group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType[]
     * $pickupDropoff
     */
    private $pickupDropoff = null;

    /**
     * Policy(s) associated with the tour and/or activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PolicyAType
     * $policy
     */
    private $policy = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * The departure or tour/activity start date/time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ScheduleAType
     * $schedule
     */
    private $schedule = null;

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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\BasicInfoAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as commissionInfo
     *
     * Commission information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commissionInfo
     */
    public function addToCommissionInfo(\Davispeixoto\OpenTravelAlliance\CommissionType $commissionInfo)
    {
        $this->commissionInfo[] = $commissionInfo;

        return $this;
    }

    /**
     * isset commissionInfo
     *
     * Commission information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommissionInfo($index)
    {
        return isset($this->commissionInfo[$index]);
    }

    /**
     * unset commissionInfo
     *
     * Commission information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommissionInfo($index)
    {
        unset($this->commissionInfo[$index]);
    }

    /**
     * Gets as commissionInfo
     *
     * Commission information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommissionInfo()
    {
        return $this->commissionInfo;
    }

    /**
     * Sets a new commissionInfo
     *
     * Commission information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissionInfo
     * @return self
     */
    public function setCommissionInfo(array $commissionInfo)
    {
        $this->commissionInfo = $commissionInfo;

        return $this;
    }

    /**
     * Gets as confirmation
     *
     * The confirmation number of the sucessfully booked reservation.
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
     * The confirmation number of the sucessfully booked reservation.
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
     * Gets as description
     *
     * Descriptive information about the tour/activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DescriptionAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DescriptionAType
     * $description
     * @return self
     */
    public function setDescription(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DescriptionAType $description
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DiscountAType $discount
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Adds as extra
     *
     * Extra amenities that were requested and/or reserved.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType $extra
    ) {
        $this->extra[] = $extra;

        return $this;
    }

    /**
     * isset extra
     *
     * Extra amenities that were requested and/or reserved.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * Extra amenities that were requested and/or reserved.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * Extra amenities that were requested and/or reserved.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * Extra amenities that were requested and/or reserved.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType[]
     * $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Adds as insurance
     *
     * Existing insurance information for a participant and/or group.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\InsuranceAType
     * $insurance
     */
    public function addToInsurance(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\InsuranceAType $insurance
    ) {
        $this->insurance[] = $insurance;

        return $this;
    }

    /**
     * isset insurance
     *
     * Existing insurance information for a participant and/or group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Existing insurance information for a participant and/or group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Existing insurance information for a participant and/or group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\InsuranceAType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Existing insurance information for a participant and/or group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\InsuranceAType[]
     * $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;

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
     * Adds as negotiatedRate
     *
     * Negotiated rate information applied to the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType
     * $negotiatedRate
     */
    public function addToNegotiatedRate(
        \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType $negotiatedRate
    ) {
        $this->negotiatedRate[] = $negotiatedRate;

        return $this;
    }

    /**
     * isset negotiatedRate
     *
     * Negotiated rate information applied to the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedRate($index)
    {
        return isset($this->negotiatedRate[$index]);
    }

    /**
     * unset negotiatedRate
     *
     * Negotiated rate information applied to the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedRate($index)
    {
        unset($this->negotiatedRate[$index]);
    }

    /**
     * Gets as negotiatedRate
     *
     * Negotiated rate information applied to the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     */
    public function getNegotiatedRate()
    {
        return $this->negotiatedRate;
    }

    /**
     * Sets a new negotiatedRate
     *
     * Negotiated rate information applied to the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     * $negotiatedRate
     * @return self
     */
    public function setNegotiatedRate(array $negotiatedRate)
    {
        $this->negotiatedRate = $negotiatedRate;

        return $this;
    }

    /**
     * Adds as otherInstructions
     *
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @return self
     * @param string $otherInstructions
     */
    public function addToOtherInstructions($otherInstructions)
    {
        $this->otherInstructions[] = $otherInstructions;

        return $this;
    }

    /**
     * isset otherInstructions
     *
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherInstructions($index)
    {
        return isset($this->otherInstructions[$index]);
    }

    /**
     * unset otherInstructions
     *
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherInstructions($index)
    {
        unset($this->otherInstructions[$index]);
    }

    /**
     * Gets as otherInstructions
     *
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @return string[]
     */
    public function getOtherInstructions()
    {
        return $this->otherInstructions;
    }

    /**
     * Sets a new otherInstructions
     *
     * Other instructions associated with the booking, such as "Discount Card Must Be
     * Presented."
     *
     * @param string[] $otherInstructions
     * @return self
     */
    public function setOtherInstructions(array $otherInstructions)
    {
        $this->otherInstructions = $otherInstructions;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ParticipantInfoAType $participantInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ParticipantInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ParticipantInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PaymentInfoAType $paymentInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PaymentInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PaymentInfoAType[]
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Adds as pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType
     * $pickupDropoff
     */
    public function addToPickupDropoff(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType $pickupDropoff
    ) {
        $this->pickupDropoff[] = $pickupDropoff;

        return $this;
    }

    /**
     * isset pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPickupDropoff($index)
    {
        return isset($this->pickupDropoff[$index]);
    }

    /**
     * unset pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPickupDropoff($index)
    {
        unset($this->pickupDropoff[$index]);
    }

    /**
     * Gets as pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType[]
     */
    public function getPickupDropoff()
    {
        return $this->pickupDropoff;
    }

    /**
     * Sets a new pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType[]
     * $pickupDropoff
     * @return self
     */
    public function setPickupDropoff(array $pickupDropoff)
    {
        $this->pickupDropoff = $pickupDropoff;

        return $this;
    }

    /**
     * Gets as policy
     *
     * Policy(s) associated with the tour and/or activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PolicyAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PolicyAType
     * $policy
     * @return self
     */
    public function setPolicy(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PolicyAType $policy
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PricingAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Gets as schedule
     *
     * The departure or tour/activity start date/time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ScheduleAType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The departure or tour/activity start date/time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ScheduleAType $schedule
    ) {
        $this->schedule = $schedule;

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

