<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\OtherFareInformationAType;

/**
 * Class representing AirlinesAType
 */
class AirlinesAType
{

    /**
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airline
     */
    private $airline = null;

    /**
     * Adds as airline
     *
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    public function addToAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airline[] = $airline;

        return $this;
    }

    /**
     * isset airline
     *
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirline($index)
    {
        return isset($this->airline[$index]);
    }

    /**
     * unset airline
     *
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirline($index)
    {
        unset($this->airline[$index]);
    }

    /**
     * Gets as airline
     *
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Airline for which fare contracts exist but have not been included in this
     * response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airline
     * @return self
     */
    public function setAirline(array $airline)
    {
        $this->airline = $airline;

        return $this;
    }


}

