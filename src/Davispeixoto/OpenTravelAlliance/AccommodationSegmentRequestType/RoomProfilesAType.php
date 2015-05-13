<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationSegmentRequestType;

/**
 * Class representing RoomProfilesAType
 */
class RoomProfilesAType
{

    /**
     * Details of passengers and amenities for a room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomProfileType[] $roomProfile
     */
    private $roomProfile = null;

    /**
     * Adds as roomProfile
     *
     * Details of passengers and amenities for a room.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomProfileType $roomProfile
     */
    public function addToRoomProfile(\Davispeixoto\OpenTravelAlliance\RoomProfileType $roomProfile)
    {
        $this->roomProfile[] = $roomProfile;

        return $this;
    }

    /**
     * isset roomProfile
     *
     * Details of passengers and amenities for a room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomProfile($index)
    {
        return isset($this->roomProfile[$index]);
    }

    /**
     * unset roomProfile
     *
     * Details of passengers and amenities for a room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomProfile($index)
    {
        unset($this->roomProfile[$index]);
    }

    /**
     * Gets as roomProfile
     *
     * Details of passengers and amenities for a room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomProfileType[]
     */
    public function getRoomProfile()
    {
        return $this->roomProfile;
    }

    /**
     * Sets a new roomProfile
     *
     * Details of passengers and amenities for a room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomProfileType[] $roomProfile
     * @return self
     */
    public function setRoomProfile(array $roomProfile)
    {
        $this->roomProfile = $roomProfile;

        return $this;
    }


}

