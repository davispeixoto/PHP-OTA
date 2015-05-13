<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AlternateCurrencyType
 *
 * Alternate currency information for loyalty program currencies definition.
 * XSD Type: AlternateCurrencyType
 */
class AlternateCurrencyType
{

    /**
     * Award code.Example: GUESTRWD12Note: This is an award code associated with the
     * redemption amount.
     *
     * @property string $awardCode
     */
    private $awardCode = null;

    /**
     * Discount percentage.Example: 6Note: This is a percentage used for discount
     * calculations.
     *
     * @property float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Redemption quantity.Example: 50000Note: This is the quantity of the specified
     * loyalty currency required or used to redeem this award.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Unit of loyalty program currency.Example: Miles
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListLoyaltyPrgCurrencyType
     * $currencyType
     */
    private $currencyType = null;

    /**
     * Conversion ratio information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AlternateCurrencyType\ConversionAType
     * $conversion
     */
    private $conversion = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as awardCode
     *
     * Award code.Example: GUESTRWD12Note: This is an award code associated with the
     * redemption amount.
     *
     * @return string
     */
    public function getAwardCode()
    {
        return $this->awardCode;
    }

    /**
     * Sets a new awardCode
     *
     * Award code.Example: GUESTRWD12Note: This is an award code associated with the
     * redemption amount.
     *
     * @param string $awardCode
     * @return self
     */
    public function setAwardCode($awardCode)
    {
        $this->awardCode = $awardCode;

        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Discount percentage.Example: 6Note: This is a percentage used for discount
     * calculations.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * Discount percentage.Example: 6Note: This is a percentage used for discount
     * calculations.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Redemption quantity.Example: 50000Note: This is the quantity of the specified
     * loyalty currency required or used to redeem this award.
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
     * Redemption quantity.Example: 50000Note: This is the quantity of the specified
     * loyalty currency required or used to redeem this award.
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
     * Gets as currencyType
     *
     * Unit of loyalty program currency.Example: Miles
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListLoyaltyPrgCurrencyType
     */
    public function getCurrencyType()
    {
        return $this->currencyType;
    }

    /**
     * Sets a new currencyType
     *
     * Unit of loyalty program currency.Example: Miles
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListLoyaltyPrgCurrencyType $currencyType
     * @return self
     */
    public function setCurrencyType(\Davispeixoto\OpenTravelAlliance\ListLoyaltyPrgCurrencyType $currencyType)
    {
        $this->currencyType = $currencyType;

        return $this;
    }

    /**
     * Gets as conversion
     *
     * Conversion ratio information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AlternateCurrencyType\ConversionAType
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * Sets a new conversion
     *
     * Conversion ratio information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AlternateCurrencyType\ConversionAType
     * $conversion
     * @return self
     */
    public function setConversion(\Davispeixoto\OpenTravelAlliance\AlternateCurrencyType\ConversionAType $conversion)
    {
        $this->conversion = $conversion;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

