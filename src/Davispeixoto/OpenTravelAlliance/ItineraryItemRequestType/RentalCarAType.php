<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType;

use Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType;

/**
 * Class representing RentalCarAType
 */
class RentalCarAType extends VehicleRentalCoreType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The name or type of vehicle e.g. 'Opel Corsa or similar'.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The supplier's code for the vehicle.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name or type of vehicle e.g. 'Opel Corsa or similar'.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name or type of vehicle e.g. 'Opel Corsa or similar'.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as code
     *
     * The supplier's code for the vehicle.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The supplier's code for the vehicle.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

