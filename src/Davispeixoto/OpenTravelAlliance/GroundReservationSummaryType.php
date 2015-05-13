<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundReservationSummaryType
 *
 * Summary information about one or more ground service reservations.
 * XSD Type: GroundReservationSummaryType
 */
class GroundReservationSummaryType
{

    /**
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     */
    private $confirmation = null;

    /**
     * Information about the primary contact associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    private $contact = null;

    /**
     * Private service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ServiceAType
     * $service
     */
    private $service = null;

    /**
     * Shuttle service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     * $shuttle
     */
    private $shuttle = null;

    /**
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comments
     */
    private $comments = null;

    /**
     * Gets as confirmation
     *
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets a new confirmation
     *
     * A confirmation number for the sucessfully booked ground transportation service
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     * @return self
     */
    public function setConfirmation(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Information about the primary contact associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Information about the primary contact associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Gets as service
     *
     * Private service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ServiceAType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Private service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ServiceAType
     * $service
     * @return self
     */
    public function setService(\Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ServiceAType $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as serviceLocation
     *
     * Shuttle service information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType
     * $serviceLocation
     */
    public function addToShuttle(
        \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType $serviceLocation
    ) {
        $this->shuttle[] = $serviceLocation;

        return $this;
    }

    /**
     * isset shuttle
     *
     * Shuttle service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttle($index)
    {
        return isset($this->shuttle[$index]);
    }

    /**
     * unset shuttle
     *
     * Shuttle service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttle($index)
    {
        unset($this->shuttle[$index]);
    }

    /**
     * Gets as shuttle
     *
     * Shuttle service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Shuttle service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationSummaryType\ShuttleAType\ServiceLocationAType[]
     * $shuttle
     * @return self
     */
    public function setShuttle(array $shuttle)
    {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Adds as comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\FreeTextType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Any special comments associated with this ground service reservation, such as
     * "Driver will greet passenger in baggage area with sign."
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

