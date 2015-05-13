<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PTCFareBreakdownType
 *
 * Per passenger type code pricing for this itinerary. Set if fareBreakdown was
 * requested.
 * XSD Type: PTCFareBreakdownType
 */
class PTCFareBreakdownType
{

    /**
     * Indicates whether the fare is public, private or both.
     *
     * @property string $pricingSource
     */
    private $pricingSource = null;

    /**
     * One or more flights to which this fare applies.
     *
     * @property string[] $flightRefNumberRPHList
     */
    private $flightRefNumberRPHList = null;

    /**
     * Number of individuals traveling under this PTC.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * This is a collection of fare basis codes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[] $fareBasisCodes
     */
    private $fareBasisCodes = null;

    /**
     * The total passenger fare with cost breakdown.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType[]
     * $passengerFare
     */
    private $passengerFare = null;

    /**
     * Contains the RPH reference to the traveler.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TravelerRefNumberAType[]
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * This is a collection of ticket designator elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     * $ticketDesignators
     */
    private $ticketDesignators = null;

    /**
     * Container for endorsements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType
     * $endorsements
     */
    private $endorsements = null;

    /**
     * Detailed information on individual priced fares.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\FareInfoAType[]
     * $fareInfo
     */
    private $fareInfo = null;

    /**
     * A pricing unit for a passenger type code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType[]
     * $pricingUnit
     */
    private $pricingUnit = null;

    /**
     * Gets as pricingSource
     *
     * Indicates whether the fare is public, private or both.
     *
     * @return string
     */
    public function getPricingSource()
    {
        return $this->pricingSource;
    }

    /**
     * Sets a new pricingSource
     *
     * Indicates whether the fare is public, private or both.
     *
     * @param string $pricingSource
     * @return self
     */
    public function setPricingSource($pricingSource)
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * Adds as flightRefNumberRPHList
     *
     * One or more flights to which this fare applies.
     *
     * @return self
     * @param string $flightRefNumberRPHList
     */
    public function addToFlightRefNumberRPHList($flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList[] = $flightRefNumberRPHList;

        return $this;
    }

    /**
     * isset flightRefNumberRPHList
     *
     * One or more flights to which this fare applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightRefNumberRPHList($index)
    {
        return isset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * unset flightRefNumberRPHList
     *
     * One or more flights to which this fare applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightRefNumberRPHList($index)
    {
        unset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * Gets as flightRefNumberRPHList
     *
     * One or more flights to which this fare applies.
     *
     * @return string[]
     */
    public function getFlightRefNumberRPHList()
    {
        return $this->flightRefNumberRPHList;
    }

    /**
     * Sets a new flightRefNumberRPHList
     *
     * One or more flights to which this fare applies.
     *
     * @param string $flightRefNumberRPHList
     * @return self
     */
    public function setFlightRefNumberRPHList(array $flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList = $flightRefNumberRPHList;

        return $this;
    }

    /**
     * Gets as passengerTypeQuantity
     *
     * Number of individuals traveling under this PTC.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Number of individuals traveling under this PTC.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(
        \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType $passengerTypeQuantity
    ) {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * Adds as fareBasisCode
     *
     * This is a collection of fare basis codes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     */
    public function addToFareBasisCodes(\Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCodes[] = $fareBasisCode;

        return $this;
    }

    /**
     * isset fareBasisCodes
     *
     * This is a collection of fare basis codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareBasisCodes($index)
    {
        return isset($this->fareBasisCodes[$index]);
    }

    /**
     * unset fareBasisCodes
     *
     * This is a collection of fare basis codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareBasisCodes($index)
    {
        unset($this->fareBasisCodes[$index]);
    }

    /**
     * Gets as fareBasisCodes
     *
     * This is a collection of fare basis codes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[]
     */
    public function getFareBasisCodes()
    {
        return $this->fareBasisCodes;
    }

    /**
     * Sets a new fareBasisCodes
     *
     * This is a collection of fare basis codes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[] $fareBasisCodes
     * @return self
     */
    public function setFareBasisCodes(array $fareBasisCodes)
    {
        $this->fareBasisCodes = $fareBasisCodes;

        return $this;
    }

    /**
     * Adds as passengerFare
     *
     * The total passenger fare with cost breakdown.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType
     * $passengerFare
     */
    public function addToPassengerFare(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType $passengerFare
    ) {
        $this->passengerFare[] = $passengerFare;

        return $this;
    }

    /**
     * isset passengerFare
     *
     * The total passenger fare with cost breakdown.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerFare($index)
    {
        return isset($this->passengerFare[$index]);
    }

    /**
     * unset passengerFare
     *
     * The total passenger fare with cost breakdown.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerFare($index)
    {
        unset($this->passengerFare[$index]);
    }

    /**
     * Gets as passengerFare
     *
     * The total passenger fare with cost breakdown.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType[]
     */
    public function getPassengerFare()
    {
        return $this->passengerFare;
    }

    /**
     * Sets a new passengerFare
     *
     * The total passenger fare with cost breakdown.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PassengerFareAType[]
     * $passengerFare
     * @return self
     */
    public function setPassengerFare(array $passengerFare)
    {
        $this->passengerFare = $passengerFare;

        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * Contains the RPH reference to the traveler.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TravelerRefNumberAType $travelerRefNumber
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
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TravelerRefNumberAType[]
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
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TravelerRefNumberAType[]
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Adds as ticketDesignator
     *
     * This is a collection of ticket designator elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType
     * $ticketDesignator
     */
    public function addToTicketDesignators(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType $ticketDesignator
    ) {
        $this->ticketDesignators[] = $ticketDesignator;

        return $this;
    }

    /**
     * isset ticketDesignators
     *
     * This is a collection of ticket designator elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDesignators($index)
    {
        return isset($this->ticketDesignators[$index]);
    }

    /**
     * unset ticketDesignators
     *
     * This is a collection of ticket designator elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDesignators($index)
    {
        unset($this->ticketDesignators[$index]);
    }

    /**
     * Gets as ticketDesignators
     *
     * This is a collection of ticket designator elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     */
    public function getTicketDesignators()
    {
        return $this->ticketDesignators;
    }

    /**
     * Sets a new ticketDesignators
     *
     * This is a collection of ticket designator elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\TicketDesignatorsAType\TicketDesignatorAType[]
     * $ticketDesignators
     * @return self
     */
    public function setTicketDesignators(array $ticketDesignators)
    {
        $this->ticketDesignators = $ticketDesignators;

        return $this;
    }

    /**
     * Gets as endorsements
     *
     * Container for endorsements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType
     */
    public function getEndorsements()
    {
        return $this->endorsements;
    }

    /**
     * Sets a new endorsements
     *
     * Container for endorsements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType
     * $endorsements
     * @return self
     */
    public function setEndorsements(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType $endorsements
    ) {
        $this->endorsements = $endorsements;

        return $this;
    }

    /**
     * Adds as fareInfo
     *
     * Detailed information on individual priced fares.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\FareInfoAType
     * $fareInfo
     */
    public function addToFareInfo(\Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\FareInfoAType $fareInfo)
    {
        $this->fareInfo[] = $fareInfo;

        return $this;
    }

    /**
     * isset fareInfo
     *
     * Detailed information on individual priced fares.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareInfo($index)
    {
        return isset($this->fareInfo[$index]);
    }

    /**
     * unset fareInfo
     *
     * Detailed information on individual priced fares.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareInfo($index)
    {
        unset($this->fareInfo[$index]);
    }

    /**
     * Gets as fareInfo
     *
     * Detailed information on individual priced fares.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Detailed information on individual priced fares.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\FareInfoAType[]
     * $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }

    /**
     * Adds as pricingUnit
     *
     * A pricing unit for a passenger type code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType
     * $pricingUnit
     */
    public function addToPricingUnit(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType $pricingUnit
    ) {
        $this->pricingUnit[] = $pricingUnit;

        return $this;
    }

    /**
     * isset pricingUnit
     *
     * A pricing unit for a passenger type code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingUnit($index)
    {
        return isset($this->pricingUnit[$index]);
    }

    /**
     * unset pricingUnit
     *
     * A pricing unit for a passenger type code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingUnit($index)
    {
        unset($this->pricingUnit[$index]);
    }

    /**
     * Gets as pricingUnit
     *
     * A pricing unit for a passenger type code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType[]
     */
    public function getPricingUnit()
    {
        return $this->pricingUnit;
    }

    /**
     * Sets a new pricingUnit
     *
     * A pricing unit for a passenger type code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\PricingUnitAType[]
     * $pricingUnit
     * @return self
     */
    public function setPricingUnit(array $pricingUnit)
    {
        $this->pricingUnit = $pricingUnit;

        return $this;
    }


}

