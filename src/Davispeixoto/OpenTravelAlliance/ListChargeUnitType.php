<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ListChargeUnitType
 *
 * Charge types and units.Use: This is a string list of enumerations with an
 * "Other_" literal to support an open enumeration list. Use the "Other_"
 * enumeration in combination with the Code Extension fields to exchange a value
 * that is not in the list and is known to your trading partners.
 * XSD Type: List_ChargeUnit
 */
class ListChargeUnitType
{

    /**
     * @property string $__value
     */
    private $__value = null;

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


}

