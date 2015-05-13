<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationClassType
 *
 * Rail accommodation class with an associated attribute to capture additional
 * enumerated values as agreed upon between trading partners.
 * XSD Type: AccommodationClass
 */
class AccommodationClassType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.
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
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.
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
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.
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

