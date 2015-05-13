<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * Contact information as well as site address information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     * $contact
     */
    private $contact = null;

    /**
     * Adds as contact
     *
     * Contact information as well as site address information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContact(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType $contact
    ) {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * Contact information as well as site address information.
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
     * Contact information as well as site address information.
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
     * Contact information as well as site address information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information as well as site address information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     * $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

