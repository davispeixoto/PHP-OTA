<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextType;

/**
 * Class representing RequirementInfoAType
 */
class RequirementInfoAType extends FormattedTextType
{

    /**
     * Identifies the type of Requirement information that is provided.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Requirement information that is provided.
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
     * Identifies the type of Requirement information that is provided.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

