<?php

namespace Davispeixoto\OpenTravelAlliance\ExtrasInfoType;

/**
 * Class representing CriteriaAType
 */
class CriteriaAType
{

    /**
     * The minimum age qualification for an extra.
     *
     * @property integer $minimumAge
     */
    private $minimumAge = null;

    /**
     * The maximum age qualification for an extra.
     *
     * @property integer $maximumAge
     */
    private $maximumAge = null;

    /**
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @property integer $yearsExperience
     */
    private $yearsExperience = null;

    /**
     * When 'true', a date must be supplied for the Extra request.
     *
     * @property boolean $dateRequiredInd
     */
    private $dateRequiredInd = null;

    /**
     * When 'true', a duration must be supplied for the Extra request.
     *
     * @property boolean $durationRequiredInd
     */
    private $durationRequiredInd = null;

    /**
     * When 'true', the availabilty of this extra needs to be checked; when 'false' the
     * extra is available.
     *
     * @property boolean $stockControlledInd
     */
    private $stockControlledInd = null;

    /**
     * The maximum number of people permitted for this extra (e.g. car occupancy)
     *
     * @property integer $maximumOccupancy
     */
    private $maximumOccupancy = null;

    /**
     * Gets as minimumAge
     *
     * The minimum age qualification for an extra.
     *
     * @return integer
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * The minimum age qualification for an extra.
     *
     * @param integer $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * The maximum age qualification for an extra.
     *
     * @return integer
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * The maximum age qualification for an extra.
     *
     * @param integer $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * Gets as yearsExperience
     *
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @return integer
     */
    public function getYearsExperience()
    {
        return $this->yearsExperience;
    }

    /**
     * Sets a new yearsExperience
     *
     * The minimum number of years of experience required to book this extra e.g.
     * driving experiience for car rental.
     *
     * @param integer $yearsExperience
     * @return self
     */
    public function setYearsExperience($yearsExperience)
    {
        $this->yearsExperience = $yearsExperience;

        return $this;
    }

    /**
     * Gets as dateRequiredInd
     *
     * When 'true', a date must be supplied for the Extra request.
     *
     * @return boolean
     */
    public function getDateRequiredInd()
    {
        return $this->dateRequiredInd;
    }

    /**
     * Sets a new dateRequiredInd
     *
     * When 'true', a date must be supplied for the Extra request.
     *
     * @param boolean $dateRequiredInd
     * @return self
     */
    public function setDateRequiredInd($dateRequiredInd)
    {
        $this->dateRequiredInd = $dateRequiredInd;

        return $this;
    }

    /**
     * Gets as durationRequiredInd
     *
     * When 'true', a duration must be supplied for the Extra request.
     *
     * @return boolean
     */
    public function getDurationRequiredInd()
    {
        return $this->durationRequiredInd;
    }

    /**
     * Sets a new durationRequiredInd
     *
     * When 'true', a duration must be supplied for the Extra request.
     *
     * @param boolean $durationRequiredInd
     * @return self
     */
    public function setDurationRequiredInd($durationRequiredInd)
    {
        $this->durationRequiredInd = $durationRequiredInd;

        return $this;
    }

    /**
     * Gets as stockControlledInd
     *
     * When 'true', the availabilty of this extra needs to be checked; when 'false' the
     * extra is available.
     *
     * @return boolean
     */
    public function getStockControlledInd()
    {
        return $this->stockControlledInd;
    }

    /**
     * Sets a new stockControlledInd
     *
     * When 'true', the availabilty of this extra needs to be checked; when 'false' the
     * extra is available.
     *
     * @param boolean $stockControlledInd
     * @return self
     */
    public function setStockControlledInd($stockControlledInd)
    {
        $this->stockControlledInd = $stockControlledInd;

        return $this;
    }

    /**
     * Gets as maximumOccupancy
     *
     * The maximum number of people permitted for this extra (e.g. car occupancy)
     *
     * @return integer
     */
    public function getMaximumOccupancy()
    {
        return $this->maximumOccupancy;
    }

    /**
     * Sets a new maximumOccupancy
     *
     * The maximum number of people permitted for this extra (e.g. car occupancy)
     *
     * @param integer $maximumOccupancy
     * @return self
     */
    public function setMaximumOccupancy($maximumOccupancy)
    {
        $this->maximumOccupancy = $maximumOccupancy;

        return $this;
    }


}

