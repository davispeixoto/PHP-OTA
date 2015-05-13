<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType;

/**
 * Class representing PriceInfoAType
 */
class PriceInfoAType
{

    /**
     * Specifies what the amount is for. Refer to OpenTravel Code Table Price Type Code
     * (PRI).
     *
     * @property string $priceTypeCode
     */
    private $priceTypeCode = null;

    /**
     * The price associated with the specified code.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * When true, the display of the price is restricted. When false, the price may be
     * displayed.
     *
     * @property boolean $restrictedIndicator
     */
    private $restrictedIndicator = null;

    /**
     * May be used to give further detail on the PriceTypeCode.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The percentage value used to arrive at the amount associated with this item.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Gets as priceTypeCode
     *
     * Specifies what the amount is for. Refer to OpenTravel Code Table Price Type Code
     * (PRI).
     *
     * @return string
     */
    public function getPriceTypeCode()
    {
        return $this->priceTypeCode;
    }

    /**
     * Sets a new priceTypeCode
     *
     * Specifies what the amount is for. Refer to OpenTravel Code Table Price Type Code
     * (PRI).
     *
     * @param string $priceTypeCode
     * @return self
     */
    public function setPriceTypeCode($priceTypeCode)
    {
        $this->priceTypeCode = $priceTypeCode;

        return $this;
    }

    /**
     * Gets as amount
     *
     * The price associated with the specified code.
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
     * The price associated with the specified code.
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
     * Gets as restrictedIndicator
     *
     * When true, the display of the price is restricted. When false, the price may be
     * displayed.
     *
     * @return boolean
     */
    public function getRestrictedIndicator()
    {
        return $this->restrictedIndicator;
    }

    /**
     * Sets a new restrictedIndicator
     *
     * When true, the display of the price is restricted. When false, the price may be
     * displayed.
     *
     * @param boolean $restrictedIndicator
     * @return self
     */
    public function setRestrictedIndicator($restrictedIndicator)
    {
        $this->restrictedIndicator = $restrictedIndicator;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the PriceTypeCode.
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
     * May be used to give further detail on the PriceTypeCode.
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
     * Gets as percent
     *
     * The percentage value used to arrive at the amount associated with this item.
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
     * The percentage value used to arrive at the amount associated with this item.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }


}

