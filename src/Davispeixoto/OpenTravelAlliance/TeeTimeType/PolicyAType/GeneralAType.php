<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType;

/**
 * Class representing GeneralAType
 */
class GeneralAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The type of the policy, such as "Tee Time" or "Cart Rental".
     *
     * @property string $type
     */
    private $type = null;

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
     * The type of the policy, such as "Tee Time" or "Cart Rental".
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
     * The type of the policy, such as "Tee Time" or "Cart Rental".
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

