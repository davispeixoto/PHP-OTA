<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationInformationType
 *
 * Provides formatted textual information relating to the vehicle rental location.
 * The type of information is indicated in the @Type attribute that contains a
 * value from the OpenTravel Vehicle Location Information Type (VLI) code list.
 * XSD Type: VehicleLocationInformationType
 */
class VehicleLocationInformationType extends FormattedTextType
{

    /**
     * Identifies the type of Vehicle Location information that is provided. Refer to
     * OpenTravel Code List Vehicle Location Information Type (VLI).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Identifies the type of Vehicle Location information that is provided. Refer to
     * OpenTravel Code List Vehicle Location Information Type (VLI).
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
     * Identifies the type of Vehicle Location information that is provided. Refer to
     * OpenTravel Code List Vehicle Location Information Type (VLI).
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

