<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirArrangerType
 *
 * Information about a person or entity associated with an air trip who will not be
 * traveling. This is generally used to describe one or more parties that may be
 * paying for a ticket and/or making the travel plans.
 * XSD Type: AirArrangerType
 */
class AirArrangerType
{

    /**
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @property string $role
     */
    private $role = null;

    /**
     * If travel agency, the agency IATA
     * number.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @property string $iATANumber
     */
    private $iATANumber = null;

    /**
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirArrangerType\ProfileRefAType
     * $profileRef
     */
    private $profileRef = null;

    /**
     * Name and contact person information for the company associated with the air
     * travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyInfo
     */
    private $companyInfo = null;

    /**
     * Name information for the person associated with the air travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $contactName
     */
    private $contactName = null;

    /**
     * Gets as role
     *
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Gets as iATANumber
     *
     * If travel agency, the agency IATA
     * number.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @return string
     */
    public function getIATANumber()
    {
        return $this->iATANumber;
    }

    /**
     * Sets a new iATANumber
     *
     * If travel agency, the agency IATA
     * number.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @param string $iATANumber
     * @return self
     */
    public function setIATANumber($iATANumber)
    {
        $this->iATANumber = $iATANumber;

        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirArrangerType\ProfileRefAType
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirArrangerType\ProfileRefAType
     * $profileRef
     * @return self
     */
    public function setProfileRef(\Davispeixoto\OpenTravelAlliance\AirArrangerType\ProfileRefAType $profileRef)
    {
        $this->profileRef = $profileRef;

        return $this;
    }

    /**
     * Gets as companyInfo
     *
     * Name and contact person information for the company associated with the air
     * travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo
     *
     * Name and contact person information for the company associated with the air
     * travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyInfo
     * @return self
     */
    public function setCompanyInfo(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyInfo)
    {
        $this->companyInfo = $companyInfo;

        return $this;
    }

    /**
     * Gets as contactName
     *
     * Name information for the person associated with the air travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * Name information for the person associated with the air travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $contactName
     * @return self
     */
    public function setContactName(\Davispeixoto\OpenTravelAlliance\PersonNameType $contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }


}

