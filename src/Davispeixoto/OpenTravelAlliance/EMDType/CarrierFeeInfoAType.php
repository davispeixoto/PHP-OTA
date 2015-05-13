<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

use Davispeixoto\OpenTravelAlliance\AirTaxType;
use Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType;
use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing CarrierFeeInfoAType
 */
class CarrierFeeInfoAType
{

    /**
     * Form of payment information.
     *
     * @property PaymentDetailType $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @property CarrierFeeAType[] $carrierFee
     */
    private $carrierFee = null;

    /**
     * A collection of taxes applicable to the carrier fee.
     *
     * @property AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * Gets as paymentDetail
     *
     * Form of payment information.
     *
     * @return PaymentDetailType
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Form of payment information.
     *
     * @param PaymentDetailType $paymentDetail
     * @return self
     */
    public function setPaymentDetail(PaymentDetailType $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }

    /**
     * Adds as carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @return self
     * @param CarrierFeeAType $carrierFee
     */
    public function addToCarrierFee(CarrierFeeAType $carrierFee) {
        $this->carrierFee[] = $carrierFee;
        return $this;
    }

    /**
     * isset carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCarrierFee($index)
    {
        if (isset($index)) {
            return isset($this->carrierFee[$index]);
        }

        return false;
    }

    /**
     * unset carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCarrierFee($index)
    {
        if (isset($index)) {
            unset($this->carrierFee[$index]);
        }
    }

    /**
     * Gets as carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType[]
     */
    public function getCarrierFee()
    {
        return $this->carrierFee;
    }

    /**
     * Sets a new carrierFee
     *
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @param CarrierFeeAType[] $carrierFee
     * @return self
     */
    public function setCarrierFee(array $carrierFee)
    {
        $this->carrierFee = $carrierFee;

        return $this;
    }

    /**
     * Adds as tax
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @return self
     * @param AirTaxType $tax
     */
    public function addToTaxes(AirTaxType $tax)
    {
        $this->taxes[] = $tax;

        return $this;
    }

    /**
     * isset taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        if (isset($index)) {
            return isset($this->taxes[$index]);
        }

        return false;
    }

    /**
     * unset taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        if (isset($index)) {
            unset($this->taxes[$index]);
        }
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @return AirTaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @param AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }


}

