<?php

namespace Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType;

/**
 * Class representing PasswordHintAType
 */
class PasswordHintAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $hint
     */
    private $hint = null;

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
     * Gets as hint
     *
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Sets a new hint
     *
     * @param string $hint
     * @return self
     */
    public function setHint($hint)
    {
        $this->hint = $hint;

        return $this;
    }


}

