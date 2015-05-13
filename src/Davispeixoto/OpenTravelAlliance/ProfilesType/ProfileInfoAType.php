<?php

namespace Davispeixoto\OpenTravelAlliance\ProfilesType;

/**
 * Class representing ProfileInfoAType
 */
class ProfileInfoAType
{

    /**
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    private $profile = null;

    /**
     * Adds as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A unique ID for a profile. This element repeats to accommodate multiple unique
     * IDs for a single profile across multiple systems.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Provides detailed information regarding either a company or a customer profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     * @return self
     */
    public function setProfile(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profile = $profile;

        return $this;
    }


}

