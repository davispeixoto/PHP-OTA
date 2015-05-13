<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TeeTimeResType
 *
 * Information associated with a tee time round reservation request.
 * XSD Type: TeeTimeResType
 */
class TeeTimeResType
{

    /**
     * Internal reservation ID that can be associated with the ReservationID.
     *
     * @property string $internalResID
     */
    private $internalResID = null;

    /**
     * A unique identifier applied to this tee time round.
     *
     * @property integer $roundID
     */
    private $roundID = null;

    /**
     * The number of golfers represented in this tee time round.
     *
     * @property integer $golferQty
     */
    private $golferQty = null;

    /**
     * An identification of a package of which this tee time round is a part of.
     *
     * @property string $packageID
     */
    private $packageID = null;

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
     * The tee on which the round will start. This could be a hole number, or a course
     * designation where there are multiple courses.
     *
     * @property string $startingTee
     */
    private $startingTee = null;

    /**
     * The number of holes that the golfers wish to play within one round. If this
     * differs by day, separate messages must be sent.
     *
     * @property integer $numberOfHoles
     */
    private $numberOfHoles = null;

    /**
     * The number of carts included with the reservation.
     *
     * @property integer $cartQty
     */
    private $cartQty = null;

    /**
     * The number of Tee Times covered by this request.(Example) If a foursome wants to
     * play two separate rounds within one day, the number of tee times would be 2.
     *
     * @property integer $replayRoundQty
     */
    private $replayRoundQty = null;

    /**
     * A collection of individuals participating in the tee time round.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolferType[] $golfer
     */
    private $golfer = null;

    /**
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType[] $charge
     */
    private $charge = null;

    /**
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeResType\PaymentFormAType[]
     * $paymentForm
     */
    private $paymentForm = null;

    /**
     * Guarantee payment information (if required) for golf a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee
     */
    private $paymentGuarantee = null;

    /**
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeResType\DiscountsAType[]
     * $discounts
     */
    private $discounts = null;

    /**
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeResType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * Commission information associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     */
    private $commission = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as internalResID
     *
     * Internal reservation ID that can be associated with the ReservationID.
     *
     * @return string
     */
    public function getInternalResID()
    {
        return $this->internalResID;
    }

    /**
     * Sets a new internalResID
     *
     * Internal reservation ID that can be associated with the ReservationID.
     *
     * @param string $internalResID
     * @return self
     */
    public function setInternalResID($internalResID)
    {
        $this->internalResID = $internalResID;

        return $this;
    }

    /**
     * Gets as roundID
     *
     * A unique identifier applied to this tee time round.
     *
     * @return integer
     */
    public function getRoundID()
    {
        return $this->roundID;
    }

    /**
     * Sets a new roundID
     *
     * A unique identifier applied to this tee time round.
     *
     * @param integer $roundID
     * @return self
     */
    public function setRoundID($roundID)
    {
        $this->roundID = $roundID;

        return $this;
    }

    /**
     * Gets as golferQty
     *
     * The number of golfers represented in this tee time round.
     *
     * @return integer
     */
    public function getGolferQty()
    {
        return $this->golferQty;
    }

    /**
     * Sets a new golferQty
     *
     * The number of golfers represented in this tee time round.
     *
     * @param integer $golferQty
     * @return self
     */
    public function setGolferQty($golferQty)
    {
        $this->golferQty = $golferQty;

        return $this;
    }

    /**
     * Gets as packageID
     *
     * An identification of a package of which this tee time round is a part of.
     *
     * @return string
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * An identification of a package of which this tee time round is a part of.
     *
     * @param string $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;

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
     * Gets as startingTee
     *
     * The tee on which the round will start. This could be a hole number, or a course
     * designation where there are multiple courses.
     *
     * @return string
     */
    public function getStartingTee()
    {
        return $this->startingTee;
    }

    /**
     * Sets a new startingTee
     *
     * The tee on which the round will start. This could be a hole number, or a course
     * designation where there are multiple courses.
     *
     * @param string $startingTee
     * @return self
     */
    public function setStartingTee($startingTee)
    {
        $this->startingTee = $startingTee;

        return $this;
    }

    /**
     * Gets as numberOfHoles
     *
     * The number of holes that the golfers wish to play within one round. If this
     * differs by day, separate messages must be sent.
     *
     * @return integer
     */
    public function getNumberOfHoles()
    {
        return $this->numberOfHoles;
    }

    /**
     * Sets a new numberOfHoles
     *
     * The number of holes that the golfers wish to play within one round. If this
     * differs by day, separate messages must be sent.
     *
     * @param integer $numberOfHoles
     * @return self
     */
    public function setNumberOfHoles($numberOfHoles)
    {
        $this->numberOfHoles = $numberOfHoles;

        return $this;
    }

    /**
     * Gets as cartQty
     *
     * The number of carts included with the reservation.
     *
     * @return integer
     */
    public function getCartQty()
    {
        return $this->cartQty;
    }

    /**
     * Sets a new cartQty
     *
     * The number of carts included with the reservation.
     *
     * @param integer $cartQty
     * @return self
     */
    public function setCartQty($cartQty)
    {
        $this->cartQty = $cartQty;

        return $this;
    }

    /**
     * Gets as replayRoundQty
     *
     * The number of Tee Times covered by this request.(Example) If a foursome wants to
     * play two separate rounds within one day, the number of tee times would be 2.
     *
     * @return integer
     */
    public function getReplayRoundQty()
    {
        return $this->replayRoundQty;
    }

    /**
     * Sets a new replayRoundQty
     *
     * The number of Tee Times covered by this request.(Example) If a foursome wants to
     * play two separate rounds within one day, the number of tee times would be 2.
     *
     * @param integer $replayRoundQty
     * @return self
     */
    public function setReplayRoundQty($replayRoundQty)
    {
        $this->replayRoundQty = $replayRoundQty;

        return $this;
    }

    /**
     * Adds as golfer
     *
     * A collection of individuals participating in the tee time round.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolferType $golfer
     */
    public function addToGolfer(\Davispeixoto\OpenTravelAlliance\GolferType $golfer)
    {
        $this->golfer[] = $golfer;

        return $this;
    }

    /**
     * isset golfer
     *
     * A collection of individuals participating in the tee time round.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGolfer($index)
    {
        return isset($this->golfer[$index]);
    }

    /**
     * unset golfer
     *
     * A collection of individuals participating in the tee time round.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGolfer($index)
    {
        unset($this->golfer[$index]);
    }

    /**
     * Gets as golfer
     *
     * A collection of individuals participating in the tee time round.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolferType[]
     */
    public function getGolfer()
    {
        return $this->golfer;
    }

    /**
     * Sets a new golfer
     *
     * A collection of individuals participating in the tee time round.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolferType[] $golfer
     * @return self
     */
    public function setGolfer(array $golfer)
    {
        $this->golfer = $golfer;

        return $this;
    }

    /**
     * Adds as charge
     *
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType $charge)
    {
        $this->charge[] = $charge;

        return $this;
    }

    /**
     * isset charge
     *
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * is associated with.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\PaymentFormAType
     * $paymentForm
     */
    public function addToPaymentForm(\Davispeixoto\OpenTravelAlliance\TeeTimeResType\PaymentFormAType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;

        return $this;
    }

    /**
     * isset paymentForm
     *
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeResType\PaymentFormAType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * The payment form details for the tee time reservation. Note that payment forms
     * may be tied to individual golfers or to the tee time as a whole and may be
     * individually associated with one or more charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\PaymentFormAType[]
     * $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm)
    {
        $this->paymentForm = $paymentForm;

        return $this;
    }

    /**
     * Gets as paymentGuarantee
     *
     * Guarantee payment information (if required) for golf a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType
     */
    public function getPaymentGuarantee()
    {
        return $this->paymentGuarantee;
    }

    /**
     * Sets a new paymentGuarantee
     *
     * Guarantee payment information (if required) for golf a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee
     * @return self
     */
    public function setPaymentGuarantee(\Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee)
    {
        $this->paymentGuarantee = $paymentGuarantee;

        return $this;
    }

    /**
     * Adds as discounts
     *
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\DiscountsAType $discounts
     */
    public function addToDiscounts(\Davispeixoto\OpenTravelAlliance\TeeTimeResType\DiscountsAType $discounts)
    {
        $this->discounts[] = $discounts;

        return $this;
    }

    /**
     * isset discounts
     *
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscounts($index)
    {
        return isset($this->discounts[$index]);
    }

    /**
     * unset discounts
     *
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscounts($index)
    {
        unset($this->discounts[$index]);
    }

    /**
     * Gets as discounts
     *
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeResType\DiscountsAType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * Promotions and other rate qualifying discounts applied to this tee time round.
     * Note that promotions may be tied to individual golfers or to the tee time as a
     * whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\DiscountsAType[]
     * $discounts
     * @return self
     */
    public function setDiscounts(array $discounts)
    {
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\AmenityAType $amenity
     */
    public function addToAmenity(\Davispeixoto\OpenTravelAlliance\TeeTimeResType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeResType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeResType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Adds as commission
     *
     * Commission information associated with the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     */
    public function addToCommission(\Davispeixoto\OpenTravelAlliance\CommissionType $commission)
    {
        $this->commission[] = $commission;

        return $this;
    }

    /**
     * isset commission
     *
     * Commission information associated with the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Commission information associated with the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Commission information associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission information associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission)
    {
        $this->commission = $commission;

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

