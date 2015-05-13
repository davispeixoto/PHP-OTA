<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType;

use Davispeixoto\OpenTravelAlliance\CruisePackageType;

/**
 * Class representing CruisePackageAType
 */
class CruisePackageAType extends CruisePackageType
{

    /**
     * Short text description of the package.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * When true, a transfer is included in the package. When false, a transfer is not
     * included in the package.
     *
     * @property boolean $transferIncludedIndicator
     */
    private $transferIncludedIndicator = null;

    /**
     * When true, this option may be selected. When false, the option may not be
     * selected.
     *  true
     *
     * @property boolean $selectionAllowedIndicator
     */
    private $selectionAllowedIndicator = null;

    /**
     * When true, indicates that a flight is required.
     *
     * @property boolean $flightInfoRequiredInd
     */
    private $flightInfoRequiredInd = null;

    /**
     * Provides price information regarding a package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType\PriceInfoAType[]
     * $priceInfo
     */
    private $priceInfo = null;

    /**
     * Gets as description
     *
     * Short text description of the package.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Short text description of the package.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as transferIncludedIndicator
     *
     * When true, a transfer is included in the package. When false, a transfer is not
     * included in the package.
     *
     * @return boolean
     */
    public function getTransferIncludedIndicator()
    {
        return $this->transferIncludedIndicator;
    }

    /**
     * Sets a new transferIncludedIndicator
     *
     * When true, a transfer is included in the package. When false, a transfer is not
     * included in the package.
     *
     * @param boolean $transferIncludedIndicator
     * @return self
     */
    public function setTransferIncludedIndicator($transferIncludedIndicator)
    {
        $this->transferIncludedIndicator = $transferIncludedIndicator;

        return $this;
    }

    /**
     * Gets as selectionAllowedIndicator
     *
     * When true, this option may be selected. When false, the option may not be
     * selected.
     *  true
     *
     * @return boolean
     */
    public function getSelectionAllowedIndicator()
    {
        return $this->selectionAllowedIndicator;
    }

    /**
     * Sets a new selectionAllowedIndicator
     *
     * When true, this option may be selected. When false, the option may not be
     * selected.
     *  true
     *
     * @param boolean $selectionAllowedIndicator
     * @return self
     */
    public function setSelectionAllowedIndicator($selectionAllowedIndicator)
    {
        $this->selectionAllowedIndicator = $selectionAllowedIndicator;

        return $this;
    }

    /**
     * Gets as flightInfoRequiredInd
     *
     * When true, indicates that a flight is required.
     *
     * @return boolean
     */
    public function getFlightInfoRequiredInd()
    {
        return $this->flightInfoRequiredInd;
    }

    /**
     * Sets a new flightInfoRequiredInd
     *
     * When true, indicates that a flight is required.
     *
     * @param boolean $flightInfoRequiredInd
     * @return self
     */
    public function setFlightInfoRequiredInd($flightInfoRequiredInd)
    {
        $this->flightInfoRequiredInd = $flightInfoRequiredInd;

        return $this;
    }

    /**
     * Adds as priceInfo
     *
     * Provides price information regarding a package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfo[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfo
     *
     * Provides price information regarding a package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfo($index)
    {
        return isset($this->priceInfo[$index]);
    }

    /**
     * unset priceInfo
     *
     * Provides price information regarding a package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfo($index)
    {
        unset($this->priceInfo[$index]);
    }

    /**
     * Gets as priceInfo
     *
     * Provides price information regarding a package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType\PriceInfoAType[]
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Provides price information regarding a package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRS\CruisePackagesAType\CruisePackageAType\PriceInfoAType[]
     * $priceInfo
     * @return self
     */
    public function setPriceInfo(array $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }


}

