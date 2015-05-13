<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing CourseRestrictionsAType
 */
class CourseRestrictionsAType extends DateTimeSpanType
{

    /**
     * The type of facility and/or tee time restriction.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A description of the facility and/or tee time restriction.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as type
     *
     * The type of facility and/or tee time restriction.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of facility and/or tee time restriction.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the facility and/or tee time restriction.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the facility and/or tee time restriction.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

