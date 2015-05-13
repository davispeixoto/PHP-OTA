<?php

namespace Davispeixoto\OpenTravelAlliance\ServiceRPHsType;

/**
 * Class representing ServiceRPHAType
 */
class ServiceRPHAType
{

    /**
     * Provides a unique reference to the service.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Defines whether this is for each room of a RoomStay
     *
     * @property boolean $isPerRoom
     */
    private $isPerRoom = null;

    /**
     * Gets as rPH
     *
     * Provides a unique reference to the service.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Provides a unique reference to the service.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as isPerRoom
     *
     * Defines whether this is for each room of a RoomStay
     *
     * @return boolean
     */
    public function getIsPerRoom()
    {
        return $this->isPerRoom;
    }

    /**
     * Sets a new isPerRoom
     *
     * Defines whether this is for each room of a RoomStay
     *
     * @param boolean $isPerRoom
     * @return self
     */
    public function setIsPerRoom($isPerRoom)
    {
        $this->isPerRoom = $isPerRoom;

        return $this;
    }


}

