<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType;

/**
 * Class representing BookingChannelCodeAType
 */
class BookingChannelCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * When true, used to indicate the rate should not be displayed. When false,
     * indicates the rate may be displayed.
     *
     * @property boolean $restrictedDisplayIndicator
     */
    private $restrictedDisplayIndicator = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

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
     * Gets as restrictedDisplayIndicator
     *
     * When true, used to indicate the rate should not be displayed. When false,
     * indicates the rate may be displayed.
     *
     * @return boolean
     */
    public function getRestrictedDisplayIndicator()
    {
        return $this->restrictedDisplayIndicator;
    }

    /**
     * Sets a new restrictedDisplayIndicator
     *
     * When true, used to indicate the rate should not be displayed. When false,
     * indicates the rate may be displayed.
     *
     * @param boolean $restrictedDisplayIndicator
     * @return self
     */
    public function setRestrictedDisplayIndicator($restrictedDisplayIndicator)
    {
        $this->restrictedDisplayIndicator = $restrictedDisplayIndicator;

        return $this;
    }

    /**
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param integer $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }


}

