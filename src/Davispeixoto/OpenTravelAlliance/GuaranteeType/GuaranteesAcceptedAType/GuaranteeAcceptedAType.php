<?php

namespace Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType;

use Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing GuaranteeAcceptedAType
 */
class GuaranteeAcceptedAType extends PaymentFormType
{

    /**
     * This is to indicate that the information in the model is the default (e.g. if
     * PaymentCard information is completed then this would be considered the default
     * if the boolean is true).
     *
     * @property boolean $default
     */
    private $default = null;

    /**
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @property boolean $noCardHolderInfoReqInd
     */
    private $noCardHolderInfoReqInd = null;

    /**
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @property boolean $nameReqInd
     */
    private $nameReqInd = null;

    /**
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @property boolean $addressReqInd
     */
    private $addressReqInd = null;

    /**
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @property boolean $phoneReqInd
     */
    private $phoneReqInd = null;

    /**
     * If true, the credit card interbank number is required. If false, it is not
     * required.
     *
     * @property boolean $interbankNbrReqInd
     */
    private $interbankNbrReqInd = null;

    /**
     * When true, the booking source may be used to guarantee the booking.
     *
     * @property boolean $bookingSourceAllowedInd
     */
    private $bookingSourceAllowedInd = null;

    /**
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @property boolean $corpDiscountNbrAllowedInd
     */
    private $corpDiscountNbrAllowedInd = null;

    /**
     * Gets as default
     *
     * This is to indicate that the information in the model is the default (e.g. if
     * PaymentCard information is completed then this would be considered the default
     * if the boolean is true).
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * This is to indicate that the information in the model is the default (e.g. if
     * PaymentCard information is completed then this would be considered the default
     * if the boolean is true).
     *
     * @param boolean $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Gets as noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @return boolean
     */
    public function getNoCardHolderInfoReqInd()
    {
        return $this->noCardHolderInfoReqInd;
    }

    /**
     * Sets a new noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @param boolean $noCardHolderInfoReqInd
     * @return self
     */
    public function setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
    {
        $this->noCardHolderInfoReqInd = $noCardHolderInfoReqInd;

        return $this;
    }

    /**
     * Gets as nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @return boolean
     */
    public function getNameReqInd()
    {
        return $this->nameReqInd;
    }

    /**
     * Sets a new nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @param boolean $nameReqInd
     * @return self
     */
    public function setNameReqInd($nameReqInd)
    {
        $this->nameReqInd = $nameReqInd;

        return $this;
    }

    /**
     * Gets as addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @return boolean
     */
    public function getAddressReqInd()
    {
        return $this->addressReqInd;
    }

    /**
     * Sets a new addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @param boolean $addressReqInd
     * @return self
     */
    public function setAddressReqInd($addressReqInd)
    {
        $this->addressReqInd = $addressReqInd;

        return $this;
    }

    /**
     * Gets as phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @return boolean
     */
    public function getPhoneReqInd()
    {
        return $this->phoneReqInd;
    }

    /**
     * Sets a new phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @param boolean $phoneReqInd
     * @return self
     */
    public function setPhoneReqInd($phoneReqInd)
    {
        $this->phoneReqInd = $phoneReqInd;

        return $this;
    }

    /**
     * Gets as interbankNbrReqInd
     *
     * If true, the credit card interbank number is required. If false, it is not
     * required.
     *
     * @return boolean
     */
    public function getInterbankNbrReqInd()
    {
        return $this->interbankNbrReqInd;
    }

    /**
     * Sets a new interbankNbrReqInd
     *
     * If true, the credit card interbank number is required. If false, it is not
     * required.
     *
     * @param boolean $interbankNbrReqInd
     * @return self
     */
    public function setInterbankNbrReqInd($interbankNbrReqInd)
    {
        $this->interbankNbrReqInd = $interbankNbrReqInd;

        return $this;
    }

    /**
     * Gets as bookingSourceAllowedInd
     *
     * When true, the booking source may be used to guarantee the booking.
     *
     * @return boolean
     */
    public function getBookingSourceAllowedInd()
    {
        return $this->bookingSourceAllowedInd;
    }

    /**
     * Sets a new bookingSourceAllowedInd
     *
     * When true, the booking source may be used to guarantee the booking.
     *
     * @param boolean $bookingSourceAllowedInd
     * @return self
     */
    public function setBookingSourceAllowedInd($bookingSourceAllowedInd)
    {
        $this->bookingSourceAllowedInd = $bookingSourceAllowedInd;

        return $this;
    }

    /**
     * Gets as corpDiscountNbrAllowedInd
     *
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @return boolean
     */
    public function getCorpDiscountNbrAllowedInd()
    {
        return $this->corpDiscountNbrAllowedInd;
    }

    /**
     * Sets a new corpDiscountNbrAllowedInd
     *
     * When true, the corporate discount number may be used to guarantee the booking.
     *
     * @param boolean $corpDiscountNbrAllowedInd
     * @return self
     */
    public function setCorpDiscountNbrAllowedInd($corpDiscountNbrAllowedInd)
    {
        $this->corpDiscountNbrAllowedInd = $corpDiscountNbrAllowedInd;

        return $this;
    }


}

