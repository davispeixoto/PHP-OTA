<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DestActivityReservationType
 *
 * Details of a destination activity reservation.
 * XSD Type: DestActivityReservationType
 */
class DestActivityReservationType
{

    /**
     * Used to uniquely identify a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DestActivityReservationType\TravelerCountAType[]
     * $travelerCount
     */
    private $travelerCount = null;

    /**
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType[]
     * $travelers
     */
    private $travelers = null;

    /**
     * Contact information for this booking. May be either one of the travelers as
     * specified by the RPH or a new set of contact information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    private $contact = null;

    /**
     * A collection of destination activity items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemType[] $destActivityItems
     */
    private $destActivityItems = null;

    /**
     * Gets as uniqueID
     *
     * Used to uniquely identify a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Used to uniquely identify a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as travelerCount
     *
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DestActivityReservationType\TravelerCountAType
     * $travelerCount
     */
    public function addToTravelerCount(
        \Davispeixoto\OpenTravelAlliance\DestActivityReservationType\TravelerCountAType $travelerCount
    ) {
        $this->travelerCount[] = $travelerCount;

        return $this;
    }

    /**
     * isset travelerCount
     *
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerCount($index)
    {
        return isset($this->travelerCount[$index]);
    }

    /**
     * unset travelerCount
     *
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerCount($index)
    {
        unset($this->travelerCount[$index]);
    }

    /**
     * Gets as travelerCount
     *
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DestActivityReservationType\TravelerCountAType[]
     */
    public function getTravelerCount()
    {
        return $this->travelerCount;
    }

    /**
     * Sets a new travelerCount
     *
     * The counts of types of travelers, such as 1 adult, 2 children if full traveler
     * details are not required.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DestActivityReservationType\TravelerCountAType[]
     * $travelerCount
     * @return self
     */
    public function setTravelerCount(array $travelerCount)
    {
        $this->travelerCount = $travelerCount;

        return $this;
    }

    /**
     * Adds as traveler
     *
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType $traveler
     */
    public function addToTravelers(\Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType $traveler)
    {
        $this->travelers[] = $traveler;

        return $this;
    }

    /**
     * isset travelers
     *
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelers($index)
    {
        return isset($this->travelers[$index]);
    }

    /**
     * unset travelers
     *
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelers($index)
    {
        unset($this->travelers[$index]);
    }

    /**
     * Gets as travelers
     *
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType[]
     */
    public function getTravelers()
    {
        return $this->travelers;
    }

    /**
     * Sets a new travelers
     *
     * A collection of Traveler objects, identifying the travelers associated with this
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelersType\TravelerAType[] $travelers
     * @return self
     */
    public function setTravelers(array $travelers)
    {
        $this->travelers = $travelers;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Contact information for this booking. May be either one of the travelers as
     * specified by the RPH or a new set of contact information.
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
     * Contact information for this booking. May be either one of the travelers as
     * specified by the RPH or a new set of contact information.
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
     * Adds as item
     *
     * A collection of destination activity items.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItemType $item
     */
    public function addToDestActivityItems(\Davispeixoto\OpenTravelAlliance\ItemType $item)
    {
        $this->destActivityItems[] = $item;

        return $this;
    }

    /**
     * isset destActivityItems
     *
     * A collection of destination activity items.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestActivityItems($index)
    {
        return isset($this->destActivityItems[$index]);
    }

    /**
     * unset destActivityItems
     *
     * A collection of destination activity items.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestActivityItems($index)
    {
        unset($this->destActivityItems[$index]);
    }

    /**
     * Gets as destActivityItems
     *
     * A collection of destination activity items.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemType[]
     */
    public function getDestActivityItems()
    {
        return $this->destActivityItems;
    }

    /**
     * Sets a new destActivityItems
     *
     * A collection of destination activity items.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemType[] $destActivityItems
     * @return self
     */
    public function setDestActivityItems(array $destActivityItems)
    {
        $this->destActivityItems = $destActivityItems;

        return $this;
    }


}

