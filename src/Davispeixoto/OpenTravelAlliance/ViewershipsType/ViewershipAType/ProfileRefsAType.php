<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfileRefsAType
 */
class ProfileRefsAType
{

    /**
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $profileRef
     */
    private $profileRef = null;

    /**
     * Adds as profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef
     */
    public function addToProfileRef(\Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef)
    {
        $this->profileRef[] = $profileRef;

        return $this;
    }

    /**
     * isset profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileRef($index)
    {
        return isset($this->profileRef[$index]);
    }

    /**
     * unset profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileRef($index)
    {
        unset($this->profileRef[$index]);
    }

    /**
     * Gets as profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * The actual Unique ID of the profile associated with the viewship, i.e. this is
     * the pointer to the profile on the trading partners system for the company,
     * agency, etc that is allowed to view this information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $profileRef
     * @return self
     */
    public function setProfileRef(array $profileRef)
    {
        $this->profileRef = $profileRef;

        return $this;
    }


}

