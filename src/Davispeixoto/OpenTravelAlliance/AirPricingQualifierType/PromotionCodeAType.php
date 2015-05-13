<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricingQualifierType;

/**
 * Class representing PromotionCodeAType
 */
class PromotionCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The IATA assigned airline code.
     *
     * @property string $airlineVendorID
     */
    private $airlineVendorID = null;

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
     * Gets as airlineVendorID
     *
     * The IATA assigned airline code.
     *
     * @return string
     */
    public function getAirlineVendorID()
    {
        return $this->airlineVendorID;
    }

    /**
     * Sets a new airlineVendorID
     *
     * The IATA assigned airline code.
     *
     * @param string $airlineVendorID
     * @return self
     */
    public function setAirlineVendorID($airlineVendorID)
    {
        $this->airlineVendorID = $airlineVendorID;

        return $this;
    }


}

