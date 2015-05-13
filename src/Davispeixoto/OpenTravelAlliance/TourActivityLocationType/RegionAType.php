<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityLocationType;

/**
 * Class representing RegionAType
 */
class RegionAType
{

    /**
     * Specifies a region code.
     *
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * Specifies the region name.
     *
     * @property string $regionName
     */
    private $regionName = null;

    /**
     * A sub-region code for the specified region.
     *
     * @property string $subRegionCode
     */
    private $subRegionCode = null;

    /**
     * A sub-region name for the specified region.
     *
     * @property string $subRegionName
     */
    private $subRegionName = null;

    /**
     * Gets as regionCode
     *
     * Specifies a region code.
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Sets a new regionCode
     *
     * Specifies a region code.
     *
     * @param string $regionCode
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Gets as regionName
     *
     * Specifies the region name.
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Sets a new regionName
     *
     * Specifies the region name.
     *
     * @param string $regionName
     * @return self
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Gets as subRegionCode
     *
     * A sub-region code for the specified region.
     *
     * @return string
     */
    public function getSubRegionCode()
    {
        return $this->subRegionCode;
    }

    /**
     * Sets a new subRegionCode
     *
     * A sub-region code for the specified region.
     *
     * @param string $subRegionCode
     * @return self
     */
    public function setSubRegionCode($subRegionCode)
    {
        $this->subRegionCode = $subRegionCode;

        return $this;
    }

    /**
     * Gets as subRegionName
     *
     * A sub-region name for the specified region.
     *
     * @return string
     */
    public function getSubRegionName()
    {
        return $this->subRegionName;
    }

    /**
     * Sets a new subRegionName
     *
     * A sub-region name for the specified region.
     *
     * @param string $subRegionName
     * @return self
     */
    public function setSubRegionName($subRegionName)
    {
        $this->subRegionName = $subRegionName;

        return $this;
    }


}

