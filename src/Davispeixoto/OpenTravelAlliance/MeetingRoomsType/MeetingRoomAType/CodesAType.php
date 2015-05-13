<?php

namespace Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType;

/**
 * Class representing CodesAType
 */
class CodesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $code
     */
    private $code = null;

    /**
     * Adds as code
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code
     */
    public function addToCode(\Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code)
    {
        $this->code[] = $code;

        return $this;
    }

    /**
     * isset code
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;

        return $this;
    }


}

