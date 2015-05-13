<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

use Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType;

/**
 * Class representing PresentedPurchasedAType
 */
class PresentedPurchasedAType extends AncillaryServiceDetailType
{

    /**
     * If true, this offer was purchased.
     *
     * @property boolean $purchasedInd
     */
    private $purchasedInd = null;

    /**
     * Information about purchased land product(s), such as lounge passes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirLandProductType $landProductInfo
     */
    private $landProductInfo = null;

    /**
     * Gets as purchasedInd
     *
     * If true, this offer was purchased.
     *
     * @return boolean
     */
    public function getPurchasedInd()
    {
        return $this->purchasedInd;
    }

    /**
     * Sets a new purchasedInd
     *
     * If true, this offer was purchased.
     *
     * @param boolean $purchasedInd
     * @return self
     */
    public function setPurchasedInd($purchasedInd)
    {
        $this->purchasedInd = $purchasedInd;

        return $this;
    }

    /**
     * Gets as landProductInfo
     *
     * Information about purchased land product(s), such as lounge passes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirLandProductType
     */
    public function getLandProductInfo()
    {
        return $this->landProductInfo;
    }

    /**
     * Sets a new landProductInfo
     *
     * Information about purchased land product(s), such as lounge passes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirLandProductType $landProductInfo
     * @return self
     */
    public function setLandProductInfo(\Davispeixoto\OpenTravelAlliance\AirLandProductType $landProductInfo)
    {
        $this->landProductInfo = $landProductInfo;

        return $this;
    }


}

