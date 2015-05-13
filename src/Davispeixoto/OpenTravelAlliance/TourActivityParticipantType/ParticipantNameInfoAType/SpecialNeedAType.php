<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType;

/**
 * Class representing SpecialNeedAType
 */
class SpecialNeedAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A code known between trading partners for a special needs item.
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
     * A code known between trading partners for a special needs item.
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
     * A code known between trading partners for a special needs item.
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

