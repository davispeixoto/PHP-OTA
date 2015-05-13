<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType;

/**
 * Class representing CourseNameAType
 */
class CourseNameAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * An ID for a golf course.
     *
     * @property mixed $iD
     */
    private $iD = null;

    /**
     * A code for a golf course.
     *
     * @property mixed $code
     */
    private $code = null;

    /**
     * The short name of the golf course.
     *
     * @property mixed $shortName
     */
    private $shortName = null;

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
     * Gets as iD
     *
     * An ID for a golf course.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An ID for a golf course.
     *
     * @param mixed $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as code
     *
     * A code for a golf course.
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code for a golf course.
     *
     * @param mixed $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as shortName
     *
     * The short name of the golf course.
     *
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * The short name of the golf course.
     *
     * @param mixed $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }


}

