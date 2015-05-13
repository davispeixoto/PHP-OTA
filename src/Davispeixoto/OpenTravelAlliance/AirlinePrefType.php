<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirlinePrefType
 *
 * Identifies a collection of preferences for airline travel.
 * XSD Type: AirlinePrefType
 */
class AirlinePrefType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Type of airline ticket preferred for this collection.
     *
     * @property string $airTicketType
     */
    private $airTicketType = null;

    /**
     * Identifies the preferred loyalty program(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * Identifies the preferred airline carrier(s) by name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\VendorPrefAType[]
     * $vendorPref
     */
    private $vendorPref = null;

    /**
     * Preferred form(s) of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirportPrefType[] $airportOriginPref
     */
    private $airportOriginPref = null;

    /**
     * Identifies the preferred destination airport for travel (using IATA airport
     * codes).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirportPrefType
     * $airportDestinationPref
     */
    private $airportDestinationPref = null;

    /**
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirportPrefType[] $airportRoutePref
     */
    private $airportRoutePref = null;

    /**
     * Indicates preferred fare restrictions to be used in search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FareRestrictPrefAType[]
     * $fareRestrictPref
     */
    private $fareRestrictPref = null;

    /**
     * Indicates preferred fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FarePrefAType[]
     * $farePref
     */
    private $farePref = null;

    /**
     * Provides the contract code for a negotiated fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType[]
     * $tourCodePref
     */
    private $tourCodePref = null;

    /**
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FlightTypePrefAType[]
     * $flightTypePref
     */
    private $flightTypePref = null;

    /**
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[] $equipPref
     */
    private $equipPref = null;

    /**
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\CabinPrefAType[]
     * $cabinPref
     */
    private $cabinPref = null;

    /**
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SeatPrefAType[]
     * $seatPref
     */
    private $seatPref = null;

    /**
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     * $ticketDistribPref
     */
    private $ticketDistribPref = null;

    /**
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPrefType[] $mealPref
     */
    private $mealPref = null;

    /**
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     * $specRequestPref
     */
    private $specRequestPref = null;

    /**
     * Indicates Special Service Request preference type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SSRPrefAType[]
     * $sSRPref
     */
    private $sSRPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Media and entertainment preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     * $mediaEntertainPref
     */
    private $mediaEntertainPref = null;

    /**
     * Indicates preferred information for pet accompanying traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = null;

    /**
     * Information related to back office accounting information for the travel agency.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType
     * $accountInformation
     */
    private $accountInformation = null;

    /**
     * Other Service Information of the airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIPref
     */
    private $oSIPref = null;

    /**
     * This element stores data about an airline marketing keyword.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirlinePrefType\KeywordPrefAType[]
     * $keywordPref
     */
    private $keywordPref = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * Gets as airTicketType
     *
     * Type of airline ticket preferred for this collection.
     *
     * @return string
     */
    public function getAirTicketType()
    {
        return $this->airTicketType;
    }

    /**
     * Sets a new airTicketType
     *
     * Type of airline ticket preferred for this collection.
     *
     * @param string $airTicketType
     * @return self
     */
    public function setAirTicketType($airTicketType)
    {
        $this->airTicketType = $airTicketType;

        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Davispeixoto\OpenTravelAlliance\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;

        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref)
    {
        $this->loyaltyPref = $loyaltyPref;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\VendorPrefAType
     * $vendorPref
     */
    public function addToVendorPref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\VendorPrefAType[]
     * $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Davispeixoto\OpenTravelAlliance\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;

        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref)
    {
        $this->paymentFormPref = $paymentFormPref;

        return $this;
    }

    /**
     * Adds as airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirportPrefType $airportOriginPref
     */
    public function addToAirportOriginPref(\Davispeixoto\OpenTravelAlliance\AirportPrefType $airportOriginPref)
    {
        $this->airportOriginPref[] = $airportOriginPref;

        return $this;
    }

    /**
     * isset airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirportOriginPref($index)
    {
        return isset($this->airportOriginPref[$index]);
    }

    /**
     * unset airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirportOriginPref($index)
    {
        unset($this->airportOriginPref[$index]);
    }

    /**
     * Gets as airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirportPrefType[]
     */
    public function getAirportOriginPref()
    {
        return $this->airportOriginPref;
    }

    /**
     * Sets a new airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport
     * codes).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirportPrefType[] $airportOriginPref
     * @return self
     */
    public function setAirportOriginPref(array $airportOriginPref)
    {
        $this->airportOriginPref = $airportOriginPref;

        return $this;
    }

    /**
     * Gets as airportDestinationPref
     *
     * Identifies the preferred destination airport for travel (using IATA airport
     * codes).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirportPrefType
     */
    public function getAirportDestinationPref()
    {
        return $this->airportDestinationPref;
    }

    /**
     * Sets a new airportDestinationPref
     *
     * Identifies the preferred destination airport for travel (using IATA airport
     * codes).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirportPrefType $airportDestinationPref
     * @return self
     */
    public function setAirportDestinationPref(\Davispeixoto\OpenTravelAlliance\AirportPrefType $airportDestinationPref)
    {
        $this->airportDestinationPref = $airportDestinationPref;

        return $this;
    }

    /**
     * Adds as airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirportPrefType $airportRoutePref
     */
    public function addToAirportRoutePref(\Davispeixoto\OpenTravelAlliance\AirportPrefType $airportRoutePref)
    {
        $this->airportRoutePref[] = $airportRoutePref;

        return $this;
    }

    /**
     * isset airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirportRoutePref($index)
    {
        return isset($this->airportRoutePref[$index]);
    }

    /**
     * unset airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirportRoutePref($index)
    {
        unset($this->airportRoutePref[$index]);
    }

    /**
     * Gets as airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirportPrefType[]
     */
    public function getAirportRoutePref()
    {
        return $this->airportRoutePref;
    }

    /**
     * Sets a new airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirportPrefType[] $airportRoutePref
     * @return self
     */
    public function setAirportRoutePref(array $airportRoutePref)
    {
        $this->airportRoutePref = $airportRoutePref;

        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FareRestrictPrefAType
     * $fareRestrictPref
     */
    public function addToFareRestrictPref(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FareRestrictPrefAType $fareRestrictPref
    ) {
        $this->fareRestrictPref[] = $fareRestrictPref;

        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareRestrictPref($index)
    {
        return isset($this->fareRestrictPref[$index]);
    }

    /**
     * unset fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareRestrictPref($index)
    {
        unset($this->fareRestrictPref[$index]);
    }

    /**
     * Gets as fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FareRestrictPrefAType[]
     * $fareRestrictPref
     * @return self
     */
    public function setFareRestrictPref(array $fareRestrictPref)
    {
        $this->fareRestrictPref = $fareRestrictPref;

        return $this;
    }

    /**
     * Adds as farePref
     *
     * Indicates preferred fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FarePrefAType $farePref
     */
    public function addToFarePref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\FarePrefAType $farePref)
    {
        $this->farePref[] = $farePref;

        return $this;
    }

    /**
     * isset farePref
     *
     * Indicates preferred fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFarePref($index)
    {
        return isset($this->farePref[$index]);
    }

    /**
     * unset farePref
     *
     * Indicates preferred fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFarePref($index)
    {
        unset($this->farePref[$index]);
    }

    /**
     * Gets as farePref
     *
     * Indicates preferred fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FarePrefAType[]
     */
    public function getFarePref()
    {
        return $this->farePref;
    }

    /**
     * Sets a new farePref
     *
     * Indicates preferred fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FarePrefAType[]
     * $farePref
     * @return self
     */
    public function setFarePref(array $farePref)
    {
        $this->farePref = $farePref;

        return $this;
    }

    /**
     * Adds as tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType
     * $tourCodePref
     */
    public function addToTourCodePref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType $tourCodePref)
    {
        $this->tourCodePref[] = $tourCodePref;

        return $this;
    }

    /**
     * isset tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTourCodePref($index)
    {
        return isset($this->tourCodePref[$index]);
    }

    /**
     * unset tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTourCodePref($index)
    {
        unset($this->tourCodePref[$index]);
    }

    /**
     * Gets as tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType[]
     */
    public function getTourCodePref()
    {
        return $this->tourCodePref;
    }

    /**
     * Sets a new tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType[]
     * $tourCodePref
     * @return self
     */
    public function setTourCodePref(array $tourCodePref)
    {
        $this->tourCodePref = $tourCodePref;

        return $this;
    }

    /**
     * Adds as flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FlightTypePrefAType
     * $flightTypePref
     */
    public function addToFlightTypePref(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FlightTypePrefAType $flightTypePref
    ) {
        $this->flightTypePref[] = $flightTypePref;

        return $this;
    }

    /**
     * isset flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightTypePref($index)
    {
        return isset($this->flightTypePref[$index]);
    }

    /**
     * unset flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightTypePref($index)
    {
        unset($this->flightTypePref[$index]);
    }

    /**
     * Gets as flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FlightTypePrefAType[]
     */
    public function getFlightTypePref()
    {
        return $this->flightTypePref;
    }

    /**
     * Sets a new flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g.,
     * connections, stopovers).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\FlightTypePrefAType[]
     * $flightTypePref
     * @return self
     */
    public function setFlightTypePref(array $flightTypePref)
    {
        $this->flightTypePref = $flightTypePref;

        return $this;
    }

    /**
     * Adds as equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType $equipPref
     */
    public function addToEquipPref(\Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType $equipPref)
    {
        $this->equipPref[] = $equipPref;

        return $this;
    }

    /**
     * isset equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipPref($index)
    {
        return isset($this->equipPref[$index]);
    }

    /**
     * unset equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipPref($index)
    {
        unset($this->equipPref[$index]);
    }

    /**
     * Gets as equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[]
     */
    public function getEquipPref()
    {
        return $this->equipPref;
    }

    /**
     * Sets a new equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[] $equipPref
     * @return self
     */
    public function setEquipPref(array $equipPref)
    {
        $this->equipPref = $equipPref;

        return $this;
    }

    /**
     * Adds as cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\CabinPrefAType
     * $cabinPref
     */
    public function addToCabinPref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\CabinPrefAType $cabinPref)
    {
        $this->cabinPref[] = $cabinPref;

        return $this;
    }

    /**
     * isset cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinPref($index)
    {
        return isset($this->cabinPref[$index]);
    }

    /**
     * unset cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinPref($index)
    {
        unset($this->cabinPref[$index]);
    }

    /**
     * Gets as cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\CabinPrefAType[]
     */
    public function getCabinPref()
    {
        return $this->cabinPref;
    }

    /**
     * Sets a new cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\CabinPrefAType[]
     * $cabinPref
     * @return self
     */
    public function setCabinPref(array $cabinPref)
    {
        $this->cabinPref = $cabinPref;

        return $this;
    }

    /**
     * Adds as seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SeatPrefAType $seatPref
     */
    public function addToSeatPref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\SeatPrefAType $seatPref)
    {
        $this->seatPref[] = $seatPref;

        return $this;
    }

    /**
     * isset seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatPref($index)
    {
        return isset($this->seatPref[$index]);
    }

    /**
     * unset seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatPref($index)
    {
        unset($this->seatPref[$index]);
    }

    /**
     * Gets as seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SeatPrefAType[]
     */
    public function getSeatPref()
    {
        return $this->seatPref;
    }

    /**
     * Sets a new seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat
     * Preference (STP) for codes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SeatPrefAType[]
     * $seatPref
     * @return self
     */
    public function setSeatPref(array $seatPref)
    {
        $this->seatPref = $seatPref;

        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Davispeixoto\OpenTravelAlliance\TicketDistribPrefType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;

        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDistribPref($index)
    {
        return isset($this->ticketDistribPref[$index]);
    }

    /**
     * unset ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDistribPref($index)
    {
        unset($this->ticketDistribPref[$index]);
    }

    /**
     * Gets as ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @return \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail,
     * airport pickup)
     *
     * @param \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     * $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref)
    {
        $this->ticketDistribPref = $ticketDistribPref;

        return $this;
    }

    /**
     * Adds as mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPrefType $mealPref
     */
    public function addToMealPref(\Davispeixoto\OpenTravelAlliance\MealPrefType $mealPref)
    {
        $this->mealPref[] = $mealPref;

        return $this;
    }

    /**
     * isset mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealPref($index)
    {
        return isset($this->mealPref[$index]);
    }

    /**
     * unset mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealPref($index)
    {
        unset($this->mealPref[$index]);
    }

    /**
     * Gets as mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPrefType[] $mealPref
     * @return self
     */
    public function setMealPref(array $mealPref)
    {
        $this->mealPref = $mealPref;

        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Davispeixoto\OpenTravelAlliance\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;

        return $this;
    }

    /**
     * isset specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of
     * preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref)
    {
        $this->specRequestPref = $specRequestPref;

        return $this;
    }

    /**
     * Adds as sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SSRPrefAType $sSRPref
     */
    public function addToSSRPref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\SSRPrefAType $sSRPref)
    {
        $this->sSRPref[] = $sSRPref;

        return $this;
    }

    /**
     * isset sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSSRPref($index)
    {
        return isset($this->sSRPref[$index]);
    }

    /**
     * unset sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSSRPref($index)
    {
        unset($this->sSRPref[$index]);
    }

    /**
     * Gets as sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SSRPrefAType[]
     */
    public function getSSRPref()
    {
        return $this->sSRPref;
    }

    /**
     * Sets a new sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\SSRPrefAType[] $sSRPref
     * @return self
     */
    public function setSSRPref(array $sSRPref)
    {
        $this->sSRPref = $sSRPref;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * Adds as mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType
     * $mediaEntertainPref
     */
    public function addToMediaEntertainPref(\Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType $mediaEntertainPref)
    {
        $this->mediaEntertainPref[] = $mediaEntertainPref;

        return $this;
    }

    /**
     * isset mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMediaEntertainPref($index)
    {
        return isset($this->mediaEntertainPref[$index]);
    }

    /**
     * unset mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMediaEntertainPref($index)
    {
        unset($this->mediaEntertainPref[$index]);
    }

    /**
     * Gets as mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     * $mediaEntertainPref
     * @return self
     */
    public function setMediaEntertainPref(array $mediaEntertainPref)
    {
        $this->mediaEntertainPref = $mediaEntertainPref;

        return $this;
    }

    /**
     * Adds as petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PetInfoPrefType $petInfoPref
     */
    public function addToPetInfoPref(\Davispeixoto\OpenTravelAlliance\PetInfoPrefType $petInfoPref)
    {
        $this->petInfoPref[] = $petInfoPref;

        return $this;
    }

    /**
     * isset petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPetInfoPref($index)
    {
        return isset($this->petInfoPref[$index]);
    }

    /**
     * unset petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPetInfoPref($index)
    {
        unset($this->petInfoPref[$index]);
    }

    /**
     * Gets as petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[] $petInfoPref
     * @return self
     */
    public function setPetInfoPref(array $petInfoPref)
    {
        $this->petInfoPref = $petInfoPref;

        return $this;
    }

    /**
     * Gets as accountInformation
     *
     * Information related to back office accounting information for the travel agency.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType
     */
    public function getAccountInformation()
    {
        return $this->accountInformation;
    }

    /**
     * Sets a new accountInformation
     *
     * Information related to back office accounting information for the travel agency.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType
     * $accountInformation
     * @return self
     */
    public function setAccountInformation(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\AccountInformationAType $accountInformation
    ) {
        $this->accountInformation = $accountInformation;

        return $this;
    }

    /**
     * Adds as oSIPref
     *
     * Other Service Information of the airline.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIPref
     */
    public function addToOSIPref(\Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIPref)
    {
        $this->oSIPref[] = $oSIPref;

        return $this;
    }

    /**
     * isset oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOSIPref($index)
    {
        return isset($this->oSIPref[$index]);
    }

    /**
     * unset oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOSIPref($index)
    {
        unset($this->oSIPref[$index]);
    }

    /**
     * Gets as oSIPref
     *
     * Other Service Information of the airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     */
    public function getOSIPref()
    {
        return $this->oSIPref;
    }

    /**
     * Sets a new oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIPref
     * @return self
     */
    public function setOSIPref(array $oSIPref)
    {
        $this->oSIPref = $oSIPref;

        return $this;
    }

    /**
     * Adds as keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\KeywordPrefAType
     * $keywordPref
     */
    public function addToKeywordPref(\Davispeixoto\OpenTravelAlliance\AirlinePrefType\KeywordPrefAType $keywordPref)
    {
        $this->keywordPref[] = $keywordPref;

        return $this;
    }

    /**
     * isset keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeywordPref($index)
    {
        return isset($this->keywordPref[$index]);
    }

    /**
     * unset keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeywordPref($index)
    {
        unset($this->keywordPref[$index]);
    }

    /**
     * Gets as keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirlinePrefType\KeywordPrefAType[]
     */
    public function getKeywordPref()
    {
        return $this->keywordPref;
    }

    /**
     * Sets a new keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirlinePrefType\KeywordPrefAType[]
     * $keywordPref
     * @return self
     */
    public function setKeywordPref(array $keywordPref)
    {
        $this->keywordPref = $keywordPref;

        return $this;
    }


}

