<?php

namespace Davispeixoto\OpenTravelAlliance\RateRulesType;

/**
 * Class representing PickupReturnRulesAType
 */
class PickupReturnRulesAType
{

    /**
     * The day of the week, this rule refers. If this attribute is used, each following
     * element qualifies for this day.
     *
     * @property string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @property \DateInterval $minimumKeep
     */
    private $minimumKeep = null;

    /**
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @property \DateInterval $maximumKeep
     */
    private $maximumKeep = null;

    /**
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @property \DateInterval $maximumRental
     */
    private $maximumRental = null;

    /**
     * When true, the vehicle must be kept overnight.
     *
     * @property boolean $overnightInd
     */
    private $overnightInd = null;

    /**
     * When true, the vehicle may be returned on this day of the week.
     *
     * @property boolean $returnAllowedInd
     */
    private $returnAllowedInd = null;

    /**
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestPickupAType
     * $earliestPickup
     */
    private $earliestPickup = null;

    /**
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestPickupAType
     * $latestPickup
     */
    private $latestPickup = null;

    /**
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestReturnAType
     * $latestReturn
     */
    private $latestReturn = null;

    /**
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestReturnAType
     * $earliestReturn
     */
    private $earliestReturn = null;

    /**
     * Gets as dayOfWeek
     *
     * The day of the week, this rule refers. If this attribute is used, each following
     * element qualifies for this day.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * The day of the week, this rule refers. If this attribute is used, each following
     * element qualifies for this day.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Gets as minimumKeep
     *
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @return \DateInterval
     */
    public function getMinimumKeep()
    {
        return $this->minimumKeep;
    }

    /**
     * Sets a new minimumKeep
     *
     * The minimum time (e.g., number of rental days, number of rental hours) required
     * to qualify for a specific rate.
     *
     * @param \DateInterval $minimumKeep
     * @return self
     */
    public function setMinimumKeep(\DateInterval $minimumKeep)
    {
        $this->minimumKeep = $minimumKeep;

        return $this;
    }

    /**
     * Gets as maximumKeep
     *
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @return \DateInterval
     */
    public function getMaximumKeep()
    {
        return $this->maximumKeep;
    }

    /**
     * Sets a new maximumKeep
     *
     * The maximum time (e.g., number of rental days, number of rental hours) allowed
     * to qualify for a specific rate.
     *
     * @param \DateInterval $maximumKeep
     * @return self
     */
    public function setMaximumKeep(\DateInterval $maximumKeep)
    {
        $this->maximumKeep = $maximumKeep;

        return $this;
    }

    /**
     * Gets as maximumRental
     *
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @return \DateInterval
     */
    public function getMaximumRental()
    {
        return $this->maximumRental;
    }

    /**
     * Sets a new maximumRental
     *
     * The maximum number of rental days a vehicle is allowed to be rented.
     *
     * @param \DateInterval $maximumRental
     * @return self
     */
    public function setMaximumRental(\DateInterval $maximumRental)
    {
        $this->maximumRental = $maximumRental;

        return $this;
    }

    /**
     * Gets as overnightInd
     *
     * When true, the vehicle must be kept overnight.
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
     * When true, the vehicle must be kept overnight.
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
     * Gets as returnAllowedInd
     *
     * When true, the vehicle may be returned on this day of the week.
     *
     * @return boolean
     */
    public function getReturnAllowedInd()
    {
        return $this->returnAllowedInd;
    }

    /**
     * Sets a new returnAllowedInd
     *
     * When true, the vehicle may be returned on this day of the week.
     *
     * @param boolean $returnAllowedInd
     * @return self
     */
    public function setReturnAllowedInd($returnAllowedInd)
    {
        $this->returnAllowedInd = $returnAllowedInd;

        return $this;
    }

    /**
     * Gets as earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestPickupAType
     */
    public function getEarliestPickup()
    {
        return $this->earliestPickup;
    }

    /**
     * Sets a new earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestPickupAType
     * $earliestPickup
     * @return self
     */
    public function setEarliestPickup(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestPickupAType $earliestPickup
    ) {
        $this->earliestPickup = $earliestPickup;

        return $this;
    }

    /**
     * Gets as latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestPickupAType
     */
    public function getLatestPickup()
    {
        return $this->latestPickup;
    }

    /**
     * Sets a new latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestPickupAType
     * $latestPickup
     * @return self
     */
    public function setLatestPickup(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestPickupAType $latestPickup
    ) {
        $this->latestPickup = $latestPickup;

        return $this;
    }

    /**
     * Gets as latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestReturnAType
     */
    public function getLatestReturn()
    {
        return $this->latestReturn;
    }

    /**
     * Sets a new latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestReturnAType
     * $latestReturn
     * @return self
     */
    public function setLatestReturn(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\LatestReturnAType $latestReturn
    ) {
        $this->latestReturn = $latestReturn;

        return $this;
    }

    /**
     * Gets as earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestReturnAType
     */
    public function getEarliestReturn()
    {
        return $this->earliestReturn;
    }

    /**
     * Sets a new earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestReturnAType
     * $earliestReturn
     * @return self
     */
    public function setEarliestReturn(
        \Davispeixoto\OpenTravelAlliance\RateRulesType\PickupReturnRulesAType\EarliestReturnAType $earliestReturn
    ) {
        $this->earliestReturn = $earliestReturn;

        return $this;
    }


}

