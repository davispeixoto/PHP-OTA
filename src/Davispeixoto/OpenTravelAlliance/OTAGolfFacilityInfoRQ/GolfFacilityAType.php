<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfFacilityInfoRQ;

/**
 * Class representing GolfFacilityAType
 */
class GolfFacilityAType
{

    /**
     * The ID of the facility or course.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The full or partial name of the golf facility or course.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as iD
     *
     * The ID of the facility or course.
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
     * The ID of the facility or course.
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
     * The full or partial name of the golf facility or course.
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
     * The full or partial name of the golf facility or course.
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

