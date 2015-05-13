<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatingPrefType
 *
 * Identifies a seating preference.
 * XSD Type: SeatingPrefType
 */
class SeatingPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Direction seat faces during travel, when conveyance allows.
     *
     * @property string $seatDirection
     */
    private $seatDirection = null;

    /**
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @property string $seatLocation
     */
    private $seatLocation = null;

    /**
     * Preferred position of seat in a row, such as Aisle, Middle, Center, Window, etc.
     *
     * @property string $seatPosition
     */
    private $seatPosition = null;

    /**
     * Preferred row for seating, indicates specific row number and/or seat identifier.
     *
     * @property string $seatRow
     */
    private $seatRow = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as seatDirection
     *
     * Direction seat faces during travel, when conveyance allows.
     *
     * @return string
     */
    public function getSeatDirection()
    {
        return $this->seatDirection;
    }

    /**
     * Sets a new seatDirection
     *
     * Direction seat faces during travel, when conveyance allows.
     *
     * @param string $seatDirection
     * @return self
     */
    public function setSeatDirection($seatDirection)
    {
        $this->seatDirection = $seatDirection;

        return $this;
    }

    /**
     * Gets as seatLocation
     *
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @return string
     */
    public function getSeatLocation()
    {
        return $this->seatLocation;
    }

    /**
     * Sets a new seatLocation
     *
     * Location of seat in cabin of conveyance. Suggested values include: Forward,
     * Middle, Aft, ExitRow, Bulkhead, Right or Left Side, etc.
     *
     * @param string $seatLocation
     * @return self
     */
    public function setSeatLocation($seatLocation)
    {
        $this->seatLocation = $seatLocation;

        return $this;
    }

    /**
     * Gets as seatPosition
     *
     * Preferred position of seat in a row, such as Aisle, Middle, Center, Window, etc.
     *
     * @return string
     */
    public function getSeatPosition()
    {
        return $this->seatPosition;
    }

    /**
     * Sets a new seatPosition
     *
     * Preferred position of seat in a row, such as Aisle, Middle, Center, Window, etc.
     *
     * @param string $seatPosition
     * @return self
     */
    public function setSeatPosition($seatPosition)
    {
        $this->seatPosition = $seatPosition;

        return $this;
    }

    /**
     * Gets as seatRow
     *
     * Preferred row for seating, indicates specific row number and/or seat identifier.
     *
     * @return string
     */
    public function getSeatRow()
    {
        return $this->seatRow;
    }

    /**
     * Sets a new seatRow
     *
     * Preferred row for seating, indicates specific row number and/or seat identifier.
     *
     * @param string $seatRow
     * @return self
     */
    public function setSeatRow($seatRow)
    {
        $this->seatRow = $seatRow;

        return $this;
    }


}

