<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType;

/**
 * Class representing MembershipProgramAType
 */
class MembershipProgramAType
{

    /**
     * The ID of the loyalty program.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The name of the loyalty program.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as iD
     *
     * The ID of the loyalty program.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The ID of the loyalty program.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the loyalty program.
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
     * The name of the loyalty program.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


}

