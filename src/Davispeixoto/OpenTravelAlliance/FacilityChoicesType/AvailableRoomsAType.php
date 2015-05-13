<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityChoicesType;

/**
 * Class representing AvailableRoomsAType
 */
class AvailableRoomsAType
{

    /**
     * Describes a type of room/cabin/apartment etc
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[] $room
     */
    private $room = null;

    /**
     * Adds as room
     *
     * Describes a type of room/cabin/apartment etc
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType $room
     */
    public function addToRoom(\Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType $room)
    {
        $this->room[] = $room;

        return $this;
    }

    /**
     * isset room
     *
     * Describes a type of room/cabin/apartment etc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoom($index)
    {
        return isset($this->room[$index]);
    }

    /**
     * unset room
     *
     * Describes a type of room/cabin/apartment etc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoom($index)
    {
        unset($this->room[$index]);
    }

    /**
     * Gets as room
     *
     * Describes a type of room/cabin/apartment etc
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[]
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * Describes a type of room/cabin/apartment etc
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[] $room
     * @return self
     */
    public function setRoom(array $room)
    {
        $this->room = $room;

        return $this;
    }


}

