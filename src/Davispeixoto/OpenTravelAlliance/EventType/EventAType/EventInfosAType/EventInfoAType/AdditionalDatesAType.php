<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing AdditionalDatesAType
 */
class AdditionalDatesAType
{

    /**
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDate
     */
    private $additionalDate = null;

    /**
     * Adds as additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType
     * $additionalDate
     */
    public function addToAdditionalDate(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
    ) {
        $this->additionalDate[] = $additionalDate;

        return $this;
    }

    /**
     * isset additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalDate($index)
    {
        return isset($this->additionalDate[$index]);
    }

    /**
     * unset additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalDate($index)
    {
        unset($this->additionalDate[$index]);
    }

    /**
     * Gets as additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDate()
    {
        return $this->additionalDate;
    }

    /**
     * Sets a new additionalDate
     *
     * Additional date/time information (e.g., dates and times associated with pre- and
     * post-convention meetings, major arrival and departure dates for event attendees,
     * group arrivals and departure dates).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDate
     * @return self
     */
    public function setAdditionalDate(array $additionalDate)
    {
        $this->additionalDate = $additionalDate;

        return $this;
    }


}

