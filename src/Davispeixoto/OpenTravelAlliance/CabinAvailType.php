<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinAvailType
 *
 * Identifies a section of an aircraft, possibly providing extra services.
 * XSD Type: CabinAvailType
 */
class CabinAvailType
{

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Specifies the meal provided.
     *
     * @property string $meal
     */
    private $meal = null;

    /**
     * Specifies seat availability by class withn a cabin
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[] $seat
     */
    private $seat = null;

    /**
     * Provides the maximum weight of checked-in bags per passenger in this cabin
     *
     * @property \Davispeixoto\OpenTravelAlliance\CabinAvailType\BaggageAllowanceAType
     * $baggageAllowance
     */
    private $baggageAllowance = null;

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
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
     * Provides the code identifying the item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an item.
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
     * The name of an item.
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
     * Gets as meal
     *
     * Specifies the meal provided.
     *
     * @return string
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * Specifies the meal provided.
     *
     * @param string $meal
     * @return self
     */
    public function setMeal($meal)
    {
        $this->meal = $meal;

        return $this;
    }

    /**
     * Adds as seat
     *
     * Specifies seat availability by class withn a cabin
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seat
     */
    public function addToSeat(\Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seat)
    {
        $this->seat[] = $seat;

        return $this;
    }

    /**
     * isset seat
     *
     * Specifies seat availability by class withn a cabin
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
     * Specifies seat availability by class withn a cabin
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
     * Specifies seat availability by class withn a cabin
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[]
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * Specifies seat availability by class withn a cabin
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[] $seat
     * @return self
     */
    public function setSeat(array $seat)
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * Gets as baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin
     *
     * @return \Davispeixoto\OpenTravelAlliance\CabinAvailType\BaggageAllowanceAType
     */
    public function getBaggageAllowance()
    {
        return $this->baggageAllowance;
    }

    /**
     * Sets a new baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin
     *
     * @param \Davispeixoto\OpenTravelAlliance\CabinAvailType\BaggageAllowanceAType
     * $baggageAllowance
     * @return self
     */
    public function setBaggageAllowance(
        \Davispeixoto\OpenTravelAlliance\CabinAvailType\BaggageAllowanceAType $baggageAllowance
    ) {
        $this->baggageAllowance = $baggageAllowance;

        return $this;
    }


}

