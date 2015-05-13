<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ;

/**
 * Class representing BookingInfoAType
 */
class BookingInfoAType
{

    /**
     * Core information about the tour and/or activity being booked, including ID(s)
     * and name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Individual participant participant category and group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * The departure or tour/activity start date/time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ScheduleAType
     * $schedule
     */
    private $schedule = null;

    /**
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\AccessibilityRequirementAType[]
     * $accessibilityRequirement
     */
    private $accessibilityRequirement = null;

    /**
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Extra amenities being requested and/or reserved.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

    /**
     * Existing insurance information for a participant and/or group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\InsuranceAType[]
     * $insurance
     */
    private $insurance = null;

    /**
     * The tour/ activity location being booked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     */
    private $location = null;

    /**
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityNegotiatedPricingType[]
     * $negotiatedRate
     */
    private $negotiatedRate = null;

    /**
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PickupDropoffAType[]
     * $pickupDropoff
     */
    private $pickupDropoff = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PricingAType
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
     * Core information about the tour and/or activity being booked, including ID(s)
     * and name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\BasicInfoAType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core information about the tour and/or activity being booked, including ID(s)
     * and name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant participant category and group details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ParticipantInfoAType $participantInfo
    ) {
        $this->participantInfo[] = $participantInfo;

        return $this;
    }

    /**
     * isset participantInfo
     *
     * Individual participant participant category and group details.
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
     * Individual participant participant category and group details.
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
     * Individual participant participant category and group details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ParticipantInfoAType[]
     */
    public function getParticipantInfo()
    {
        return $this->participantInfo;
    }

    /**
     * Sets a new participantInfo
     *
     * Individual participant participant category and group details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ParticipantInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PaymentInfoAType $paymentInfo
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PaymentInfoAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PaymentInfoAType[]
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
     * The departure or tour/activity start date/time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ScheduleAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ScheduleAType $schedule
    ) {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Adds as accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\AccessibilityRequirementAType
     * $accessibilityRequirement
     */
    public function addToAccessibilityRequirement(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\AccessibilityRequirementAType $accessibilityRequirement
    ) {
        $this->accessibilityRequirement[] = $accessibilityRequirement;

        return $this;
    }

    /**
     * isset accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccessibilityRequirement($index)
    {
        return isset($this->accessibilityRequirement[$index]);
    }

    /**
     * unset accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccessibilityRequirement($index)
    {
        unset($this->accessibilityRequirement[$index]);
    }

    /**
     * Gets as accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\AccessibilityRequirementAType[]
     */
    public function getAccessibilityRequirement()
    {
        return $this->accessibilityRequirement;
    }

    /**
     * Sets a new accessibilityRequirement
     *
     * Physically challenged accessibility preferences. NOT ALL TOUR/ ACTIVITY
     * RESERVATION SYSTEMS CAN GUARANTEE ACCESSIBILITY REQUESTS. Check with your
     * trading partner before implementing this functionality.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\AccessibilityRequirementAType[]
     * $accessibilityRequirement
     * @return self
     */
    public function setAccessibilityRequirement(array $accessibilityRequirement)
    {
        $this->accessibilityRequirement = $accessibilityRequirement;

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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType $discount
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType[]
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
     * Extra amenities being requested and/or reserved.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType $extra
    ) {
        $this->extra[] = $extra;

        return $this;
    }

    /**
     * isset extra
     *
     * Extra amenities being requested and/or reserved.
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
     * Extra amenities being requested and/or reserved.
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
     * Extra amenities being requested and/or reserved.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * Extra amenities being requested and/or reserved.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\InsuranceAType
     * $insurance
     */
    public function addToInsurance(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\InsuranceAType $insurance
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\InsuranceAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\InsuranceAType[]
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
     * The tour/ activity location being booked.
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
     * The tour/ activity location being booked.
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
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
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
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
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
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
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
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
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
     * Negotiated rate information that may be associated with an individual
     * participant, a participant category and/or a group.
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
     * Adds as pickupDropoff
     *
     * The pickup and/or dropoff information if transportation is provided to/ from the
     * tour/activity location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PickupDropoffAType
     * $pickupDropoff
     */
    public function addToPickupDropoff(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PickupDropoffAType $pickupDropoff
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PickupDropoffAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PickupDropoffAType[]
     * $pickupDropoff
     * @return self
     */
    public function setPickupDropoff(array $pickupDropoff)
    {
        $this->pickupDropoff = $pickupDropoff;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PricingAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\PricingAType $pricing
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

