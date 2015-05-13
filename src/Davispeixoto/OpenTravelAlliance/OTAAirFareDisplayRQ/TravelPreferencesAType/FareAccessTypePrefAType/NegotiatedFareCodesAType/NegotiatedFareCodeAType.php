<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType\NegotiatedFareCodesAType;

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
     * Negotiated fare code to use when retrieving fare contracts
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Optional indicator to specify code list used
     *
     * @property string $codeContext
     */
    private $codeContext = null;

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
     * Negotiated fare code to use when retrieving fare contracts
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
     * Negotiated fare code to use when retrieving fare contracts
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
     * Optional indicator to specify code list used
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
     * Optional indicator to specify code list used
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }


}

