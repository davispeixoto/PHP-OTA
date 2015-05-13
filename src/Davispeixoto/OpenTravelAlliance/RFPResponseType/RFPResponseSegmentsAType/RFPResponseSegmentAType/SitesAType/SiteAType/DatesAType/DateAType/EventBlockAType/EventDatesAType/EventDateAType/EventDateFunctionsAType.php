<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType;

/**
 * Class representing EventDateFunctionsAType
 */
class EventDateFunctionsAType
{

    /**
     * This denotes the way a charge is applied (e.g. per day, first time use, per
     * hour). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $chargeType
     */
    private $chargeType = null;

    /**
     * A container for the events requirements data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType\EventDateFunctionAType[]
     * $eventDateFunction
     */
    private $eventDateFunction = null;

    /**
     * Gets as chargeType
     *
     * This denotes the way a charge is applied (e.g. per day, first time use, per
     * hour). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * Sets a new chargeType
     *
     * This denotes the way a charge is applied (e.g. per day, first time use, per
     * hour). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeType
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;

        return $this;
    }

    /**
     * Adds as eventDateFunction
     *
     * A container for the events requirements data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType\EventDateFunctionAType
     * $eventDateFunction
     */
    public function addToEventDateFunction(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType\EventDateFunctionAType $eventDateFunction
    ) {
        $this->eventDateFunction[] = $eventDateFunction;

        return $this;
    }

    /**
     * isset eventDateFunction
     *
     * A container for the events requirements data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDateFunction($index)
    {
        return isset($this->eventDateFunction[$index]);
    }

    /**
     * unset eventDateFunction
     *
     * A container for the events requirements data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDateFunction($index)
    {
        unset($this->eventDateFunction[$index]);
    }

    /**
     * Gets as eventDateFunction
     *
     * A container for the events requirements data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType\EventDateFunctionAType[]
     */
    public function getEventDateFunction()
    {
        return $this->eventDateFunction;
    }

    /**
     * Sets a new eventDateFunction
     *
     * A container for the events requirements data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\EventBlockAType\EventDatesAType\EventDateAType\EventDateFunctionsAType\EventDateFunctionAType[]
     * $eventDateFunction
     * @return self
     */
    public function setEventDateFunction(array $eventDateFunction)
    {
        $this->eventDateFunction = $eventDateFunction;

        return $this;
    }


}

