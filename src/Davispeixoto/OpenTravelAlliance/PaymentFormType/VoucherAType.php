<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing VoucherAType
 */
class VoucherAType
{

    /**
     * Identification of a series of coupons or vouchers identified by serial
     * number(s).
     *
     * @property string $seriesCode
     */
    private $seriesCode = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * Reference of the billing account which handles the payment transaction.
     *
     * @property string $billingNumber
     */
    private $billingNumber = null;

    /**
     * Unique identifier of the electronic voucher, created by the supplier.
     *
     * @property string $supplierIdentifier
     */
    private $supplierIdentifier = null;

    /**
     * Unique identifier of the electronic voucher.
     *
     * @property string $identifier
     */
    private $identifier = null;

    /**
     * Defines the type of voucher (e.g., full credit or partial credit).
     *
     * @property string $valueType
     */
    private $valueType = null;

    /**
     * When true, indicates the voucher is electronic. An E-voucher is a value document
     * issued by the Travel Agent for the customer. The e-voucher can be used as a
     * proof of reservation, but more normally, as a full-payment or partial payment.
     *
     * @property boolean $electronicIndicator
     */
    private $electronicIndicator = null;

    /**
     * When true, specifies the Group Days Apply Value can be used for this Voucher
     * Billing Account. This indicator is used to allow the usage of a car rental days
     * voucher when part of an inclusive tour.
     *
     * @property boolean $groupDaysApplyInd
     */
    private $groupDaysApplyInd = null;

    /**
     * The name of the Billing Account for which the voucher has been issued.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentFormType\VoucherAType\BillingAccountNameAType
     * $billingAccountName
     */
    private $billingAccountName = null;

    /**
     * The address of the Billing Account for which the voucher has been issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $billingAccountAddress
     */
    private $billingAccountAddress = null;

    /**
     * Gets as seriesCode
     *
     * Identification of a series of coupons or vouchers identified by serial
     * number(s).
     *
     * @return string
     */
    public function getSeriesCode()
    {
        return $this->seriesCode;
    }

    /**
     * Sets a new seriesCode
     *
     * Identification of a series of coupons or vouchers identified by serial
     * number(s).
     *
     * @param string $seriesCode
     * @return self
     */
    public function setSeriesCode($seriesCode)
    {
        $this->seriesCode = $seriesCode;

        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;

        return $this;
    }

    /**
     * Gets as billingNumber
     *
     * Reference of the billing account which handles the payment transaction.
     *
     * @return string
     */
    public function getBillingNumber()
    {
        return $this->billingNumber;
    }

    /**
     * Sets a new billingNumber
     *
     * Reference of the billing account which handles the payment transaction.
     *
     * @param string $billingNumber
     * @return self
     */
    public function setBillingNumber($billingNumber)
    {
        $this->billingNumber = $billingNumber;

        return $this;
    }

    /**
     * Gets as supplierIdentifier
     *
     * Unique identifier of the electronic voucher, created by the supplier.
     *
     * @return string
     */
    public function getSupplierIdentifier()
    {
        return $this->supplierIdentifier;
    }

    /**
     * Sets a new supplierIdentifier
     *
     * Unique identifier of the electronic voucher, created by the supplier.
     *
     * @param string $supplierIdentifier
     * @return self
     */
    public function setSupplierIdentifier($supplierIdentifier)
    {
        $this->supplierIdentifier = $supplierIdentifier;

        return $this;
    }

    /**
     * Gets as identifier
     *
     * Unique identifier of the electronic voucher.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier of the electronic voucher.
     *
     * @param string $identifier
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Gets as valueType
     *
     * Defines the type of voucher (e.g., full credit or partial credit).
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Sets a new valueType
     *
     * Defines the type of voucher (e.g., full credit or partial credit).
     *
     * @param string $valueType
     * @return self
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * Gets as electronicIndicator
     *
     * When true, indicates the voucher is electronic. An E-voucher is a value document
     * issued by the Travel Agent for the customer. The e-voucher can be used as a
     * proof of reservation, but more normally, as a full-payment or partial payment.
     *
     * @return boolean
     */
    public function getElectronicIndicator()
    {
        return $this->electronicIndicator;
    }

    /**
     * Sets a new electronicIndicator
     *
     * When true, indicates the voucher is electronic. An E-voucher is a value document
     * issued by the Travel Agent for the customer. The e-voucher can be used as a
     * proof of reservation, but more normally, as a full-payment or partial payment.
     *
     * @param boolean $electronicIndicator
     * @return self
     */
    public function setElectronicIndicator($electronicIndicator)
    {
        $this->electronicIndicator = $electronicIndicator;

        return $this;
    }

    /**
     * Gets as groupDaysApplyInd
     *
     * When true, specifies the Group Days Apply Value can be used for this Voucher
     * Billing Account. This indicator is used to allow the usage of a car rental days
     * voucher when part of an inclusive tour.
     *
     * @return boolean
     */
    public function getGroupDaysApplyInd()
    {
        return $this->groupDaysApplyInd;
    }

    /**
     * Sets a new groupDaysApplyInd
     *
     * When true, specifies the Group Days Apply Value can be used for this Voucher
     * Billing Account. This indicator is used to allow the usage of a car rental days
     * voucher when part of an inclusive tour.
     *
     * @param boolean $groupDaysApplyInd
     * @return self
     */
    public function setGroupDaysApplyInd($groupDaysApplyInd)
    {
        $this->groupDaysApplyInd = $groupDaysApplyInd;

        return $this;
    }

    /**
     * Gets as billingAccountName
     *
     * The name of the Billing Account for which the voucher has been issued.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PaymentFormType\VoucherAType\BillingAccountNameAType
     */
    public function getBillingAccountName()
    {
        return $this->billingAccountName;
    }

    /**
     * Sets a new billingAccountName
     *
     * The name of the Billing Account for which the voucher has been issued.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PaymentFormType\VoucherAType\BillingAccountNameAType
     * $billingAccountName
     * @return self
     */
    public function setBillingAccountName(
        \Davispeixoto\OpenTravelAlliance\PaymentFormType\VoucherAType\BillingAccountNameAType $billingAccountName
    ) {
        $this->billingAccountName = $billingAccountName;

        return $this;
    }

    /**
     * Gets as billingAccountAddress
     *
     * The address of the Billing Account for which the voucher has been issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getBillingAccountAddress()
    {
        return $this->billingAccountAddress;
    }

    /**
     * Sets a new billingAccountAddress
     *
     * The address of the Billing Account for which the voucher has been issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $billingAccountAddress
     * @return self
     */
    public function setBillingAccountAddress(\Davispeixoto\OpenTravelAlliance\AddressType $billingAccountAddress)
    {
        $this->billingAccountAddress = $billingAccountAddress;

        return $this;
    }


}

