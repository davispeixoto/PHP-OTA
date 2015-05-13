<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType;

/**
 * Class representing ProfileTypeAType
 */
class ProfileTypeAType
{

    /**
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @property string $profileType
     */
    private $profileType = null;

    /**
     * Gets as profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;

        return $this;
    }


}

