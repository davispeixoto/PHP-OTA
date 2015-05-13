<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType;

/**
 * Class representing UniqueIDsAType
 */
class UniqueIDsAType
{

    /**
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Adds as uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifiers for the Event Planner or Coordinator. Can include EP
     * IATA# and other unique IDs such as an Event Planner ID assigned by the receiving
     * system.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

