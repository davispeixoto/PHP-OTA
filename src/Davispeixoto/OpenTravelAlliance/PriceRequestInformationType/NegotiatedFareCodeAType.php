<?php

namespace Davispeixoto\OpenTravelAlliance\PriceRequestInformationType;

/**
 * Class representing NegotiatedFareCodeAType
 */
class NegotiatedFareCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @property string $secondaryCode
     */
    private $secondaryCode = null;

    /**
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @property string $supplierCode
     */
    private $supplierCode = null;

    /**
     * The ticket designator code for this negotiated fare code.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * When true, the rules for the negotiated fare should not be applied.
     *
     * @property boolean $overrideRuleInd
     */
    private $overrideRuleInd = null;

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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Gets as secondaryCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @return string
     */
    public function getSecondaryCode()
    {
        return $this->secondaryCode;
    }

    /**
     * Sets a new secondaryCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional code.
     *
     * @param string $secondaryCode
     * @return self
     */
    public function setSecondaryCode($secondaryCode)
    {
        $this->secondaryCode = $secondaryCode;

        return $this;
    }

    /**
     * Gets as supplierCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    /**
     * Sets a new supplierCode
     *
     * An additional attribute to allow flexibility for particular organizations who
     * require an additional supplier code.
     *
     * @param string $supplierCode
     * @return self
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * The ticket designator code for this negotiated fare code.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * The ticket designator code for this negotiated fare code.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as overrideRuleInd
     *
     * When true, the rules for the negotiated fare should not be applied.
     *
     * @return boolean
     */
    public function getOverrideRuleInd()
    {
        return $this->overrideRuleInd;
    }

    /**
     * Sets a new overrideRuleInd
     *
     * When true, the rules for the negotiated fare should not be applied.
     *
     * @param boolean $overrideRuleInd
     * @return self
     */
    public function setOverrideRuleInd($overrideRuleInd)
    {
        $this->overrideRuleInd = $overrideRuleInd;

        return $this;
    }


}

