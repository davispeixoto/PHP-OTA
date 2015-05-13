<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyAddressType
 *
 * Address information with ontology reference.
 * XSD Type: OntologyAddressType
 */
class OntologyAddressType
{

    /**
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @property boolean $privacyInd
     */
    private $privacyInd = null;

    /**
     * Street.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StreetAType
     * $street
     */
    private $street = null;

    /**
     * City.Example: NYC
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CityAType $city
     */
    private $city = null;

    /**
     * State or province.Example: NY
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StateProvinceAType
     * $stateProvince
     */
    private $stateProvince = null;

    /**
     * Postal code.Example: NYC
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAddressType\PostalAType
     * $postal
     */
    private $postal = null;

    /**
     * Country.Example: USA
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CountryAType
     * $country
     */
    private $country = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as privacyInd
     *
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @return boolean
     */
    public function getPrivacyInd()
    {
        return $this->privacyInd;
    }

    /**
     * Sets a new privacyInd
     *
     * Information use and sharing restriction indicator.Example: trueImplementer: If
     * true, this traveler information may only be used to determine relevant offers.
     *
     * @param boolean $privacyInd
     * @return self
     */
    public function setPrivacyInd($privacyInd)
    {
        $this->privacyInd = $privacyInd;

        return $this;
    }

    /**
     * Gets as street
     *
     * Street.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StreetAType
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * Street.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StreetAType $street
     * @return self
     */
    public function setStreet(\Davispeixoto\OpenTravelAlliance\OntologyAddressType\StreetAType $street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets as city
     *
     * City.Example: NYC
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CityAType
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * City.Example: NYC
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CityAType $city
     * @return self
     */
    public function setCity(\Davispeixoto\OpenTravelAlliance\OntologyAddressType\CityAType $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets as stateProvince
     *
     * State or province.Example: NY
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StateProvinceAType
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Sets a new stateProvince
     *
     * State or province.Example: NY
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StateProvinceAType
     * $stateProvince
     * @return self
     */
    public function setStateProvince(
        \Davispeixoto\OpenTravelAlliance\OntologyAddressType\StateProvinceAType $stateProvince
    ) {
        $this->stateProvince = $stateProvince;

        return $this;
    }

    /**
     * Gets as postal
     *
     * Postal code.Example: NYC
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType\PostalAType
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Sets a new postal
     *
     * Postal code.Example: NYC
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType\PostalAType $postal
     * @return self
     */
    public function setPostal(\Davispeixoto\OpenTravelAlliance\OntologyAddressType\PostalAType $postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Gets as country
     *
     * Country.Example: USA
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CountryAType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country.Example: USA
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAddressType\CountryAType
     * $country
     * @return self
     */
    public function setCountry(\Davispeixoto\OpenTravelAlliance\OntologyAddressType\CountryAType $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}

