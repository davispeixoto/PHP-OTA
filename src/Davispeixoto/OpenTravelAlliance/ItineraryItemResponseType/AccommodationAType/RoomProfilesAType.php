<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType;

/**
 * Class representing RoomProfilesAType
 */
class RoomProfilesAType
{

    /**
     * Describes the occupancy of a room or cabin.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     * $roomProfile
     */
    private $roomProfile = null;

    /**
     * Adds as roomProfile
     *
     * Describes the occupancy of a room or cabin.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType
     * $roomProfile
     */
    public function addToRoomProfile(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType $roomProfile
    ) {
        $this->roomProfile[] = $roomProfile;

        return $this;
    }

    /**
     * isset roomProfile
     *
     * Describes the occupancy of a room or cabin.
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
     * Describes the occupancy of a room or cabin.
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
     * Describes the occupancy of a room or cabin.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     */
    public function getRoomProfile()
    {
        return $this->roomProfile;
    }

    /**
     * Sets a new roomProfile
     *
     * Describes the occupancy of a room or cabin.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     * $roomProfile
     * @return self
     */
    public function setRoomProfile(array $roomProfile)
    {
        $this->roomProfile = $roomProfile;

        return $this;
    }


}

