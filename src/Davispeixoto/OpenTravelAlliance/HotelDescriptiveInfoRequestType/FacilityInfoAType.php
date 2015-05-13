<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing FacilityInfoAType
 */
class FacilityInfoAType
{

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendMeetingRooms
     */
    private $sendMeetingRooms = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendGuestRooms
     */
    private $sendGuestRooms = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendRestaurants
     */
    private $sendRestaurants = null;

    /**
     * Gets as sendMeetingRooms
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendMeetingRooms()
    {
        return $this->sendMeetingRooms;
    }

    /**
     * Sets a new sendMeetingRooms
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendMeetingRooms
     * @return self
     */
    public function setSendMeetingRooms($sendMeetingRooms)
    {
        $this->sendMeetingRooms = $sendMeetingRooms;

        return $this;
    }

    /**
     * Gets as sendGuestRooms
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendGuestRooms()
    {
        return $this->sendGuestRooms;
    }

    /**
     * Sets a new sendGuestRooms
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendGuestRooms
     * @return self
     */
    public function setSendGuestRooms($sendGuestRooms)
    {
        $this->sendGuestRooms = $sendGuestRooms;

        return $this;
    }

    /**
     * Gets as sendRestaurants
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendRestaurants()
    {
        return $this->sendRestaurants;
    }

    /**
     * Sets a new sendRestaurants
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendRestaurants
     * @return self
     */
    public function setSendRestaurants($sendRestaurants)
    {
        $this->sendRestaurants = $sendRestaurants;

        return $this;
    }


}

