<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing EventContactAType
 */
class EventContactAType extends ContactPersonType
{

    /**
     * Specifies the role of the contact (e.g., event planner, informational contact).
     *
     * @property string $role
     */
    private $role = null;

    /**
     * Gets as role
     *
     * Specifies the role of the contact (e.g., event planner, informational contact).
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
     * Specifies the role of the contact (e.g., event planner, informational contact).
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }


}

