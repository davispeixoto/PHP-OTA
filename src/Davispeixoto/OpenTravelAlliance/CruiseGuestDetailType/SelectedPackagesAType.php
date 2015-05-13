<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

/**
 * Class representing SelectedPackagesAType
 */
class SelectedPackagesAType
{

    /**
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     * $selectedPackage
     */
    private $selectedPackage = null;

    /**
     * Adds as selectedPackage
     *
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType
     * $selectedPackage
     */
    public function addToSelectedPackage(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType $selectedPackage
    ) {
        $this->selectedPackage[] = $selectedPackage;

        return $this;
    }

    /**
     * isset selectedPackage
     *
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedPackage($index)
    {
        return isset($this->selectedPackage[$index]);
    }

    /**
     * unset selectedPackage
     *
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedPackage($index)
    {
        unset($this->selectedPackage[$index]);
    }

    /**
     * Gets as selectedPackage
     *
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     */
    public function getSelectedPackage()
    {
        return $this->selectedPackage;
    }

    /**
     * Sets a new selectedPackage
     *
     * Specifies the package information such as Pre/Post/Shorex/Bus/Transfer.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\SelectedPackagesAType\SelectedPackageAType[]
     * $selectedPackage
     * @return self
     */
    public function setSelectedPackage(array $selectedPackage)
    {
        $this->selectedPackage = $selectedPackage;

        return $this;
    }


}

