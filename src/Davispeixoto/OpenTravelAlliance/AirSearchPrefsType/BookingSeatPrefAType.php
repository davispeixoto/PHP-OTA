<?php

namespace Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

/**
 * Class representing BookingSeatPrefAType
 */
class BookingSeatPrefAType
{

    /**
     * The number of seats needed for the designated booking class.
     *
     * @property integer $seatsNeeded
     */
    private $seatsNeeded = null;

    /**
     * Booking class code
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @property string $resBookDesigCodeType
     */
    private $resBookDesigCodeType = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as seatsNeeded
     *
     * The number of seats needed for the designated booking class.
     *
     * @return integer
     */
    public function getSeatsNeeded()
    {
        return $this->seatsNeeded;
    }

    /**
     * Sets a new seatsNeeded
     *
     * The number of seats needed for the designated booking class.
     *
     * @param integer $seatsNeeded
     * @return self
     */
    public function setSeatsNeeded($seatsNeeded)
    {
        $this->seatsNeeded = $seatsNeeded;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Booking class code
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * Booking class code
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as resBookDesigCodeType
     *
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @return string
     */
    public function getResBookDesigCodeType()
    {
        return $this->resBookDesigCodeType;
    }

    /**
     * Sets a new resBookDesigCodeType
     *
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @param string $resBookDesigCodeType
     * @return self
     */
    public function setResBookDesigCodeType($resBookDesigCodeType)
    {
        $this->resBookDesigCodeType = $resBookDesigCodeType;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

