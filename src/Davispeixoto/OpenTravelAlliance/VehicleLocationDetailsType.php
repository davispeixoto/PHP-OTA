<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationDetailsType
 *
 * The VehicleLocationDetailsType complex type defines the core information that
 * describes a vehicle rental facility. Such information may include the code of
 * the facility, the name assigned to that facility, the address and telephone
 * number of the facility.
 * XSD Type: VehicleLocationDetailsType
 */
class VehicleLocationDetailsType
{

    /**
     * The AtAirport attribute identifies if the associated rental location serves an
     * airport.
     *
     * @property boolean $atAirport
     */
    private $atAirport = null;

    /**
     * Code used to identify the car rental location.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Name used to refer to the car rental location.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @property string $extendedLocationCode
     */
    private $extendedLocationCode = null;

    /**
     * Additional airport location codes associated with the primary airport.
     *
     * @property string[] $assocAirportLocList
     */
    private $assocAirportLocList = null;

    /**
     * Information about the physical address of the location
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     */
    private $address = null;

    /**
     * Information about the telephone numbers for this
     * location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Supplemental information about the rental facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType
     * $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Gets as atAirport
     *
     * The AtAirport attribute identifies if the associated rental location serves an
     * airport.
     *
     * @return boolean
     */
    public function getAtAirport()
    {
        return $this->atAirport;
    }

    /**
     * Sets a new atAirport
     *
     * The AtAirport attribute identifies if the associated rental location serves an
     * airport.
     *
     * @param boolean $atAirport
     * @return self
     */
    public function setAtAirport($atAirport)
    {
        $this->atAirport = $atAirport;

        return $this;
    }

    /**
     * Gets as code
     *
     * Code used to identify the car rental location.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code used to identify the car rental location.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * Name used to refer to the car rental location.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name used to refer to the car rental location.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Used to define which list the location code comes from (e.g. IATA, OAG, internal
     * company code).
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as extendedLocationCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @return string
     */
    public function getExtendedLocationCode()
    {
        return $this->extendedLocationCode;
    }

    /**
     * Sets a new extendedLocationCode
     *
     * Used for extended OAG code in conjunction with the OAG code which is sent in
     * Code.
     *
     * @param string $extendedLocationCode
     * @return self
     */
    public function setExtendedLocationCode($extendedLocationCode)
    {
        $this->extendedLocationCode = $extendedLocationCode;

        return $this;
    }

    /**
     * Adds as assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @return self
     * @param string $assocAirportLocList
     */
    public function addToAssocAirportLocList($assocAirportLocList)
    {
        $this->assocAirportLocList[] = $assocAirportLocList;

        return $this;
    }

    /**
     * isset assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssocAirportLocList($index)
    {
        return isset($this->assocAirportLocList[$index]);
    }

    /**
     * unset assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssocAirportLocList($index)
    {
        unset($this->assocAirportLocList[$index]);
    }

    /**
     * Gets as assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @return string[]
     */
    public function getAssocAirportLocList()
    {
        return $this->assocAirportLocList;
    }

    /**
     * Sets a new assocAirportLocList
     *
     * Additional airport location codes associated with the primary airport.
     *
     * @param string $assocAirportLocList
     * @return self
     */
    public function setAssocAirportLocList(array $assocAirportLocList)
    {
        $this->assocAirportLocList = $assocAirportLocList;

        return $this;
    }

    /**
     * Adds as address
     *
     * Information about the physical address of the location
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Information about the physical address of the location
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Information about the physical address of the location
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Information about the physical address of the location
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Information about the physical address of the location
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Information about the telephone numbers for this
     * location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType\TelephoneAType $telephone
    ) {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Information about the telephone numbers for this
     * location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Information about the telephone numbers for this
     * location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Information about the telephone numbers for this
     * location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Information about the telephone numbers for this
     * location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Supplemental information about the rental facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Supplemental information about the rental facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType
     * $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType $additionalInfo
    ) {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }


}

