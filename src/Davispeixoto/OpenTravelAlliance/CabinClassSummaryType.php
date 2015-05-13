<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinClassSummaryType
 *
 * Summary information about a cabin class.
 * XSD Type: CabinClassSummaryType
 */
class CabinClassSummaryType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A name that a particular airline/ CRS may give to the cabin class.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The total quantity of physical seats in the cabin.
     *
     * @property integer $cabinCapacity
     */
    private $cabinCapacity = null;

    /**
     * The total quantity of rows in this cabin class.
     *
     * @property integer $rowQty
     */
    private $rowQty = null;

    /**
     * The starting row number for this cabin class.
     *
     * @property integer $startingRow
     */
    private $startingRow = null;

    /**
     * The ending row number for this cabin class.
     *
     * @property integer $endingRow
     */
    private $endingRow = null;

    /**
     * The total quantity of available seats in the cabin.
     *
     * @property integer $availableSeatQty
     */
    private $availableSeatQty = null;

    /**
     * A unique identifier for this cabin class that may be referenced elsewhere in the
     * message.
     *
     * @property string $rPH
     */
    private $rPH = null;

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
     * Gets as name
     *
     * A name that a particular airline/ CRS may give to the cabin class.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name that a particular airline/ CRS may give to the cabin class.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as cabinCapacity
     *
     * The total quantity of physical seats in the cabin.
     *
     * @return integer
     */
    public function getCabinCapacity()
    {
        return $this->cabinCapacity;
    }

    /**
     * Sets a new cabinCapacity
     *
     * The total quantity of physical seats in the cabin.
     *
     * @param integer $cabinCapacity
     * @return self
     */
    public function setCabinCapacity($cabinCapacity)
    {
        $this->cabinCapacity = $cabinCapacity;

        return $this;
    }

    /**
     * Gets as rowQty
     *
     * The total quantity of rows in this cabin class.
     *
     * @return integer
     */
    public function getRowQty()
    {
        return $this->rowQty;
    }

    /**
     * Sets a new rowQty
     *
     * The total quantity of rows in this cabin class.
     *
     * @param integer $rowQty
     * @return self
     */
    public function setRowQty($rowQty)
    {
        $this->rowQty = $rowQty;

        return $this;
    }

    /**
     * Gets as startingRow
     *
     * The starting row number for this cabin class.
     *
     * @return integer
     */
    public function getStartingRow()
    {
        return $this->startingRow;
    }

    /**
     * Sets a new startingRow
     *
     * The starting row number for this cabin class.
     *
     * @param integer $startingRow
     * @return self
     */
    public function setStartingRow($startingRow)
    {
        $this->startingRow = $startingRow;

        return $this;
    }

    /**
     * Gets as endingRow
     *
     * The ending row number for this cabin class.
     *
     * @return integer
     */
    public function getEndingRow()
    {
        return $this->endingRow;
    }

    /**
     * Sets a new endingRow
     *
     * The ending row number for this cabin class.
     *
     * @param integer $endingRow
     * @return self
     */
    public function setEndingRow($endingRow)
    {
        $this->endingRow = $endingRow;

        return $this;
    }

    /**
     * Gets as availableSeatQty
     *
     * The total quantity of available seats in the cabin.
     *
     * @return integer
     */
    public function getAvailableSeatQty()
    {
        return $this->availableSeatQty;
    }

    /**
     * Sets a new availableSeatQty
     *
     * The total quantity of available seats in the cabin.
     *
     * @param integer $availableSeatQty
     * @return self
     */
    public function setAvailableSeatQty($availableSeatQty)
    {
        $this->availableSeatQty = $availableSeatQty;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique identifier for this cabin class that may be referenced elsewhere in the
     * message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique identifier for this cabin class that may be referenced elsewhere in the
     * message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

