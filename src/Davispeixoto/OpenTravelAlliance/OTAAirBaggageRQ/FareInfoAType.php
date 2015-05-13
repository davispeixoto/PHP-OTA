<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

/**
 * Class representing FareInfoAType
 */
class FareInfoAType
{

    /**
     * Total passenger quantity.Example: 2Note: This is the total passenger quantity
     * for the entire itinerary.
     *
     * @property integer $totalTravelerQty
     */
    private $totalTravelerQty = null;

    /**
     * The total price for the entire itinerary for all passengers of all types.
     *
     * @property float $totalPrice
     */
    private $totalPrice = null;

    /**
     * Currency type.Example: USDNote: This does not need to be set if it is the same
     * as the @PricingCurrency.OpenTravel Best Practice: Currency Type Designation:
     * Unless otherwise noted, all currency code designations are three alpha
     * characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Currency decimal places.Example: 2Note: This does not need to be set if it is
     * the same as the @PricingCurrency.OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Fare Reference ID.Example: 1Note: This is a unique reference ID for one set of
     * fare information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @property string $fareInfoRPH
     */
    private $fareInfoRPH = null;

    /**
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Detailed fares and related information for the specified fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType\FareDetailAType[]
     * $fareDetail
     */
    private $fareDetail = null;

    /**
     * Gets as totalTravelerQty
     *
     * Total passenger quantity.Example: 2Note: This is the total passenger quantity
     * for the entire itinerary.
     *
     * @return integer
     */
    public function getTotalTravelerQty()
    {
        return $this->totalTravelerQty;
    }

    /**
     * Sets a new totalTravelerQty
     *
     * Total passenger quantity.Example: 2Note: This is the total passenger quantity
     * for the entire itinerary.
     *
     * @param integer $totalTravelerQty
     * @return self
     */
    public function setTotalTravelerQty($totalTravelerQty)
    {
        $this->totalTravelerQty = $totalTravelerQty;

        return $this;
    }

    /**
     * Gets as totalPrice
     *
     * The total price for the entire itinerary for all passengers of all types.
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * The total price for the entire itinerary for all passengers of all types.
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Currency type.Example: USDNote: This does not need to be set if it is the same
     * as the @PricingCurrency.OpenTravel Best Practice: Currency Type Designation:
     * Unless otherwise noted, all currency code designations are three alpha
     * characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Currency type.Example: USDNote: This does not need to be set if it is the same
     * as the @PricingCurrency.OpenTravel Best Practice: Currency Type Designation:
     * Unless otherwise noted, all currency code designations are three alpha
     * characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * Currency decimal places.Example: 2Note: This does not need to be set if it is
     * the same as the @PricingCurrency.OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * Currency decimal places.Example: 2Note: This does not need to be set if it is
     * the same as the @PricingCurrency.OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as fareInfoRPH
     *
     * Fare Reference ID.Example: 1Note: This is a unique reference ID for one set of
     * fare information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getFareInfoRPH()
    {
        return $this->fareInfoRPH;
    }

    /**
     * Sets a new fareInfoRPH
     *
     * Fare Reference ID.Example: 1Note: This is a unique reference ID for one set of
     * fare information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @param string $fareInfoRPH
     * @return self
     */
    public function setFareInfoRPH($fareInfoRPH)
    {
        $this->fareInfoRPH = $fareInfoRPH;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Traveler Reference ID.Example: 2Note: This traveler reference ID was defined
     * elsewhere in this message.OpenTravel Best Practice: Using Reference Place
     * Holders: The reference place holder (RPH) is a unique ID assigned to an instance
     * in a collection of like items (e.g. used to assign a unique ID to each passenger
     * in a list of passengers. When referencing an RPH, the same RPH type is used to
     * identify the assigned unique ID in an element that references the item in a
     * collection.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Adds as fareDetail
     *
     * Detailed fares and related information for the specified fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType\FareDetailAType
     * $fareDetail
     */
    public function addToFareDetail(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType\FareDetailAType $fareDetail
    ) {
        $this->fareDetail[] = $fareDetail;

        return $this;
    }

    /**
     * isset fareDetail
     *
     * Detailed fares and related information for the specified fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareDetail($index)
    {
        return isset($this->fareDetail[$index]);
    }

    /**
     * unset fareDetail
     *
     * Detailed fares and related information for the specified fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareDetail($index)
    {
        unset($this->fareDetail[$index]);
    }

    /**
     * Gets as fareDetail
     *
     * Detailed fares and related information for the specified fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType\FareDetailAType[]
     */
    public function getFareDetail()
    {
        return $this->fareDetail;
    }

    /**
     * Sets a new fareDetail
     *
     * Detailed fares and related information for the specified fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType\FareDetailAType[]
     * $fareDetail
     * @return self
     */
    public function setFareDetail(array $fareDetail)
    {
        $this->fareDetail = $fareDetail;

        return $this;
    }


}

