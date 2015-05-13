<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType;

/**
 * Class representing AddressAType
 */
class AddressAType
{

    /**
     * Type defines the type of address (e.g. home, business, other) and MUST refer to
     * OpenTravel Code List Communication Location Type (CLT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * AddressLine MUST contain the free form address for the guest.
     *
     * @property string[] $addressLine
     */
    private $addressLine = null;

    /**
     * CityName MAY provide the city (e.g., Dublin), town, or postal station (i.e., a
     * postal service territory, often used in a military address).
     *
     * @property string $cityName
     */
    private $cityName = null;

    /**
     * PostCode MAY contain the post office code number for the address.
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * County MAY specify the county or region name (e.g., Fairfax) for the address.
     *
     * @property string $county
     */
    private $county = null;

    /**
     * StateProv MAY specify the state or province name (e.g., Texas) for the address.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\StateProvAType
     * $stateProv
     */
    private $stateProv = null;

    /**
     * The CountryName MAY specify the country (e.g., Ireland) for the address. The
     * CountryCode MUST specify the country code for the address.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\CountryNameAType
     * $countryName
     */
    private $countryName = null;

    /**
     * CompanyName MUST identify a company by name.
     *
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * Gets as type
     *
     * Type defines the type of address (e.g. home, business, other) and MUST refer to
     * OpenTravel Code List Communication Location Type (CLT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type defines the type of address (e.g. home, business, other) and MUST refer to
     * OpenTravel Code List Communication Location Type (CLT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Adds as addressLine
     *
     * AddressLine MUST contain the free form address for the guest.
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;

        return $this;
    }

    /**
     * isset addressLine
     *
     * AddressLine MUST contain the free form address for the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * AddressLine MUST contain the free form address for the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * AddressLine MUST contain the free form address for the guest.
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * AddressLine MUST contain the free form address for the guest.
     *
     * @param string $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;

        return $this;
    }

    /**
     * Gets as cityName
     *
     * CityName MAY provide the city (e.g., Dublin), town, or postal station (i.e., a
     * postal service territory, often used in a military address).
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
     * CityName MAY provide the city (e.g., Dublin), town, or postal station (i.e., a
     * postal service territory, often used in a military address).
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
     * Gets as postalCode
     *
     * PostCode MAY contain the post office code number for the address.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * PostCode MAY contain the post office code number for the address.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets as county
     *
     * County MAY specify the county or region name (e.g., Fairfax) for the address.
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * County MAY specify the county or region name (e.g., Fairfax) for the address.
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Gets as stateProv
     *
     * StateProv MAY specify the state or province name (e.g., Texas) for the address.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\StateProvAType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * StateProv MAY specify the state or province name (e.g., Texas) for the address.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\StateProvAType
     * $stateProv
     * @return self
     */
    public function setStateProv(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\StateProvAType $stateProv
    ) {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as countryName
     *
     * The CountryName MAY specify the country (e.g., Ireland) for the address. The
     * CountryCode MUST specify the country code for the address.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\CountryNameAType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * The CountryName MAY specify the country (e.g., Ireland) for the address. The
     * CountryCode MUST specify the country code for the address.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\CountryNameAType
     * $countryName
     * @return self
     */
    public function setCountryName(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType\AddressAType\CountryNameAType $countryName
    ) {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * CompanyName MUST identify a company by name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * CompanyName MUST identify a company by name.
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }


}

