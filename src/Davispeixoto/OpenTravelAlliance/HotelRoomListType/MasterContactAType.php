<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing MasterContactAType
 */
class MasterContactAType extends ContactPersonType
{

    /**
     * This identifies the master account number and related information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueIDs
     */
    private $uniqueIDs = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType\LoyaltyAType[]
     * $loyalty
     */
    private $loyalty = null;

    /**
     * Adds as uniqueID
     *
     * This identifies the master account number and related information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueIDs(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueIDs[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueIDs($index)
    {
        return isset($this->uniqueIDs[$index]);
    }

    /**
     * unset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueIDs($index)
    {
        unset($this->uniqueIDs[$index]);
    }

    /**
     * Gets as uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueIDs()
    {
        return $this->uniqueIDs;
    }

    /**
     * Sets a new uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueIDs
     * @return self
     */
    public function setUniqueIDs(array $uniqueIDs)
    {
        $this->uniqueIDs = $uniqueIDs;

        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType\LoyaltyAType
     * $loyalty
     */
    public function addToLoyalty(
        \Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType\LoyaltyAType $loyalty
    ) {
        $this->loyalty[] = $loyalty;

        return $this;
    }

    /**
     * isset loyalty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\MasterContactAType\LoyaltyAType[]
     * $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty)
    {
        $this->loyalty = $loyalty;

        return $this;
    }


}

