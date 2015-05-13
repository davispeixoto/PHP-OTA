<?php

namespace Davispeixoto\OpenTravelAlliance\GolferType;

/**
 * Class representing TypeAType
 */
class TypeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A string value that represents an extended, enumerated value agreed upon between
     * trading partners. Use this if you select the "Other_" enumerated value.
     *
     * @property string $extension
     */
    private $extension = null;

    /**
     * An age qualifying code for this golfer. Use a value from the OpenTravel Age
     * Qualifying Code List (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * The quantity of this type of golfer.
     *
     * @property integer $quantity
     */
    private $quantity = null;

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
     * Gets as extension
     *
     * A string value that represents an extended, enumerated value agreed upon between
     * trading partners. Use this if you select the "Other_" enumerated value.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * A string value that represents an extended, enumerated value agreed upon between
     * trading partners. Use this if you select the "Other_" enumerated value.
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Gets as ageQualifyingCode
     *
     * An age qualifying code for this golfer. Use a value from the OpenTravel Age
     * Qualifying Code List (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * An age qualifying code for this golfer. Use a value from the OpenTravel Age
     * Qualifying Code List (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of this type of golfer.
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
     * The quantity of this type of golfer.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


}

