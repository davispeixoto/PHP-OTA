<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalRateType;

/**
 * Class representing RateRestrictionsAType
 */
class RateRestrictionsAType
{

    /**
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @property boolean $arriveByFlight
     */
    private $arriveByFlight = null;

    /**
     * When true, there is a minimum day requirement.
     *
     * @property boolean $minimumDayInd
     */
    private $minimumDayInd = null;

    /**
     * When true, there is a maximum day requirement restriction.
     *
     * @property boolean $maximumDayInd
     */
    private $maximumDayInd = null;

    /**
     * When true, this rate requires advanced booking.
     *
     * @property boolean $advancedBookingInd
     */
    private $advancedBookingInd = null;

    /**
     * When true, the mileage is restricted.
     *
     * @property boolean $restrictedMileageInd
     */
    private $restrictedMileageInd = null;

    /**
     * When true, this is a negotiated corporate rate.
     *
     * @property boolean $corporateRateInd
     */
    private $corporateRateInd = null;

    /**
     * When true, a guarantee is required.
     *
     * @property boolean $guaranteeReqInd
     */
    private $guaranteeReqInd = null;

    /**
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @property integer $maximumVehiclesAllowed
     */
    private $maximumVehiclesAllowed = null;

    /**
     * When true, an overnight rental is required.
     *
     * @property boolean $overnightInd
     */
    private $overnightInd = null;

    /**
     * Specifies the one way rental policy for the pick-up location.
     *
     * @property string $oneWayPolicy
     */
    private $oneWayPolicy = null;

    /**
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @property boolean $cancellationPenaltyInd
     */
    private $cancellationPenaltyInd = null;

    /**
     * When true indicates a fee applies if a modification is requested.
     *
     * @property boolean $modificationPenaltyInd
     */
    private $modificationPenaltyInd = null;

    /**
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @property integer $minimumAge
     */
    private $minimumAge = null;

    /**
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @property integer $maximumAge
     */
    private $maximumAge = null;

    /**
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @property boolean $noShowFeeInd
     */
    private $noShowFeeInd = null;

    /**
     * Gets as arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @return boolean
     */
    public function getArriveByFlight()
    {
        return $this->arriveByFlight;
    }

    /**
     * Sets a new arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @param boolean $arriveByFlight
     * @return self
     */
    public function setArriveByFlight($arriveByFlight)
    {
        $this->arriveByFlight = $arriveByFlight;

        return $this;
    }

    /**
     * Gets as minimumDayInd
     *
     * When true, there is a minimum day requirement.
     *
     * @return boolean
     */
    public function getMinimumDayInd()
    {
        return $this->minimumDayInd;
    }

    /**
     * Sets a new minimumDayInd
     *
     * When true, there is a minimum day requirement.
     *
     * @param boolean $minimumDayInd
     * @return self
     */
    public function setMinimumDayInd($minimumDayInd)
    {
        $this->minimumDayInd = $minimumDayInd;

        return $this;
    }

    /**
     * Gets as maximumDayInd
     *
     * When true, there is a maximum day requirement restriction.
     *
     * @return boolean
     */
    public function getMaximumDayInd()
    {
        return $this->maximumDayInd;
    }

    /**
     * Sets a new maximumDayInd
     *
     * When true, there is a maximum day requirement restriction.
     *
     * @param boolean $maximumDayInd
     * @return self
     */
    public function setMaximumDayInd($maximumDayInd)
    {
        $this->maximumDayInd = $maximumDayInd;

        return $this;
    }

    /**
     * Gets as advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @return boolean
     */
    public function getAdvancedBookingInd()
    {
        return $this->advancedBookingInd;
    }

    /**
     * Sets a new advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @param boolean $advancedBookingInd
     * @return self
     */
    public function setAdvancedBookingInd($advancedBookingInd)
    {
        $this->advancedBookingInd = $advancedBookingInd;

        return $this;
    }

    /**
     * Gets as restrictedMileageInd
     *
     * When true, the mileage is restricted.
     *
     * @return boolean
     */
    public function getRestrictedMileageInd()
    {
        return $this->restrictedMileageInd;
    }

    /**
     * Sets a new restrictedMileageInd
     *
     * When true, the mileage is restricted.
     *
     * @param boolean $restrictedMileageInd
     * @return self
     */
    public function setRestrictedMileageInd($restrictedMileageInd)
    {
        $this->restrictedMileageInd = $restrictedMileageInd;

        return $this;
    }

    /**
     * Gets as corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @return boolean
     */
    public function getCorporateRateInd()
    {
        return $this->corporateRateInd;
    }

    /**
     * Sets a new corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @param boolean $corporateRateInd
     * @return self
     */
    public function setCorporateRateInd($corporateRateInd)
    {
        $this->corporateRateInd = $corporateRateInd;

        return $this;
    }

    /**
     * Gets as guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @return boolean
     */
    public function getGuaranteeReqInd()
    {
        return $this->guaranteeReqInd;
    }

    /**
     * Sets a new guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @param boolean $guaranteeReqInd
     * @return self
     */
    public function setGuaranteeReqInd($guaranteeReqInd)
    {
        $this->guaranteeReqInd = $guaranteeReqInd;

        return $this;
    }

    /**
     * Gets as maximumVehiclesAllowed
     *
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @return integer
     */
    public function getMaximumVehiclesAllowed()
    {
        return $this->maximumVehiclesAllowed;
    }

    /**
     * Sets a new maximumVehiclesAllowed
     *
     * The maximum number of vehicles that can be rented at this rate.
     *
     * @param integer $maximumVehiclesAllowed
     * @return self
     */
    public function setMaximumVehiclesAllowed($maximumVehiclesAllowed)
    {
        $this->maximumVehiclesAllowed = $maximumVehiclesAllowed;

        return $this;
    }

    /**
     * Gets as overnightInd
     *
     * When true, an overnight rental is required.
     *
     * @return boolean
     */
    public function getOvernightInd()
    {
        return $this->overnightInd;
    }

    /**
     * Sets a new overnightInd
     *
     * When true, an overnight rental is required.
     *
     * @param boolean $overnightInd
     * @return self
     */
    public function setOvernightInd($overnightInd)
    {
        $this->overnightInd = $overnightInd;

        return $this;
    }

    /**
     * Gets as oneWayPolicy
     *
     * Specifies the one way rental policy for the pick-up location.
     *
     * @return string
     */
    public function getOneWayPolicy()
    {
        return $this->oneWayPolicy;
    }

    /**
     * Sets a new oneWayPolicy
     *
     * Specifies the one way rental policy for the pick-up location.
     *
     * @param string $oneWayPolicy
     * @return self
     */
    public function setOneWayPolicy($oneWayPolicy)
    {
        $this->oneWayPolicy = $oneWayPolicy;

        return $this;
    }

    /**
     * Gets as cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @return boolean
     */
    public function getCancellationPenaltyInd()
    {
        return $this->cancellationPenaltyInd;
    }

    /**
     * Sets a new cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @param boolean $cancellationPenaltyInd
     * @return self
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd)
    {
        $this->cancellationPenaltyInd = $cancellationPenaltyInd;

        return $this;
    }

    /**
     * Gets as modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @return boolean
     */
    public function getModificationPenaltyInd()
    {
        return $this->modificationPenaltyInd;
    }

    /**
     * Sets a new modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @param boolean $modificationPenaltyInd
     * @return self
     */
    public function setModificationPenaltyInd($modificationPenaltyInd)
    {
        $this->modificationPenaltyInd = $modificationPenaltyInd;

        return $this;
    }

    /**
     * Gets as minimumAge
     *
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @return integer
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * Sets a new minimumAge
     *
     * The minimum age for a driver to rent this vehicle at this rate.
     *
     * @param integer $minimumAge
     * @return self
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }

    /**
     * Gets as maximumAge
     *
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @return integer
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * Sets a new maximumAge
     *
     * The maximum age for a driver to rent this vehicle at this rate.
     *
     * @param integer $maximumAge
     * @return self
     */
    public function setMaximumAge($maximumAge)
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * Gets as noShowFeeInd
     *
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @return boolean
     */
    public function getNoShowFeeInd()
    {
        return $this->noShowFeeInd;
    }

    /**
     * Sets a new noShowFeeInd
     *
     * When true, indicates a fee applies if the vehicle is not picked up.
     *
     * @param boolean $noShowFeeInd
     * @return self
     */
    public function setNoShowFeeInd($noShowFeeInd)
    {
        $this->noShowFeeInd = $noShowFeeInd;

        return $this;
    }


}

