<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType;

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
     * @property
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType
     * $taxCouponInfo
     */
    private $taxCouponInfo = null;

    /**
     * The tax/fee charge for this coupon.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Unticketed information, including city airport code and arrival/ departure
     * dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[]
     * $unticketedPointInfo
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType
     * $taxCouponInfo
     * @return self
     */
    public function setTaxCouponInfo(
        \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\TaxCouponInfoAType $taxCouponInfo
    ) {
        $this->taxCouponInfo = $taxCouponInfo;

        return $this;
    }

    /**
     * Adds as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\AirTaxType $tax)
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
        return isset($this->tax[$index]);
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
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * The tax/fee charge for this coupon.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTaxType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
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
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType
     * $unticketedPointInfo
     */
    public function addToUnticketedPointInfo(
        \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType $unticketedPointInfo
    ) {
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
        return isset($this->unticketedPointInfo[$index]);
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
        unset($this->unticketedPointInfo[$index]);
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType\UnticketedPointInfoAType[]
     * $unticketedPointInfo
     * @return self
     */
    public function setUnticketedPointInfo(array $unticketedPointInfo)
    {
        $this->unticketedPointInfo = $unticketedPointInfo;

        return $this;
    }


}

