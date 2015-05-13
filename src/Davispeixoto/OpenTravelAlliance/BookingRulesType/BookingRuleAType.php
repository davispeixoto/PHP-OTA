<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType;

/**
 * Class representing BookingRuleAType
 */
class BookingRuleAType
{

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

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
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @property \DateInterval $maxAdvancedBookingOffset
     */
    private $maxAdvancedBookingOffset = null;

    /**
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @property \DateInterval $minAdvancedBookingOffset
     */
    private $minAdvancedBookingOffset = null;

    /**
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @property \DateInterval $forceGuaranteeOffset
     */
    private $forceGuaranteeOffset = null;

    /**
     * Number of days prior to arrival date for which a deposit is no longer accepted
     * (because of a too short time delay between reservation and guest arrival).
     *
     * @property \DateInterval $depositWaiverOffset
     */
    private $depositWaiverOffset = null;

    /**
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @property integer $minTotalOccupancy
     */
    private $minTotalOccupancy = null;

    /**
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @property integer $maxTotalOccupancy
     */
    private $maxTotalOccupancy = null;

    /**
     * The fixed time that the booking restriction goes into effect to cancel the
     * non-guaranteed reservation. Either this attribute or the DropTimeOffset element
     * may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $absoluteDropTime
     */
    private $absoluteDropTime = null;

    /**
     * Indicates whether this rate plan can be booked by those not in the viewership
     * collection. If this attribute is False (0), then the viewerships collection
     * lists those who have view-only or bookable status for this rate plan. If this
     * attribute is True (1), then the viewerships collection lists those who have
     * view-only or not-viewable status for this rate plan.
     *
     * @property boolean $generallyBookable
     */
    private $generallyBookable = null;

    /**
     * Indicates whether the price for this rate plan can be viewed, or whether the
     * guest must contact another entity to obtain price information.Valid values: 0 =
     * (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @property boolean $priceViewable
     */
    private $priceViewable = null;

    /**
     * Boolean value indicating whether a specific rate plan must be qualified prior to
     * inclusion in availability response messages.
     *
     * @property boolean $qualifiedRateYN
     */
    private $qualifiedRateYN = null;

    /**
     * An address is required to complete the booking.
     *
     * @property boolean $addressRequired
     */
    private $addressRequired = null;

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $absoluteCutoff
     */
    private $absoluteCutoff = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @property \DateInterval $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @property string $offsetCalculationMode
     */
    private $offsetCalculationMode = null;

    /**
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @property integer $maxContiguousBookings
     */
    private $maxContiguousBookings = null;

    /**
     * A collection of accepted guarantees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     * $acceptableGuarantees
     */
    private $acceptableGuarantees = null;

    /**
     * A collection of required payments that are part of the booking restriction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * A collection of required payments that are part of the booking restriction.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $requiredPaymts
     */
    private $requiredPaymts = null;

    /**
     * A collection of lengths of stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of Day Of Week restrictions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions
     */
    private $dOWRestrictions = null;

    /**
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\RestrictionStatusAType
     * $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * A collection of Viewships.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     * $viewerships
     */
    private $viewerships = null;

    /**
     * A collection of Additional rules.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     * $addtionalRules
     */
    private $addtionalRules = null;

    /**
     * General description of booking rule.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each Booking Rule, for transaction tracability.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The charges that may apply to an early or late checkout.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\CheckoutChargeAType[]
     * $checkoutCharge
     */
    private $checkoutCharge = null;

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

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
     * Gets as maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->maxAdvancedBookingOffset;
    }

    /**
     * Sets a new maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $maxAdvancedBookingOffset
     * @return self
     */
    public function setMaxAdvancedBookingOffset(\DateInterval $maxAdvancedBookingOffset)
    {
        $this->maxAdvancedBookingOffset = $maxAdvancedBookingOffset;

        return $this;
    }

    /**
     * Gets as minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->minAdvancedBookingOffset;
    }

    /**
     * Sets a new minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $minAdvancedBookingOffset
     * @return self
     */
    public function setMinAdvancedBookingOffset(\DateInterval $minAdvancedBookingOffset)
    {
        $this->minAdvancedBookingOffset = $minAdvancedBookingOffset;

        return $this;
    }

    /**
     * Gets as forceGuaranteeOffset
     *
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @return \DateInterval
     */
    public function getForceGuaranteeOffset()
    {
        return $this->forceGuaranteeOffset;
    }

    /**
     * Sets a new forceGuaranteeOffset
     *
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @param \DateInterval $forceGuaranteeOffset
     * @return self
     */
    public function setForceGuaranteeOffset(\DateInterval $forceGuaranteeOffset)
    {
        $this->forceGuaranteeOffset = $forceGuaranteeOffset;

        return $this;
    }

    /**
     * Gets as depositWaiverOffset
     *
     * Number of days prior to arrival date for which a deposit is no longer accepted
     * (because of a too short time delay between reservation and guest arrival).
     *
     * @return \DateInterval
     */
    public function getDepositWaiverOffset()
    {
        return $this->depositWaiverOffset;
    }

    /**
     * Sets a new depositWaiverOffset
     *
     * Number of days prior to arrival date for which a deposit is no longer accepted
     * (because of a too short time delay between reservation and guest arrival).
     *
     * @param \DateInterval $depositWaiverOffset
     * @return self
     */
    public function setDepositWaiverOffset(\DateInterval $depositWaiverOffset)
    {
        $this->depositWaiverOffset = $depositWaiverOffset;

        return $this;
    }

    /**
     * Gets as minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @return integer
     */
    public function getMinTotalOccupancy()
    {
        return $this->minTotalOccupancy;
    }

    /**
     * Sets a new minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @param integer $minTotalOccupancy
     * @return self
     */
    public function setMinTotalOccupancy($minTotalOccupancy)
    {
        $this->minTotalOccupancy = $minTotalOccupancy;

        return $this;
    }

    /**
     * Gets as maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @return integer
     */
    public function getMaxTotalOccupancy()
    {
        return $this->maxTotalOccupancy;
    }

    /**
     * Sets a new maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @param integer $maxTotalOccupancy
     * @return self
     */
    public function setMaxTotalOccupancy($maxTotalOccupancy)
    {
        $this->maxTotalOccupancy = $maxTotalOccupancy;

        return $this;
    }

    /**
     * Gets as absoluteDropTime
     *
     * The fixed time that the booking restriction goes into effect to cancel the
     * non-guaranteed reservation. Either this attribute or the DropTimeOffset element
     * may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getAbsoluteDropTime()
    {
        return $this->absoluteDropTime;
    }

    /**
     * Sets a new absoluteDropTime
     *
     * The fixed time that the booking restriction goes into effect to cancel the
     * non-guaranteed reservation. Either this attribute or the DropTimeOffset element
     * may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $absoluteDropTime
     * @return self
     */
    public function setAbsoluteDropTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $absoluteDropTime)
    {
        $this->absoluteDropTime = $absoluteDropTime;

        return $this;
    }

    /**
     * Gets as generallyBookable
     *
     * Indicates whether this rate plan can be booked by those not in the viewership
     * collection. If this attribute is False (0), then the viewerships collection
     * lists those who have view-only or bookable status for this rate plan. If this
     * attribute is True (1), then the viewerships collection lists those who have
     * view-only or not-viewable status for this rate plan.
     *
     * @return boolean
     */
    public function getGenerallyBookable()
    {
        return $this->generallyBookable;
    }

    /**
     * Sets a new generallyBookable
     *
     * Indicates whether this rate plan can be booked by those not in the viewership
     * collection. If this attribute is False (0), then the viewerships collection
     * lists those who have view-only or bookable status for this rate plan. If this
     * attribute is True (1), then the viewerships collection lists those who have
     * view-only or not-viewable status for this rate plan.
     *
     * @param boolean $generallyBookable
     * @return self
     */
    public function setGenerallyBookable($generallyBookable)
    {
        $this->generallyBookable = $generallyBookable;

        return $this;
    }

    /**
     * Gets as priceViewable
     *
     * Indicates whether the price for this rate plan can be viewed, or whether the
     * guest must contact another entity to obtain price information.Valid values: 0 =
     * (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @return boolean
     */
    public function getPriceViewable()
    {
        return $this->priceViewable;
    }

    /**
     * Sets a new priceViewable
     *
     * Indicates whether the price for this rate plan can be viewed, or whether the
     * guest must contact another entity to obtain price information.Valid values: 0 =
     * (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @param boolean $priceViewable
     * @return self
     */
    public function setPriceViewable($priceViewable)
    {
        $this->priceViewable = $priceViewable;

        return $this;
    }

    /**
     * Gets as qualifiedRateYN
     *
     * Boolean value indicating whether a specific rate plan must be qualified prior to
     * inclusion in availability response messages.
     *
     * @return boolean
     */
    public function getQualifiedRateYN()
    {
        return $this->qualifiedRateYN;
    }

    /**
     * Sets a new qualifiedRateYN
     *
     * Boolean value indicating whether a specific rate plan must be qualified prior to
     * inclusion in availability response messages.
     *
     * @param boolean $qualifiedRateYN
     * @return self
     */
    public function setQualifiedRateYN($qualifiedRateYN)
    {
        $this->qualifiedRateYN = $qualifiedRateYN;

        return $this;
    }

    /**
     * Gets as addressRequired
     *
     * An address is required to complete the booking.
     *
     * @return boolean
     */
    public function getAddressRequired()
    {
        return $this->addressRequired;
    }

    /**
     * Sets a new addressRequired
     *
     * An address is required to complete the booking.
     *
     * @param boolean $addressRequired
     * @return self
     */
    public function setAddressRequired($addressRequired)
    {
        $this->addressRequired = $addressRequired;

        return $this;
    }

    /**
     * Gets as absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getAbsoluteCutoff()
    {
        return $this->absoluteCutoff;
    }

    /**
     * Sets a new absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff
     * @return self
     */
    public function setAbsoluteCutoff(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff)
    {
        $this->absoluteCutoff = $absoluteCutoff;

        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return \DateInterval
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param \DateInterval $offsetDuration
     * @return self
     */
    public function setOffsetDuration(\DateInterval $offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;

        return $this;
    }

    /**
     * Gets as offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @return string
     */
    public function getOffsetCalculationMode()
    {
        return $this->offsetCalculationMode;
    }

    /**
     * Sets a new offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @param string $offsetCalculationMode
     * @return self
     */
    public function setOffsetCalculationMode($offsetCalculationMode)
    {
        $this->offsetCalculationMode = $offsetCalculationMode;

        return $this;
    }

    /**
     * Gets as maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @return integer
     */
    public function getMaxContiguousBookings()
    {
        return $this->maxContiguousBookings;
    }

    /**
     * Sets a new maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @param integer $maxContiguousBookings
     * @return self
     */
    public function setMaxContiguousBookings($maxContiguousBookings)
    {
        $this->maxContiguousBookings = $maxContiguousBookings;

        return $this;
    }

    /**
     * Adds as acceptableGuarantee
     *
     * A collection of accepted guarantees.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType
     * $acceptableGuarantee
     */
    public function addToAcceptableGuarantees(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee
    ) {
        $this->acceptableGuarantees[] = $acceptableGuarantee;

        return $this;
    }

    /**
     * isset acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptableGuarantees($index)
    {
        return isset($this->acceptableGuarantees[$index]);
    }

    /**
     * unset acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptableGuarantees($index)
    {
        unset($this->acceptableGuarantees[$index]);
    }

    /**
     * Gets as acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     */
    public function getAcceptableGuarantees()
    {
        return $this->acceptableGuarantees;
    }

    /**
     * Sets a new acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     * $acceptableGuarantees
     * @return self
     */
    public function setAcceptableGuarantees(array $acceptableGuarantees)
    {
        $this->acceptableGuarantees = $acceptableGuarantees;

        return $this;
    }

    /**
     * Gets as cancelPenalties
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(\Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPenalties)
    {
        $this->cancelPenalties = $cancelPenalties;

        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToRequiredPaymts(
        \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->requiredPaymts[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequiredPaymts($index)
    {
        return isset($this->requiredPaymts[$index]);
    }

    /**
     * unset requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequiredPaymts($index)
    {
        unset($this->requiredPaymts[$index]);
    }

    /**
     * Gets as requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getRequiredPaymts()
    {
        return $this->requiredPaymts;
    }

    /**
     * Sets a new requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $requiredPaymts
     * @return self
     */
    public function setRequiredPaymts(array $requiredPaymts)
    {
        $this->requiredPaymts = $requiredPaymts;

        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(\Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay)
    {
        $this->lengthsOfStay = $lengthsOfStay;

        return $this;
    }

    /**
     * Gets as dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType
     */
    public function getDOWRestrictions()
    {
        return $this->dOWRestrictions;
    }

    /**
     * Sets a new dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions
     * @return self
     */
    public function setDOWRestrictions(\Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions)
    {
        $this->dOWRestrictions = $dOWRestrictions;

        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\RestrictionStatusAType
     * $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\RestrictionStatusAType $restrictionStatus
    ) {
        $this->restrictionStatus = $restrictionStatus;

        return $this;
    }

    /**
     * Adds as viewership
     *
     * A collection of Viewships.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType
     * $viewership
     */
    public function addToViewerships(\Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType $viewership)
    {
        $this->viewerships[] = $viewership;

        return $this;
    }

    /**
     * isset viewerships
     *
     * A collection of Viewships.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetViewerships($index)
    {
        return isset($this->viewerships[$index]);
    }

    /**
     * unset viewerships
     *
     * A collection of Viewships.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetViewerships($index)
    {
        unset($this->viewerships[$index]);
    }

    /**
     * Gets as viewerships
     *
     * A collection of Viewships.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     */
    public function getViewerships()
    {
        return $this->viewerships;
    }

    /**
     * Sets a new viewerships
     *
     * A collection of Viewships.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     * $viewerships
     * @return self
     */
    public function setViewerships(array $viewerships)
    {
        $this->viewerships = $viewerships;

        return $this;
    }

    /**
     * Adds as additionalRule
     *
     * A collection of Additional rules.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType
     * $additionalRule
     */
    public function addToAddtionalRules(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule
    ) {
        $this->addtionalRules[] = $additionalRule;

        return $this;
    }

    /**
     * isset addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddtionalRules($index)
    {
        return isset($this->addtionalRules[$index]);
    }

    /**
     * unset addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddtionalRules($index)
    {
        unset($this->addtionalRules[$index]);
    }

    /**
     * Gets as addtionalRules
     *
     * A collection of Additional rules.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     */
    public function getAddtionalRules()
    {
        return $this->addtionalRules;
    }

    /**
     * Sets a new addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     * $addtionalRules
     * @return self
     */
    public function setAddtionalRules(array $addtionalRules)
    {
        $this->addtionalRules = $addtionalRules;

        return $this;
    }

    /**
     * Adds as description
     *
     * General description of booking rule.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * General description of booking rule.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * General description of booking rule.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * General description of booking rule.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * General description of booking rule.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each Booking Rule, for transaction tracability.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each Booking Rule, for transaction tracability.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\CheckoutChargeAType
     * $checkoutCharge
     */
    public function addToCheckoutCharge(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\CheckoutChargeAType $checkoutCharge
    ) {
        $this->checkoutCharge[] = $checkoutCharge;

        return $this;
    }

    /**
     * isset checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckoutCharge($index)
    {
        return isset($this->checkoutCharge[$index]);
    }

    /**
     * unset checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckoutCharge($index)
    {
        unset($this->checkoutCharge[$index]);
    }

    /**
     * Gets as checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\CheckoutChargeAType[]
     */
    public function getCheckoutCharge()
    {
        return $this->checkoutCharge;
    }

    /**
     * Sets a new checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\CheckoutChargeAType[]
     * $checkoutCharge
     * @return self
     */
    public function setCheckoutCharge(array $checkoutCharge)
    {
        $this->checkoutCharge = $checkoutCharge;

        return $this;
    }


}

