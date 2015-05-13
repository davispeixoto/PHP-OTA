<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ExtrasType
 *
 * Requests an optional service which is not included in the standard package but
 * may be booked in addition.
 * XSD Type: ExtrasType
 */
class ExtrasType extends ExtrasCoreType
{

    /**
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @property string[] $listOfPassengerRPH
     */
    private $listOfPassengerRPH = null;

    /**
     * Specifies the date and/or duration for the option
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $date
     */
    private $date = null;

    /**
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $passengerCounts
     */
    private $passengerCounts = null;

    /**
     * Additional textual information is sometimes required when an option is selected.
     *
     * @property string $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Adds as listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return self
     * @param string $listOfPassengerRPH
     */
    public function addToListOfPassengerRPH($listOfPassengerRPH)
    {
        $this->listOfPassengerRPH[] = $listOfPassengerRPH;

        return $this;
    }

    /**
     * isset listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfPassengerRPH($index)
    {
        return isset($this->listOfPassengerRPH[$index]);
    }

    /**
     * unset listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfPassengerRPH($index)
    {
        unset($this->listOfPassengerRPH[$index]);
    }

    /**
     * Gets as listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @return string[]
     */
    public function getListOfPassengerRPH()
    {
        return $this->listOfPassengerRPH;
    }

    /**
     * Sets a new listOfPassengerRPH
     *
     * Where an option is applicable only to certain passengers, this attribute will
     * contain the ReferencePlaceHolders of the relevant passengers.
     *
     * @param string $listOfPassengerRPH
     * @return self
     */
    public function setListOfPassengerRPH(array $listOfPassengerRPH)
    {
        $this->listOfPassengerRPH = $listOfPassengerRPH;

        return $this;
    }

    /**
     * Gets as date
     *
     * Specifies the date and/or duration for the option
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies the date and/or duration for the option
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Adds as customerCount
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType
     * $customerCount
     */
    public function addToPassengerCounts(
        \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType $customerCount
    ) {
        $this->passengerCounts[] = $customerCount;

        return $this;
    }

    /**
     * isset passengerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerCounts($index)
    {
        return isset($this->passengerCounts[$index]);
    }

    /**
     * unset passengerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerCounts($index)
    {
        unset($this->passengerCounts[$index]);
    }

    /**
     * Gets as passengerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     */
    public function getPassengerCounts()
    {
        return $this->passengerCounts;
    }

    /**
     * Sets a new passengerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $passengerCounts
     * @return self
     */
    public function setPassengerCounts(array $passengerCounts)
    {
        $this->passengerCounts = $passengerCounts;

        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Additional textual information is sometimes required when an option is selected.
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Additional textual information is sometimes required when an option is selected.
     *
     * @param string $additionalInfo
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }


}

