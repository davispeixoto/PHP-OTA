<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType;

/**
 * Class representing DateTimeDescriptionAType
 */
class DateTimeDescriptionAType
{

    /**
     * This is an enumerated field specifying a code indicating the type of activity.
     * The enumerated codes are: A - Arrival Qualifier; D - Departure Qualifier; S -
     * Stay Qualifier; and B - Boarding Qualifier.
     *
     * @property string $dateTimeQualifier
     */
    private $dateTimeQualifier = null;

    /**
     * This field contains the actual date/time of the above activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTimeDetails
     */
    private $dateTimeDetails = null;

    /**
     * Provides the day of the week for the itinerary event.
     *
     * @property string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * Gets as dateTimeQualifier
     *
     * This is an enumerated field specifying a code indicating the type of activity.
     * The enumerated codes are: A - Arrival Qualifier; D - Departure Qualifier; S -
     * Stay Qualifier; and B - Boarding Qualifier.
     *
     * @return string
     */
    public function getDateTimeQualifier()
    {
        return $this->dateTimeQualifier;
    }

    /**
     * Sets a new dateTimeQualifier
     *
     * This is an enumerated field specifying a code indicating the type of activity.
     * The enumerated codes are: A - Arrival Qualifier; D - Departure Qualifier; S -
     * Stay Qualifier; and B - Boarding Qualifier.
     *
     * @param string $dateTimeQualifier
     * @return self
     */
    public function setDateTimeQualifier($dateTimeQualifier)
    {
        $this->dateTimeQualifier = $dateTimeQualifier;

        return $this;
    }

    /**
     * Gets as dateTimeDetails
     *
     * This field contains the actual date/time of the above activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateTimeDetails()
    {
        return $this->dateTimeDetails;
    }

    /**
     * Sets a new dateTimeDetails
     *
     * This field contains the actual date/time of the above activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTimeDetails
     * @return self
     */
    public function setDateTimeDetails(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTimeDetails)
    {
        $this->dateTimeDetails = $dateTimeDetails;

        return $this;
    }

    /**
     * Gets as dayOfWeek
     *
     * Provides the day of the week for the itinerary event.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * Provides the day of the week for the itinerary event.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }


}

