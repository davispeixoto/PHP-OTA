<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType\QualifiersAType\ChargeUnitAType;

/**
 * Class representing FrequencyAType
 */
class FrequencyAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Exempt quantity.Example: 2Note: This is the frequency exemption quantity before
     * charges are applied.
     *
     * @property integer $exemptQty
     */
    private $exemptQty = null;

    /**
     * Maximum quantity.Example: 7Note: This is the maximum number of times the charge
     * will be applied (e.g. waive charges above 30 nights).
     *
     * @property integer $maximumQty
     */
    private $maximumQty = null;

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
     * Gets as exemptQty
     *
     * Exempt quantity.Example: 2Note: This is the frequency exemption quantity before
     * charges are applied.
     *
     * @return integer
     */
    public function getExemptQty()
    {
        return $this->exemptQty;
    }

    /**
     * Sets a new exemptQty
     *
     * Exempt quantity.Example: 2Note: This is the frequency exemption quantity before
     * charges are applied.
     *
     * @param integer $exemptQty
     * @return self
     */
    public function setExemptQty($exemptQty)
    {
        $this->exemptQty = $exemptQty;

        return $this;
    }

    /**
     * Gets as maximumQty
     *
     * Maximum quantity.Example: 7Note: This is the maximum number of times the charge
     * will be applied (e.g. waive charges above 30 nights).
     *
     * @return integer
     */
    public function getMaximumQty()
    {
        return $this->maximumQty;
    }

    /**
     * Sets a new maximumQty
     *
     * Maximum quantity.Example: 7Note: This is the maximum number of times the charge
     * will be applied (e.g. waive charges above 30 nights).
     *
     * @param integer $maximumQty
     * @return self
     */
    public function setMaximumQty($maximumQty)
    {
        $this->maximumQty = $maximumQty;

        return $this;
    }


}

