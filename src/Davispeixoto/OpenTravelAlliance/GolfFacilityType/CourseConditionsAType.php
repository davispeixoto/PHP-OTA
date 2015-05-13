<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

/**
 * Class representing CourseConditionsAType
 */
class CourseConditionsAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The source name or URL that provided the course conditions.
     *
     * @property mixed $source
     */
    private $source = null;

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
     * Gets as source
     *
     * The source name or URL that provided the course conditions.
     *
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The source name or URL that provided the course conditions.
     *
     * @param mixed $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }


}

