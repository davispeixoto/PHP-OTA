<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType;

/**
 * Class representing StartAndEndAType
 */
class StartAndEndAType
{

    /**
     * Start date or date and time.Example: 2013-01-13T20:32:00
     *
     * @property \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * End date or date and time.Example: 2013-01-13T23:37:00
     *
     * @property \DateTime $end
     */
    private $end = null;

    /**
     * Duration unit of measure and value.Example: Minute
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType\DurationAType
     * $duration
     */
    private $duration = null;

    /**
     * Gets as startDateTime
     *
     * Start date or date and time.Example: 2013-01-13T20:32:00
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * Start date or date and time.Example: 2013-01-13T20:32:00
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime)
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * Gets as end
     *
     * End date or date and time.Example: 2013-01-13T23:37:00
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
     * End date or date and time.Example: 2013-01-13T23:37:00
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
     * Gets as duration
     *
     * Duration unit of measure and value.Example: Minute
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Duration unit of measure and value.Example: Minute
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType\DurationAType
     * $duration
     * @return self
     */
    public function setDuration(
        \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType\DurationAType $duration
    ) {
        $this->duration = $duration;

        return $this;
    }


}

