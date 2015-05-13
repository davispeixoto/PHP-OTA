<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS;

/**
 * Class representing ReservationDetailsAType
 */
class ReservationDetailsAType
{

    /**
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $confirmation
     */
    private $confirmation = null;

    /**
     * Individual participant, participant category and group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * The tour departure or activity start date/time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ScheduleAType
     * $schedule
     */
    private $schedule = null;

    /**
     * Physically challenged accessibility information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     * $accessibility
     */
    private $accessibility = null;

    /**
     * Commission information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissionInfo
     */
    private $commissionInfo = null;

    /**
     * Descriptive information about the tour/activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DescriptionAType
     * $description
     */
    private $description = null;

    /**
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Extra amenities that were requested and/or reserved.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

    /**
     * Required and/or provided insurance for groups and/or individuals.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType[]
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
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PickupDropoffAType[]
     * $pickupDropoff
     */
    private $pickupDropoff = null;

    /**
     * Policy(s) associated with the tour and/or activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PolicyAType
     * $policy
     */
    private $policy = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PricingAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\BasicInfoAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as confirmation
     *
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     */
    public function addToConfirmation(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation)
    {
        $this->confirmation[] = $confirmation;

        return $this;
    }

    /**
     * isset confirmation
     *
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConfirmation($index)
    {
        return isset($this->confirmation[$index]);
    }

    /**
     * unset confirmation
     *
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConfirmation($index)
    {
        unset($this->confirmation[$index]);
    }

    /**
     * Gets as confirmation
     *
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets a new confirmation
     *
     * Supplier and/or trading partner confirmation numbers for the sucessfully booked
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $confirmation
     * @return self
     */
    public function setConfirmation(array $confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ParticipantInfoAType $participantInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ParticipantInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ParticipantInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PaymentInfoAType $paymentInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PaymentInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PaymentInfoAType[]
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Gets as schedule
     *
     * The tour departure or activity start date/time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ScheduleAType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The tour departure or activity start date/time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ScheduleAType $schedule
    ) {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Gets as accessibility
     *
     * Physically challenged accessibility information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }

    /**
     * Sets a new accessibility
     *
     * Physically challenged accessibility information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     * $accessibility
     * @return self
     */
    public function setAccessibility(\Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType $accessibility)
    {
        $this->accessibility = $accessibility;

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
     * Gets as description
     *
     * Descriptive information about the tour/activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DescriptionAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DescriptionAType
     * $description
     * @return self
     */
    public function setDescription(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DescriptionAType $description
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DiscountAType $discount
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ExtraAType $extra
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ExtraAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\ExtraAType[]
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
     * Required and/or provided insurance for groups and/or individuals.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType
     * $insurance
     */
    public function addToInsurance(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType $insurance
    ) {
        $this->insurance[] = $insurance;

        return $this;
    }

    /**
     * isset insurance
     *
     * Required and/or provided insurance for groups and/or individuals.
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
     * Required and/or provided insurance for groups and/or individuals.
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
     * Required and/or provided insurance for groups and/or individuals.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Required and/or provided insurance for groups and/or individuals.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType[]
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
     * Adds as pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PickupDropoffAType
     * $pickupDropoff
     */
    public function addToPickupDropoff(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PickupDropoffAType $pickupDropoff
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PickupDropoffAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PickupDropoffAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PolicyAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PolicyAType
     * $policy
     * @return self
     */
    public function setPolicy(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PolicyAType $policy
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PricingAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\PricingAType $pricing
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

