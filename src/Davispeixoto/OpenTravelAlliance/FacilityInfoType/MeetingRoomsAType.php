<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityInfoType;

use Davispeixoto\OpenTravelAlliance\MeetingRoomsType;

/**
 * Class representing MeetingRoomsAType
 */
class MeetingRoomsAType extends MeetingRoomsType
{

    /**
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $codes
     */
    private $codes = null;

    /**
     * Adds as code
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code
     */
    public function addToCodes(\Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code)
    {
        $this->codes[] = $code;

        return $this;
    }

    /**
     * isset codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodes($index)
    {
        return isset($this->codes[$index]);
    }

    /**
     * unset codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodes($index)
    {
        unset($this->codes[$index]);
    }

    /**
     * Gets as codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[]
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * Sets a new codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $codes
     * @return self
     */
    public function setCodes(array $codes)
    {
        $this->codes = $codes;

        return $this;
    }


}

