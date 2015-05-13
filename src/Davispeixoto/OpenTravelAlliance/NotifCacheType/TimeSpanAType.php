<?php

namespace Davispeixoto\OpenTravelAlliance\NotifCacheType;

/**
 * Class representing TimeSpanAType
 */
class TimeSpanAType
{

    /**
     * The start date of information that should be updated in the cache.
     *
     * @property \DateTime $start
     */
    private $start = null;

    /**
     * The end date of information that should be updated in the cache.
     *
     * @property string $end
     */
    private $end = null;

    /**
     * If not present, indicates that everything between the Start and End date has
     * changed.
     *
     * @property string $changeDateMask
     */
    private $changeDateMask = null;

    /**
     * Length of Stay indicates how many days of availability from start date should be
     * shopped.
     *
     * @property integer $lengthOfStay
     */
    private $lengthOfStay = null;

    /**
     * Full Pattern Length Of Stay to indicate which days from start date should be
     * shopped.
     *
     * @property string $fPLOS
     */
    private $fPLOS = null;

    /**
     * Gets as start
     *
     * The start date of information that should be updated in the cache.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The start date of information that should be updated in the cache.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as end
     *
     * The end date of information that should be updated in the cache.
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The end date of information that should be updated in the cache.
     *
     * @param string $end
     * @return self
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as changeDateMask
     *
     * If not present, indicates that everything between the Start and End date has
     * changed.
     *
     * @return string
     */
    public function getChangeDateMask()
    {
        return $this->changeDateMask;
    }

    /**
     * Sets a new changeDateMask
     *
     * If not present, indicates that everything between the Start and End date has
     * changed.
     *
     * @param string $changeDateMask
     * @return self
     */
    public function setChangeDateMask($changeDateMask)
    {
        $this->changeDateMask = $changeDateMask;

        return $this;
    }

    /**
     * Gets as lengthOfStay
     *
     * Length of Stay indicates how many days of availability from start date should be
     * shopped.
     *
     * @return integer
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }

    /**
     * Sets a new lengthOfStay
     *
     * Length of Stay indicates how many days of availability from start date should be
     * shopped.
     *
     * @param integer $lengthOfStay
     * @return self
     */
    public function setLengthOfStay($lengthOfStay)
    {
        $this->lengthOfStay = $lengthOfStay;

        return $this;
    }

    /**
     * Gets as fPLOS
     *
     * Full Pattern Length Of Stay to indicate which days from start date should be
     * shopped.
     *
     * @return string
     */
    public function getFPLOS()
    {
        return $this->fPLOS;
    }

    /**
     * Sets a new fPLOS
     *
     * Full Pattern Length Of Stay to indicate which days from start date should be
     * shopped.
     *
     * @param string $fPLOS
     * @return self
     */
    public function setFPLOS($fPLOS)
    {
        $this->fPLOS = $fPLOS;

        return $this;
    }


}

