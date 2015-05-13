<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRS;

/**
 * Class representing SegmentAType
 */
class SegmentAType
{

    /**
     * Number identifying the segment item that was cancelled.
     *
     * @property integer $itinSegNbr
     */
    private $itinSegNbr = null;

    /**
     * Contains the supplier's cancellation or confirmation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Warning information for the segment that was requested to be cancelled.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Gets as itinSegNbr
     *
     * Number identifying the segment item that was cancelled.
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
     * Number identifying the segment item that was cancelled.
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
     * Adds as uniqueID
     *
     * Contains the supplier's cancellation or confirmation number.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Contains the supplier's cancellation or confirmation number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Contains the supplier's cancellation or confirmation number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Contains the supplier's cancellation or confirmation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Contains the supplier's cancellation or confirmation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Warning information for the segment that was requested to be cancelled.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Warning information for the segment that was requested to be cancelled.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Warning information for the segment that was requested to be cancelled.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Warning information for the segment that was requested to be cancelled.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Warning information for the segment that was requested to be cancelled.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }


}

