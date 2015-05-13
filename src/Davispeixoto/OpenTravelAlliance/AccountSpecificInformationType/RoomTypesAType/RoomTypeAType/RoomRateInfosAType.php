<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing RoomRateInfosAType
 */
class RoomRateInfosAType
{

    /**
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     * $roomRateInfo
     */
    private $roomRateInfo = null;

    /**
     * Adds as roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType
     * $roomRateInfo
     */
    public function addToRoomRateInfo(
        \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo
    ) {
        $this->roomRateInfo[] = $roomRateInfo;

        return $this;
    }

    /**
     * isset roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRateInfo($index)
    {
        return isset($this->roomRateInfo[$index]);
    }

    /**
     * unset roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRateInfo($index)
    {
        unset($this->roomRateInfo[$index]);
    }

    /**
     * Gets as roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     */
    public function getRoomRateInfo()
    {
        return $this->roomRateInfo;
    }

    /**
     * Sets a new roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated
     * rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     * $roomRateInfo
     * @return self
     */
    public function setRoomRateInfo(array $roomRateInfo)
    {
        $this->roomRateInfo = $roomRateInfo;

        return $this;
    }


}

