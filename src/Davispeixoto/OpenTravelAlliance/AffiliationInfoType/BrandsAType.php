<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType;

/**
 * Class representing BrandsAType
 */
class BrandsAType
{

    /**
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     * $brand
     */
    private $brand = null;

    /**
     * Adds as brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType
     * $brand
     */
    public function addToBrand(\Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType $brand)
    {
        $this->brand[] = $brand;

        return $this;
    }

    /**
     * isset brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBrand($index)
    {
        return isset($this->brand[$index]);
    }

    /**
     * unset brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBrand($index)
    {
        unset($this->brand[$index]);
    }

    /**
     * Gets as brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * The Brand class defines the brand affiliations of this hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     * $brand
     * @return self
     */
    public function setBrand(array $brand)
    {
        $this->brand = $brand;

        return $this;
    }


}

