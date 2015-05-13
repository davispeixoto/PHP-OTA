<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing RoomSetupAType
 */
class RoomSetupAType
{

    /**
     * Indicates the arrangement of the function space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @property string $roomSetupCode
     */
    private $roomSetupCode = null;

    /**
     * The number of people for whom the room should be set.
     *
     * @property integer $setForQuantity
     */
    private $setForQuantity = null;

    /**
     * Gets as roomSetupCode
     *
     * Indicates the arrangement of the function space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getRoomSetupCode()
    {
        return $this->roomSetupCode;
    }

    /**
     * Sets a new roomSetupCode
     *
     * Indicates the arrangement of the function space (e.g. conference or banquet
     * style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $roomSetupCode
     * @return self
     */
    public function setRoomSetupCode($roomSetupCode)
    {
        $this->roomSetupCode = $roomSetupCode;

        return $this;
    }

    /**
     * Gets as setForQuantity
     *
     * The number of people for whom the room should be set.
     *
     * @return integer
     */
    public function getSetForQuantity()
    {
        return $this->setForQuantity;
    }

    /**
     * Sets a new setForQuantity
     *
     * The number of people for whom the room should be set.
     *
     * @param integer $setForQuantity
     * @return self
     */
    public function setSetForQuantity($setForQuantity)
    {
        $this->setForQuantity = $setForQuantity;

        return $this;
    }


}

