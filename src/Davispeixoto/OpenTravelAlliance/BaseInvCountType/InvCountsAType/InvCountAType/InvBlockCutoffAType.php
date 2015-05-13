<?php

namespace Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType;

/**
 * Class representing InvBlockCutoffAType
 */
class InvBlockCutoffAType
{

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $absoluteCutoff
     */
    private $absoluteCutoff = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @property \DateInterval $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @property string $offsetCalculationMode
     */
    private $offsetCalculationMode = null;

    /**
     * Gets as absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getAbsoluteCutoff()
    {
        return $this->absoluteCutoff;
    }

    /**
     * Sets a new absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff
     * @return self
     */
    public function setAbsoluteCutoff(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $absoluteCutoff)
    {
        $this->absoluteCutoff = $absoluteCutoff;

        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return \DateInterval
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param \DateInterval $offsetDuration
     * @return self
     */
    public function setOffsetDuration(\DateInterval $offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;

        return $this;
    }

    /**
     * Gets as offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @return string
     */
    public function getOffsetCalculationMode()
    {
        return $this->offsetCalculationMode;
    }

    /**
     * Sets a new offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general
     * inventory of unbooked rooms in the inventory block .
     *
     * @param string $offsetCalculationMode
     * @return self
     */
    public function setOffsetCalculationMode($offsetCalculationMode)
    {
        $this->offsetCalculationMode = $offsetCalculationMode;

        return $this;
    }


}

