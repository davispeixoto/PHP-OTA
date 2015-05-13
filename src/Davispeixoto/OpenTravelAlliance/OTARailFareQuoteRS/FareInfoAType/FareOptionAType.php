<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType;

/**
 * Class representing FareOptionAType
 */
class FareOptionAType
{

    /**
     * The type of the train. Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @property string $trainTypeCode
     */
    private $trainTypeCode = null;

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
     * If TRUE, blockout dates apply.
     *
     * @property boolean $blockoutDatesInd
     */
    private $blockoutDatesInd = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCode
     */
    private $classCode = null;

    /**
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     */
    private $accommodation = null;

    /**
     * Fare information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailFareType $fare
     */
    private $fare = null;

    /**
     * A collection of origin/destination information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Gets as trainTypeCode
     *
     * The type of the train. Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @return string
     */
    public function getTrainTypeCode()
    {
        return $this->trainTypeCode;
    }

    /**
     * Sets a new trainTypeCode
     *
     * The type of the train. Refer to OpenTravel Code List Train Type Code (TTC).
     *
     * @param string $trainTypeCode
     * @return self
     */
    public function setTrainTypeCode($trainTypeCode)
    {
        $this->trainTypeCode = $trainTypeCode;

        return $this;
    }

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

    /**
     * Gets as blockoutDatesInd
     *
     * If TRUE, blockout dates apply.
     *
     * @return boolean
     */
    public function getBlockoutDatesInd()
    {
        return $this->blockoutDatesInd;
    }

    /**
     * Sets a new blockoutDatesInd
     *
     * If TRUE, blockout dates apply.
     *
     * @param boolean $blockoutDatesInd
     * @return self
     */
    public function setBlockoutDatesInd($blockoutDatesInd)
    {
        $this->blockoutDatesInd = $blockoutDatesInd;

        return $this;
    }

    /**
     * Gets as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType
     */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
     * Sets a new classCode
     *
     * The class of inventory controlled services available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCode
     * @return self
     */
    public function setClassCode(\Davispeixoto\OpenTravelAlliance\ClassCodeType $classCode)
    {
        $this->classCode = $classCode;

        return $this;
    }

    /**
     * Gets as accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a
     * train that's occupied by a rail passenger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation
     * @return self
     */
    public function setAccommodation(\Davispeixoto\OpenTravelAlliance\AccommodationType $accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Gets as fare
     *
     * Fare information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailFareType
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * Sets a new fare
     *
     * Fare information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailFareType $fare
     * @return self
     */
    public function setFare(\Davispeixoto\OpenTravelAlliance\RailFareType $fare)
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * A collection of origin/destination information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * A collection of origin/destination information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * A collection of origin/destination information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * A collection of origin/destination information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * A collection of origin/destination information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }


}

