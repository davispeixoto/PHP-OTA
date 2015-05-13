<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing AccountInformationAType
 */
class AccountInformationAType
{

    /**
     * Ticketing account number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Ticketing cost center.
     *
     * @property string $costCenter
     */
    private $costCenter = null;

    /**
     * Ticketing company number.
     *
     * @property string $companyNumber
     */
    private $companyNumber = null;

    /**
     * Ticketing client reference.
     *
     * @property string $clientReference
     */
    private $clientReference = null;

    /**
     * Ticketing Goods and Services Tax (GST) details (typically the Australian
     * market).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType\TaxRegistrationDetailsAType
     * $taxRegistrationDetails
     */
    private $taxRegistrationDetails = null;

    /**
     * Gets as number
     *
     * Ticketing account number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Ticketing account number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as costCenter
     *
     * Ticketing cost center.
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * Sets a new costCenter
     *
     * Ticketing cost center.
     *
     * @param string $costCenter
     * @return self
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;

        return $this;
    }

    /**
     * Gets as companyNumber
     *
     * Ticketing company number.
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->companyNumber;
    }

    /**
     * Sets a new companyNumber
     *
     * Ticketing company number.
     *
     * @param string $companyNumber
     * @return self
     */
    public function setCompanyNumber($companyNumber)
    {
        $this->companyNumber = $companyNumber;

        return $this;
    }

    /**
     * Gets as clientReference
     *
     * Ticketing client reference.
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->clientReference;
    }

    /**
     * Sets a new clientReference
     *
     * Ticketing client reference.
     *
     * @param string $clientReference
     * @return self
     */
    public function setClientReference($clientReference)
    {
        $this->clientReference = $clientReference;

        return $this;
    }

    /**
     * Gets as taxRegistrationDetails
     *
     * Ticketing Goods and Services Tax (GST) details (typically the Australian
     * market).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType\TaxRegistrationDetailsAType
     */
    public function getTaxRegistrationDetails()
    {
        return $this->taxRegistrationDetails;
    }

    /**
     * Sets a new taxRegistrationDetails
     *
     * Ticketing Goods and Services Tax (GST) details (typically the Australian
     * market).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType\TaxRegistrationDetailsAType
     * $taxRegistrationDetails
     * @return self
     */
    public function setTaxRegistrationDetails(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType\TaxRegistrationDetailsAType $taxRegistrationDetails
    ) {
        $this->taxRegistrationDetails = $taxRegistrationDetails;

        return $this;
    }


}

