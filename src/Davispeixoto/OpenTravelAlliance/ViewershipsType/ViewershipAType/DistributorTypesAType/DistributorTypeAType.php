<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType;

/**
 * Class representing DistributorTypeAType
 */
class DistributorTypeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Code used to uniquely identify the distributor.
     *
     * @property string $distributorCode
     */
    private $distributorCode = null;

    /**
     * Type code is used to qualify the Distibutor into general classes of
     * distributors.
     *
     * @property string $distributorTypeCode
     */
    private $distributorTypeCode = null;

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
     * Gets as distributorCode
     *
     * Code used to uniquely identify the distributor.
     *
     * @return string
     */
    public function getDistributorCode()
    {
        return $this->distributorCode;
    }

    /**
     * Sets a new distributorCode
     *
     * Code used to uniquely identify the distributor.
     *
     * @param string $distributorCode
     * @return self
     */
    public function setDistributorCode($distributorCode)
    {
        $this->distributorCode = $distributorCode;

        return $this;
    }

    /**
     * Gets as distributorTypeCode
     *
     * Type code is used to qualify the Distibutor into general classes of
     * distributors.
     *
     * @return string
     */
    public function getDistributorTypeCode()
    {
        return $this->distributorTypeCode;
    }

    /**
     * Sets a new distributorTypeCode
     *
     * Type code is used to qualify the Distibutor into general classes of
     * distributors.
     *
     * @param string $distributorTypeCode
     * @return self
     */
    public function setDistributorTypeCode($distributorTypeCode)
    {
        $this->distributorTypeCode = $distributorTypeCode;

        return $this;
    }


}

