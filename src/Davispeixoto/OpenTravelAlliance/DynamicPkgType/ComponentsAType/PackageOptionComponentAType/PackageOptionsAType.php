<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\PackageOptionComponentAType;

/**
 * Class representing PackageOptionsAType
 */
class PackageOptionsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PackageOptionType[] $packageOption
     */
    private $packageOption = null;

    /**
     * Adds as packageOption
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionType $packageOption
     */
    public function addToPackageOption(\Davispeixoto\OpenTravelAlliance\PackageOptionType $packageOption)
    {
        $this->packageOption[] = $packageOption;

        return $this;
    }

    /**
     * isset packageOption
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOption($index)
    {
        return isset($this->packageOption[$index]);
    }

    /**
     * unset packageOption
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOption($index)
    {
        unset($this->packageOption[$index]);
    }

    /**
     * Gets as packageOption
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageOptionType[]
     */
    public function getPackageOption()
    {
        return $this->packageOption;
    }

    /**
     * Sets a new packageOption
     *
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionType[] $packageOption
     * @return self
     */
    public function setPackageOption(array $packageOption)
    {
        $this->packageOption = $packageOption;

        return $this;
    }


}

