<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType;

use Davispeixoto\OpenTravelAlliance\CruisePackageType;

/**
 * Class representing ShorexPackageAType
 */
class ShorexPackageAType extends CruisePackageType
{

    /**
     * Short text description of the package.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
     *  true
     *
     * @property boolean $selectionAllowedIndicator
     */
    private $selectionAllowedIndicator = null;

    /**
     * Provides price information associated with a shore excursion.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType\PriceInfoAType[]
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
     * Gets as selectionAllowedIndicator
     *
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
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
     * When true, this dining option may be selected. When false, the dining option may
     * not be selected.
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
     * Adds as priceInfo
     *
     * Provides price information associated with a shore excursion.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfo[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfo
     *
     * Provides price information associated with a shore excursion.
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
     * Provides price information associated with a shore excursion.
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
     * Provides price information associated with a shore excursion.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType\PriceInfoAType[]
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Provides price information associated with a shore excursion.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType\PriceInfoAType[]
     * $priceInfo
     * @return self
     */
    public function setPriceInfo(array $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }


}

