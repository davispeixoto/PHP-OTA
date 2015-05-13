<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType;

/**
 * Class representing RoomTypeCandidatesAType
 */
class RoomTypeCandidatesAType
{

    /**
     * Element used to identify available room products.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidate
     */
    private $roomTypeCandidate = null;

    /**
     * Adds as roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType
     * $roomTypeCandidate
     */
    public function addToRoomTypeCandidate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType $roomTypeCandidate
    ) {
        $this->roomTypeCandidate[] = $roomTypeCandidate;

        return $this;
    }

    /**
     * isset roomTypeCandidate
     *
     * Element used to identify available room products.
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
     * Element used to identify available room products.
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
     * Element used to identify available room products.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     */
    public function getRoomTypeCandidate()
    {
        return $this->roomTypeCandidate;
    }

    /**
     * Sets a new roomTypeCandidate
     *
     * Element used to identify available room products.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelInvCountRQ\HotelInvCountRequestsAType\HotelInvCountRequestAType\RoomTypeCandidatesAType\RoomTypeCandidateAType[]
     * $roomTypeCandidate
     * @return self
     */
    public function setRoomTypeCandidate(array $roomTypeCandidate)
    {
        $this->roomTypeCandidate = $roomTypeCandidate;

        return $this;
    }


}

