<?php

namespace Davispeixoto\OpenTravelAlliance\GroundRateQualifierType;

/**
 * Class representing SpecialInputsAType
 */
class SpecialInputsAType
{

    /**
     * The name of the special input.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The value of the special input.
     *
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * The name of the special input.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the special input.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as value
     *
     * The value of the special input.
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
     * The value of the special input.
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

