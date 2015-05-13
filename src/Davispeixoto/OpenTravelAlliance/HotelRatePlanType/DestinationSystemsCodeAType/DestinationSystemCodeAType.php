<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\DestinationSystemsCodeAType;

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
     * A text field used to define a specific destination system value which represents
     * a rule for Length of Stay settings.
     *
     * @property string $lengthOfStayRuleID
     */
    private $lengthOfStayRuleID = null;

    /**
     * A text field used to define a specific destination system value which represents
     * a rule for defined viewership settings.
     *
     * @property string $pOSRuleID
     */
    private $pOSRuleID = null;

    /**
     * A text field used to define a specific destination system value which represents
     * a special ID used for defined viewership settings.
     *
     * @property string $rateAccessID
     */
    private $rateAccessID = null;

    /**
     * A text field used to define a specific destination system value which represents
     * a rule for deposits.
     *
     * @property string $guaranteeDepositRuleID
     */
    private $guaranteeDepositRuleID = null;

    /**
     * A text field used to define a specific destination system value which represents
     * a rule for cancellations.
     *
     * @property string $cancelRuleID
     */
    private $cancelRuleID = null;

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

    /**
     * Gets as lengthOfStayRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for Length of Stay settings.
     *
     * @return string
     */
    public function getLengthOfStayRuleID()
    {
        return $this->lengthOfStayRuleID;
    }

    /**
     * Sets a new lengthOfStayRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for Length of Stay settings.
     *
     * @param string $lengthOfStayRuleID
     * @return self
     */
    public function setLengthOfStayRuleID($lengthOfStayRuleID)
    {
        $this->lengthOfStayRuleID = $lengthOfStayRuleID;

        return $this;
    }

    /**
     * Gets as pOSRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for defined viewership settings.
     *
     * @return string
     */
    public function getPOSRuleID()
    {
        return $this->pOSRuleID;
    }

    /**
     * Sets a new pOSRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for defined viewership settings.
     *
     * @param string $pOSRuleID
     * @return self
     */
    public function setPOSRuleID($pOSRuleID)
    {
        $this->pOSRuleID = $pOSRuleID;

        return $this;
    }

    /**
     * Gets as rateAccessID
     *
     * A text field used to define a specific destination system value which represents
     * a special ID used for defined viewership settings.
     *
     * @return string
     */
    public function getRateAccessID()
    {
        return $this->rateAccessID;
    }

    /**
     * Sets a new rateAccessID
     *
     * A text field used to define a specific destination system value which represents
     * a special ID used for defined viewership settings.
     *
     * @param string $rateAccessID
     * @return self
     */
    public function setRateAccessID($rateAccessID)
    {
        $this->rateAccessID = $rateAccessID;

        return $this;
    }

    /**
     * Gets as guaranteeDepositRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for deposits.
     *
     * @return string
     */
    public function getGuaranteeDepositRuleID()
    {
        return $this->guaranteeDepositRuleID;
    }

    /**
     * Sets a new guaranteeDepositRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for deposits.
     *
     * @param string $guaranteeDepositRuleID
     * @return self
     */
    public function setGuaranteeDepositRuleID($guaranteeDepositRuleID)
    {
        $this->guaranteeDepositRuleID = $guaranteeDepositRuleID;

        return $this;
    }

    /**
     * Gets as cancelRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for cancellations.
     *
     * @return string
     */
    public function getCancelRuleID()
    {
        return $this->cancelRuleID;
    }

    /**
     * Sets a new cancelRuleID
     *
     * A text field used to define a specific destination system value which represents
     * a rule for cancellations.
     *
     * @param string $cancelRuleID
     * @return self
     */
    public function setCancelRuleID($cancelRuleID)
    {
        $this->cancelRuleID = $cancelRuleID;

        return $this;
    }


}

