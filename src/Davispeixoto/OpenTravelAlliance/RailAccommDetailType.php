<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailAccommDetailType
 *
 * Specific traveler requested accommodation information, including class and type,
 * and associated accommodation attributes such as seat, berth and compartment
 * number, position, direction and adjacent seating preferences.
 * XSD Type: RailAccommDetailType
 */
class RailAccommDetailType
{

    /**
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @property string $deck
     */
    private $deck = null;

    /**
     * Seat accommodation information, including the seat type and associated seat
     * attributes, such as seat number, position and direction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatDetailType $seat
     */
    private $seat = null;

    /**
     * Berth accommodation information, including berth type and associated berth
     * attributes, such as berth number and position.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BerthDetailType $berth
     */
    private $berth = null;

    /**
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationClassType $class
     */
    private $class = null;

    /**
     * Compartment accommodation information, including type and associated compartment
     * attributes such as number and position.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CompartmentAType
     * $compartment
     */
    private $compartment = null;

    /**
     * Car information, such as car number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CarAType $car
     */
    private $car = null;

    /**
     * Gets as deck
     *
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @return string
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Sets a new deck
     *
     * The deck level of the accommodation, such as Regular One Level and Lower.
     *
     * @param string $deck
     * @return self
     */
    public function setDeck($deck)
    {
        $this->deck = $deck;

        return $this;
    }

    /**
     * Gets as seat
     *
     * Seat accommodation information, including the seat type and associated seat
     * attributes, such as seat number, position and direction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatDetailType
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * Seat accommodation information, including the seat type and associated seat
     * attributes, such as seat number, position and direction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailType $seat
     * @return self
     */
    public function setSeat(\Davispeixoto\OpenTravelAlliance\SeatDetailType $seat)
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * Gets as berth
     *
     * Berth accommodation information, including berth type and associated berth
     * attributes, such as berth number and position.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BerthDetailType
     */
    public function getBerth()
    {
        return $this->berth;
    }

    /**
     * Sets a new berth
     *
     * Berth accommodation information, including berth type and associated berth
     * attributes, such as berth number and position.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BerthDetailType $berth
     * @return self
     */
    public function setBerth(\Davispeixoto\OpenTravelAlliance\BerthDetailType $berth)
    {
        $this->berth = $berth;

        return $this;
    }

    /**
     * Gets as class
     *
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * A commonly offered accommodation class, such as first class and second class.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationClassType $class
     * @return self
     */
    public function setClass(\Davispeixoto\OpenTravelAlliance\AccommodationClassType $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Gets as compartment
     *
     * Compartment accommodation information, including type and associated compartment
     * attributes such as number and position.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CompartmentAType
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * Compartment accommodation information, including type and associated compartment
     * attributes such as number and position.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CompartmentAType
     * $compartment
     * @return self
     */
    public function setCompartment(\Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CompartmentAType $compartment)
    {
        $this->compartment = $compartment;

        return $this;
    }

    /**
     * Gets as car
     *
     * Car information, such as car number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CarAType
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets a new car
     *
     * Car information, such as car number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CarAType $car
     * @return self
     */
    public function setCar(\Davispeixoto\OpenTravelAlliance\RailAccommDetailType\CarAType $car)
    {
        $this->car = $car;

        return $this;
    }


}

