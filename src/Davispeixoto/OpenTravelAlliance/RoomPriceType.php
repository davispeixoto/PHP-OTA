<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomPriceType
 *
 * Gives a total price and prices by traveler type for a room occupancy combination
 * e.g. 2 adults and 2 children
 * XSD Type: RoomPriceType
 */
class RoomPriceType
{

    /**
     * Used to associate a room price with a specific room.
     *
     * @property string $roomRPH
     */
    private $roomRPH = null;

    /**
     * A code to identify a room.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A collection of GuestCount by age group.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestCountType[] $guestCounts
     */
    private $guestCounts = null;

    /**
     * Price for a traveler type in the room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType[] $itemPrice
     */
    private $itemPrice = null;

    /**
     * Total price for this room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomPriceType\ProfilePriceAType
     * $profilePrice
     */
    private $profilePrice = null;

    /**
     * Gets as roomRPH
     *
     * Used to associate a room price with a specific room.
     *
     * @return string
     */
    public function getRoomRPH()
    {
        return $this->roomRPH;
    }

    /**
     * Sets a new roomRPH
     *
     * Used to associate a room price with a specific room.
     *
     * @param string $roomRPH
     * @return self
     */
    public function setRoomRPH($roomRPH)
    {
        $this->roomRPH = $roomRPH;

        return $this;
    }

    /**
     * Gets as code
     *
     * A code to identify a room.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code to identify a room.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Adds as guestCounts
     *
     * A collection of GuestCount by age group.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     */
    public function addToGuestCounts(\Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts)
    {
        $this->guestCounts[] = $guestCounts;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * A collection of GuestCount by age group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * A collection of GuestCount by age group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * A collection of GuestCount by age group.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestCountType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of GuestCount by age group.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestCountType[] $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Adds as itemPrice
     *
     * Price for a traveler type in the room.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType $itemPrice
     */
    public function addToItemPrice(\Davispeixoto\OpenTravelAlliance\CostingItemType $itemPrice)
    {
        $this->itemPrice[] = $itemPrice;

        return $this;
    }

    /**
     * isset itemPrice
     *
     * Price for a traveler type in the room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemPrice($index)
    {
        return isset($this->itemPrice[$index]);
    }

    /**
     * unset itemPrice
     *
     * Price for a traveler type in the room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemPrice($index)
    {
        unset($this->itemPrice[$index]);
    }

    /**
     * Gets as itemPrice
     *
     * Price for a traveler type in the room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType[]
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Sets a new itemPrice
     *
     * Price for a traveler type in the room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType[] $itemPrice
     * @return self
     */
    public function setItemPrice(array $itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Gets as profilePrice
     *
     * Total price for this room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomPriceType\ProfilePriceAType
     */
    public function getProfilePrice()
    {
        return $this->profilePrice;
    }

    /**
     * Sets a new profilePrice
     *
     * Total price for this room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomPriceType\ProfilePriceAType
     * $profilePrice
     * @return self
     */
    public function setProfilePrice(\Davispeixoto\OpenTravelAlliance\RoomPriceType\ProfilePriceAType $profilePrice)
    {
        $this->profilePrice = $profilePrice;

        return $this;
    }


}

