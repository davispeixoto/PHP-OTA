<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType;

use Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType;

/**
 * Class representing PickUpReturnDetailsAType
 */
class PickUpReturnDetailsAType extends VehicleRentalCoreType
{

    /**
     * Used to identify the context of the element and whether the content applies to
     * expected data verses actual data. Actual data will not be known until the time
     * of CheckIn.
     *
     * @property string $expectedActualCode
     */
    private $expectedActualCode = null;

    /**
     * Gets as expectedActualCode
     *
     * Used to identify the context of the element and whether the content applies to
     * expected data verses actual data. Actual data will not be known until the time
     * of CheckIn.
     *
     * @return string
     */
    public function getExpectedActualCode()
    {
        return $this->expectedActualCode;
    }

    /**
     * Sets a new expectedActualCode
     *
     * Used to identify the context of the element and whether the content applies to
     * expected data verses actual data. Actual data will not be known until the time
     * of CheckIn.
     *
     * @param string $expectedActualCode
     * @return self
     */
    public function setExpectedActualCode($expectedActualCode)
    {
        $this->expectedActualCode = $expectedActualCode;

        return $this;
    }


}

