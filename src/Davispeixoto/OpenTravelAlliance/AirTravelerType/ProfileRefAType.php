<?php

namespace Davispeixoto\OpenTravelAlliance\AirTravelerType;

/**
 * Class representing ProfileRefAType
 */
class ProfileRefAType
{

    /**
     * An identifier used to uniquely reference a customer profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as uniqueID
     *
     * An identifier used to uniquely reference a customer profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * An identifier used to uniquely reference a customer profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

