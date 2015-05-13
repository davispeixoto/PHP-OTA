<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPrefType
 *
 * A collection of rail preferences.
 * XSD Type: RailPrefType
 */
class RailPrefType
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
     * Type of rail ticket preferred for this collection.
     *
     * @property string $railTicketType
     */
    private $railTicketType = null;

    /**
     * Preferred loyalty program(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * Preferred rail operator network code(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\OperatorPrefAType[]
     * $operatorPref
     */
    private $operatorPref = null;

    /**
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\VendorPrefAType[]
     * $vendorPref
     */
    private $vendorPref = null;

    /**
     * Preferred form(s) of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\PaymentFormPrefAType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * Preferred origination station location(s) for travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationPrefType[] $originStationPref
     */
    private $originStationPref = null;

    /**
     * Preferred destination station location(s) for travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationPrefType[]
     * $destinationStationPref
     */
    private $destinationStationPref = null;

    /**
     * Preferred connection location(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationPrefType[] $connectionPref
     */
    private $connectionPref = null;

    /**
     * Preferred fare restriction(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\FareRestrictPrefAType[]
     * $fareRestrictPref
     */
    private $fareRestrictPref = null;

    /**
     * Preferred fare preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\FarePrefAType[]
     * $farePref
     */
    private $farePref = null;

    /**
     * Train characteristic preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\TrainPrefAType[]
     * $trainPref
     */
    private $trainPref = null;

    /**
     * Amenity preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\AmenityPrefAType[]
     * $amenityPref
     */
    private $amenityPref = null;

    /**
     * Equipment preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\EquipmentPrefAType[]
     * $equipmentPref
     */
    private $equipmentPref = null;

    /**
     * Accommodation preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\AccommodationPrefAType[]
     * $accommodationPref
     */
    private $accommodationPref = null;

    /**
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\AncillaryServicePrefAType[]
     * $ancillaryServicePref
     */
    private $ancillaryServicePref = null;

    /**
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\PassengerInfoPrefAType[]
     * $passengerInfoPref
     */
    private $passengerInfoPref = null;

    /**
     * Tcket distribution preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     * $ticketDistribPref
     */
    private $ticketDistribPref = null;

    /**
     * Special Service Request preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\SSRPrefAType[] $sSRPref
     */
    private $sSRPref = null;

    /**
     * Other Service Information of the rail operators.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType[] $oSIPref
     */
    private $oSIPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as railTicketType
     *
     * Type of rail ticket preferred for this collection.
     *
     * @return string
     */
    public function getRailTicketType()
    {
        return $this->railTicketType;
    }

    /**
     * Sets a new railTicketType
     *
     * Type of rail ticket preferred for this collection.
     *
     * @param string $railTicketType
     * @return self
     */
    public function setRailTicketType($railTicketType)
    {
        $this->railTicketType = $railTicketType;

        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
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
     * Adds as operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\OperatorPrefAType
     * $operatorPref
     */
    public function addToOperatorPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\OperatorPrefAType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;

        return $this;
    }

    /**
     * isset operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\OperatorPrefAType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\OperatorPrefAType[]
     * $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref)
    {
        $this->operatorPref = $operatorPref;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\VendorPrefAType $vendorPref
     */
    public function addToVendorPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
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
     * Specifies any preferences in terms of the company operating the train service.
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
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\VendorPrefAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\PaymentFormPrefAType
     * $paymentFormPref
     */
    public function addToPaymentFormPref(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\PaymentFormPrefAType $paymentFormPref
    ) {
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
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\PaymentFormPrefAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\PaymentFormPrefAType[]
     * $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref)
    {
        $this->paymentFormPref = $paymentFormPref;

        return $this;
    }

    /**
     * Adds as originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType $originStationPref
     */
    public function addToOriginStationPref(\Davispeixoto\OpenTravelAlliance\LocationPrefType $originStationPref)
    {
        $this->originStationPref[] = $originStationPref;

        return $this;
    }

    /**
     * isset originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginStationPref($index)
    {
        return isset($this->originStationPref[$index]);
    }

    /**
     * unset originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginStationPref($index)
    {
        unset($this->originStationPref[$index]);
    }

    /**
     * Gets as originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationPrefType[]
     */
    public function getOriginStationPref()
    {
        return $this->originStationPref;
    }

    /**
     * Sets a new originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType[] $originStationPref
     * @return self
     */
    public function setOriginStationPref(array $originStationPref)
    {
        $this->originStationPref = $originStationPref;

        return $this;
    }

    /**
     * Adds as destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType $destinationStationPref
     */
    public function addToDestinationStationPref(
        \Davispeixoto\OpenTravelAlliance\LocationPrefType $destinationStationPref
    ) {
        $this->destinationStationPref[] = $destinationStationPref;

        return $this;
    }

    /**
     * isset destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationStationPref($index)
    {
        return isset($this->destinationStationPref[$index]);
    }

    /**
     * unset destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationStationPref($index)
    {
        unset($this->destinationStationPref[$index]);
    }

    /**
     * Gets as destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationPrefType[]
     */
    public function getDestinationStationPref()
    {
        return $this->destinationStationPref;
    }

    /**
     * Sets a new destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType[]
     * $destinationStationPref
     * @return self
     */
    public function setDestinationStationPref(array $destinationStationPref)
    {
        $this->destinationStationPref = $destinationStationPref;

        return $this;
    }

    /**
     * Adds as connectionPref
     *
     * Preferred connection location(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType $connectionPref
     */
    public function addToConnectionPref(\Davispeixoto\OpenTravelAlliance\LocationPrefType $connectionPref)
    {
        $this->connectionPref[] = $connectionPref;

        return $this;
    }

    /**
     * isset connectionPref
     *
     * Preferred connection location(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConnectionPref($index)
    {
        return isset($this->connectionPref[$index]);
    }

    /**
     * unset connectionPref
     *
     * Preferred connection location(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConnectionPref($index)
    {
        unset($this->connectionPref[$index]);
    }

    /**
     * Gets as connectionPref
     *
     * Preferred connection location(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationPrefType[]
     */
    public function getConnectionPref()
    {
        return $this->connectionPref;
    }

    /**
     * Sets a new connectionPref
     *
     * Preferred connection location(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationPrefType[] $connectionPref
     * @return self
     */
    public function setConnectionPref(array $connectionPref)
    {
        $this->connectionPref = $connectionPref;

        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Preferred fare restriction(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\FareRestrictPrefAType
     * $fareRestrictPref
     */
    public function addToFareRestrictPref(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\FareRestrictPrefAType $fareRestrictPref
    ) {
        $this->fareRestrictPref[] = $fareRestrictPref;

        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Preferred fare restriction(s).
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
     * Preferred fare restriction(s).
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
     * Preferred fare restriction(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Preferred fare restriction(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\FareRestrictPrefAType[]
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
     * Preferred fare preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\FarePrefAType $farePref
     */
    public function addToFarePref(\Davispeixoto\OpenTravelAlliance\RailPrefType\FarePrefAType $farePref)
    {
        $this->farePref[] = $farePref;

        return $this;
    }

    /**
     * isset farePref
     *
     * Preferred fare preferences.
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
     * Preferred fare preferences.
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
     * Preferred fare preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\FarePrefAType[]
     */
    public function getFarePref()
    {
        return $this->farePref;
    }

    /**
     * Sets a new farePref
     *
     * Preferred fare preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\FarePrefAType[] $farePref
     * @return self
     */
    public function setFarePref(array $farePref)
    {
        $this->farePref = $farePref;

        return $this;
    }

    /**
     * Adds as trainPref
     *
     * Train characteristic preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\TrainPrefAType $trainPref
     */
    public function addToTrainPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\TrainPrefAType $trainPref)
    {
        $this->trainPref[] = $trainPref;

        return $this;
    }

    /**
     * isset trainPref
     *
     * Train characteristic preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrainPref($index)
    {
        return isset($this->trainPref[$index]);
    }

    /**
     * unset trainPref
     *
     * Train characteristic preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrainPref($index)
    {
        unset($this->trainPref[$index]);
    }

    /**
     * Gets as trainPref
     *
     * Train characteristic preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\TrainPrefAType[]
     */
    public function getTrainPref()
    {
        return $this->trainPref;
    }

    /**
     * Sets a new trainPref
     *
     * Train characteristic preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\TrainPrefAType[] $trainPref
     * @return self
     */
    public function setTrainPref(array $trainPref)
    {
        $this->trainPref = $trainPref;

        return $this;
    }

    /**
     * Adds as amenityPref
     *
     * Amenity preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AmenityPrefAType
     * $amenityPref
     */
    public function addToAmenityPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\AmenityPrefAType $amenityPref)
    {
        $this->amenityPref[] = $amenityPref;

        return $this;
    }

    /**
     * isset amenityPref
     *
     * Amenity preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenityPref($index)
    {
        return isset($this->amenityPref[$index]);
    }

    /**
     * unset amenityPref
     *
     * Amenity preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenityPref($index)
    {
        unset($this->amenityPref[$index]);
    }

    /**
     * Gets as amenityPref
     *
     * Amenity preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\AmenityPrefAType[]
     */
    public function getAmenityPref()
    {
        return $this->amenityPref;
    }

    /**
     * Sets a new amenityPref
     *
     * Amenity preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AmenityPrefAType[]
     * $amenityPref
     * @return self
     */
    public function setAmenityPref(array $amenityPref)
    {
        $this->amenityPref = $amenityPref;

        return $this;
    }

    /**
     * Adds as equipmentPref
     *
     * Equipment preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\EquipmentPrefAType
     * $equipmentPref
     */
    public function addToEquipmentPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\EquipmentPrefAType $equipmentPref)
    {
        $this->equipmentPref[] = $equipmentPref;

        return $this;
    }

    /**
     * isset equipmentPref
     *
     * Equipment preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipmentPref($index)
    {
        return isset($this->equipmentPref[$index]);
    }

    /**
     * unset equipmentPref
     *
     * Equipment preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipmentPref($index)
    {
        unset($this->equipmentPref[$index]);
    }

    /**
     * Gets as equipmentPref
     *
     * Equipment preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\EquipmentPrefAType[]
     */
    public function getEquipmentPref()
    {
        return $this->equipmentPref;
    }

    /**
     * Sets a new equipmentPref
     *
     * Equipment preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\EquipmentPrefAType[]
     * $equipmentPref
     * @return self
     */
    public function setEquipmentPref(array $equipmentPref)
    {
        $this->equipmentPref = $equipmentPref;

        return $this;
    }

    /**
     * Adds as accommodationPref
     *
     * Accommodation preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AccommodationPrefAType
     * $accommodationPref
     */
    public function addToAccommodationPref(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\AccommodationPrefAType $accommodationPref
    ) {
        $this->accommodationPref[] = $accommodationPref;

        return $this;
    }

    /**
     * isset accommodationPref
     *
     * Accommodation preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccommodationPref($index)
    {
        return isset($this->accommodationPref[$index]);
    }

    /**
     * unset accommodationPref
     *
     * Accommodation preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccommodationPref($index)
    {
        unset($this->accommodationPref[$index]);
    }

    /**
     * Gets as accommodationPref
     *
     * Accommodation preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\AccommodationPrefAType[]
     */
    public function getAccommodationPref()
    {
        return $this->accommodationPref;
    }

    /**
     * Sets a new accommodationPref
     *
     * Accommodation preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AccommodationPrefAType[]
     * $accommodationPref
     * @return self
     */
    public function setAccommodationPref(array $accommodationPref)
    {
        $this->accommodationPref = $accommodationPref;

        return $this;
    }

    /**
     * Adds as ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AncillaryServicePrefAType
     * $ancillaryServicePref
     */
    public function addToAncillaryServicePref(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\AncillaryServicePrefAType $ancillaryServicePref
    ) {
        $this->ancillaryServicePref[] = $ancillaryServicePref;

        return $this;
    }

    /**
     * isset ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAncillaryServicePref($index)
    {
        return isset($this->ancillaryServicePref[$index]);
    }

    /**
     * unset ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAncillaryServicePref($index)
    {
        unset($this->ancillaryServicePref[$index]);
    }

    /**
     * Gets as ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPrefType\AncillaryServicePrefAType[]
     */
    public function getAncillaryServicePref()
    {
        return $this->ancillaryServicePref;
    }

    /**
     * Sets a new ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a
     * basic rail accommodation, such as vehicle transport, pet transport and
     * restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service
     * (RAN).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\AncillaryServicePrefAType[]
     * $ancillaryServicePref
     * @return self
     */
    public function setAncillaryServicePref(array $ancillaryServicePref)
    {
        $this->ancillaryServicePref = $ancillaryServicePref;

        return $this;
    }

    /**
     * Adds as passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\PassengerInfoPrefAType
     * $passengerInfoPref
     */
    public function addToPassengerInfoPref(
        \Davispeixoto\OpenTravelAlliance\RailPrefType\PassengerInfoPrefAType $passengerInfoPref
    ) {
        $this->passengerInfoPref[] = $passengerInfoPref;

        return $this;
    }

    /**
     * isset passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfoPref($index)
    {
        return isset($this->passengerInfoPref[$index]);
    }

    /**
     * unset passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfoPref($index)
    {
        unset($this->passengerInfoPref[$index]);
    }

    /**
     * Gets as passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\PassengerInfoPrefAType[]
     */
    public function getPassengerInfoPref()
    {
        return $this->passengerInfoPref;
    }

    /**
     * Sets a new passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability
     * requirement preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\PassengerInfoPrefAType[]
     * $passengerInfoPref
     * @return self
     */
    public function setPassengerInfoPref(array $passengerInfoPref)
    {
        $this->passengerInfoPref = $passengerInfoPref;

        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
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
     * Adds as sSRPref
     *
     * Special Service Request preferences.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\SSRPrefAType $sSRPref
     */
    public function addToSSRPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\SSRPrefAType $sSRPref)
    {
        $this->sSRPref[] = $sSRPref;

        return $this;
    }

    /**
     * isset sSRPref
     *
     * Special Service Request preferences.
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
     * Special Service Request preferences.
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
     * Special Service Request preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\SSRPrefAType[]
     */
    public function getSSRPref()
    {
        return $this->sSRPref;
    }

    /**
     * Sets a new sSRPref
     *
     * Special Service Request preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\SSRPrefAType[] $sSRPref
     * @return self
     */
    public function setSSRPref(array $sSRPref)
    {
        $this->sSRPref = $sSRPref;

        return $this;
    }

    /**
     * Adds as oSIPref
     *
     * Other Service Information of the rail operators.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType $oSIPref
     */
    public function addToOSIPref(\Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType $oSIPref)
    {
        $this->oSIPref[] = $oSIPref;

        return $this;
    }

    /**
     * isset oSIPref
     *
     * Other Service Information of the rail operators.
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
     * Other Service Information of the rail operators.
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
     * Other Service Information of the rail operators.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType[]
     */
    public function getOSIPref()
    {
        return $this->oSIPref;
    }

    /**
     * Sets a new oSIPref
     *
     * Other Service Information of the rail operators.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPrefType\OSIPrefAType[] $oSIPref
     * @return self
     */
    public function setOSIPref(array $oSIPref)
    {
        $this->oSIPref = $oSIPref;

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


}

