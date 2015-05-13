<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing UniqueIDAType
 */
class UniqueIDAType extends UniqueIDType
{

    /**
     * The name of the facility that the golf course is associated with.
     *
     * @property string $associatedFacility
     */
    private $associatedFacility = null;

    /**
     * Gets as associatedFacility
     *
     * The name of the facility that the golf course is associated with.
     *
     * @return string
     */
    public function getAssociatedFacility()
    {
        return $this->associatedFacility;
    }

    /**
     * Sets a new associatedFacility
     *
     * The name of the facility that the golf course is associated with.
     *
     * @param string $associatedFacility
     * @return self
     */
    public function setAssociatedFacility($associatedFacility)
    {
        $this->associatedFacility = $associatedFacility;

        return $this;
    }


}

