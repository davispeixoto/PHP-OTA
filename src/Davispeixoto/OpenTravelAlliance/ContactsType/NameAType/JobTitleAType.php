<?php

namespace Davispeixoto\OpenTravelAlliance\ContactsType\NameAType;

/**
 * Class representing JobTitleAType
 */
class JobTitleAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Defines the type of the job title (e.g. regional office postion, corporate,
     * executive).
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
     * Defines the type of the job title (e.g. regional office postion, corporate,
     * executive).
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
     * Defines the type of the job title (e.g. regional office postion, corporate,
     * executive).
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

