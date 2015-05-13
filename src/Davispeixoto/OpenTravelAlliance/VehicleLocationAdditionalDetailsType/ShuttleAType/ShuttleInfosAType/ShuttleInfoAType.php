<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextType;

/**
 * Class representing ShuttleInfoAType
 */
class ShuttleInfoAType extends FormattedTextType
{

    /**
     * Identifies the type of Shuttle service information.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Shuttle service information.
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
     * Identifies the type of Shuttle service information.
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

