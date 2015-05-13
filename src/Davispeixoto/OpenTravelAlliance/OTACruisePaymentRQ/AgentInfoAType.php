<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ;

/**
 * Class representing AgentInfoAType
 */
class AgentInfoAType
{

    /**
     * Either the agent name or agency name that created the booking.
     *
     * @property string $contact
     */
    private $contact = null;

    /**
     * Agent or agency's identifier.
     *
     * @property string $contactID
     */
    private $contactID = null;

    /**
     * Gets as contact
     *
     * Either the agent name or agency name that created the booking.
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Either the agent name or agency name that created the booking.
     *
     * @param string $contact
     * @return self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Gets as contactID
     *
     * Agent or agency's identifier.
     *
     * @return string
     */
    public function getContactID()
    {
        return $this->contactID;
    }

    /**
     * Sets a new contactID
     *
     * Agent or agency's identifier.
     *
     * @param string $contactID
     * @return self
     */
    public function setContactID($contactID)
    {
        $this->contactID = $contactID;

        return $this;
    }


}

