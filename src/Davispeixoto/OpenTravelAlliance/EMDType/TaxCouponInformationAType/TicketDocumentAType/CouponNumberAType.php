<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType;

use Davispeixoto\OpenTravelAlliance\AirTaxType;
use Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType;
use Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType;

/**
 * Class representing CouponNumberAType
 */
class CouponNumberAType
{

    /**
     * The coupon number.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * The tax coupon information for cabin and air equipment.
     *
     * @property TaxCouponInfoAType $taxCouponInfo
     */
    private $taxCouponInfo = null;

    /**
     * The tax/fee charge for this coupon.
     *
     * @property AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @property UnticketedPointInfoAType[] $unticketedPointInfo
     */
    private $unticketedPointInfo = null;

    /**
     * Gets as number
     *
     * The coupon number.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The coupon number.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as taxCouponInfo
     *
     * The tax coupon information for cabin and air equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType
     */
    public function getTaxCouponInfo()
    {
        return $this->taxCouponInfo;
    }

    /**
     * Sets a new taxCouponInfo
     *
     * The tax coupon information for cabin and air equipment.
     *
     * @param TaxCouponInfoAType $taxCouponInfo
     * @return self
     */
    public function setTaxCouponInfo(TaxCouponInfoAType $taxCouponInfo) {
        $this->taxCouponInfo = $taxCouponInfo;

        return $this;
    }

    /**
     * Adds as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return self
     * @param AirTaxType $tax
     */
    public function addToTax(AirTaxType $tax)
    {
        $this->tax[] = $tax;

        return $this;
    }

    /**
     * isset tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTax($index)
    {
        if (isset($index)) {
            return isset($this->tax[$index]);
        }

        return false;
    }

    /**
     * unset tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTax($index)
    {
        if (isset($index)) {
            unset($this->tax[$index]);
        }
    }

    /**
     * Gets as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * The tax/fee charge for this coupon.
     *
     * @param AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Adds as unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @param UnticketedPointInfoAType $unticketedPointInfo
     * @return self
     */
    public function addToUnticketedPointInfo(UnticketedPointInfoAType $unticketedPointInfo) {
        $this->unticketedPointInfo[] = $unticketedPointInfo;

        return $this;
    }

    /**
     * isset unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUnticketedPointInfo($index)
    {
        if (isset($index)) {
            return isset($this->unticketedPointInfo[$index]);
        }

        return false;
    }

    /**
     * unset unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUnticketedPointInfo($index)
    {
        if (isset($index)) {
            unset($this->unticketedPointInfo[$index]);
        }
    }

    /**
     * Gets as unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[]
     */
    public function getUnticketedPointInfo()
    {
        return $this->unticketedPointInfo;
    }

    /**
     * Sets a new unticketedPointInfo
     *
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @param UnticketedPointInfoAType[] $unticketedPointInfo
     * @return self
     */
    public function setUnticketedPointInfo(array $unticketedPointInfo)
    {
        $this->unticketedPointInfo = $unticketedPointInfo;

        return $this;
    }


}

