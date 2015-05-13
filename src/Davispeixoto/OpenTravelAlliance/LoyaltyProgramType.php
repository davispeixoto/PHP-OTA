<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing LoyaltyProgramType
 *
 * Identifies a membership or loyalty program offered by the company by name of the
 * program.
 * XSD Type: LoyaltyProgramType
 */
class LoyaltyProgramType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Identification of the loyalty program by code.
     *
     * @property string $programCode
     */
    private $programCode = null;

    /**
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @property string $singleVendorInd
     */
    private $singleVendorInd = null;

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @property string $loyaltyLevel
     */
    private $loyaltyLevel = null;

    /**
     * A unique reference for a loyalty program within this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * When true, indicates this is the primary loyalty program and when false,
     * indicates this is not the primary loyalty program.
     *
     * @property boolean $primaryLoyaltyIndicator
     */
    private $primaryLoyaltyIndicator = null;

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
     * Gets as programCode
     *
     * Identification of the loyalty program by code.
     *
     * @return string
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * Identification of the loyalty program by code.
     *
     * @param string $programCode
     * @return self
     */
    public function setProgramCode($programCode)
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Gets as singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @return string
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }

    /**
     * Sets a new singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @param string $singleVendorInd
     * @return self
     */
    public function setSingleVendorInd($singleVendorInd)
    {
        $this->singleVendorInd = $singleVendorInd;

        return $this;
    }

    /**
     * Gets as loyaltyLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @return string
     */
    public function getLoyaltyLevel()
    {
        return $this->loyaltyLevel;
    }

    /**
     * Sets a new loyaltyLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @param string $loyaltyLevel
     * @return self
     */
    public function setLoyaltyLevel($loyaltyLevel)
    {
        $this->loyaltyLevel = $loyaltyLevel;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique reference for a loyalty program within this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for a loyalty program within this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary loyalty program and when false,
     * indicates this is not the primary loyalty program.
     *
     * @return boolean
     */
    public function getPrimaryLoyaltyIndicator()
    {
        return $this->primaryLoyaltyIndicator;
    }

    /**
     * Sets a new primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary loyalty program and when false,
     * indicates this is not the primary loyalty program.
     *
     * @param boolean $primaryLoyaltyIndicator
     * @return self
     */
    public function setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator)
    {
        $this->primaryLoyaltyIndicator = $primaryLoyaltyIndicator;

        return $this;
    }


}

