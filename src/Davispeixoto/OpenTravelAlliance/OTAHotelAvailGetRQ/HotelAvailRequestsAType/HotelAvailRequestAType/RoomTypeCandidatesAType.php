<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing RoomTypeCandidatesAType
 */
class RoomTypeCandidatesAType
{

    /**
     * Element used to specify room products.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidate
     */
    private $roomTypeCandidate = null;

    /**
     * Adds as roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType
     * $roomTypeCandidate
     */
    public function addToRoomTypeCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
    ) {
        $this->roomTypeCandidate[] = $roomTypeCandidate;

        return $this;
    }

    /**
     * isset roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypeCandidate($index)
    {
        return isset($this->roomTypeCandidate[$index]);
    }

    /**
     * unset roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypeCandidate($index)
    {
        unset($this->roomTypeCandidate[$index]);
    }

    /**
     * Gets as roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidate()
    {
        return $this->roomTypeCandidate;
    }

    /**
     * Sets a new roomTypeCandidate
     *
     * Element used to specify room products.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidate
     * @return self
     */
    public function setRoomTypeCandidate(array $roomTypeCandidate)
    {
        $this->roomTypeCandidate = $roomTypeCandidate;

        return $this;
    }


}

