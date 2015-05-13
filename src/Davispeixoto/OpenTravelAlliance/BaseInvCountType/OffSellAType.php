<?php

namespace Davispeixoto\OpenTravelAlliance\BaseInvCountType;

/**
 * Class representing OffSellAType
 */
class OffSellAType
{

    /**
     * An enumerated type that defines whether to replace or adjust current values.
     * This value could be negative, as an adjustment could reduce the inventory items
     * that are on offsell, or be used to offer an oversell. Values: Total (should
     * replace any existing offsell value); Adjustment (should be added to any existing
     * offsell value).
     *
     * @property string $offSellValueType
     */
    private $offSellValueType = null;

    /**
     * @property float $offSellValue
     */
    private $offSellValue = null;

    /**
     * Gets as offSellValueType
     *
     * An enumerated type that defines whether to replace or adjust current values.
     * This value could be negative, as an adjustment could reduce the inventory items
     * that are on offsell, or be used to offer an oversell. Values: Total (should
     * replace any existing offsell value); Adjustment (should be added to any existing
     * offsell value).
     *
     * @return string
     */
    public function getOffSellValueType()
    {
        return $this->offSellValueType;
    }

    /**
     * Sets a new offSellValueType
     *
     * An enumerated type that defines whether to replace or adjust current values.
     * This value could be negative, as an adjustment could reduce the inventory items
     * that are on offsell, or be used to offer an oversell. Values: Total (should
     * replace any existing offsell value); Adjustment (should be added to any existing
     * offsell value).
     *
     * @param string $offSellValueType
     * @return self
     */
    public function setOffSellValueType($offSellValueType)
    {
        $this->offSellValueType = $offSellValueType;

        return $this;
    }

    /**
     * Gets as offSellValue
     *
     * @return float
     */
    public function getOffSellValue()
    {
        return $this->offSellValue;
    }

    /**
     * Sets a new offSellValue
     *
     * @param float $offSellValue
     * @return self
     */
    public function setOffSellValue($offSellValue)
    {
        $this->offSellValue = $offSellValue;

        return $this;
    }


}

