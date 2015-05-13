<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS;

/**
 * Class representing ShorexPackagesAType
 */
class ShorexPackagesAType
{

    /**
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType[]
     * $shorexPackage
     */
    private $shorexPackage = null;

    /**
     * Adds as shorexPackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType
     * $shorexPackage
     */
    public function addToShorexPackage(
        \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType $shorexPackage
    ) {
        $this->shorexPackage[] = $shorexPackage;

        return $this;
    }

    /**
     * isset shorexPackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShorexPackage($index)
    {
        return isset($this->shorexPackage[$index]);
    }

    /**
     * unset shorexPackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShorexPackage($index)
    {
        unset($this->shorexPackage[$index]);
    }

    /**
     * Gets as shorexPackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType[]
     */
    public function getShorexPackage()
    {
        return $this->shorexPackage;
    }

    /**
     * Sets a new shorexPackage
     *
     * Specifies the type of package options to query for, that the cruise might offer
     * with the sailing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType[]
     * $shorexPackage
     * @return self
     */
    public function setShorexPackage(array $shorexPackage)
    {
        $this->shorexPackage = $shorexPackage;

        return $this;
    }


}

