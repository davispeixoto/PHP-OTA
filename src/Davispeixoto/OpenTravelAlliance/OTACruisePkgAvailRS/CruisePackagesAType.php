<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS;

/**
 * Class representing CruisePackagesAType
 */
class CruisePackagesAType
{

    /**
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType[]
     * $cruisePackage
     */
    private $cruisePackage = null;

    /**
     * Adds as cruisePackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType
     * $cruisePackage
     */
    public function addToCruisePackage(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType $cruisePackage
    ) {
        $this->cruisePackage[] = $cruisePackage;

        return $this;
    }

    /**
     * isset cruisePackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruisePackage($index)
    {
        return isset($this->cruisePackage[$index]);
    }

    /**
     * unset cruisePackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruisePackage($index)
    {
        unset($this->cruisePackage[$index]);
    }

    /**
     * Gets as cruisePackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType[]
     */
    public function getCruisePackage()
    {
        return $this->cruisePackage;
    }

    /**
     * Sets a new cruisePackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType[]
     * $cruisePackage
     * @return self
     */
    public function setCruisePackage(array $cruisePackage)
    {
        $this->cruisePackage = $cruisePackage;

        return $this;
    }


}

