<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailRQAdditionalInfoType
 *
 * The VehicleAvailRQAdditionalInfoType complex type identifies supplemental
 * information that may be included in a request for vehicle availability and
 * rates.
 * XSD Type: VehicleAvailRQAdditionalInfoType
 */
class VehicleAvailRQAdditionalInfoType
{

    /**
     * @property integer $luggageQty
     */
    private $luggageQty = null;

    /**
     * @property integer $passengerQty
     */
    private $passengerQty = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @property boolean $gasPrePay
     */
    private $gasPrePay = null;

    /**
     * Allows the requestor to indicate if the response should contain a single rate
     * for each product or multiple rates for each product. Multiple rates may be
     * offered when different terms and conditions may apply, for example pre-paid
     * versus payment at time of rental. The use of multiple rates may vary from vendor
     * to vendor and is by agreement of the trading partners.
     *
     * @property boolean $singleQuote
     */
    private $singleQuote = null;

    /**
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     */
    private $specialReqPref = null;

    /**
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePrefs
     */
    private $coveragePrefs = null;

    /**
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[]
     * $offLocService
     */
    private $offLocService = null;

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as luggageQty
     *
     * @return integer
     */
    public function getLuggageQty()
    {
        return $this->luggageQty;
    }

    /**
     * Sets a new luggageQty
     *
     * @param integer $luggageQty
     * @return self
     */
    public function setLuggageQty($luggageQty)
    {
        $this->luggageQty = $luggageQty;

        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * @return integer
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * @param integer $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;

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
     * Gets as gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @return boolean
     */
    public function getGasPrePay()
    {
        return $this->gasPrePay;
    }

    /**
     * Sets a new gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @param boolean $gasPrePay
     * @return self
     */
    public function setGasPrePay($gasPrePay)
    {
        $this->gasPrePay = $gasPrePay;

        return $this;
    }

    /**
     * Gets as singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate
     * for each product or multiple rates for each product. Multiple rates may be
     * offered when different terms and conditions may apply, for example pre-paid
     * versus payment at time of rental. The use of multiple rates may vary from vendor
     * to vendor and is by agreement of the trading partners.
     *
     * @return boolean
     */
    public function getSingleQuote()
    {
        return $this->singleQuote;
    }

    /**
     * Sets a new singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate
     * for each product or multiple rates for each product. Multiple rates may be
     * offered when different terms and conditions may apply, for example pre-paid
     * versus payment at time of rental. The use of multiple rates may vary from vendor
     * to vendor and is by agreement of the trading partners.
     *
     * @param boolean $singleQuote
     * @return self
     */
    public function setSingleQuote($singleQuote)
    {
        $this->singleQuote = $singleQuote;

        return $this;
    }

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType
     * $specialReqPref
     */
    public function addToSpecialReqPref(\Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;

        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref)
    {
        $this->specialReqPref = $specialReqPref;

        return $this;
    }

    /**
     * Adds as coveragePref
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType
     * $coveragePref
     */
    public function addToCoveragePrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
    ) {
        $this->coveragePrefs[] = $coveragePref;

        return $this;
    }

    /**
     * isset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveragePrefs($index)
    {
        return isset($this->coveragePrefs[$index]);
    }

    /**
     * unset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveragePrefs($index)
    {
        unset($this->coveragePrefs[$index]);
    }

    /**
     * Gets as coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePrefs()
    {
        return $this->coveragePrefs;
    }

    /**
     * Sets a new coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePrefs
     * @return self
     */
    public function setCoveragePrefs(array $coveragePrefs)
    {
        $this->coveragePrefs = $coveragePrefs;

        return $this;
    }

    /**
     * Adds as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     */
    public function addToOffLocService(\Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService)
    {
        $this->offLocService[] = $offLocService;

        return $this;
    }

    /**
     * isset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocService($index)
    {
        return isset($this->offLocService[$index]);
    }

    /**
     * unset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocService($index)
    {
        unset($this->offLocService[$index]);
    }

    /**
     * Gets as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[]
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[] $offLocService
     * @return self
     */
    public function setOffLocService(array $offLocService)
    {
        $this->offLocService = $offLocService;

        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(\Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType $arrivalDetails)
    {
        $this->arrivalDetails = $arrivalDetails;

        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated.
     * Availability and rate information may vary if associated with a tour.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(\Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo)
    {
        $this->tourInfo = $tourInfo;

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

