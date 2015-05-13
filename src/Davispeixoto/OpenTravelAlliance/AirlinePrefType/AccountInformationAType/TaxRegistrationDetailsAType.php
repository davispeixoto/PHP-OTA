<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType;

/**
 * Class representing TaxRegistrationDetailsAType
 */
class TaxRegistrationDetailsAType
{

    /**
     * The tax registration identifier e.g., Australian Business Number (ABN).
     *
     * @property string $taxID
     */
    private $taxID = null;

    /**
     * The recipient's name.
     *
     * @property string $recipientName
     */
    private $recipientName = null;

    /**
     * Free text for the recipient's address.
     *
     * @property string $recipientAddress
     */
    private $recipientAddress = null;

    /**
     * Gets as taxID
     *
     * The tax registration identifier e.g., Australian Business Number (ABN).
     *
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Sets a new taxID
     *
     * The tax registration identifier e.g., Australian Business Number (ABN).
     *
     * @param string $taxID
     * @return self
     */
    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;

        return $this;
    }

    /**
     * Gets as recipientName
     *
     * The recipient's name.
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * Sets a new recipientName
     *
     * The recipient's name.
     *
     * @param string $recipientName
     * @return self
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;

        return $this;
    }

    /**
     * Gets as recipientAddress
     *
     * Free text for the recipient's address.
     *
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * Sets a new recipientAddress
     *
     * Free text for the recipient's address.
     *
     * @param string $recipientAddress
     * @return self
     */
    public function setRecipientAddress($recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }


}

