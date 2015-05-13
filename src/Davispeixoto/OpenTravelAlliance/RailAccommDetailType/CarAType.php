<?php

namespace Davispeixoto\OpenTravelAlliance\RailAccommDetailType;

/**
 * Class representing CarAType
 */
class CarAType
{

    /**
     * The car number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Gets as number
     *
     * The car number.
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
     * The car number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }


}

