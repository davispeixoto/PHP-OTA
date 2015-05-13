<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType;

/**
 * Class representing TourActivityInfoAType
 */
class TourActivityInfoAType
{

    /**
     * The departure or tour/activity start date/time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ScheduleAType
     * $schedule
     */
    private $schedule = null;

    /**
     * Promotion code and discount program information that may be associated with an
     * individual participant, a participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Extra amenities being requested and/or reserved.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PickupDropoffAType[]
     * $pickupDropoff
     */
    private $pickupDropoff = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType
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
     * Gets as schedule
     *
     * The departure or tour/activity start date/time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ScheduleAType
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ScheduleAType $schedule
    ) {
        $this->schedule = $schedule;

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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\DiscountAType $discount
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\DiscountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ExtraAType $extra
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ExtraAType[]
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\ExtraAType[]
     * $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PickupDropoffAType
     * $pickupDropoff
     */
    public function addToPickupDropoff(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PickupDropoffAType $pickupDropoff
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PickupDropoffAType[]
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PickupDropoffAType[]
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType
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
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType $pricing
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


}

