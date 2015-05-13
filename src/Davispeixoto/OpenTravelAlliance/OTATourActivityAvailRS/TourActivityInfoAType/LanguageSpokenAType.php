<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType;

/**
 * Class representing LanguageSpokenAType
 */
class LanguageSpokenAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The ISO 639 2 character language code.
     *
     * @property string $code
     */
    private $code = null;

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
     * The ISO 639 2 character language code.
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
     * The ISO 639 2 character language code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

