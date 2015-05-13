<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OffLocationServiceCoreType
 *
 * The OffLocationServiceCoreType complex type defines the core data that is used
 * to describe an off-location service.
 * XSD Type: OffLocationServiceCoreType
 */
class OffLocationServiceCoreType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * The address for vehicle delivery or collection, or for customer pickup or
     * drop-off.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OffLocationServiceCoreType\AddressAType
     * $address
     */
    private $address = null;

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as address
     *
     * The address for vehicle delivery or collection, or for customer pickup or
     * drop-off.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceCoreType\AddressAType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The address for vehicle delivery or collection, or for customer pickup or
     * drop-off.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceCoreType\AddressAType
     * $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\OffLocationServiceCoreType\AddressAType $address)
    {
        $this->address = $address;

        return $this;
    }


}

