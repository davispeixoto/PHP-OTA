<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PriceRuleType
 *
 * A definition of a pricing rule.
 * XSD Type: PriceRuleType
 */
class PriceRuleType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Where applicable, a qualifying value for the price rule, e.g. 2 for minimum
     * occupancy or Adult.
     *
     * @property string $value
     */
    private $value = null;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
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
     * Gets as value
     *
     * Where applicable, a qualifying value for the price rule, e.g. 2 for minimum
     * occupancy or Adult.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Where applicable, a qualifying value for the price rule, e.g. 2 for minimum
     * occupancy or Adult.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }


}

