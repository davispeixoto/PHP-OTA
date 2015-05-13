<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OffLocationServiceType
 *
 * The OffLocationServiceType complex type defines a specific off-location service.
 * XSD Type: OffLocationServiceType
 */
class OffLocationServiceType extends OffLocationServiceCoreType
{

    /**
     * Provides special instructions regarding the off location service (e.g., keys
     * with receptionist).
     *
     * @property string $specInstructions
     */
    private $specInstructions = null;

    /**
     * Name for the contact person for the off location service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Phone number for the contact person for the off location service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServiceType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * Can be used as a tracking number for delivery and collection.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $trackingID
     */
    private $trackingID = null;

    /**
     * Gets as specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys
     * with receptionist).
     *
     * @return string
     */
    public function getSpecInstructions()
    {
        return $this->specInstructions;
    }

    /**
     * Sets a new specInstructions
     *
     * Provides special instructions regarding the off location service (e.g., keys
     * with receptionist).
     *
     * @param string $specInstructions
     * @return self
     */
    public function setSpecInstructions($specInstructions)
    {
        $this->specInstructions = $specInstructions;

        return $this;
    }

    /**
     * Gets as personName
     *
     * Name for the contact person for the off location service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name for the contact person for the off location service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Davispeixoto\OpenTravelAlliance\PersonNameType $personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Phone number for the contact person for the off location service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType\TelephoneAType
     * $telephone
     * @return self
     */
    public function setTelephone(\Davispeixoto\OpenTravelAlliance\OffLocationServiceType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * Can be used as a tracking number for delivery and collection.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $trackingID
     * @return self
     */
    public function setTrackingID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $trackingID)
    {
        $this->trackingID = $trackingID;

        return $this;
    }


}

