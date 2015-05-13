<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ;

use Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

/**
 * Class representing TravelPreferencesAType
 */
class TravelPreferencesAType extends AirSearchPrefsType
{

    /**
     * If true, the distributor information should be returned with the fare.
     *
     * @property boolean $distributorInfoInd
     */
    private $distributorInfoInd = null;

    /**
     * Specifies that the fare being requested is for this ticket designator code.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * If the fare request is for a previously issued ticket, this is the date on which
     * it was issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $historicalFareInfoDate
     */
    private $historicalFareInfoDate = null;

    /**
     * If true, the fare load date information is being requested.
     *
     * @property boolean $reqFareLoadDateInd
     */
    private $reqFareLoadDateInd = null;

    /**
     * Indicates the journey type for which fares are required e.g. OneWay, Return,
     * HalfReturn.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareApplicationTypePrefAType
     * $fareApplicationTypePref
     */
    private $fareApplicationTypePref = null;

    /**
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareTypePrefAType[]
     * $fareTypePref
     */
    private $fareTypePref = null;

    /**
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType[]
     * $fareAccessTypePref
     */
    private $fareAccessTypePref = null;

    /**
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\BookingClassPrefAType[]
     * $bookingClassPref
     */
    private $bookingClassPref = null;

    /**
     * Specify whether prices returned should include Taxes, Services, Fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType
     * $pricingPrefs
     */
    private $pricingPrefs = null;

    /**
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\GlobalIndicatorPrefAType[]
     * $globalIndicatorPref
     */
    private $globalIndicatorPref = null;

    /**
     * Gets as distributorInfoInd
     *
     * If true, the distributor information should be returned with the fare.
     *
     * @return boolean
     */
    public function getDistributorInfoInd()
    {
        return $this->distributorInfoInd;
    }

    /**
     * Sets a new distributorInfoInd
     *
     * If true, the distributor information should be returned with the fare.
     *
     * @param boolean $distributorInfoInd
     * @return self
     */
    public function setDistributorInfoInd($distributorInfoInd)
    {
        $this->distributorInfoInd = $distributorInfoInd;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Specifies that the fare being requested is for this ticket designator code.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies that the fare being requested is for this ticket designator code.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as historicalFareInfoDate
     *
     * If the fare request is for a previously issued ticket, this is the date on which
     * it was issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getHistoricalFareInfoDate()
    {
        return $this->historicalFareInfoDate;
    }

    /**
     * Sets a new historicalFareInfoDate
     *
     * If the fare request is for a previously issued ticket, this is the date on which
     * it was issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $historicalFareInfoDate
     * @return self
     */
    public function setHistoricalFareInfoDate(
        \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $historicalFareInfoDate
    ) {
        $this->historicalFareInfoDate = $historicalFareInfoDate;

        return $this;
    }

    /**
     * Gets as reqFareLoadDateInd
     *
     * If true, the fare load date information is being requested.
     *
     * @return boolean
     */
    public function getReqFareLoadDateInd()
    {
        return $this->reqFareLoadDateInd;
    }

    /**
     * Sets a new reqFareLoadDateInd
     *
     * If true, the fare load date information is being requested.
     *
     * @param boolean $reqFareLoadDateInd
     * @return self
     */
    public function setReqFareLoadDateInd($reqFareLoadDateInd)
    {
        $this->reqFareLoadDateInd = $reqFareLoadDateInd;

        return $this;
    }

    /**
     * Gets as fareApplicationTypePref
     *
     * Indicates the journey type for which fares are required e.g. OneWay, Return,
     * HalfReturn.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareApplicationTypePrefAType
     */
    public function getFareApplicationTypePref()
    {
        return $this->fareApplicationTypePref;
    }

    /**
     * Sets a new fareApplicationTypePref
     *
     * Indicates the journey type for which fares are required e.g. OneWay, Return,
     * HalfReturn.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareApplicationTypePrefAType
     * $fareApplicationTypePref
     * @return self
     */
    public function setFareApplicationTypePref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareApplicationTypePrefAType $fareApplicationTypePref
    ) {
        $this->fareApplicationTypePref = $fareApplicationTypePref;

        return $this;
    }

    /**
     * Adds as fareTypePref
     *
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareTypePrefAType
     * $fareTypePref
     */
    public function addToFareTypePref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareTypePrefAType $fareTypePref
    ) {
        $this->fareTypePref[] = $fareTypePref;

        return $this;
    }

    /**
     * isset fareTypePref
     *
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareTypePref($index)
    {
        return isset($this->fareTypePref[$index]);
    }

    /**
     * unset fareTypePref
     *
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareTypePref($index)
    {
        unset($this->fareTypePref[$index]);
    }

    /**
     * Gets as fareTypePref
     *
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareTypePrefAType[]
     */
    public function getFareTypePref()
    {
        return $this->fareTypePref;
    }

    /**
     * Sets a new fareTypePref
     *
     * Indicates the type of fare required e.g. unrestricted, excursion etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareTypePrefAType[]
     * $fareTypePref
     * @return self
     */
    public function setFareTypePref(array $fareTypePref)
    {
        $this->fareTypePref = $fareTypePref;

        return $this;
    }

    /**
     * Adds as fareAccessTypePref
     *
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType
     * $fareAccessTypePref
     */
    public function addToFareAccessTypePref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType $fareAccessTypePref
    ) {
        $this->fareAccessTypePref[] = $fareAccessTypePref;

        return $this;
    }

    /**
     * isset fareAccessTypePref
     *
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareAccessTypePref($index)
    {
        return isset($this->fareAccessTypePref[$index]);
    }

    /**
     * unset fareAccessTypePref
     *
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareAccessTypePref($index)
    {
        unset($this->fareAccessTypePref[$index]);
    }

    /**
     * Gets as fareAccessTypePref
     *
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType[]
     */
    public function getFareAccessTypePref()
    {
        return $this->fareAccessTypePref;
    }

    /**
     * Sets a new fareAccessTypePref
     *
     * Indicates the fare calculation type e.g. (PointToPoint, Through, Joint,
     * Private.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\FareAccessTypePrefAType[]
     * $fareAccessTypePref
     * @return self
     */
    public function setFareAccessTypePref(array $fareAccessTypePref)
    {
        $this->fareAccessTypePref = $fareAccessTypePref;

        return $this;
    }

    /**
     * Adds as bookingClassPref
     *
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\BookingClassPrefAType
     * $bookingClassPref
     */
    public function addToBookingClassPref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\BookingClassPrefAType $bookingClassPref
    ) {
        $this->bookingClassPref[] = $bookingClassPref;

        return $this;
    }

    /**
     * isset bookingClassPref
     *
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingClassPref($index)
    {
        return isset($this->bookingClassPref[$index]);
    }

    /**
     * unset bookingClassPref
     *
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingClassPref($index)
    {
        unset($this->bookingClassPref[$index]);
    }

    /**
     * Gets as bookingClassPref
     *
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\BookingClassPrefAType[]
     */
    public function getBookingClassPref()
    {
        return $this->bookingClassPref;
    }

    /**
     * Sets a new bookingClassPref
     *
     * Booking Classes (RBD's) to include or exclude.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\BookingClassPrefAType[]
     * $bookingClassPref
     * @return self
     */
    public function setBookingClassPref(array $bookingClassPref)
    {
        $this->bookingClassPref = $bookingClassPref;

        return $this;
    }

    /**
     * Gets as pricingPrefs
     *
     * Specify whether prices returned should include Taxes, Services, Fees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType
     */
    public function getPricingPrefs()
    {
        return $this->pricingPrefs;
    }

    /**
     * Sets a new pricingPrefs
     *
     * Specify whether prices returned should include Taxes, Services, Fees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType
     * $pricingPrefs
     * @return self
     */
    public function setPricingPrefs(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType $pricingPrefs
    ) {
        $this->pricingPrefs = $pricingPrefs;

        return $this;
    }

    /**
     * Adds as globalIndicatorPref
     *
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\GlobalIndicatorPrefAType
     * $globalIndicatorPref
     */
    public function addToGlobalIndicatorPref(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\GlobalIndicatorPrefAType $globalIndicatorPref
    ) {
        $this->globalIndicatorPref[] = $globalIndicatorPref;

        return $this;
    }

    /**
     * isset globalIndicatorPref
     *
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlobalIndicatorPref($index)
    {
        return isset($this->globalIndicatorPref[$index]);
    }

    /**
     * unset globalIndicatorPref
     *
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlobalIndicatorPref($index)
    {
        unset($this->globalIndicatorPref[$index]);
    }

    /**
     * Gets as globalIndicatorPref
     *
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\GlobalIndicatorPrefAType[]
     */
    public function getGlobalIndicatorPref()
    {
        return $this->globalIndicatorPref;
    }

    /**
     * Sets a new globalIndicatorPref
     *
     * Specify global direction preferences (e.g. AP- Atlantic Ocean, PA, Pacific Ocean
     * etc.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\GlobalIndicatorPrefAType[]
     * $globalIndicatorPref
     * @return self
     */
    public function setGlobalIndicatorPref(array $globalIndicatorPref)
    {
        $this->globalIndicatorPref = $globalIndicatorPref;

        return $this;
    }


}

