<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType;

/**
 * Class representing AgeAType
 */
class AgeAType
{

    /**
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @property integer $minimumAge
     */
    private $minimumAge = null;

    /**
     * Identifies the maximum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @property integer $maximumAge
     */
    private $maximumAge = null;

    /**
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeSurchargeAType[]
     * $ageSurcharge
     */
    private $ageSurcharge = null;

    /**
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     * $ageInfos
     */
    private $ageInfos = null;

    /**
     * Gets as minimumAge
     *
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @return integer
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * Identifies the minimum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @param integer $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * Identifies the maximum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @return integer
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * Identifies the maximum age of a person allowed to rent a vehicle from this
     * rental facility.
     *
     * @param integer $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * Adds as ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeSurchargeAType
     * $ageSurcharge
     */
    public function addToAgeSurcharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeSurchargeAType $ageSurcharge
    ) {
        $this->ageSurcharge[] = $ageSurcharge;

        return $this;
    }

    /**
     * isset ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgeSurcharge($index)
    {
        return isset($this->ageSurcharge[$index]);
    }

    /**
     * unset ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgeSurcharge($index)
    {
        unset($this->ageSurcharge[$index]);
    }

    /**
     * Gets as ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeSurchargeAType[]
     */
    public function getAgeSurcharge()
    {
        return $this->ageSurcharge;
    }

    /**
     * Sets a new ageSurcharge
     *
     * Surcharge information that may be applied based upon age of the renter.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeSurchargeAType[]
     * $ageSurcharge
     * @return self
     */
    public function setAgeSurcharge(array $ageSurcharge)
    {
        $this->ageSurcharge = $ageSurcharge;

        return $this;
    }

    /**
     * Adds as ageInfo
     *
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType
     * $ageInfo
     */
    public function addToAgeInfos(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType $ageInfo
    ) {
        $this->ageInfos[] = $ageInfo;

        return $this;
    }

    /**
     * isset ageInfos
     *
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgeInfos($index)
    {
        return isset($this->ageInfos[$index]);
    }

    /**
     * unset ageInfos
     *
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgeInfos($index)
    {
        unset($this->ageInfos[$index]);
    }

    /**
     * Gets as ageInfos
     *
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     */
    public function getAgeInfos()
    {
        return $this->ageInfos;
    }

    /**
     * Sets a new ageInfos
     *
     * Collection of descriptions about the different requirements related to age of
     * driver.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType\AgeInfosAType\AgeInfoAType[]
     * $ageInfos
     * @return self
     */
    public function setAgeInfos(array $ageInfos)
    {
        $this->ageInfos = $ageInfos;

        return $this;
    }


}

