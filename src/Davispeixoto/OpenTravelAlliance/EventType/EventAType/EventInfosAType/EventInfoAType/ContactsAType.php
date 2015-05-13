<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * A contact that pertains to this occurence of the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     * $contact
     */
    private $contact = null;

    /**
     * Adds as contact
     *
     * A contact that pertains to this occurence of the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContact(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact
    ) {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * A contact that pertains to this occurence of the event.
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
     * A contact that pertains to this occurence of the event.
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
     * A contact that pertains to this occurence of the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A contact that pertains to this occurence of the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     * $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

