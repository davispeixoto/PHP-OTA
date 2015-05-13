<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DirectBillType
 *
 * Company name and location for sending invoice for remittances for travel
 * services.
 * XSD Type: DirectBillType
 */
class DirectBillType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Identifier for the organization to be billed directly for travel services.
     *
     * @property string $directBillID
     */
    private $directBillID = null;

    /**
     * The number assigned by the subscriber for billing reconciliation of a corporate
     * account.
     *
     * @property string $billingNumber
     */
    private $billingNumber = null;

    /**
     * Company name to whom remittance should be directed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DirectBillType\CompanyNameAType
     * $companyName
     */
    private $companyName = null;

    /**
     * Address where remittance should be directed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    private $address = null;

    /**
     * Email address to which remittance should be directed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    private $email = null;

    /**
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DirectBillType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as directBillID
     *
     * Identifier for the organization to be billed directly for travel services.
     *
     * @return string
     */
    public function getDirectBillID()
    {
        return $this->directBillID;
    }

    /**
     * Sets a new directBillID
     *
     * Identifier for the organization to be billed directly for travel services.
     *
     * @param string $directBillID
     * @return self
     */
    public function setDirectBillID($directBillID)
    {
        $this->directBillID = $directBillID;

        return $this;
    }

    /**
     * Gets as billingNumber
     *
     * The number assigned by the subscriber for billing reconciliation of a corporate
     * account.
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
     * The number assigned by the subscriber for billing reconciliation of a corporate
     * account.
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
     * Gets as companyName
     *
     * Company name to whom remittance should be directed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DirectBillType\CompanyNameAType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Company name to whom remittance should be directed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DirectBillType\CompanyNameAType
     * $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\DirectBillType\CompanyNameAType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Gets as address
     *
     * Address where remittance should be directed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address where remittance should be directed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as email
     *
     * Email address to which remittance should be directed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address to which remittance should be directed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     * @return self
     */
    public function setEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DirectBillType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number associated with company to whom remittance is being directed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DirectBillType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(\Davispeixoto\OpenTravelAlliance\DirectBillType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


}

