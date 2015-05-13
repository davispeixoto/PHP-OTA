<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeResType\ChargeAType;

/**
 * Class representing CalculationAType
 */
class CalculationAType
{

    /**
     * This is used in conjunction with UnitName to specify the charge per unit as
     * defined by UnitName (e.g., if UnitCharge="100" and UnitName="day" the result is
     * 100 dollars per day).
     *
     * @property float $unitCharge
     */
    private $unitCharge = null;

    /**
     * The UnitName attribute provides the unit on which an item charge may be based
     * when purchasing a round of golf.
     *
     * @property string $unitName
     */
    private $unitName = null;

    /**
     * This is used in conjunction with UnitName to specify the quantity of units as
     * defined by UnitName (e.g., if Quantity="5" and UnitName="day" the result is 5
     * days).
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Provides the ability to define a particular percentage.
     *
     * @property float $percentage
     */
    private $percentage = null;

    /**
     * Indicates a time or a place of reference (e.g. before pick-up, drop-off
     * location).
     *
     * @property string $applicability
     */
    private $applicability = null;

    /**
     * This is used in conjunction with UnitName to specify the maximum quantity of
     * units as defined by UnitName.
     *
     * @property integer $maxQuantity
     */
    private $maxQuantity = null;

    /**
     * The total for a specific item in a calculation.
     *
     * @property float $total
     */
    private $total = null;

    /**
     * Gets as unitCharge
     *
     * This is used in conjunction with UnitName to specify the charge per unit as
     * defined by UnitName (e.g., if UnitCharge="100" and UnitName="day" the result is
     * 100 dollars per day).
     *
     * @return float
     */
    public function getUnitCharge()
    {
        return $this->unitCharge;
    }

    /**
     * Sets a new unitCharge
     *
     * This is used in conjunction with UnitName to specify the charge per unit as
     * defined by UnitName (e.g., if UnitCharge="100" and UnitName="day" the result is
     * 100 dollars per day).
     *
     * @param float $unitCharge
     * @return self
     */
    public function setUnitCharge($unitCharge)
    {
        $this->unitCharge = $unitCharge;

        return $this;
    }

    /**
     * Gets as unitName
     *
     * The UnitName attribute provides the unit on which an item charge may be based
     * when purchasing a round of golf.
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->unitName;
    }

    /**
     * Sets a new unitName
     *
     * The UnitName attribute provides the unit on which an item charge may be based
     * when purchasing a round of golf.
     *
     * @param string $unitName
     * @return self
     */
    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * This is used in conjunction with UnitName to specify the quantity of units as
     * defined by UnitName (e.g., if Quantity="5" and UnitName="day" the result is 5
     * days).
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
     * This is used in conjunction with UnitName to specify the quantity of units as
     * defined by UnitName (e.g., if Quantity="5" and UnitName="day" the result is 5
     * days).
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
     * Gets as percentage
     *
     * Provides the ability to define a particular percentage.
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * Provides the ability to define a particular percentage.
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Gets as applicability
     *
     * Indicates a time or a place of reference (e.g. before pick-up, drop-off
     * location).
     *
     * @return string
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * Sets a new applicability
     *
     * Indicates a time or a place of reference (e.g. before pick-up, drop-off
     * location).
     *
     * @param string $applicability
     * @return self
     */
    public function setApplicability($applicability)
    {
        $this->applicability = $applicability;

        return $this;
    }

    /**
     * Gets as maxQuantity
     *
     * This is used in conjunction with UnitName to specify the maximum quantity of
     * units as defined by UnitName.
     *
     * @return integer
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * Sets a new maxQuantity
     *
     * This is used in conjunction with UnitName to specify the maximum quantity of
     * units as defined by UnitName.
     *
     * @param integer $maxQuantity
     * @return self
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;

        return $this;
    }

    /**
     * Gets as total
     *
     * The total for a specific item in a calculation.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total for a specific item in a calculation.
     *
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }


}

