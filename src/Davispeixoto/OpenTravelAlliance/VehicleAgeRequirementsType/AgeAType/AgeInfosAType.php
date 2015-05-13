<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType;

/**
 * Class representing AgeInfosAType
 */
class AgeInfosAType
{

    /**
     * Textual description about a specific restriction related to age of driver
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     * $ageInfo
     */
    private $ageInfo = null;

    /**
     * Adds as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType
     * $ageInfo
     */
    public function addToAgeInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo
    ) {
        $this->ageInfo[] = $ageInfo;

        return $this;
    }

    /**
     * isset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgeInfo($index)
    {
        return isset($this->ageInfo[$index]);
    }

    /**
     * unset ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgeInfo($index)
    {
        unset($this->ageInfo[$index]);
    }

    /**
     * Gets as ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     */
    public function getAgeInfo()
    {
        return $this->ageInfo;
    }

    /**
     * Sets a new ageInfo
     *
     * Textual description about a specific restriction related to age of driver
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     * $ageInfo
     * @return self
     */
    public function setAgeInfo(array $ageInfo)
    {
        $this->ageInfo = $ageInfo;

        return $this;
    }


}

