<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

/**
 * Class representing ScoreCardAType
 */
class ScoreCardAType
{

    /**
     * The total yardage for all holes at the golf facility.
     *
     * @property integer $totalYardage
     */
    private $totalYardage = null;

    /**
     * The par for the course.
     *
     * @property integer $coursePar
     */
    private $coursePar = null;

    /**
     * The slope of the golf course.
     *
     * @property string $courseSlope
     */
    private $courseSlope = null;

    /**
     * The hole number.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * The yardage for the hole.
     *
     * @property integer $yardage
     */
    private $yardage = null;

    /**
     * The handicap for the hole.
     *
     * @property integer $handicap
     */
    private $handicap = null;

    /**
     * The slope for the hole.
     *
     * @property string $slope
     */
    private $slope = null;

    /**
     * The tee position for the hole.
     *
     * @property string $teePosition
     */
    private $teePosition = null;

    /**
     * The par for the hole.
     *
     * @property integer $par
     */
    private $par = null;

    /**
     * Gets as totalYardage
     *
     * The total yardage for all holes at the golf facility.
     *
     * @return integer
     */
    public function getTotalYardage()
    {
        return $this->totalYardage;
    }

    /**
     * Sets a new totalYardage
     *
     * The total yardage for all holes at the golf facility.
     *
     * @param integer $totalYardage
     * @return self
     */
    public function setTotalYardage($totalYardage)
    {
        $this->totalYardage = $totalYardage;

        return $this;
    }

    /**
     * Gets as coursePar
     *
     * The par for the course.
     *
     * @return integer
     */
    public function getCoursePar()
    {
        return $this->coursePar;
    }

    /**
     * Sets a new coursePar
     *
     * The par for the course.
     *
     * @param integer $coursePar
     * @return self
     */
    public function setCoursePar($coursePar)
    {
        $this->coursePar = $coursePar;

        return $this;
    }

    /**
     * Gets as courseSlope
     *
     * The slope of the golf course.
     *
     * @return string
     */
    public function getCourseSlope()
    {
        return $this->courseSlope;
    }

    /**
     * Sets a new courseSlope
     *
     * The slope of the golf course.
     *
     * @param string $courseSlope
     * @return self
     */
    public function setCourseSlope($courseSlope)
    {
        $this->courseSlope = $courseSlope;

        return $this;
    }

    /**
     * Gets as number
     *
     * The hole number.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The hole number.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as yardage
     *
     * The yardage for the hole.
     *
     * @return integer
     */
    public function getYardage()
    {
        return $this->yardage;
    }

    /**
     * Sets a new yardage
     *
     * The yardage for the hole.
     *
     * @param integer $yardage
     * @return self
     */
    public function setYardage($yardage)
    {
        $this->yardage = $yardage;

        return $this;
    }

    /**
     * Gets as handicap
     *
     * The handicap for the hole.
     *
     * @return integer
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Sets a new handicap
     *
     * The handicap for the hole.
     *
     * @param integer $handicap
     * @return self
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Gets as slope
     *
     * The slope for the hole.
     *
     * @return string
     */
    public function getSlope()
    {
        return $this->slope;
    }

    /**
     * Sets a new slope
     *
     * The slope for the hole.
     *
     * @param string $slope
     * @return self
     */
    public function setSlope($slope)
    {
        $this->slope = $slope;

        return $this;
    }

    /**
     * Gets as teePosition
     *
     * The tee position for the hole.
     *
     * @return string
     */
    public function getTeePosition()
    {
        return $this->teePosition;
    }

    /**
     * Sets a new teePosition
     *
     * The tee position for the hole.
     *
     * @param string $teePosition
     * @return self
     */
    public function setTeePosition($teePosition)
    {
        $this->teePosition = $teePosition;

        return $this;
    }

    /**
     * Gets as par
     *
     * The par for the hole.
     *
     * @return integer
     */
    public function getPar()
    {
        return $this->par;
    }

    /**
     * Sets a new par
     *
     * The par for the hole.
     *
     * @param integer $par
     * @return self
     */
    public function setPar($par)
    {
        $this->par = $par;

        return $this;
    }


}

