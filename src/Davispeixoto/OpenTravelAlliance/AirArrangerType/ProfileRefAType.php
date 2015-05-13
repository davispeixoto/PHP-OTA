<?php

namespace Davispeixoto\OpenTravelAlliance\AirArrangerType;

/**
 * Class representing ProfileRefAType
 */
class ProfileRefAType
{

    /**
     * An identifier used to uniquely reference a customer profile.
     *
     * If OpenTravel Profile messages are used, the @ID attribute references a stored
     * ProfileType/@UserID attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as uniqueID
     *
     * An identifier used to uniquely reference a customer profile.
     *
     * If OpenTravel Profile messages are used, the @ID attribute references a stored
     * ProfileType/@UserID attribute.
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
     * If OpenTravel Profile messages are used, the @ID attribute references a stored
     * ProfileType/@UserID attribute.
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

