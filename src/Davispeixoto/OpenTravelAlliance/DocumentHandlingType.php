<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DocumentHandlingType
 *
 * Specifies the document handling information.
 * XSD Type: DocumentHandlingType
 */
class DocumentHandlingType
{

    /**
     * Defines the content of the document being referred to. Refer to OpenTravel Code
     * List Cruise Document Type (CRD).
     *
     * @property string $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * Indicates the type of delivery method for the document defined in the
     * DocumentTypeCode. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $deliveryMethodCode
     */
    private $deliveryMethodCode = null;

    /**
     * Specifies the mailing location (e.g , agent address or alternate address).
     *
     * @property string $documentDestination
     */
    private $documentDestination = null;

    /**
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @property boolean $selectedOptionIndicator
     */
    private $selectedOptionIndicator = null;

    /**
     * When true, the DocumentDestination is the default. When false, the
     * DocumentDestination is not the default.
     *
     * @property boolean $defaultIndicator
     */
    private $defaultIndicator = null;

    /**
     * When true, this indicates the DocumentDestination address is required. When
     * false, a DcoumentDestination address is not required.
     *
     * @property boolean $addressRequiredIndicator
     */
    private $addressRequiredIndicator = null;

    /**
     * Provides a reference pointer that links the document destination to the
     * appropriate address in ContactInfo.
     *
     * @property string $addressRPH
     */
    private $addressRPH = null;

    /**
     * Provides a reference pointer that links the document destination to the
     * appropriate email address in ContactInfo.
     *
     * @property string $emailRPH
     */
    private $emailRPH = null;

    /**
     * Provides a reference pointer that links the document destination to the
     * appropriate telephone number in ContactInfo that designates the fax number.
     *
     * @property string $telephoneRPH
     */
    private $telephoneRPH = null;

    /**
     * The language of the travel document.
     *
     * @property string $documentLanguage
     */
    private $documentLanguage = null;

    /**
     * Indicates vendors available for document delivery.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DocumentHandlingType\VendorOptionAType[]
     * $vendorOption
     */
    private $vendorOption = null;

    /**
     * Gets as documentTypeCode
     *
     * Defines the content of the document being referred to. Refer to OpenTravel Code
     * List Cruise Document Type (CRD).
     *
     * @return string
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * Defines the content of the document being referred to. Refer to OpenTravel Code
     * List Cruise Document Type (CRD).
     *
     * @param string $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode($documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;

        return $this;
    }

    /**
     * Gets as deliveryMethodCode
     *
     * Indicates the type of delivery method for the document defined in the
     * DocumentTypeCode. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getDeliveryMethodCode()
    {
        return $this->deliveryMethodCode;
    }

    /**
     * Sets a new deliveryMethodCode
     *
     * Indicates the type of delivery method for the document defined in the
     * DocumentTypeCode. Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $deliveryMethodCode
     * @return self
     */
    public function setDeliveryMethodCode($deliveryMethodCode)
    {
        $this->deliveryMethodCode = $deliveryMethodCode;

        return $this;
    }

    /**
     * Gets as documentDestination
     *
     * Specifies the mailing location (e.g , agent address or alternate address).
     *
     * @return string
     */
    public function getDocumentDestination()
    {
        return $this->documentDestination;
    }

    /**
     * Sets a new documentDestination
     *
     * Specifies the mailing location (e.g , agent address or alternate address).
     *
     * @param string $documentDestination
     * @return self
     */
    public function setDocumentDestination($documentDestination)
    {
        $this->documentDestination = $documentDestination;

        return $this;
    }

    /**
     * Gets as selectedOptionIndicator
     *
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @return boolean
     */
    public function getSelectedOptionIndicator()
    {
        return $this->selectedOptionIndicator;
    }

    /**
     * Sets a new selectedOptionIndicator
     *
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @param boolean $selectedOptionIndicator
     * @return self
     */
    public function setSelectedOptionIndicator($selectedOptionIndicator)
    {
        $this->selectedOptionIndicator = $selectedOptionIndicator;

        return $this;
    }

    /**
     * Gets as defaultIndicator
     *
     * When true, the DocumentDestination is the default. When false, the
     * DocumentDestination is not the default.
     *
     * @return boolean
     */
    public function getDefaultIndicator()
    {
        return $this->defaultIndicator;
    }

    /**
     * Sets a new defaultIndicator
     *
     * When true, the DocumentDestination is the default. When false, the
     * DocumentDestination is not the default.
     *
     * @param boolean $defaultIndicator
     * @return self
     */
    public function setDefaultIndicator($defaultIndicator)
    {
        $this->defaultIndicator = $defaultIndicator;

        return $this;
    }

    /**
     * Gets as addressRequiredIndicator
     *
     * When true, this indicates the DocumentDestination address is required. When
     * false, a DcoumentDestination address is not required.
     *
     * @return boolean
     */
    public function getAddressRequiredIndicator()
    {
        return $this->addressRequiredIndicator;
    }

    /**
     * Sets a new addressRequiredIndicator
     *
     * When true, this indicates the DocumentDestination address is required. When
     * false, a DcoumentDestination address is not required.
     *
     * @param boolean $addressRequiredIndicator
     * @return self
     */
    public function setAddressRequiredIndicator($addressRequiredIndicator)
    {
        $this->addressRequiredIndicator = $addressRequiredIndicator;

        return $this;
    }

    /**
     * Gets as addressRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate address in ContactInfo.
     *
     * @return string
     */
    public function getAddressRPH()
    {
        return $this->addressRPH;
    }

    /**
     * Sets a new addressRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate address in ContactInfo.
     *
     * @param string $addressRPH
     * @return self
     */
    public function setAddressRPH($addressRPH)
    {
        $this->addressRPH = $addressRPH;

        return $this;
    }

    /**
     * Gets as emailRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate email address in ContactInfo.
     *
     * @return string
     */
    public function getEmailRPH()
    {
        return $this->emailRPH;
    }

    /**
     * Sets a new emailRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate email address in ContactInfo.
     *
     * @param string $emailRPH
     * @return self
     */
    public function setEmailRPH($emailRPH)
    {
        $this->emailRPH = $emailRPH;

        return $this;
    }

    /**
     * Gets as telephoneRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate telephone number in ContactInfo that designates the fax number.
     *
     * @return string
     */
    public function getTelephoneRPH()
    {
        return $this->telephoneRPH;
    }

    /**
     * Sets a new telephoneRPH
     *
     * Provides a reference pointer that links the document destination to the
     * appropriate telephone number in ContactInfo that designates the fax number.
     *
     * @param string $telephoneRPH
     * @return self
     */
    public function setTelephoneRPH($telephoneRPH)
    {
        $this->telephoneRPH = $telephoneRPH;

        return $this;
    }

    /**
     * Gets as documentLanguage
     *
     * The language of the travel document.
     *
     * @return string
     */
    public function getDocumentLanguage()
    {
        return $this->documentLanguage;
    }

    /**
     * Sets a new documentLanguage
     *
     * The language of the travel document.
     *
     * @param string $documentLanguage
     * @return self
     */
    public function setDocumentLanguage($documentLanguage)
    {
        $this->documentLanguage = $documentLanguage;

        return $this;
    }

    /**
     * Adds as vendorOption
     *
     * Indicates vendors available for document delivery.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DocumentHandlingType\VendorOptionAType
     * $vendorOption
     */
    public function addToVendorOption(
        \Davispeixoto\OpenTravelAlliance\DocumentHandlingType\VendorOptionAType $vendorOption
    ) {
        $this->vendorOption[] = $vendorOption;

        return $this;
    }

    /**
     * isset vendorOption
     *
     * Indicates vendors available for document delivery.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorOption($index)
    {
        return isset($this->vendorOption[$index]);
    }

    /**
     * unset vendorOption
     *
     * Indicates vendors available for document delivery.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorOption($index)
    {
        unset($this->vendorOption[$index]);
    }

    /**
     * Gets as vendorOption
     *
     * Indicates vendors available for document delivery.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DocumentHandlingType\VendorOptionAType[]
     */
    public function getVendorOption()
    {
        return $this->vendorOption;
    }

    /**
     * Sets a new vendorOption
     *
     * Indicates vendors available for document delivery.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DocumentHandlingType\VendorOptionAType[]
     * $vendorOption
     * @return self
     */
    public function setVendorOption(array $vendorOption)
    {
        $this->vendorOption = $vendorOption;

        return $this;
    }


}

