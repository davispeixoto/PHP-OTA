<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailAvailPrefsType
 *
 * Defines information used to express traveler preferences when requesting rail
 * avilability information.
 * XSD Type: RailAvailPrefsType
 */
class RailAvailPrefsType
{

    /**
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $operatorPref
     */
    private $operatorPref = null;

    /**
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType\TransportModesAType[]
     * $transportModes
     */
    private $transportModes = null;

    /**
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     * $railAmenities
     */
    private $railAmenities = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     */
    private $classCodes = null;

    /**
     * Accommodations and services offered on a train.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     * $accommodationCategory
     */
    private $accommodationCategory = null;

    /**
     * Adds as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $operatorPref
     */
    public function addToOperatorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;

        return $this;
    }

    /**
     * isset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref)
    {
        $this->operatorPref = $operatorPref;

        return $this;
    }

    /**
     * Adds as transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType\TransportModesAType
     * $transportModes
     */
    public function addToTransportModes(
        \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType\TransportModesAType $transportModes
    ) {
        $this->transportModes[] = $transportModes;

        return $this;
    }

    /**
     * isset transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransportModes($index)
    {
        return isset($this->transportModes[$index]);
    }

    /**
     * unset transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransportModes($index)
    {
        unset($this->transportModes[$index]);
    }

    /**
     * Gets as transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType\TransportModesAType[]
     */
    public function getTransportModes()
    {
        return $this->transportModes;
    }

    /**
     * Sets a new transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the
     * itinerary. For example, some journies may require that a bus be used to connect
     * between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType\TransportModesAType[]
     * $transportModes
     * @return self
     */
    public function setTransportModes(array $transportModes)
    {
        $this->transportModes = $transportModes;

        return $this;
    }

    /**
     * Adds as railAmenity
     *
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType
     * $railAmenity
     */
    public function addToRailAmenities(\Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType $railAmenity)
    {
        $this->railAmenities[] = $railAmenity;

        return $this;
    }

    /**
     * isset railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailAmenities($index)
    {
        return isset($this->railAmenities[$index]);
    }

    /**
     * unset railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailAmenities($index)
    {
        unset($this->railAmenities[$index]);
    }

    /**
     * Gets as railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     */
    public function getRailAmenities()
    {
        return $this->railAmenities;
    }

    /**
     * Sets a new railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as
     * WiFi.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAmenityType\RailAmenityAType[]
     * $railAmenities
     * @return self
     */
    public function setRailAmenities(array $railAmenities)
    {
        $this->railAmenities = $railAmenities;

        return $this;
    }

    /**
     * Adds as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes
     */
    public function addToClassCodes(\Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes)
    {
        $this->classCodes[] = $classCodes;

        return $this;
    }

    /**
     * isset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClassCodes($index)
    {
        return isset($this->classCodes[$index]);
    }

    /**
     * unset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClassCodes($index)
    {
        unset($this->classCodes[$index]);
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType[]
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     * @return self
     */
    public function setClassCodes(array $classCodes)
    {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Gets as accommodationCategory
     *
     * Accommodations and services offered on a train.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     */
    public function getAccommodationCategory()
    {
        return $this->accommodationCategory;
    }

    /**
     * Sets a new accommodationCategory
     *
     * Accommodations and services offered on a train.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     * $accommodationCategory
     * @return self
     */
    public function setAccommodationCategory(
        \Davispeixoto\OpenTravelAlliance\AccommodationCategory $accommodationCategory
    ) {
        $this->accommodationCategory = $accommodationCategory;

        return $this;
    }


}

