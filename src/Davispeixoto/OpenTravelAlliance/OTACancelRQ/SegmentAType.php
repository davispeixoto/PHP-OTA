<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ;

/**
 * Class representing SegmentAType
 */
class SegmentAType
{

    /**
     * Number identifying the segment item to be cancelled.
     *
     * @property integer $itinSegNbr
     */
    private $itinSegNbr = null;

    /**
     * The beginning number in a range that identifies the first segment item to be
     * cancelled.
     *
     * @property integer $firstItinSegNbr
     */
    private $firstItinSegNbr = null;

    /**
     * The last number in a range that identifies the last segment item to be
     * cancelled.
     *
     * @property integer $lastItinSegNbr
     */
    private $lastItinSegNbr = null;

    /**
     * Gets as itinSegNbr
     *
     * Number identifying the segment item to be cancelled.
     *
     * @return integer
     */
    public function getItinSegNbr()
    {
        return $this->itinSegNbr;
    }

    /**
     * Sets a new itinSegNbr
     *
     * Number identifying the segment item to be cancelled.
     *
     * @param integer $itinSegNbr
     * @return self
     */
    public function setItinSegNbr($itinSegNbr)
    {
        $this->itinSegNbr = $itinSegNbr;

        return $this;
    }

    /**
     * Gets as firstItinSegNbr
     *
     * The beginning number in a range that identifies the first segment item to be
     * cancelled.
     *
     * @return integer
     */
    public function getFirstItinSegNbr()
    {
        return $this->firstItinSegNbr;
    }

    /**
     * Sets a new firstItinSegNbr
     *
     * The beginning number in a range that identifies the first segment item to be
     * cancelled.
     *
     * @param integer $firstItinSegNbr
     * @return self
     */
    public function setFirstItinSegNbr($firstItinSegNbr)
    {
        $this->firstItinSegNbr = $firstItinSegNbr;

        return $this;
    }

    /**
     * Gets as lastItinSegNbr
     *
     * The last number in a range that identifies the last segment item to be
     * cancelled.
     *
     * @return integer
     */
    public function getLastItinSegNbr()
    {
        return $this->lastItinSegNbr;
    }

    /**
     * Sets a new lastItinSegNbr
     *
     * The last number in a range that identifies the last segment item to be
     * cancelled.
     *
     * @param integer $lastItinSegNbr
     * @return self
     */
    public function setLastItinSegNbr($lastItinSegNbr)
    {
        $this->lastItinSegNbr = $lastItinSegNbr;

        return $this;
    }


}

