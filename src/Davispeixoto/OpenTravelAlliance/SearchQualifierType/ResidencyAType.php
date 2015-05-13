<?php

namespace Davispeixoto\OpenTravelAlliance\SearchQualifierType;

/**
 * Class representing ResidencyAType
 */
class ResidencyAType
{

    /**
     * The standard code or abbreviation for the state, province, or region.
     *
     * @property string $stateProvCode
     */
    private $stateProvCode = null;

    /**
     * 2 character country code as defined in ISO3166.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as stateProvCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @return string
     */
    public function getStateProvCode()
    {
        return $this->stateProvCode;
    }

    /**
     * Sets a new stateProvCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @param string $stateProvCode
     * @return self
     */
    public function setStateProvCode($stateProvCode)
    {
        $this->stateProvCode = $stateProvCode;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * 2 character country code as defined in ISO3166.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * 2 character country code as defined in ISO3166.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }


}

