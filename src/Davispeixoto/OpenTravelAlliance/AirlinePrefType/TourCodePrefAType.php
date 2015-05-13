<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing TourCodePrefAType
 */
class TourCodePrefAType
{

    /**
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Reference to one or more airlines in AirlinePrefType/VendorPref.
     *
     * @property string[] $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Provides the tour code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType
     * $tourCodeInfo
     */
    private $tourCodeInfo = null;

    /**
     * Provides a tour code for airline staff.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType
     * $staffTourCodeInfo
     */
    private $staffTourCodeInfo = null;

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
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
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
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

    /**
     * Gets as tourCodeInfo
     *
     * Provides the tour code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType
     */
    public function getTourCodeInfo()
    {
        return $this->tourCodeInfo;
    }

    /**
     * Sets a new tourCodeInfo
     *
     * Provides the tour code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType
     * $tourCodeInfo
     * @return self
     */
    public function setTourCodeInfo(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\TourCodeInfoAType $tourCodeInfo
    ) {
        $this->tourCodeInfo = $tourCodeInfo;

        return $this;
    }

    /**
     * Gets as staffTourCodeInfo
     *
     * Provides a tour code for airline staff.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType
     */
    public function getStaffTourCodeInfo()
    {
        return $this->staffTourCodeInfo;
    }

    /**
     * Sets a new staffTourCodeInfo
     *
     * Provides a tour code for airline staff.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType
     * $staffTourCodeInfo
     * @return self
     */
    public function setStaffTourCodeInfo(
        \Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType\StaffTourCodeInfoAType $staffTourCodeInfo
    ) {
        $this->staffTourCodeInfo = $staffTourCodeInfo;

        return $this;
    }


}

