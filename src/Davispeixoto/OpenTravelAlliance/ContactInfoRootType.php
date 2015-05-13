<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ContactInfoRootType
 *
 * The ContactInfo class is used to define the contacts for consumers and technical
 * people at the hotel facility, including various telephone numbers and e-mail
 * addresses, or any respective attribute or affiliation for the hotel.
 * XSD Type: ContactInfoRootType
 */
class ContactInfoRootType extends ContactInfoType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * This is a profile identifier for the contact, the type may be defined by the
     * ContactProfileType.
     *
     * @property string $contactProfileID
     */
    private $contactProfileID = null;

    /**
     * This defines what type of ContactProfileID is being provided (e.g. IATA, chain
     * specific, etc.)
     *
     * @property string $contactProfileType
     */
    private $contactProfileType = null;

    /**
     * The date and time when the contact information for this hotel was last updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as contactProfileID
     *
     * This is a profile identifier for the contact, the type may be defined by the
     * ContactProfileType.
     *
     * @return string
     */
    public function getContactProfileID()
    {
        return $this->contactProfileID;
    }

    /**
     * Sets a new contactProfileID
     *
     * This is a profile identifier for the contact, the type may be defined by the
     * ContactProfileType.
     *
     * @param string $contactProfileID
     * @return self
     */
    public function setContactProfileID($contactProfileID)
    {
        $this->contactProfileID = $contactProfileID;

        return $this;
    }

    /**
     * Gets as contactProfileType
     *
     * This defines what type of ContactProfileID is being provided (e.g. IATA, chain
     * specific, etc.)
     *
     * @return string
     */
    public function getContactProfileType()
    {
        return $this->contactProfileType;
    }

    /**
     * Sets a new contactProfileType
     *
     * This defines what type of ContactProfileID is being provided (e.g. IATA, chain
     * specific, etc.)
     *
     * @param string $contactProfileType
     * @return self
     */
    public function setContactProfileType($contactProfileType)
    {
        $this->contactProfileType = $contactProfileType;

        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * The date and time when the contact information for this hotel was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the contact information for this hotel was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }


}

