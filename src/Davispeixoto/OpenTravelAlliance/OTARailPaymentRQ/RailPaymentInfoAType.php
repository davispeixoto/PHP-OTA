<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPaymentRQ;

/**
 * Class representing RailPaymentInfoAType
 */
class RailPaymentInfoAType
{

    /**
     * The unique ID associated with a single reservation, e.g. a confirmation number
     * and PNR record locator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Gets as uniqueID
     *
     * The unique ID associated with a single reservation, e.g. a confirmation number
     * and PNR record locator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique ID associated with a single reservation, e.g. a confirmation number
     * and PNR record locator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as paymentInfo
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentInfo
     */
    public function addToPaymentInfo(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentInfo)
    {
        $this->paymentInfo[] = $paymentInfo;

        return $this;
    }

    /**
     * isset paymentInfo
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentInfo($index)
    {
        return isset($this->paymentInfo[$index]);
    }

    /**
     * unset paymentInfo
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentInfo($index)
    {
        unset($this->paymentInfo[$index]);
    }

    /**
     * Gets as paymentInfo
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }


}

