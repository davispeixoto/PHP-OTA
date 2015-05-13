<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS;

/**
 * Class representing SearchResultsAType
 */
class SearchResultsAType
{

    /**
     * Details of available air inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType[]
     * $airResults
     */
    private $airResults = null;

    /**
     * Details of available hotel inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType[]
     * $hotelResults
     */
    private $hotelResults = null;

    /**
     * Details of available package option inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\PackageOptionResultsAType[]
     * $packageOptionResults
     */
    private $packageOptionResults = null;

    /**
     * Details of available rental car inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\CarResultsAType[]
     * $carResults
     */
    private $carResults = null;

    /**
     * Adds as airResults
     *
     * Details of available air inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType
     * $airResults
     */
    public function addToAirResults(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType $airResults
    ) {
        $this->airResults[] = $airResults;

        return $this;
    }

    /**
     * isset airResults
     *
     * Details of available air inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirResults($index)
    {
        return isset($this->airResults[$index]);
    }

    /**
     * unset airResults
     *
     * Details of available air inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirResults($index)
    {
        unset($this->airResults[$index]);
    }

    /**
     * Gets as airResults
     *
     * Details of available air inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType[]
     */
    public function getAirResults()
    {
        return $this->airResults;
    }

    /**
     * Sets a new airResults
     *
     * Details of available air inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType[]
     * $airResults
     * @return self
     */
    public function setAirResults(array $airResults)
    {
        $this->airResults = $airResults;

        return $this;
    }

    /**
     * Adds as hotelResults
     *
     * Details of available hotel inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType
     * $hotelResults
     */
    public function addToHotelResults(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType $hotelResults
    ) {
        $this->hotelResults[] = $hotelResults;

        return $this;
    }

    /**
     * isset hotelResults
     *
     * Details of available hotel inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelResults($index)
    {
        return isset($this->hotelResults[$index]);
    }

    /**
     * unset hotelResults
     *
     * Details of available hotel inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelResults($index)
    {
        unset($this->hotelResults[$index]);
    }

    /**
     * Gets as hotelResults
     *
     * Details of available hotel inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType[]
     */
    public function getHotelResults()
    {
        return $this->hotelResults;
    }

    /**
     * Sets a new hotelResults
     *
     * Details of available hotel inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType[]
     * $hotelResults
     * @return self
     */
    public function setHotelResults(array $hotelResults)
    {
        $this->hotelResults = $hotelResults;

        return $this;
    }

    /**
     * Adds as packageOptionResults
     *
     * Details of available package option inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\PackageOptionResultsAType
     * $packageOptionResults
     */
    public function addToPackageOptionResults(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\PackageOptionResultsAType $packageOptionResults
    ) {
        $this->packageOptionResults[] = $packageOptionResults;

        return $this;
    }

    /**
     * isset packageOptionResults
     *
     * Details of available package option inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOptionResults($index)
    {
        return isset($this->packageOptionResults[$index]);
    }

    /**
     * unset packageOptionResults
     *
     * Details of available package option inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOptionResults($index)
    {
        unset($this->packageOptionResults[$index]);
    }

    /**
     * Gets as packageOptionResults
     *
     * Details of available package option inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\PackageOptionResultsAType[]
     */
    public function getPackageOptionResults()
    {
        return $this->packageOptionResults;
    }

    /**
     * Sets a new packageOptionResults
     *
     * Details of available package option inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\PackageOptionResultsAType[]
     * $packageOptionResults
     * @return self
     */
    public function setPackageOptionResults(array $packageOptionResults)
    {
        $this->packageOptionResults = $packageOptionResults;

        return $this;
    }

    /**
     * Adds as carResults
     *
     * Details of available rental car inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\CarResultsAType
     * $carResults
     */
    public function addToCarResults(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\CarResultsAType $carResults
    ) {
        $this->carResults[] = $carResults;

        return $this;
    }

    /**
     * isset carResults
     *
     * Details of available rental car inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCarResults($index)
    {
        return isset($this->carResults[$index]);
    }

    /**
     * unset carResults
     *
     * Details of available rental car inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCarResults($index)
    {
        unset($this->carResults[$index]);
    }

    /**
     * Gets as carResults
     *
     * Details of available rental car inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\CarResultsAType[]
     */
    public function getCarResults()
    {
        return $this->carResults;
    }

    /**
     * Sets a new carResults
     *
     * Details of available rental car inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\CarResultsAType[]
     * $carResults
     * @return self
     */
    public function setCarResults(array $carResults)
    {
        $this->carResults = $carResults;

        return $this;
    }


}

