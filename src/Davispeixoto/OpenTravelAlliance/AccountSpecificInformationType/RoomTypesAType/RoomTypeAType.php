<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType;

use Davispeixoto\OpenTravelAlliance\RoomTypeType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType extends RoomTypeType
{

    /**
     * A collection of room rate information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     * $roomRateInfos
     */
    private $roomRateInfos = null;

    /**
     * Adds as roomRateInfo
     *
     * A collection of room rate information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType
     * $roomRateInfo
     */
    public function addToRoomRateInfos(
        \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo
    ) {
        $this->roomRateInfos[] = $roomRateInfo;

        return $this;
    }

    /**
     * isset roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRateInfos($index)
    {
        return isset($this->roomRateInfos[$index]);
    }

    /**
     * unset roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRateInfos($index)
    {
        unset($this->roomRateInfos[$index]);
    }

    /**
     * Gets as roomRateInfos
     *
     * A collection of room rate information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     */
    public function getRoomRateInfos()
    {
        return $this->roomRateInfos;
    }

    /**
     * Sets a new roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     * $roomRateInfos
     * @return self
     */
    public function setRoomRateInfos(array $roomRateInfos)
    {
        $this->roomRateInfos = $roomRateInfos;

        return $this;
    }


}

