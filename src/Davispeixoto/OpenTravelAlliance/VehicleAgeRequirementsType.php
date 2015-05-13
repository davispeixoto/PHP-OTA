<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAgeRequirementsType
 *
 * The Vehicle Location Requirements Type is used to define information on the age
 * requirements that are in place with regard to the renting of a vehicle. These
 * are requirement that typically must be met by the renter before a rental may
 * commence.
 * XSD Type: VehicleAgeRequirementsType
 */
class VehicleAgeRequirementsType
{

    /**
     * Information associated with the age requirements of renting a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType
     * $age
     */
    private $age = null;

    /**
     * Gets as age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType $age
     * @return self
     */
    public function setAge(\Davispeixoto\OpenTravelAlliance\VehicleAgeRequirementsType\AgeAType $age)
    {
        $this->age = $age;

        return $this;
    }


}

