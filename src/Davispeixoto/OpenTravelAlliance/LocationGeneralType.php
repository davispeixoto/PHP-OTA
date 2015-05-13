<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing LocationGeneralType
 *
 * Provides high-level information regarding a location.
 * XSD Type: LocationGeneralType
 */
class LocationGeneralType
{

    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory,
     * often used in a military address).
     *
     * @property string $cityName
     */
    private $cityName = null;

    /**
     * State or Province name (e.g., Texas).
     *
     * @property \Davispeixoto\OpenTravelAlliance\StateProvType $stateProv
     */
    private $stateProv = null;

    /**
     * Country name (e.g., Ireland).
     *
     * @property \Davispeixoto\OpenTravelAlliance\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory,
     * often used in a military address).
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory,
     * often used in a military address).
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Gets as stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @return \Davispeixoto\OpenTravelAlliance\StateProvType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @param \Davispeixoto\OpenTravelAlliance\StateProvType $stateProv
     * @return self
     */
    public function setStateProv(\Davispeixoto\OpenTravelAlliance\StateProvType $stateProv)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(\Davispeixoto\OpenTravelAlliance\CountryNameType $countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

