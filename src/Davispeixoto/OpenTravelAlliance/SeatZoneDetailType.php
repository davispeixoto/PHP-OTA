<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatZoneDetailType
 *
 * Detailed information related to a zone of seating.
 * XSD Type: SeatZoneDetailType
 */
class SeatZoneDetailType
{

    /**
     * The unique seat zone ID.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The unique seat zone number or code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of the seat zone.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The seat zone description.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The total quantity of seats in the seat zone, including both available and
     * reserved seats.
     *
     * @property integer $totalSeatQty
     */
    private $totalSeatQty = null;

    /**
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SeatZoneDetailType\SeatTypeDetailAType[]
     * $seatTypeDetail
     */
    private $seatTypeDetail = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as iD
     *
     * The unique seat zone ID.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The unique seat zone ID.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as code
     *
     * The unique seat zone number or code.
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
     * The unique seat zone number or code.
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
     * The name of the seat zone.
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
     * The name of the seat zone.
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
     * Gets as description
     *
     * The seat zone description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The seat zone description.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as totalSeatQty
     *
     * The total quantity of seats in the seat zone, including both available and
     * reserved seats.
     *
     * @return integer
     */
    public function getTotalSeatQty()
    {
        return $this->totalSeatQty;
    }

    /**
     * Sets a new totalSeatQty
     *
     * The total quantity of seats in the seat zone, including both available and
     * reserved seats.
     *
     * @param integer $totalSeatQty
     * @return self
     */
    public function setTotalSeatQty($totalSeatQty)
    {
        $this->totalSeatQty = $totalSeatQty;

        return $this;
    }

    /**
     * Adds as seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneDetailType\SeatTypeDetailAType
     * $seatTypeDetail
     */
    public function addToSeatTypeDetail(
        \Davispeixoto\OpenTravelAlliance\SeatZoneDetailType\SeatTypeDetailAType $seatTypeDetail
    ) {
        $this->seatTypeDetail[] = $seatTypeDetail;

        return $this;
    }

    /**
     * isset seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatTypeDetail($index)
    {
        return isset($this->seatTypeDetail[$index]);
    }

    /**
     * unset seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatTypeDetail($index)
    {
        unset($this->seatTypeDetail[$index]);
    }

    /**
     * Gets as seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SeatZoneDetailType\SeatTypeDetailAType[]
     */
    public function getSeatTypeDetail()
    {
        return $this->seatTypeDetail;
    }

    /**
     * Sets a new seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available
     * quantity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneDetailType\SeatTypeDetailAType[]
     * $seatTypeDetail
     * @return self
     */
    public function setSeatTypeDetail(array $seatTypeDetail)
    {
        $this->seatTypeDetail = $seatTypeDetail;

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

