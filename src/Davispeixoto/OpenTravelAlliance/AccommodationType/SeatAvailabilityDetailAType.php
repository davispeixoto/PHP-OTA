<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType;

/**
 * Class representing SeatAvailabilityDetailAType
 */
class SeatAvailabilityDetailAType
{

    /**
     * A car on this train.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     * $car
     */
    private $car = null;

    /**
     * Adds as car
     *
     * A car on this train.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType
     * $car
     */
    public function addToCar(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType $car
    ) {
        $this->car[] = $car;

        return $this;
    }

    /**
     * isset car
     *
     * A car on this train.
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
     * A car on this train.
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
     * A car on this train.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * A car on this train.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     * $car
     * @return self
     */
    public function setCar(array $car)
    {
        $this->car = $car;

        return $this;
    }


}

