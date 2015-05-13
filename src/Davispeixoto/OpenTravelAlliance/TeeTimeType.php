<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TeeTimeType
 *
 * A single round of golf that may include one or more golfers. If there is more
 * than one round, each round will be represented separately.
 * XSD Type: TeeTimeType
 */
class TeeTimeType
{

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
     * The number of carts included with the tee time.
     *
     * @property integer $cartQty
     */
    private $cartQty = null;

    /**
     * The number of tee times covered by this request.(Example) If a foursome wants to
     * play two separate rounds within one day, the number of tee times would be 2.
     *
     * @property integer $replayRoundQty
     */
    private $replayRoundQty = null;

    /**
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @property boolean $disabledInd
     */
    private $disabledInd = null;

    /**
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolferType[] $golfer
     */
    private $golfer = null;

    /**
     * Charge information for the tee time round of golf, including amount or
     * percentage, description and tax included/ amount. Note individual charges may be
     * associated to individual golfers by referencing the Golfer/@RPH that the charge
     * applies to.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType[] $charge
     */
    private $charge = null;

    /**
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType\DiscountsAType[]
     * $discounts
     */
    private $discounts = null;

    /**
     * Amenities associated with this tee time round. Note that amenities may be tied
     * to individual golfers or to the tee time as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType\AmenityAType[] $amenity
     */
    private $amenity = null;

    /**
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType[] $policy
     */
    private $policy = null;

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
     * The number of carts included with the tee time.
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
     * The number of carts included with the tee time.
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
     * The number of tee times covered by this request.(Example) If a foursome wants to
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
     * The number of tee times covered by this request.(Example) If a foursome wants to
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
     * Gets as disabledInd
     *
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @return boolean
     */
    public function getDisabledInd()
    {
        return $this->disabledInd;
    }

    /**
     * Sets a new disabledInd
     *
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @param boolean $disabledInd
     * @return self
     */
    public function setDisabledInd($disabledInd)
    {
        $this->disabledInd = $disabledInd;

        return $this;
    }

    /**
     * Adds as golfer
     *
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
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
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
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
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
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
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
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
     * Detailed information about individuals participating in the tee time round or
     * general golfer category information.
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
     * applies to.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType $charge)
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
     * applies to.
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
     * applies to.
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
     * applies to.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType[]
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
     * applies to.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Adds as discounts
     *
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\DiscountsAType $discounts
     */
    public function addToDiscounts(\Davispeixoto\OpenTravelAlliance\TeeTimeType\DiscountsAType $discounts)
    {
        $this->discounts[] = $discounts;

        return $this;
    }

    /**
     * isset discounts
     *
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
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
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
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
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType\DiscountsAType[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * Promotions and other rate qualifying discounts for determining availability and
     * pricing of this tee time round. Note that promotions may be tied to individual
     * golfers or to the tee time as a whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\DiscountsAType[] $discounts
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
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\AmenityAType $amenity
     */
    public function addToAmenity(\Davispeixoto\OpenTravelAlliance\TeeTimeType\AmenityAType $amenity)
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
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType\AmenityAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Adds as policy
     *
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType $policy
     */
    public function addToPolicy(\Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType $policy)
    {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Describes the policies of the tee time round, such as cancellation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }


}

