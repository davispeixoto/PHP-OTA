<?php

namespace Davispeixoto\OpenTravelAlliance\CacheType;

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
     * @property \DateTime $end
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
     * @return \DateTime
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
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
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


}

