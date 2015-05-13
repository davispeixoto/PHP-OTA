<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType\AddlDriverInfosAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextType;

/**
 * Class representing AddlDriverInfoAType
 */
class AddlDriverInfoAType extends FormattedTextType
{

    /**
     * Identifies the type of Additional Driver information.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Additional Driver information.
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
     * Identifies the type of Additional Driver information.
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

