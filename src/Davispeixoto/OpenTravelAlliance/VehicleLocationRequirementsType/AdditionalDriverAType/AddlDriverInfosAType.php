<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType;

/**
 * Class representing AddlDriverInfosAType
 */
class AddlDriverInfosAType
{

    /**
     * Textual description about a specific restriction related to additional drivers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     * $addlDriverInfo
     */
    private $addlDriverInfo = null;

    /**
     * Adds as addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType
     * $addlDriverInfo
     */
    public function addToAddlDriverInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType $addlDriverInfo
    ) {
        $this->addlDriverInfo[] = $addlDriverInfo;

        return $this;
    }

    /**
     * isset addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddlDriverInfo($index)
    {
        return isset($this->addlDriverInfo[$index]);
    }

    /**
     * unset addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddlDriverInfo($index)
    {
        unset($this->addlDriverInfo[$index]);
    }

    /**
     * Gets as addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     */
    public function getAddlDriverInfo()
    {
        return $this->addlDriverInfo;
    }

    /**
     * Sets a new addlDriverInfo
     *
     * Textual description about a specific restriction related to additional drivers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     * $addlDriverInfo
     * @return self
     */
    public function setAddlDriverInfo(array $addlDriverInfo)
    {
        $this->addlDriverInfo = $addlDriverInfo;

        return $this;
    }


}

