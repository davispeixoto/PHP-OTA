<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing EventContactsAType
 */
class EventContactsAType
{

    /**
     * A contact that pertains to this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     * $eventContact
     */
    private $eventContact = null;

    /**
     * Adds as eventContact
     *
     * A contact that pertains to this event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType
     * $eventContact
     */
    public function addToEventContact(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType $eventContact
    ) {
        $this->eventContact[] = $eventContact;

        return $this;
    }

    /**
     * isset eventContact
     *
     * A contact that pertains to this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventContact($index)
    {
        return isset($this->eventContact[$index]);
    }

    /**
     * unset eventContact
     *
     * A contact that pertains to this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventContact($index)
    {
        unset($this->eventContact[$index]);
    }

    /**
     * Gets as eventContact
     *
     * A contact that pertains to this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     */
    public function getEventContact()
    {
        return $this->eventContact;
    }

    /**
     * Sets a new eventContact
     *
     * A contact that pertains to this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     * $eventContact
     * @return self
     */
    public function setEventContact(array $eventContact)
    {
        $this->eventContact = $eventContact;

        return $this;
    }


}

