<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing FarePrefAType
 */
class FarePrefAType
{

    /**
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Free text describing the fare preference.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @property string[] $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @property string $rateCategoryCode
     */
    private $rateCategoryCode = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as code
     *
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as description
     *
     * Free text describing the fare preference.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Free text describing the fare preference.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @return self
     * @param string $airlineVendorPrefRPH
     */
    public function addToAirlineVendorPrefRPH($airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH[] = $airlineVendorPrefRPH;

        return $this;
    }

    /**
     * isset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirlineVendorPrefRPH($index)
    {
        return isset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * unset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirlineVendorPrefRPH($index)
    {
        unset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * Gets as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @return string[]
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->airlineVendorPrefRPH;
    }

    /**
     * Sets a new airlineVendorPrefRPH
     *
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @param string $airlineVendorPrefRPH
     * @return self
     */
    public function setAirlineVendorPrefRPH(array $airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH = $airlineVendorPrefRPH;

        return $this;
    }

    /**
     * Gets as rateCategoryCode
     *
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @return string
     */
    public function getRateCategoryCode()
    {
        return $this->rateCategoryCode;
    }

    /**
     * Sets a new rateCategoryCode
     *
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @param string $rateCategoryCode
     * @return self
     */
    public function setRateCategoryCode($rateCategoryCode)
    {
        $this->rateCategoryCode = $rateCategoryCode;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }


}

