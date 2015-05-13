<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatIdentificationType
 *
 * Defines a specific seat on the train.
 * XSD Type: SeatIdentificationType
 */
class SeatIdentificationType
{

    /**
     * The number of the train carriage or car.
     *
     * @property integer $carNumber
     */
    private $carNumber = null;

    /**
     * The actual seat number on the train.
     *
     * @property mixed $seatNumber
     */
    private $seatNumber = null;

    /**
     * The preferred deck number that the seat is located on, such as "Lower Level" and
     * "Upper Level."
     *
     * @property string $deck
     */
    private $deck = null;

    /**
     * Gets as carNumber
     *
     * The number of the train carriage or car.
     *
     * @return integer
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * Sets a new carNumber
     *
     * The number of the train carriage or car.
     *
     * @param integer $carNumber
     * @return self
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;

        return $this;
    }

    /**
     * Gets as seatNumber
     *
     * The actual seat number on the train.
     *
     * @return mixed
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * The actual seat number on the train.
     *
     * @param mixed $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Gets as deck
     *
     * The preferred deck number that the seat is located on, such as "Lower Level" and
     * "Upper Level."
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
     * The preferred deck number that the seat is located on, such as "Lower Level" and
     * "Upper Level."
     *
     * @param string $deck
     * @return self
     */
    public function setDeck($deck)
    {
        $this->deck = $deck;

        return $this;
    }


}

