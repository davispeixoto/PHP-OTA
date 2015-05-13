<?php

namespace Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType;

/**
 * Class representing DestinationSystemCodeAType
 */
class DestinationSystemCodeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A text field used to define a specific destination system code for a
     * corresponding RateLevelCode.
     *
     * @property string $chainRateLevelCrossRef
     */
    private $chainRateLevelCrossRef = null;

    /**
     * A text field used to define a specific destination system code for a
     * corresponding ChainRateCode.
     *
     * @property string $chainRateCodeCrossRef
     */
    private $chainRateCodeCrossRef = null;

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
     * Gets as chainRateLevelCrossRef
     *
     * A text field used to define a specific destination system code for a
     * corresponding RateLevelCode.
     *
     * @return string
     */
    public function getChainRateLevelCrossRef()
    {
        return $this->chainRateLevelCrossRef;
    }

    /**
     * Sets a new chainRateLevelCrossRef
     *
     * A text field used to define a specific destination system code for a
     * corresponding RateLevelCode.
     *
     * @param string $chainRateLevelCrossRef
     * @return self
     */
    public function setChainRateLevelCrossRef($chainRateLevelCrossRef)
    {
        $this->chainRateLevelCrossRef = $chainRateLevelCrossRef;

        return $this;
    }

    /**
     * Gets as chainRateCodeCrossRef
     *
     * A text field used to define a specific destination system code for a
     * corresponding ChainRateCode.
     *
     * @return string
     */
    public function getChainRateCodeCrossRef()
    {
        return $this->chainRateCodeCrossRef;
    }

    /**
     * Sets a new chainRateCodeCrossRef
     *
     * A text field used to define a specific destination system code for a
     * corresponding ChainRateCode.
     *
     * @param string $chainRateCodeCrossRef
     * @return self
     */
    public function setChainRateCodeCrossRef($chainRateCodeCrossRef)
    {
        $this->chainRateCodeCrossRef = $chainRateCodeCrossRef;

        return $this;
    }


}

