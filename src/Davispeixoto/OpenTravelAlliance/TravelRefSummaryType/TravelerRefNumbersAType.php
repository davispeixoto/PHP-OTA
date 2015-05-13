<?php

namespace Davispeixoto\OpenTravelAlliance\TravelRefSummaryType;

/**
 * Class representing TravelerRefNumbersAType
 */
class TravelerRefNumbersAType
{

    /**
     * Contains the RPH reference to the traveler.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * Adds as travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber[] = $travelerRefNumber;

        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }


}

