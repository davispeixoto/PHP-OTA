<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CacheType
 *
 * Information that has changed and should be updated in the cache.
 * XSD Type: CacheType
 */
class CacheType
{

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @property string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The start and end date of information that should be updated in the cache for
     * the associated @HotelCode and an optional "change date mask" that indicates if
     * there are changes in all or a portion of the returned date range
     *
     * @property \Davispeixoto\OpenTravelAlliance\CacheType\TimeSpanAType $timeSpan
     */
    private $timeSpan = null;

    /**
     * Other optional information that may be returned used to further target the
     * OTA_HotelAvailRQ message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CacheType\OtherInfoAType $otherInfo
     */
    private $otherInfo = null;

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;

        return $this;
    }

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * The start and end date of information that should be updated in the cache for
     * the associated @HotelCode and an optional "change date mask" that indicates if
     * there are changes in all or a portion of the returned date range
     *
     * @return \Davispeixoto\OpenTravelAlliance\CacheType\TimeSpanAType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * The start and end date of information that should be updated in the cache for
     * the associated @HotelCode and an optional "change date mask" that indicates if
     * there are changes in all or a portion of the returned date range
     *
     * @param \Davispeixoto\OpenTravelAlliance\CacheType\TimeSpanAType $timeSpan
     * @return self
     */
    public function setTimeSpan(\Davispeixoto\OpenTravelAlliance\CacheType\TimeSpanAType $timeSpan)
    {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Gets as otherInfo
     *
     * Other optional information that may be returned used to further target the
     * OTA_HotelAvailRQ message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CacheType\OtherInfoAType
     */
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }

    /**
     * Sets a new otherInfo
     *
     * Other optional information that may be returned used to further target the
     * OTA_HotelAvailRQ message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CacheType\OtherInfoAType $otherInfo
     * @return self
     */
    public function setOtherInfo(\Davispeixoto\OpenTravelAlliance\CacheType\OtherInfoAType $otherInfo)
    {
        $this->otherInfo = $otherInfo;

        return $this;
    }


}

