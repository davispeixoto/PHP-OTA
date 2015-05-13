<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType;

/**
 * Class representing FareDisplayInfoAType
 *
 * Rules for this priced option.
 */
class FareDisplayInfoAType
{

    /**
     * A reference used to identify this Fare Contract within this response. Usually an
     * ascending integer starting at 1.
     *
     * @property string $fareRPH
     */
    private $fareRPH = null;

    /**
     * Indication if fare not available for fare quotation.
     *
     * @property boolean $notAvailableForFareQuotation
     */
    private $notAvailableForFareQuotation = null;

    /**
     * Indicates how the fare may be applied, such as one way or roundtrip.
     *
     * @property string $fareApplicationType
     */
    private $fareApplicationType = null;

    /**
     * Reservation booking designator/Booking code.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * When true, maximum milage applies to the fare. When false, route applies to the
     * fare.
     *
     * @property boolean $mileageIndicator
     */
    private $mileageIndicator = null;

    /**
     * Date and time of last update to this fare contract.
     *
     * @property \DateTime $lastFareUpdate
     */
    private $lastFareUpdate = null;

    /**
     * Identify the fare contract as private, published or net.
     *
     * @property string $fareIndication
     */
    private $fareIndication = null;

    /**
     * Identifies whether the returned fare was constructed, published or created.
     *
     * @property string $fareStatus
     */
    private $fareStatus = null;

    /**
     * If true, electronic ticketing is required for this fare.
     *
     * @property boolean $eTicketRequiredInd
     */
    private $eTicketRequiredInd = null;

    /**
     * If true, this fare cannot be auto priced.
     *
     * @property boolean $restrictAutoPriceInd
     */
    private $restrictAutoPriceInd = null;

    /**
     * If true, a penalty applies to this fare for changes or cancellations.
     *
     * @property boolean $penaltyInd
     */
    private $penaltyInd = null;

    /**
     * If true, this is a new fare.
     *
     * @property boolean $newFareInd
     */
    private $newFareInd = null;

    /**
     * Specifies the routing number for this fare.
     *
     * @property integer $routingNumber
     */
    private $routingNumber = null;

    /**
     * Departure and Arrival Dates for this priced fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\TravelDatesAType
     * $travelDates
     */
    private $travelDates = null;

    /**
     * Fare reference can be used for either the fare basis code or the fare class
     * code.
     *
     * @property string $fareReference
     */
    private $fareReference = null;

    /**
     * Information regarding restrictions governing use of the fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RuleInfoAType
     * $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * The airline that filed the fare(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     */
    private $filingAirline = null;

    /**
     * The marketing airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Departure point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureLocation
     */
    private $departureLocation = null;

    /**
     * Arrival point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     */
    private $arrivalLocation = null;

    /**
     * Container for multiple restriction elements
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     * $restrictions
     */
    private $restrictions = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType
     * $pricingInfo
     */
    private $pricingInfo = null;

    /**
     * Information for a fare that can be distributed by others.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\NetFareAType[]
     * $netFare
     */
    private $netFare = null;

    /**
     * Gets as fareRPH
     *
     * A reference used to identify this Fare Contract within this response. Usually an
     * ascending integer starting at 1.
     *
     * @return string
     */
    public function getFareRPH()
    {
        return $this->fareRPH;
    }

    /**
     * Sets a new fareRPH
     *
     * A reference used to identify this Fare Contract within this response. Usually an
     * ascending integer starting at 1.
     *
     * @param string $fareRPH
     * @return self
     */
    public function setFareRPH($fareRPH)
    {
        $this->fareRPH = $fareRPH;

        return $this;
    }

    /**
     * Gets as notAvailableForFareQuotation
     *
     * Indication if fare not available for fare quotation.
     *
     * @return boolean
     */
    public function getNotAvailableForFareQuotation()
    {
        return $this->notAvailableForFareQuotation;
    }

    /**
     * Sets a new notAvailableForFareQuotation
     *
     * Indication if fare not available for fare quotation.
     *
     * @param boolean $notAvailableForFareQuotation
     * @return self
     */
    public function setNotAvailableForFareQuotation($notAvailableForFareQuotation)
    {
        $this->notAvailableForFareQuotation = $notAvailableForFareQuotation;

        return $this;
    }

    /**
     * Gets as fareApplicationType
     *
     * Indicates how the fare may be applied, such as one way or roundtrip.
     *
     * @return string
     */
    public function getFareApplicationType()
    {
        return $this->fareApplicationType;
    }

    /**
     * Sets a new fareApplicationType
     *
     * Indicates how the fare may be applied, such as one way or roundtrip.
     *
     * @param string $fareApplicationType
     * @return self
     */
    public function setFareApplicationType($fareApplicationType)
    {
        $this->fareApplicationType = $fareApplicationType;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Reservation booking designator/Booking code.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * Reservation booking designator/Booking code.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as mileageIndicator
     *
     * When true, maximum milage applies to the fare. When false, route applies to the
     * fare.
     *
     * @return boolean
     */
    public function getMileageIndicator()
    {
        return $this->mileageIndicator;
    }

    /**
     * Sets a new mileageIndicator
     *
     * When true, maximum milage applies to the fare. When false, route applies to the
     * fare.
     *
     * @param boolean $mileageIndicator
     * @return self
     */
    public function setMileageIndicator($mileageIndicator)
    {
        $this->mileageIndicator = $mileageIndicator;

        return $this;
    }

    /**
     * Gets as lastFareUpdate
     *
     * Date and time of last update to this fare contract.
     *
     * @return \DateTime
     */
    public function getLastFareUpdate()
    {
        return $this->lastFareUpdate;
    }

    /**
     * Sets a new lastFareUpdate
     *
     * Date and time of last update to this fare contract.
     *
     * @param \DateTime $lastFareUpdate
     * @return self
     */
    public function setLastFareUpdate(\DateTime $lastFareUpdate)
    {
        $this->lastFareUpdate = $lastFareUpdate;

        return $this;
    }

    /**
     * Gets as fareIndication
     *
     * Identify the fare contract as private, published or net.
     *
     * @return string
     */
    public function getFareIndication()
    {
        return $this->fareIndication;
    }

    /**
     * Sets a new fareIndication
     *
     * Identify the fare contract as private, published or net.
     *
     * @param string $fareIndication
     * @return self
     */
    public function setFareIndication($fareIndication)
    {
        $this->fareIndication = $fareIndication;

        return $this;
    }

    /**
     * Gets as fareStatus
     *
     * Identifies whether the returned fare was constructed, published or created.
     *
     * @return string
     */
    public function getFareStatus()
    {
        return $this->fareStatus;
    }

    /**
     * Sets a new fareStatus
     *
     * Identifies whether the returned fare was constructed, published or created.
     *
     * @param string $fareStatus
     * @return self
     */
    public function setFareStatus($fareStatus)
    {
        $this->fareStatus = $fareStatus;

        return $this;
    }

    /**
     * Gets as eTicketRequiredInd
     *
     * If true, electronic ticketing is required for this fare.
     *
     * @return boolean
     */
    public function getETicketRequiredInd()
    {
        return $this->eTicketRequiredInd;
    }

    /**
     * Sets a new eTicketRequiredInd
     *
     * If true, electronic ticketing is required for this fare.
     *
     * @param boolean $eTicketRequiredInd
     * @return self
     */
    public function setETicketRequiredInd($eTicketRequiredInd)
    {
        $this->eTicketRequiredInd = $eTicketRequiredInd;

        return $this;
    }

    /**
     * Gets as restrictAutoPriceInd
     *
     * If true, this fare cannot be auto priced.
     *
     * @return boolean
     */
    public function getRestrictAutoPriceInd()
    {
        return $this->restrictAutoPriceInd;
    }

    /**
     * Sets a new restrictAutoPriceInd
     *
     * If true, this fare cannot be auto priced.
     *
     * @param boolean $restrictAutoPriceInd
     * @return self
     */
    public function setRestrictAutoPriceInd($restrictAutoPriceInd)
    {
        $this->restrictAutoPriceInd = $restrictAutoPriceInd;

        return $this;
    }

    /**
     * Gets as penaltyInd
     *
     * If true, a penalty applies to this fare for changes or cancellations.
     *
     * @return boolean
     */
    public function getPenaltyInd()
    {
        return $this->penaltyInd;
    }

    /**
     * Sets a new penaltyInd
     *
     * If true, a penalty applies to this fare for changes or cancellations.
     *
     * @param boolean $penaltyInd
     * @return self
     */
    public function setPenaltyInd($penaltyInd)
    {
        $this->penaltyInd = $penaltyInd;

        return $this;
    }

    /**
     * Gets as newFareInd
     *
     * If true, this is a new fare.
     *
     * @return boolean
     */
    public function getNewFareInd()
    {
        return $this->newFareInd;
    }

    /**
     * Sets a new newFareInd
     *
     * If true, this is a new fare.
     *
     * @param boolean $newFareInd
     * @return self
     */
    public function setNewFareInd($newFareInd)
    {
        $this->newFareInd = $newFareInd;

        return $this;
    }

    /**
     * Gets as routingNumber
     *
     * Specifies the routing number for this fare.
     *
     * @return integer
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * Sets a new routingNumber
     *
     * Specifies the routing number for this fare.
     *
     * @param integer $routingNumber
     * @return self
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }

    /**
     * Gets as travelDates
     *
     * Departure and Arrival Dates for this priced fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\TravelDatesAType
     */
    public function getTravelDates()
    {
        return $this->travelDates;
    }

    /**
     * Sets a new travelDates
     *
     * Departure and Arrival Dates for this priced fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\TravelDatesAType
     * $travelDates
     * @return self
     */
    public function setTravelDates(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\TravelDatesAType $travelDates
    ) {
        $this->travelDates = $travelDates;

        return $this;
    }

    /**
     * Gets as fareReference
     *
     * Fare reference can be used for either the fare basis code or the fare class
     * code.
     *
     * @return string
     */
    public function getFareReference()
    {
        return $this->fareReference;
    }

    /**
     * Sets a new fareReference
     *
     * Fare reference can be used for either the fare basis code or the fare class
     * code.
     *
     * @param string $fareReference
     * @return self
     */
    public function setFareReference($fareReference)
    {
        $this->fareReference = $fareReference;

        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RuleInfoAType
     * $ruleInfo
     * @return self
     */
    public function setRuleInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RuleInfoAType $ruleInfo
    ) {
        $this->ruleInfo = $ruleInfo;

        return $this;
    }

    /**
     * Gets as filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFilingAirline()
    {
        return $this->filingAirline;
    }

    /**
     * Sets a new filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     * @return self
     */
    public function setFilingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline)
    {
        $this->filingAirline = $filingAirline;

        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * The marketing airline.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline
     */
    public function addToMarketingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline)
    {
        $this->marketingAirline[] = $marketingAirline;

        return $this;
    }

    /**
     * isset marketingAirline
     *
     * The marketing airline.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingAirline($index)
    {
        return isset($this->marketingAirline[$index]);
    }

    /**
     * unset marketingAirline
     *
     * The marketing airline.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingAirline($index)
    {
        unset($this->marketingAirline[$index]);
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Gets as departureLocation
     *
     * Departure point of flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Sets a new departureLocation
     *
     * Departure point of flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureLocation
     * @return self
     */
    public function setDepartureLocation(\Davispeixoto\OpenTravelAlliance\LocationType $departureLocation)
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }

    /**
     * Gets as arrivalLocation
     *
     * Arrival point of flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalLocation()
    {
        return $this->arrivalLocation;
    }

    /**
     * Sets a new arrivalLocation
     *
     * Arrival point of flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     * @return self
     */
    public function setArrivalLocation(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation)
    {
        $this->arrivalLocation = $arrivalLocation;

        return $this;
    }

    /**
     * Adds as restriction
     *
     * Container for multiple restriction elements
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType
     * $restriction
     */
    public function addToRestrictions(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType $restriction
    ) {
        $this->restrictions[] = $restriction;

        return $this;
    }

    /**
     * isset restrictions
     *
     * Container for multiple restriction elements
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestrictions($index)
    {
        return isset($this->restrictions[$index]);
    }

    /**
     * unset restrictions
     *
     * Container for multiple restriction elements
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestrictions($index)
    {
        unset($this->restrictions[$index]);
    }

    /**
     * Gets as restrictions
     *
     * Container for multiple restriction elements
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * Container for multiple restriction elements
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     * $restrictions
     * @return self
     */
    public function setRestrictions(array $restrictions)
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Gets as pricingInfo
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType
     */
    public function getPricingInfo()
    {
        return $this->pricingInfo;
    }

    /**
     * Sets a new pricingInfo
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType
     * $pricingInfo
     * @return self
     */
    public function setPricingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType $pricingInfo
    ) {
        $this->pricingInfo = $pricingInfo;

        return $this;
    }

    /**
     * Adds as netFare
     *
     * Information for a fare that can be distributed by others.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\NetFareAType
     * $netFare
     */
    public function addToNetFare(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\NetFareAType $netFare
    ) {
        $this->netFare[] = $netFare;

        return $this;
    }

    /**
     * isset netFare
     *
     * Information for a fare that can be distributed by others.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNetFare($index)
    {
        return isset($this->netFare[$index]);
    }

    /**
     * unset netFare
     *
     * Information for a fare that can be distributed by others.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNetFare($index)
    {
        unset($this->netFare[$index]);
    }

    /**
     * Gets as netFare
     *
     * Information for a fare that can be distributed by others.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\NetFareAType[]
     */
    public function getNetFare()
    {
        return $this->netFare;
    }

    /**
     * Sets a new netFare
     *
     * Information for a fare that can be distributed by others.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\NetFareAType[]
     * $netFare
     * @return self
     */
    public function setNetFare(array $netFare)
    {
        $this->netFare = $netFare;

        return $this;
    }


}

