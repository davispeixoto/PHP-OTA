<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing URLType
 *
 * Web site address, in IETF specified format.
 * XSD Type: URL_Type
 */
class URLType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Defines the purpose of the URL address, such as personal, business, public, etc.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * When true, indicates a default value should be used.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

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
     * Gets as type
     *
     * Defines the purpose of the URL address, such as personal, business, public, etc.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Defines the purpose of the URL address, such as personal, business, public, etc.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return boolean
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param boolean $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;

        return $this;
    }


}

