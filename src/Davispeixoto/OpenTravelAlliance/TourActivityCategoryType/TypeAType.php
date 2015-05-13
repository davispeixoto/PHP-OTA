<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityCategoryType;

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
     * A type (sub-category) code from a predefined list, agreed upon between trading
     * partners.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Enter a type here if you have selected "Other_" from the pre-defined list.
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
     * Gets as code
     *
     * A type (sub-category) code from a predefined list, agreed upon between trading
     * partners.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A type (sub-category) code from a predefined list, agreed upon between trading
     * partners.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as extension
     *
     * Enter a type here if you have selected "Other_" from the pre-defined list.
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
     * Enter a type here if you have selected "Other_" from the pre-defined list.
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

