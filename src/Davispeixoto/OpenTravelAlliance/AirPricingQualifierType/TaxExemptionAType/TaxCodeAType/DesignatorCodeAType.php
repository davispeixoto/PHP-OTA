<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType;

/**
 * Class representing DesignatorCodeAType
 */
class DesignatorCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A string value that represents an extended enumerated value for the
     * @DesignatorCode. To use this feature, select the "Other_" item from the
     * DesignatorCode list.NOTE: Any extended enumeration values should be agreed upon
     * between trading partners prior to use.
     *
     * @property string $extDesignatorCode
     */
    private $extDesignatorCode = null;

    /**
     * Location code used to identify a specific airport.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @property string $terminal
     */
    private $terminal = null;

    /**
     * Arrival or departure gate (e.g., B12)
     *
     * @property string $gate
     */
    private $gate = null;

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
     * Gets as extDesignatorCode
     *
     * A string value that represents an extended enumerated value for the
     * @DesignatorCode. To use this feature, select the "Other_" item from the
     * DesignatorCode list.NOTE: Any extended enumeration values should be agreed upon
     * between trading partners prior to use.
     *
     * @return string
     */
    public function getExtDesignatorCode()
    {
        return $this->extDesignatorCode;
    }

    /**
     * Sets a new extDesignatorCode
     *
     * A string value that represents an extended enumerated value for the
     * @DesignatorCode. To use this feature, select the "Other_" item from the
     * DesignatorCode list.NOTE: Any extended enumeration values should be agreed upon
     * between trading partners prior to use.
     *
     * @param string $extDesignatorCode
     * @return self
     */
    public function setExtDesignatorCode($extDesignatorCode)
    {
        $this->extDesignatorCode = $extDesignatorCode;

        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
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
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
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
     * Gets as terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Sets a new terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @param string $terminal
     * @return self
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Gets as gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Sets a new gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @param string $gate
     * @return self
     */
    public function setGate($gate)
    {
        $this->gate = $gate;

        return $this;
    }


}

