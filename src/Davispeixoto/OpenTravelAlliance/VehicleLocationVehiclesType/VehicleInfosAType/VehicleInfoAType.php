<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextType;

/**
 * Class representing VehicleInfoAType
 */
class VehicleInfoAType extends FormattedTextType
{

    /**
     * Identifies the type of Vehicle information that is provided..
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Vehicle information that is provided..
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
     * Identifies the type of Vehicle information that is provided..
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

