<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeModifyType;

use Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType;

/**
 * Class representing AmenityAType
 */
class AmenityAType extends GolfAmenitySummaryType
{

    /**
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @property string $golferRPH
     */
    private $golferRPH = null;

    /**
     * The quantity of the amenity being reserved.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as golferRPH
     *
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @return string
     */
    public function getGolferRPH()
    {
        return $this->golferRPH;
    }

    /**
     * Sets a new golferRPH
     *
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @param string $golferRPH
     * @return self
     */
    public function setGolferRPH($golferRPH)
    {
        $this->golferRPH = $golferRPH;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of the amenity being reserved.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of the amenity being reserved.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


}

