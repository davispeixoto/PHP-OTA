<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelRefSummaryType
 *
 * Contains references to the DynamicPkgGuest the air search is for.
 * XSD Type: TravelRefSummaryType
 */
class TravelRefSummaryType
{

    /**
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     * $passengerTypeQuantities
     */
    private $passengerTypeQuantities = null;

    /**
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     * $travelerRefNumbers
     */
    private $travelerRefNumbers = null;

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     * $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * Adds as passengerTypeQuantity
     *
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     */
    public function addToPassengerTypeQuantities(
        \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType $passengerTypeQuantity
    ) {
        $this->passengerTypeQuantities[] = $passengerTypeQuantity;

        return $this;
    }

    /**
     * isset passengerTypeQuantities
     *
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerTypeQuantities($index)
    {
        return isset($this->passengerTypeQuantities[$index]);
    }

    /**
     * unset passengerTypeQuantities
     *
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerTypeQuantities($index)
    {
        unset($this->passengerTypeQuantities[$index]);
    }

    /**
     * Gets as passengerTypeQuantities
     *
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantities()
    {
        return $this->passengerTypeQuantities;
    }

    /**
     * Sets a new passengerTypeQuantities
     *
     * Specifies the PTCs associated with this component of the dynamic package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType[]
     * $passengerTypeQuantities
     * @return self
     */
    public function setPassengerTypeQuantities(array $passengerTypeQuantities)
    {
        $this->passengerTypeQuantities = $passengerTypeQuantities;

        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumbers(
        \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumbers[] = $travelerRefNumber;

        return $this;
    }

    /**
     * isset travelerRefNumbers
     *
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRefNumbers($index)
    {
        return isset($this->travelerRefNumbers[$index]);
    }

    /**
     * unset travelerRefNumbers
     *
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRefNumbers($index)
    {
        unset($this->travelerRefNumbers[$index]);
    }

    /**
     * Gets as travelerRefNumbers
     *
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumbers()
    {
        return $this->travelerRefNumbers;
    }

    /**
     * Sets a new travelerRefNumbers
     *
     * Contains the list of traveler RPHs for this component of the dynamic package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType\TravelerRefNumbersAType\TravelerRefNumberAType[]
     * $travelerRefNumbers
     * @return self
     */
    public function setTravelerRefNumbers(array $travelerRefNumbers)
    {
        $this->travelerRefNumbers = $travelerRefNumbers;

        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     */
    public function getPriceRequestInformation()
    {
        return $this->priceRequestInformation;
    }

    /**
     * Sets a new priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     * $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(
        \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType $priceRequestInformation
    ) {
        $this->priceRequestInformation = $priceRequestInformation;

        return $this;
    }


}

