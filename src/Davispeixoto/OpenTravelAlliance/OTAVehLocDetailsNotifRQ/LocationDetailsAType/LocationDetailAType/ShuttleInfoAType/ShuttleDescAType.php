<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextType;

/**
 * Class representing ShuttleDescAType
 */
class ShuttleDescAType extends FormattedTextType
{

    /**
     * A set of valid values for the textual information about the shuttle services
     * when renting from a rental facility.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * A set of valid values for the textual information about the shuttle services
     * when renting from a rental facility.
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
     * A set of valid values for the textual information about the shuttle services
     * when renting from a rental facility.
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

