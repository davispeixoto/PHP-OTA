<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\PackageAType;

use Davispeixoto\OpenTravelAlliance\PkgPriceType;

/**
 * Class representing PriceInfoAType
 */
class PriceInfoAType extends PkgPriceType
{

    /**
     * This attribute alllows for the inclusion of memorandum price information (e.g.,
     * the previous or brochure price for comparison when the guide price reflects a
     * recent change).
     *
     * @property float $otherPrice
     */
    private $otherPrice = null;

    /**
     * A description for the 'Other Price'.
     *
     * @property string $otherPriceDescription
     */
    private $otherPriceDescription = null;

    /**
     * Gets as otherPrice
     *
     * This attribute alllows for the inclusion of memorandum price information (e.g.,
     * the previous or brochure price for comparison when the guide price reflects a
     * recent change).
     *
     * @return float
     */
    public function getOtherPrice()
    {
        return $this->otherPrice;
    }

    /**
     * Sets a new otherPrice
     *
     * This attribute alllows for the inclusion of memorandum price information (e.g.,
     * the previous or brochure price for comparison when the guide price reflects a
     * recent change).
     *
     * @param float $otherPrice
     * @return self
     */
    public function setOtherPrice($otherPrice)
    {
        $this->otherPrice = $otherPrice;

        return $this;
    }

    /**
     * Gets as otherPriceDescription
     *
     * A description for the 'Other Price'.
     *
     * @return string
     */
    public function getOtherPriceDescription()
    {
        return $this->otherPriceDescription;
    }

    /**
     * Sets a new otherPriceDescription
     *
     * A description for the 'Other Price'.
     *
     * @param string $otherPriceDescription
     * @return self
     */
    public function setOtherPriceDescription($otherPriceDescription)
    {
        $this->otherPriceDescription = $otherPriceDescription;

        return $this;
    }


}

