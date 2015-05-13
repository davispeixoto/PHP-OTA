<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AgeQualifierType
 *
 * An extensible list of age qualifiers.
 * XSD Type: AgeQualifierType
 */
class AgeQualifierType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * An age qualifier type known between trading partners. Enter a value here if you
     * have selected "Other_" from the pre-defined list.
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
     * An age qualifier type known between trading partners. Enter a value here if you
     * have selected "Other_" from the pre-defined list.
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
     * An age qualifier type known between trading partners. Enter a value here if you
     * have selected "Other_" from the pre-defined list.
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

