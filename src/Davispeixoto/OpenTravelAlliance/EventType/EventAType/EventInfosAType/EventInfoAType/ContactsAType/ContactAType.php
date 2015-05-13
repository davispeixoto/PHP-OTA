<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{

    /**
     * When true, the contact is a very important person.
     *
     * @property boolean $vIPIndicator
     */
    private $vIPIndicator = null;

    /**
     * The arrival date of this contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * The departure date of this contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $departureDate
     */
    private $departureDate = null;

    /**
     * A collection of amenities.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenities
     */
    private $amenities = null;

    /**
     * A collection of comments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as vIPIndicator
     *
     * When true, the contact is a very important person.
     *
     * @return boolean
     */
    public function getVIPIndicator()
    {
        return $this->vIPIndicator;
    }

    /**
     * Sets a new vIPIndicator
     *
     * When true, the contact is a very important person.
     *
     * @param boolean $vIPIndicator
     * @return self
     */
    public function setVIPIndicator($vIPIndicator)
    {
        $this->vIPIndicator = $vIPIndicator;

        return $this;
    }

    /**
     * Gets as arrivalDate
     *
     * The arrival date of this contact.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * The arrival date of this contact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $arrivalDate
     * @return self
     */
    public function setArrivalDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of this contact.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of this contact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $departureDate
     * @return self
     */
    public function setDepartureDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * A collection of amenities.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $amenity
     */
    public function addToAmenities(\Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $amenity)
    {
        $this->amenities[] = $amenity;

        return $this;
    }

    /**
     * isset amenities
     *
     * A collection of amenities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * A collection of amenities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * A collection of amenities.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * A collection of amenities.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

