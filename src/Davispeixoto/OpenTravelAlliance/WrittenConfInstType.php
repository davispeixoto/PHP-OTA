<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing WrittenConfInstType
 *
 * Method by which confirmations should be delivered.
 * XSD Type: WrittenConfInstType
 */
class WrittenConfInstType
{

    /**
     * The language in which the confirmation should be provided.
     *
     * @property string $languageID
     */
    private $languageID = null;

    /**
     * The name to which the confirmation should be addressed.
     *
     * @property string $addresseeName
     */
    private $addresseeName = null;

    /**
     * The mailing address to which the confirmation should be delivered.
     *
     * @property string $address
     */
    private $address = null;

    /**
     * The telephone number associated with the delivery address.
     *
     * @property string $telephone
     */
    private $telephone = null;

    /**
     * When true a written confirmation was requested and will be sent.
     *
     * @property boolean $confirmInd
     */
    private $confirmInd = null;

    /**
     * Additional data that will be sent with the confirmation. This could be used to
     * include a map, pictures, or any other information that the reservation source
     * wishes to include with the confirmation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $supplementalData
     */
    private $supplementalData = null;

    /**
     * An email address to which the confirmation should be sent.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    private $email = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as languageID
     *
     * The language in which the confirmation should be provided.
     *
     * @return string
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * The language in which the confirmation should be provided.
     *
     * @param string $languageID
     * @return self
     */
    public function setLanguageID($languageID)
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * Gets as addresseeName
     *
     * The name to which the confirmation should be addressed.
     *
     * @return string
     */
    public function getAddresseeName()
    {
        return $this->addresseeName;
    }

    /**
     * Sets a new addresseeName
     *
     * The name to which the confirmation should be addressed.
     *
     * @param string $addresseeName
     * @return self
     */
    public function setAddresseeName($addresseeName)
    {
        $this->addresseeName = $addresseeName;

        return $this;
    }

    /**
     * Gets as address
     *
     * The mailing address to which the confirmation should be delivered.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The mailing address to which the confirmation should be delivered.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * The telephone number associated with the delivery address.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * The telephone number associated with the delivery address.
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as confirmInd
     *
     * When true a written confirmation was requested and will be sent.
     *
     * @return boolean
     */
    public function getConfirmInd()
    {
        return $this->confirmInd;
    }

    /**
     * Sets a new confirmInd
     *
     * When true a written confirmation was requested and will be sent.
     *
     * @param boolean $confirmInd
     * @return self
     */
    public function setConfirmInd($confirmInd)
    {
        $this->confirmInd = $confirmInd;

        return $this;
    }

    /**
     * Gets as supplementalData
     *
     * Additional data that will be sent with the confirmation. This could be used to
     * include a map, pictures, or any other information that the reservation source
     * wishes to include with the confirmation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }

    /**
     * Sets a new supplementalData
     *
     * Additional data that will be sent with the confirmation. This could be used to
     * include a map, pictures, or any other information that the reservation source
     * wishes to include with the confirmation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $supplementalData
     * @return self
     */
    public function setSupplementalData(\Davispeixoto\OpenTravelAlliance\ParagraphType $supplementalData)
    {
        $this->supplementalData = $supplementalData;

        return $this;
    }

    /**
     * Gets as email
     *
     * An email address to which the confirmation should be sent.
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
     * An email address to which the confirmation should be sent.
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
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

