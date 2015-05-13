<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantType;

use Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType;

/**
 * Class representing MultimediaDescriptionsAType
 */
class MultimediaDescriptionsAType extends MultimediaDescriptionsType
{

    /**
     * Used to pass restaurant attire information.
     *
     * @property string $attire
     */
    private $attire = null;

    /**
     * Gets as attire
     *
     * Used to pass restaurant attire information.
     *
     * @return string
     */
    public function getAttire()
    {
        return $this->attire;
    }

    /**
     * Sets a new attire
     *
     * Used to pass restaurant attire information.
     *
     * @param string $attire
     * @return self
     */
    public function setAttire($attire)
    {
        $this->attire = $attire;

        return $this;
    }


}

