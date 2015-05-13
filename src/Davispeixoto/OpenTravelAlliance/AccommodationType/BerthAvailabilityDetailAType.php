<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType;

/**
 * Class representing BerthAvailabilityDetailAType
 */
class BerthAvailabilityDetailAType
{

    /**
     * A berth on this train.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     * $car
     */
    private $car = null;

    /**
     * Adds as car
     *
     * A berth on this train.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType
     * $car
     */
    public function addToCar(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType $car
    ) {
        $this->car[] = $car;

        return $this;
    }

    /**
     * isset car
     *
     * A berth on this train.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCar($index)
    {
        return isset($this->car[$index]);
    }

    /**
     * unset car
     *
     * A berth on this train.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCar($index)
    {
        unset($this->car[$index]);
    }

    /**
     * Gets as car
     *
     * A berth on this train.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * A berth on this train.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     * $car
     * @return self
     */
    public function setCar(array $car)
    {
        $this->car = $car;

        return $this;
    }


}

