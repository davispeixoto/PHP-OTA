<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing OwnershipManagementInfosAType
 */
class OwnershipManagementInfosAType
{

    /**
     * Provides details of the ownership or management.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     * $ownershipManagementInfo
     */
    private $ownershipManagementInfo = null;

    /**
     * Adds as ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType
     * $ownershipManagementInfo
     */
    public function addToOwnershipManagementInfo(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo
    ) {
        $this->ownershipManagementInfo[] = $ownershipManagementInfo;

        return $this;
    }

    /**
     * isset ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOwnershipManagementInfo($index)
    {
        return isset($this->ownershipManagementInfo[$index]);
    }

    /**
     * unset ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOwnershipManagementInfo($index)
    {
        unset($this->ownershipManagementInfo[$index]);
    }

    /**
     * Gets as ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     */
    public function getOwnershipManagementInfo()
    {
        return $this->ownershipManagementInfo;
    }

    /**
     * Sets a new ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     * $ownershipManagementInfo
     * @return self
     */
    public function setOwnershipManagementInfo(array $ownershipManagementInfo)
    {
        $this->ownershipManagementInfo = $ownershipManagementInfo;

        return $this;
    }


}

