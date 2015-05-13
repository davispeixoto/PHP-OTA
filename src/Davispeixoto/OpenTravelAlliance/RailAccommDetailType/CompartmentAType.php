<?php

namespace Davispeixoto\OpenTravelAlliance\RailAccommDetailType;

use Davispeixoto\OpenTravelAlliance\CompartmentType;

/**
 * Class representing CompartmentAType
 */
class CompartmentAType extends CompartmentType
{

    /**
     * The compartment number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * The compartment position, such as Close to restaurant car.
     *
     * @property string $position
     */
    private $position = null;

    /**
     * Gets as number
     *
     * The compartment number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The compartment number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as position
     *
     * The compartment position, such as Close to restaurant car.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The compartment position, such as Close to restaurant car.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }


}

