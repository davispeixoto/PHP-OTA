<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelDescriptiveInfoRQ\HotelDescriptiveInfosAType;

use Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing HotelDescriptiveInfoAType
 */
class HotelDescriptiveInfoAType extends HotelDescriptiveInfoRequestType
{

    /**
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @property string[] $stateCodeList
     */
    private $stateCodeList = null;

    /**
     * These may be used to filter the response of requested data.
     *
     * @property string[] $countryCodeList
     */
    private $countryCodeList = null;

    /**
     * These may be used to filter the response of requested data.
     *
     * @property string[] $brandCodeList
     */
    private $brandCodeList = null;

    /**
     * The response returns the attribute if there was additional data. The text value
     * should be echoed in this request to indicate where to begin the next block of
     * data.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * Date to which the response information should apply.
     *
     * @property \DateTime $applicableDate
     */
    private $applicableDate = null;

    /**
     * Adds as stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @return self
     * @param string $stateCodeList
     */
    public function addToStateCodeList($stateCodeList)
    {
        $this->stateCodeList[] = $stateCodeList;

        return $this;
    }

    /**
     * isset stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStateCodeList($index)
    {
        return isset($this->stateCodeList[$index]);
    }

    /**
     * unset stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStateCodeList($index)
    {
        unset($this->stateCodeList[$index]);
    }

    /**
     * Gets as stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @return string[]
     */
    public function getStateCodeList()
    {
        return $this->stateCodeList;
    }

    /**
     * Sets a new stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state,
     * province, or region.
     *
     * @param string $stateCodeList
     * @return self
     */
    public function setStateCodeList(array $stateCodeList)
    {
        $this->stateCodeList = $stateCodeList;

        return $this;
    }

    /**
     * Adds as countryCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @return self
     * @param string $countryCodeList
     */
    public function addToCountryCodeList($countryCodeList)
    {
        $this->countryCodeList[] = $countryCodeList;

        return $this;
    }

    /**
     * isset countryCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCountryCodeList($index)
    {
        return isset($this->countryCodeList[$index]);
    }

    /**
     * unset countryCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCountryCodeList($index)
    {
        unset($this->countryCodeList[$index]);
    }

    /**
     * Gets as countryCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @return string[]
     */
    public function getCountryCodeList()
    {
        return $this->countryCodeList;
    }

    /**
     * Sets a new countryCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param string $countryCodeList
     * @return self
     */
    public function setCountryCodeList(array $countryCodeList)
    {
        $this->countryCodeList = $countryCodeList;

        return $this;
    }

    /**
     * Adds as brandCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @return self
     * @param string $brandCodeList
     */
    public function addToBrandCodeList($brandCodeList)
    {
        $this->brandCodeList[] = $brandCodeList;

        return $this;
    }

    /**
     * isset brandCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBrandCodeList($index)
    {
        return isset($this->brandCodeList[$index]);
    }

    /**
     * unset brandCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBrandCodeList($index)
    {
        unset($this->brandCodeList[$index]);
    }

    /**
     * Gets as brandCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @return string[]
     */
    public function getBrandCodeList()
    {
        return $this->brandCodeList;
    }

    /**
     * Sets a new brandCodeList
     *
     * These may be used to filter the response of requested data.
     *
     * @param string $brandCodeList
     * @return self
     */
    public function setBrandCodeList(array $brandCodeList)
    {
        $this->brandCodeList = $brandCodeList;

        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * The response returns the attribute if there was additional data. The text value
     * should be echoed in this request to indicate where to begin the next block of
     * data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The response returns the attribute if there was additional data. The text value
     * should be echoed in this request to indicate where to begin the next block of
     * data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as applicableDate
     *
     * Date to which the response information should apply.
     *
     * @return \DateTime
     */
    public function getApplicableDate()
    {
        return $this->applicableDate;
    }

    /**
     * Sets a new applicableDate
     *
     * Date to which the response information should apply.
     *
     * @param \DateTime $applicableDate
     * @return self
     */
    public function setApplicableDate(\DateTime $applicableDate)
    {
        $this->applicableDate = $applicableDate;

        return $this;
    }


}

