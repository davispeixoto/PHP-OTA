<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType;

use Davispeixoto\OpenTravelAlliance\RateUploadType;

/**
 * Class representing RateAType
 */
class RateAType extends RateUploadType
{

    /**
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @property string $invCodeApplication
     */
    private $invCodeApplication = null;

    /**
     * Code that identifies an inventory item.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
     *
     * @property string $invType
     */
    private $invType = null;

    /**
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @property string $invTypeCode
     */
    private $invTypeCode = null;

    /**
     * Simple indicator to detect if inventory is a room.
     *
     * @property boolean $isRoom
     */
    private $isRoom = null;

    /**
     * This is the status of the room rate combination.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * When true, indicates that the rate information applies to shoulder night(s).
     *
     * @property boolean $extraNightIndicator
     */
    private $extraNightIndicator = null;

    /**
     * The rate plan this rate plan is derived from.
     *
     * @property string $baseRatePlanCode
     */
    private $baseRatePlanCode = null;

    /**
     * The amount which should be added to the base rate plan to determine the price of
     * this derived rate plan.
     *
     * @property float $adjustedAmount
     */
    private $adjustedAmount = null;

    /**
     * The percentage off the base rate plan amount used to determine the price of this
     * derived rate plan.
     *
     * @property float $adjustedPercentage
     */
    private $adjustedPercentage = null;

    /**
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @property float $floorAmount
     */
    private $floorAmount = null;

    /**
     * The highest amount for which this derived rate plan should be sold.
     *
     * @property float $ceilingAmount
     */
    private $ceilingAmount = null;

    /**
     * When true, the adjusted amount or adjusted percentage is added to the amount
     * specified for the base rate plan to determine the derived rate amount. When
     * false, the adjusted amount or adjusted percentage is subtracted from the amount
     * specified for the base rate plan to determine the derived rate amount.
     *
     * @property boolean $adjustUpIndicator
     */
    private $adjustUpIndicator = null;

    /**
     * Gets as invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @return string
     */
    public function getInvCodeApplication()
    {
        return $this->invCodeApplication;
    }

    /**
     * Sets a new invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @param string $invCodeApplication
     * @return self
     */
    public function setInvCodeApplication($invCodeApplication)
    {
        $this->invCodeApplication = $invCodeApplication;

        return $this;
    }

    /**
     * Gets as invCode
     *
     * Code that identifies an inventory item.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * Code that identifies an inventory item.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;

        return $this;
    }

    /**
     * Gets as invType
     *
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
     *
     * @return string
     */
    public function getInvType()
    {
        return $this->invType;
    }

    /**
     * Sets a new invType
     *
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
     *
     * @param string $invType
     * @return self
     */
    public function setInvType($invType)
    {
        $this->invType = $invType;

        return $this;
    }

    /**
     * Gets as invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @return string
     */
    public function getInvTypeCode()
    {
        return $this->invTypeCode;
    }

    /**
     * Sets a new invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @param string $invTypeCode
     * @return self
     */
    public function setInvTypeCode($invTypeCode)
    {
        $this->invTypeCode = $invTypeCode;

        return $this;
    }

    /**
     * Gets as isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @return boolean
     */
    public function getIsRoom()
    {
        return $this->isRoom;
    }

    /**
     * Sets a new isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @param boolean $isRoom
     * @return self
     */
    public function setIsRoom($isRoom)
    {
        $this->isRoom = $isRoom;

        return $this;
    }

    /**
     * Gets as status
     *
     * This is the status of the room rate combination.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This is the status of the room rate combination.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as extraNightIndicator
     *
     * When true, indicates that the rate information applies to shoulder night(s).
     *
     * @return boolean
     */
    public function getExtraNightIndicator()
    {
        return $this->extraNightIndicator;
    }

    /**
     * Sets a new extraNightIndicator
     *
     * When true, indicates that the rate information applies to shoulder night(s).
     *
     * @param boolean $extraNightIndicator
     * @return self
     */
    public function setExtraNightIndicator($extraNightIndicator)
    {
        $this->extraNightIndicator = $extraNightIndicator;

        return $this;
    }

    /**
     * Gets as baseRatePlanCode
     *
     * The rate plan this rate plan is derived from.
     *
     * @return string
     */
    public function getBaseRatePlanCode()
    {
        return $this->baseRatePlanCode;
    }

    /**
     * Sets a new baseRatePlanCode
     *
     * The rate plan this rate plan is derived from.
     *
     * @param string $baseRatePlanCode
     * @return self
     */
    public function setBaseRatePlanCode($baseRatePlanCode)
    {
        $this->baseRatePlanCode = $baseRatePlanCode;

        return $this;
    }

    /**
     * Gets as adjustedAmount
     *
     * The amount which should be added to the base rate plan to determine the price of
     * this derived rate plan.
     *
     * @return float
     */
    public function getAdjustedAmount()
    {
        return $this->adjustedAmount;
    }

    /**
     * Sets a new adjustedAmount
     *
     * The amount which should be added to the base rate plan to determine the price of
     * this derived rate plan.
     *
     * @param float $adjustedAmount
     * @return self
     */
    public function setAdjustedAmount($adjustedAmount)
    {
        $this->adjustedAmount = $adjustedAmount;

        return $this;
    }

    /**
     * Gets as adjustedPercentage
     *
     * The percentage off the base rate plan amount used to determine the price of this
     * derived rate plan.
     *
     * @return float
     */
    public function getAdjustedPercentage()
    {
        return $this->adjustedPercentage;
    }

    /**
     * Sets a new adjustedPercentage
     *
     * The percentage off the base rate plan amount used to determine the price of this
     * derived rate plan.
     *
     * @param float $adjustedPercentage
     * @return self
     */
    public function setAdjustedPercentage($adjustedPercentage)
    {
        $this->adjustedPercentage = $adjustedPercentage;

        return $this;
    }

    /**
     * Gets as floorAmount
     *
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @return float
     */
    public function getFloorAmount()
    {
        return $this->floorAmount;
    }

    /**
     * Sets a new floorAmount
     *
     * The lowest amount for which this derived rate plan should be sold.
     *
     * @param float $floorAmount
     * @return self
     */
    public function setFloorAmount($floorAmount)
    {
        $this->floorAmount = $floorAmount;

        return $this;
    }

    /**
     * Gets as ceilingAmount
     *
     * The highest amount for which this derived rate plan should be sold.
     *
     * @return float
     */
    public function getCeilingAmount()
    {
        return $this->ceilingAmount;
    }

    /**
     * Sets a new ceilingAmount
     *
     * The highest amount for which this derived rate plan should be sold.
     *
     * @param float $ceilingAmount
     * @return self
     */
    public function setCeilingAmount($ceilingAmount)
    {
        $this->ceilingAmount = $ceilingAmount;

        return $this;
    }

    /**
     * Gets as adjustUpIndicator
     *
     * When true, the adjusted amount or adjusted percentage is added to the amount
     * specified for the base rate plan to determine the derived rate amount. When
     * false, the adjusted amount or adjusted percentage is subtracted from the amount
     * specified for the base rate plan to determine the derived rate amount.
     *
     * @return boolean
     */
    public function getAdjustUpIndicator()
    {
        return $this->adjustUpIndicator;
    }

    /**
     * Sets a new adjustUpIndicator
     *
     * When true, the adjusted amount or adjusted percentage is added to the amount
     * specified for the base rate plan to determine the derived rate amount. When
     * false, the adjusted amount or adjusted percentage is subtracted from the amount
     * specified for the base rate plan to determine the derived rate amount.
     *
     * @param boolean $adjustUpIndicator
     * @return self
     */
    public function setAdjustUpIndicator($adjustUpIndicator)
    {
        $this->adjustUpIndicator = $adjustUpIndicator;

        return $this;
    }


}

