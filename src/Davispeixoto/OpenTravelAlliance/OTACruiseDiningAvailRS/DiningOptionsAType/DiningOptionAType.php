<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType;

/**
 * Class representing DiningOptionAType
 *
 * Specifies cabin option info.
 */
class DiningOptionAType
{

    /**
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
     *  true
     *
     * @property boolean $selectionAllowedIndicator
     */
    private $selectionAllowedIndicator = null;

    /**
     * Dining service. Typical values are: first, second, third, open.
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * Describes the sitting information.
     *
     * @property string $sittingDescription
     */
    private $sittingDescription = null;

    /**
     * Specifies the status of the sitting.
     *
     * @property string $sittingStatus
     */
    private $sittingStatus = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Specifies the dining room information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType[]
     * $diningRoom
     */
    private $diningRoom = null;

    /**
     * Gets as selectionAllowedIndicator
     *
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
     *  true
     *
     * @return boolean
     */
    public function getSelectionAllowedIndicator()
    {
        return $this->selectionAllowedIndicator;
    }

    /**
     * Sets a new selectionAllowedIndicator
     *
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
     *  true
     *
     * @param boolean $selectionAllowedIndicator
     * @return self
     */
    public function setSelectionAllowedIndicator($selectionAllowedIndicator)
    {
        $this->selectionAllowedIndicator = $selectionAllowedIndicator;

        return $this;
    }

    /**
     * Gets as sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * Sets a new sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @param string $sitting
     * @return self
     */
    public function setSitting($sitting)
    {
        $this->sitting = $sitting;

        return $this;
    }

    /**
     * Gets as sittingDescription
     *
     * Describes the sitting information.
     *
     * @return string
     */
    public function getSittingDescription()
    {
        return $this->sittingDescription;
    }

    /**
     * Sets a new sittingDescription
     *
     * Describes the sitting information.
     *
     * @param string $sittingDescription
     * @return self
     */
    public function setSittingDescription($sittingDescription)
    {
        $this->sittingDescription = $sittingDescription;

        return $this;
    }

    /**
     * Gets as sittingStatus
     *
     * Specifies the status of the sitting.
     *
     * @return string
     */
    public function getSittingStatus()
    {
        return $this->sittingStatus;
    }

    /**
     * Sets a new sittingStatus
     *
     * Specifies the status of the sitting.
     *
     * @param string $sittingStatus
     * @return self
     */
    public function setSittingStatus($sittingStatus)
    {
        $this->sittingStatus = $sittingStatus;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Adds as diningRoom
     *
     * Specifies the dining room information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType
     * $diningRoom
     */
    public function addToDiningRoom(
        \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType $diningRoom
    ) {
        $this->diningRoom[] = $diningRoom;

        return $this;
    }

    /**
     * isset diningRoom
     *
     * Specifies the dining room information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiningRoom($index)
    {
        return isset($this->diningRoom[$index]);
    }

    /**
     * unset diningRoom
     *
     * Specifies the dining room information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiningRoom($index)
    {
        unset($this->diningRoom[$index]);
    }

    /**
     * Gets as diningRoom
     *
     * Specifies the dining room information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType[]
     */
    public function getDiningRoom()
    {
        return $this->diningRoom;
    }

    /**
     * Sets a new diningRoom
     *
     * Specifies the dining room information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType[]
     * $diningRoom
     * @return self
     */
    public function setDiningRoom(array $diningRoom)
    {
        $this->diningRoom = $diningRoom;

        return $this;
    }


}

