<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRQ\InvBlocksAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     */
    private $contact = null;

    /**
     * Adds as contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
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
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
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
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * This may be used for multiple sets of contact information (e.g., sales manager,
     * group contact, event manager).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

