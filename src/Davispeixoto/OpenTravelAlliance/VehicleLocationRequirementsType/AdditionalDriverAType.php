<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType;

/**
 * Class representing AdditionalDriverAType
 */
class AdditionalDriverAType
{

    /**
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     * $addlDriverInfos
     */
    private $addlDriverInfos = null;

    /**
     * Adds as addlDriverInfo
     *
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType
     * $addlDriverInfo
     */
    public function addToAddlDriverInfos(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType $addlDriverInfo
    ) {
        $this->addlDriverInfos[] = $addlDriverInfo;

        return $this;
    }

    /**
     * isset addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddlDriverInfos($index)
    {
        return isset($this->addlDriverInfos[$index]);
    }

    /**
     * unset addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddlDriverInfos($index)
    {
        unset($this->addlDriverInfos[$index]);
    }

    /**
     * Gets as addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     */
    public function getAddlDriverInfos()
    {
        return $this->addlDriverInfos;
    }

    /**
     * Sets a new addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to
     * additional drivers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType\AddlDriverInfoAType[]
     * $addlDriverInfos
     * @return self
     */
    public function setAddlDriverInfos(array $addlDriverInfos)
    {
        $this->addlDriverInfos = $addlDriverInfos;

        return $this;
    }


}

