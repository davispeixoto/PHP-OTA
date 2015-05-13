<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing LocationCodesAType
 */
class LocationCodesAType
{

    /**
     * Indicates whether the collection of Location Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @property boolean $locationCodesInclusive
     */
    private $locationCodesInclusive = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[]
     * $locationCode
     */
    private $locationCode = null;

    /**
     * Gets as locationCodesInclusive
     *
     * Indicates whether the collection of Location Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @return boolean
     */
    public function getLocationCodesInclusive()
    {
        return $this->locationCodesInclusive;
    }

    /**
     * Sets a new locationCodesInclusive
     *
     * Indicates whether the collection of Location Codes is inclusive or exclusive.
     * Values: false=Exclusive, true=Inclusive.
     *
     * @param boolean $locationCodesInclusive
     * @return self
     */
    public function setLocationCodesInclusive($locationCodesInclusive)
    {
        $this->locationCodesInclusive = $locationCodesInclusive;

        return $this;
    }

    /**
     * Adds as locationCode
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType
     * $locationCode
     */
    public function addToLocationCode(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType $locationCode
    ) {
        $this->locationCode[] = $locationCode;

        return $this;
    }

    /**
     * isset locationCode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationCode($index)
    {
        return isset($this->locationCode[$index]);
    }

    /**
     * unset locationCode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationCode($index)
    {
        unset($this->locationCode[$index]);
    }

    /**
     * Gets as locationCode
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[]
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType\LocationCodeAType[]
     * $locationCode
     * @return self
     */
    public function setLocationCode(array $locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }


}

