<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing CarrierFeeInfoAType
 */
class CarrierFeeInfoAType
{

    /**
     * Form of payment information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Used to specify if the carrier fee is related to the booking, ticketing, or
     * service and associated information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType[]
     * $carrierFee
     */
    private $carrierFee = null;

    /**
     * A collection of taxes applicable to the carrier fee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * Gets as paymentDetail
     *
     * Form of payment information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType
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
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     * @return self
     */
    public function setPaymentDetail(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail)
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType
     * $carrierFee
     */
    public function addToCarrierFee(
        \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType $carrierFee
    ) {
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
        return isset($this->carrierFee[$index]);
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
        unset($this->carrierFee[$index]);
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType\CarrierFeeAType[]
     * $carrierFee
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType $tax
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\AirTaxType $tax)
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
        return isset($this->taxes[$index]);
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
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes applicable to the carrier fee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTaxType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }


}

