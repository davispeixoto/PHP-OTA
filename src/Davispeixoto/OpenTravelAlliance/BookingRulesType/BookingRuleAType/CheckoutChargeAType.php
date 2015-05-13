<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType;

/**
 * Class representing CheckoutChargeAType
 */
class CheckoutChargeAType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The percentage of the room rate that applies to an early/late checkout.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * To specify if the charge applies to early or late checkout.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The number of nights used to calculate the fee amount.
     *
     * @property integer $nmbrOfNights
     */
    private $nmbrOfNights = null;

    /**
     * This attribute is used to explicitly define whether the checkout charge applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Type.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * If true the charge for early checkout is the amount that would be charged for
     * the remaining time of the original reservation.
     *
     * @property boolean $balanceOfStayInd
     */
    private $balanceOfStayInd = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as percent
     *
     * The percentage of the room rate that applies to an early/late checkout.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percentage of the room rate that applies to an early/late checkout.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as type
     *
     * To specify if the charge applies to early or late checkout.
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
     * To specify if the charge applies to early or late checkout.
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
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as nmbrOfNights
     *
     * The number of nights used to calculate the fee amount.
     *
     * @return integer
     */
    public function getNmbrOfNights()
    {
        return $this->nmbrOfNights;
    }

    /**
     * Sets a new nmbrOfNights
     *
     * The number of nights used to calculate the fee amount.
     *
     * @param integer $nmbrOfNights
     * @return self
     */
    public function setNmbrOfNights($nmbrOfNights)
    {
        $this->nmbrOfNights = $nmbrOfNights;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the checkout charge applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Type.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether the checkout charge applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Type.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Gets as balanceOfStayInd
     *
     * If true the charge for early checkout is the amount that would be charged for
     * the remaining time of the original reservation.
     *
     * @return boolean
     */
    public function getBalanceOfStayInd()
    {
        return $this->balanceOfStayInd;
    }

    /**
     * Sets a new balanceOfStayInd
     *
     * If true the charge for early checkout is the amount that would be charged for
     * the remaining time of the original reservation.
     *
     * @param boolean $balanceOfStayInd
     * @return self
     */
    public function setBalanceOfStayInd($balanceOfStayInd)
    {
        $this->balanceOfStayInd = $balanceOfStayInd;

        return $this;
    }


}

