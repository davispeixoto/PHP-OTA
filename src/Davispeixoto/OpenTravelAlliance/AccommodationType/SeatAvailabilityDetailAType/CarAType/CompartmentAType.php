<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType;

/**
 * Class representing CompartmentAType
 */
class CompartmentAType
{

    /**
     * The compartment number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * The compartment position, such as close to restaurant car.
     *
     * @property string $position
     */
    private $position = null;

    /**
     * A seat in this compartment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[]
     * $seat
     */
    private $seat = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * The compartment position, such as close to restaurant car.
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
     * The compartment position, such as close to restaurant car.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Adds as seat
     *
     * A seat in this compartment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType
     * $seat
     */
    public function addToSeat(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType $seat
    ) {
        $this->seat[] = $seat;

        return $this;
    }

    /**
     * isset seat
     *
     * A seat in this compartment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeat($index)
    {
        return isset($this->seat[$index]);
    }

    /**
     * unset seat
     *
     * A seat in this compartment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeat($index)
    {
        unset($this->seat[$index]);
    }

    /**
     * Gets as seat
     *
     * A seat in this compartment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[]
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * A seat in this compartment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType\CompartmentAType\SeatAType[]
     * $seat
     * @return self
     */
    public function setSeat(array $seat)
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

