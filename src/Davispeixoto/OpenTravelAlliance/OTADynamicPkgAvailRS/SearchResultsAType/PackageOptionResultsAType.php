<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType;

use Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType;

/**
 * Class representing PackageOptionResultsAType
 */
class PackageOptionResultsAType extends DynamicPkgResponseType
{

    /**
     * The type of search.
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * a group of package options which are related to each other in some fashion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PackageOptionGroupType[]
     * $packageOptionGroup
     */
    private $packageOptionGroup = null;

    /**
     * Gets as responseType
     *
     * The type of search.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * The type of search.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Adds as packageOptionGroup
     *
     * a group of package options which are related to each other in some fashion.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionGroupType
     * $packageOptionGroup
     */
    public function addToPackageOptionGroup(\Davispeixoto\OpenTravelAlliance\PackageOptionGroupType $packageOptionGroup)
    {
        $this->packageOptionGroup[] = $packageOptionGroup;

        return $this;
    }

    /**
     * isset packageOptionGroup
     *
     * a group of package options which are related to each other in some fashion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOptionGroup($index)
    {
        return isset($this->packageOptionGroup[$index]);
    }

    /**
     * unset packageOptionGroup
     *
     * a group of package options which are related to each other in some fashion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOptionGroup($index)
    {
        unset($this->packageOptionGroup[$index]);
    }

    /**
     * Gets as packageOptionGroup
     *
     * a group of package options which are related to each other in some fashion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageOptionGroupType[]
     */
    public function getPackageOptionGroup()
    {
        return $this->packageOptionGroup;
    }

    /**
     * Sets a new packageOptionGroup
     *
     * a group of package options which are related to each other in some fashion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionGroupType[]
     * $packageOptionGroup
     * @return self
     */
    public function setPackageOptionGroup(array $packageOptionGroup)
    {
        $this->packageOptionGroup = $packageOptionGroup;

        return $this;
    }


}

