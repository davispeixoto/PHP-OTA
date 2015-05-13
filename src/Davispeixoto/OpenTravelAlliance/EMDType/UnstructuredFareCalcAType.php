<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing UnstructuredFareCalcAType
 */
class UnstructuredFareCalcAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @property string $fareCalcMode
     */
    private $fareCalcMode = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Used to specify net or sell amount.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A secondary identifier reflecting the method of pricing for this transaction
     * used in the reporting process.
     *
     * @property string $reportingCode
     */
    private $reportingCode = null;

    /**
     * The fare calculation area.
     *
     * @property string $info
     */
    private $info = null;

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
     * Gets as fareCalcMode
     *
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @return string
     */
    public function getFareCalcMode()
    {
        return $this->fareCalcMode;
    }

    /**
     * Sets a new fareCalcMode
     *
     * Used to identify the method of pricing for this transaction (e.g., manual,
     * automated pricing). Should be 1 character in length.
     *
     * @param string $fareCalcMode
     * @return self
     */
    public function setFareCalcMode($fareCalcMode)
    {
        $this->fareCalcMode = $fareCalcMode;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Gets as type
     *
     * Used to specify net or sell amount.
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
     * Used to specify net or sell amount.
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
     * Gets as reportingCode
     *
     * A secondary identifier reflecting the method of pricing for this transaction
     * used in the reporting process.
     *
     * @return string
     */
    public function getReportingCode()
    {
        return $this->reportingCode;
    }

    /**
     * Sets a new reportingCode
     *
     * A secondary identifier reflecting the method of pricing for this transaction
     * used in the reporting process.
     *
     * @param string $reportingCode
     * @return self
     */
    public function setReportingCode($reportingCode)
    {
        $this->reportingCode = $reportingCode;

        return $this;
    }

    /**
     * Gets as info
     *
     * The fare calculation area.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * The fare calculation area.
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }


}

