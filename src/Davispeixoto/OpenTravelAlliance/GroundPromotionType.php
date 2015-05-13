<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundPromotionType
 *
 * Promotions that apply to a ground transportation service.
 * XSD Type: GroundPromotionType
 */
class GroundPromotionType
{

    /**
     * A promotion code used by the host to link directly with a specific named
     * advertising campaign.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * A list of vendor codes associated with a promotion.
     *
     * @property string[] $vendorCodes
     */
    private $vendorCodes = null;

    /**
     * Gets as promotionCode
     *
     * A promotion code used by the host to link directly with a specific named
     * advertising campaign.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * A promotion code used by the host to link directly with a specific named
     * advertising campaign.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Adds as vendorCodes
     *
     * A list of vendor codes associated with a promotion.
     *
     * @return self
     * @param string $vendorCodes
     */
    public function addToVendorCodes($vendorCodes)
    {
        $this->vendorCodes[] = $vendorCodes;

        return $this;
    }

    /**
     * isset vendorCodes
     *
     * A list of vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorCodes($index)
    {
        return isset($this->vendorCodes[$index]);
    }

    /**
     * unset vendorCodes
     *
     * A list of vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorCodes($index)
    {
        unset($this->vendorCodes[$index]);
    }

    /**
     * Gets as vendorCodes
     *
     * A list of vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getVendorCodes()
    {
        return $this->vendorCodes;
    }

    /**
     * Sets a new vendorCodes
     *
     * A list of vendor codes associated with a promotion.
     *
     * @param string[] $vendorCodes
     * @return self
     */
    public function setVendorCodes(array $vendorCodes)
    {
        $this->vendorCodes = $vendorCodes;

        return $this;
    }


}

