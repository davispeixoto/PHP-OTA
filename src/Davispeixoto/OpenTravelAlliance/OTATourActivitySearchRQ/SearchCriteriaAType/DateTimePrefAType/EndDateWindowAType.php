<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType;

/**
 * Class representing EndDateWindowAType
 */
class EndDateWindowAType
{

    /**
     * The earliest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $earliestDate
     */
    private $earliestDate = null;

    /**
     * The latest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $latestDate
     */
    private $latestDate = null;

    /**
     * The Day of Week of the starting date for the availability requested. Enumerated
     * values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday,
     * Thursday, Friday, Saturday, or Sunday.
     *
     * @property string $dOW
     */
    private $dOW = null;

    /**
     * Gets as earliestDate
     *
     * The earliest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getEarliestDate()
    {
        return $this->earliestDate;
    }

    /**
     * Sets a new earliestDate
     *
     * The earliest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $earliestDate
     * @return self
     */
    public function setEarliestDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $earliestDate)
    {
        $this->earliestDate = $earliestDate;

        return $this;
    }

    /**
     * Gets as latestDate
     *
     * The latest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getLatestDate()
    {
        return $this->latestDate;
    }

    /**
     * Sets a new latestDate
     *
     * The latest ending date/time for the availability requested, expressed in
     * dateTime format as prescribed by ISO 8601.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $latestDate
     * @return self
     */
    public function setLatestDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $latestDate)
    {
        $this->latestDate = $latestDate;

        return $this;
    }

    /**
     * Gets as dOW
     *
     * The Day of Week of the starting date for the availability requested. Enumerated
     * values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday,
     * Thursday, Friday, Saturday, or Sunday.
     *
     * @return string
     */
    public function getDOW()
    {
        return $this->dOW;
    }

    /**
     * Sets a new dOW
     *
     * The Day of Week of the starting date for the availability requested. Enumerated
     * values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday,
     * Thursday, Friday, Saturday, or Sunday.
     *
     * @param string $dOW
     * @return self
     */
    public function setDOW($dOW)
    {
        $this->dOW = $dOW;

        return $this;
    }


}

