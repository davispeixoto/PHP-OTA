<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivitySupplierType
 *
 * Supplier and/or operator information, including address and contact details.
 * XSD Type: TourActivitySupplierType
 */
class TourActivitySupplierType
{

    /**
     * The general supplier website URL.
     *
     * @property string $webPageURL
     */
    private $webPageURL = null;

    /**
     * If true, this information pertains to the tour/ activity operator.
     *
     * @property boolean $operatorInd
     */
    private $operatorInd = null;

    /**
     * If true, this information pertains to the tour/ activity supplier.
     *
     * @property boolean $supplierInd
     */
    private $supplierInd = null;

    /**
     * Company name information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $name
     */
    private $name = null;

    /**
     * Contact information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType\ContactAType[]
     * $contact
     */
    private $contact = null;

    /**
     * Address information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     */
    private $address = null;

    /**
     * Gets as webPageURL
     *
     * The general supplier website URL.
     *
     * @return string
     */
    public function getWebPageURL()
    {
        return $this->webPageURL;
    }

    /**
     * Sets a new webPageURL
     *
     * The general supplier website URL.
     *
     * @param string $webPageURL
     * @return self
     */
    public function setWebPageURL($webPageURL)
    {
        $this->webPageURL = $webPageURL;

        return $this;
    }

    /**
     * Gets as operatorInd
     *
     * If true, this information pertains to the tour/ activity operator.
     *
     * @return boolean
     */
    public function getOperatorInd()
    {
        return $this->operatorInd;
    }

    /**
     * Sets a new operatorInd
     *
     * If true, this information pertains to the tour/ activity operator.
     *
     * @param boolean $operatorInd
     * @return self
     */
    public function setOperatorInd($operatorInd)
    {
        $this->operatorInd = $operatorInd;

        return $this;
    }

    /**
     * Gets as supplierInd
     *
     * If true, this information pertains to the tour/ activity supplier.
     *
     * @return boolean
     */
    public function getSupplierInd()
    {
        return $this->supplierInd;
    }

    /**
     * Sets a new supplierInd
     *
     * If true, this information pertains to the tour/ activity supplier.
     *
     * @param boolean $supplierInd
     * @return self
     */
    public function setSupplierInd($supplierInd)
    {
        $this->supplierInd = $supplierInd;

        return $this;
    }

    /**
     * Gets as name
     *
     * Company name information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Company name information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType\ContactAType
     * $contact
     */
    public function addToContact(\Davispeixoto\OpenTravelAlliance\TourActivitySupplierType\ContactAType $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * Contact information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType\ContactAType[]
     * $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Adds as address
     *
     * Address information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Address information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Address information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Address information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }


}

