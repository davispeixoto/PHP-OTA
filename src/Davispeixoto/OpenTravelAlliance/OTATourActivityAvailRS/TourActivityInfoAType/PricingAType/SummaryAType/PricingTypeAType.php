<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\PricingAType\SummaryAType;

/**
 * Class representing PricingTypeAType
 */
class PricingTypeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A pricing type known to trading partners if the "Other_" value has been selected
     * from the list.
     *
     * @property string $extension
     */
    private $extension = null;

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
     * A pricing type known to trading partners if the "Other_" value has been selected
     * from the list.
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
     * A pricing type known to trading partners if the "Other_" value has been selected
     * from the list.
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }


}

