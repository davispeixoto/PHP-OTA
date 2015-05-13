<?php

namespace Davispeixoto\OpenTravelAlliance\AirPurchasedOfferType;

use Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType;

/**
 * Class representing PurchasedItemAType
 */
class PurchasedItemAType extends AncillaryServiceDetailType
{

    /**
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate
     * the applied pricing method.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ApplyPriceToType $appliesTo
     */
    private $appliesTo = null;

    /**
     * Information about purchased land product(s), such as lounge passes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirLandProductType $landProductInfo
     */
    private $landProductInfo = null;

    /**
     * Third-party trip insurance information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType
     * $insuranceProduct
     */
    private $insuranceProduct = null;

    /**
     * Gets as appliesTo
     *
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate
     * the applied pricing method.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ApplyPriceToType
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * References to traveler, O/D, O/D segment and O/D flight segment that indicate
     * the applied pricing method.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ApplyPriceToType $appliesTo
     * @return self
     */
    public function setAppliesTo(\Davispeixoto\OpenTravelAlliance\ApplyPriceToType $appliesTo)
    {
        $this->appliesTo = $appliesTo;

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

    /**
     * Gets as insuranceProduct
     *
     * Third-party trip insurance information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType
     */
    public function getInsuranceProduct()
    {
        return $this->insuranceProduct;
    }

    /**
     * Sets a new insuranceProduct
     *
     * Third-party trip insurance information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType $insuranceProduct
     * @return self
     */
    public function setInsuranceProduct(\Davispeixoto\OpenTravelAlliance\AirInsuranceOfferType $insuranceProduct)
    {
        $this->insuranceProduct = $insuranceProduct;

        return $this;
    }


}

