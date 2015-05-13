<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ;

/**
 * Class representing CacheSearchCriteriaAType
 */
class CacheSearchCriteriaAType
{

    /**
     * The availability response returns the attribute if there were additional rates
     * that could not fit within the availability response. The text value should be
     * echoed in this availability request to indicate where to begin the next block of
     * availability data.
     *
     * @property mixed $moreEchoDataToken
     */
    private $moreEchoDataToken = null;

    /**
     * Defines whether the response is a property list or an area list.
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * When true, return changes in Availability data for the designated cache search
     * criteria.
     *
     * @property boolean $availabilityInd
     */
    private $availabilityInd = null;

    /**
     * When true, return changes in Rates data for the designated cache search
     * criteria.
     *
     * @property boolean $ratesInd
     */
    private $ratesInd = null;

    /**
     * The time stamp of the last time a cache refresh was requested.
     *
     * @property \DateTime $cacheFromTimestamp
     */
    private $cacheFromTimestamp = null;

    /**
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType[]
     * $cacheSearchCriterion
     */
    private $cacheSearchCriterion = null;

    /**
     * Gets as moreEchoDataToken
     *
     * The availability response returns the attribute if there were additional rates
     * that could not fit within the availability response. The text value should be
     * echoed in this availability request to indicate where to begin the next block of
     * availability data.
     *
     * @return mixed
     */
    public function getMoreEchoDataToken()
    {
        return $this->moreEchoDataToken;
    }

    /**
     * Sets a new moreEchoDataToken
     *
     * The availability response returns the attribute if there were additional rates
     * that could not fit within the availability response. The text value should be
     * echoed in this availability request to indicate where to begin the next block of
     * availability data.
     *
     * @param mixed $moreEchoDataToken
     * @return self
     */
    public function setMoreEchoDataToken($moreEchoDataToken)
    {
        $this->moreEchoDataToken = $moreEchoDataToken;

        return $this;
    }

    /**
     * Gets as responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as availabilityInd
     *
     * When true, return changes in Availability data for the designated cache search
     * criteria.
     *
     * @return boolean
     */
    public function getAvailabilityInd()
    {
        return $this->availabilityInd;
    }

    /**
     * Sets a new availabilityInd
     *
     * When true, return changes in Availability data for the designated cache search
     * criteria.
     *
     * @param boolean $availabilityInd
     * @return self
     */
    public function setAvailabilityInd($availabilityInd)
    {
        $this->availabilityInd = $availabilityInd;

        return $this;
    }

    /**
     * Gets as ratesInd
     *
     * When true, return changes in Rates data for the designated cache search
     * criteria.
     *
     * @return boolean
     */
    public function getRatesInd()
    {
        return $this->ratesInd;
    }

    /**
     * Sets a new ratesInd
     *
     * When true, return changes in Rates data for the designated cache search
     * criteria.
     *
     * @param boolean $ratesInd
     * @return self
     */
    public function setRatesInd($ratesInd)
    {
        $this->ratesInd = $ratesInd;

        return $this;
    }

    /**
     * Gets as cacheFromTimestamp
     *
     * The time stamp of the last time a cache refresh was requested.
     *
     * @return \DateTime
     */
    public function getCacheFromTimestamp()
    {
        return $this->cacheFromTimestamp;
    }

    /**
     * Sets a new cacheFromTimestamp
     *
     * The time stamp of the last time a cache refresh was requested.
     *
     * @param \DateTime $cacheFromTimestamp
     * @return self
     */
    public function setCacheFromTimestamp(\DateTime $cacheFromTimestamp)
    {
        $this->cacheFromTimestamp = $cacheFromTimestamp;

        return $this;
    }

    /**
     * Adds as cacheSearchCriterion
     *
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType
     * $cacheSearchCriterion
     */
    public function addToCacheSearchCriterion(
        \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType $cacheSearchCriterion
    ) {
        $this->cacheSearchCriterion[] = $cacheSearchCriterion;

        return $this;
    }

    /**
     * isset cacheSearchCriterion
     *
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCacheSearchCriterion($index)
    {
        return isset($this->cacheSearchCriterion[$index]);
    }

    /**
     * unset cacheSearchCriterion
     *
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCacheSearchCriterion($index)
    {
        unset($this->cacheSearchCriterion[$index]);
    }

    /**
     * Gets as cacheSearchCriterion
     *
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType[]
     */
    public function getCacheSearchCriterion()
    {
        return $this->cacheSearchCriterion;
    }

    /**
     * Sets a new cacheSearchCriterion
     *
     * The search criteria for the cache refresh, which may include any combination of
     * hotel IDs, brand codes, chain codes, rate information, room information,
     * inventory block IDs and geographical area information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType[]
     * $cacheSearchCriterion
     * @return self
     */
    public function setCacheSearchCriterion(array $cacheSearchCriterion)
    {
        $this->cacheSearchCriterion = $cacheSearchCriterion;

        return $this;
    }


}

