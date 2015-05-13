<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType\RoomStaysAType;

use Davispeixoto\OpenTravelAlliance\RoomStayType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType extends RoomStayType
{

    /**
     * This attribute indicates the change to the reservation.
     *
     * @property string $roomStay
     */
    private $roomStay = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * Collection of shared rooms for room stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType[]
     * $roomShares
     */
    private $roomShares = null;

    /**
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be
     * useful for a modification).
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\SuccessType $success
     */
    private $success = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ErrorType[] $errors
     */
    private $errors = null;

    /**
     * Gets as roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @return string
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @param string $roomStay
     * @return self
     */
    public function setRoomStay($roomStay)
    {
        $this->roomStay = $roomStay;

        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationIDs[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;

        return $this;
    }

    /**
     * Adds as roomShare
     *
     * Collection of shared rooms for room stay.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType $roomShare
     */
    public function addToRoomShares(\Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType $roomShare)
    {
        $this->roomShares[] = $roomShare;

        return $this;
    }

    /**
     * isset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomShares($index)
    {
        return isset($this->roomShares[$index]);
    }

    /**
     * unset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomShares($index)
    {
        unset($this->roomShares[$index]);
    }

    /**
     * Gets as roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType[]
     */
    public function getRoomShares()
    {
        return $this->roomShares;
    }

    /**
     * Sets a new roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType[]
     * $roomShares
     * @return self
     */
    public function setRoomShares(array $roomShares)
    {
        $this->roomShares = $roomShares;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be
     * useful for a modification).
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
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be
     * useful for a modification).
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
     * Gets as success
     *
     * @return \Davispeixoto\OpenTravelAlliance\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param \Davispeixoto\OpenTravelAlliance\SuccessType $success
     * @return self
     */
    public function setSuccess(\Davispeixoto\OpenTravelAlliance\SuccessType $success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Adds as warning
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType $error
     */
    public function addToErrors(\Davispeixoto\OpenTravelAlliance\ErrorType $error)
    {
        $this->errors[] = $error;

        return $this;
    }

    /**
     * isset errors
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \Davispeixoto\OpenTravelAlliance\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }


}

