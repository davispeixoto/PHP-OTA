<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatZoneSummaryType
 *
 * Summary information related to a zone of seating.
 * XSD Type: SeatZoneSummaryType
 */
class SeatZoneSummaryType
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
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @property string $type
     */
    private $type = null;

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
     * Gets as type
     *
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

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

