<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * A contact associated with the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType\ContactAType[]
     * $contact
     */
    private $contact = null;

    /**
     * Adds as contact
     *
     * A contact associated with the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContact(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType\ContactAType $contact
    ) {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * A contact associated with the event.
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
     * A contact associated with the event.
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
     * A contact associated with the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A contact associated with the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType\ContactAType[]
     * $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

