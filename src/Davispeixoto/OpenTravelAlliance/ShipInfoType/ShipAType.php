<?php

namespace Davispeixoto\OpenTravelAlliance\ShipInfoType;

/**
 * Class representing ShipAType
 */
class ShipAType
{

    /**
     * When true, the ship is stabilized.
     *
     * @property boolean $stabilizedIndicator
     */
    private $stabilizedIndicator = null;

    /**
     * Identifies the country of registration.
     *
     * @property string $registrationCountryCode
     */
    private $registrationCountryCode = null;

    /**
     * The number of restaurants.
     *
     * @property integer $restaurantQuantity
     */
    private $restaurantQuantity = null;

    /**
     * The number of elevators.
     *
     * @property integer $elevatorQuantity
     */
    private $elevatorQuantity = null;

    /**
     * The maximum number of crew.
     *
     * @property integer $maxCrewQuantity
     */
    private $maxCrewQuantity = null;

    /**
     * The maximum number of guests.
     *
     * @property integer $maxGuestQuantity
     */
    private $maxGuestQuantity = null;

    /**
     * The ship cruising speed in knots.
     *
     * @property float $cruisingSpeed
     */
    private $cruisingSpeed = null;

    /**
     * The maximum ship speed in knots.
     *
     * @property float $maxSpeed
     */
    private $maxSpeed = null;

    /**
     * The number of interior cabins.
     *
     * @property integer $insideCabinQuantity
     */
    private $insideCabinQuantity = null;

    /**
     * The number of exterior cabins.
     *
     * @property integer $outsideCabinQuantity
     */
    private $outsideCabinQuantity = null;

    /**
     * The date of the ship's first voyage.
     *
     * @property \DateTime $inauguralDate
     */
    private $inauguralDate = null;

    /**
     * Date the ship was last refurbished.
     *
     * @property \DateTime $refurbishedDate
     */
    private $refurbishedDate = null;

    /**
     * The date the ship was built or delivered to the cruiseline.
     *
     * @property \DateTime $builtDate
     */
    private $builtDate = null;

    /**
     * This is the date the ship is next scheduled to be refurbished.
     *
     * @property \DateTime $nextRefurbishDate
     */
    private $nextRefurbishDate = null;

    /**
     * Gets as stabilizedIndicator
     *
     * When true, the ship is stabilized.
     *
     * @return boolean
     */
    public function getStabilizedIndicator()
    {
        return $this->stabilizedIndicator;
    }

    /**
     * Sets a new stabilizedIndicator
     *
     * When true, the ship is stabilized.
     *
     * @param boolean $stabilizedIndicator
     * @return self
     */
    public function setStabilizedIndicator($stabilizedIndicator)
    {
        $this->stabilizedIndicator = $stabilizedIndicator;

        return $this;
    }

    /**
     * Gets as registrationCountryCode
     *
     * Identifies the country of registration.
     *
     * @return string
     */
    public function getRegistrationCountryCode()
    {
        return $this->registrationCountryCode;
    }

    /**
     * Sets a new registrationCountryCode
     *
     * Identifies the country of registration.
     *
     * @param string $registrationCountryCode
     * @return self
     */
    public function setRegistrationCountryCode($registrationCountryCode)
    {
        $this->registrationCountryCode = $registrationCountryCode;

        return $this;
    }

    /**
     * Gets as restaurantQuantity
     *
     * The number of restaurants.
     *
     * @return integer
     */
    public function getRestaurantQuantity()
    {
        return $this->restaurantQuantity;
    }

    /**
     * Sets a new restaurantQuantity
     *
     * The number of restaurants.
     *
     * @param integer $restaurantQuantity
     * @return self
     */
    public function setRestaurantQuantity($restaurantQuantity)
    {
        $this->restaurantQuantity = $restaurantQuantity;

        return $this;
    }

    /**
     * Gets as elevatorQuantity
     *
     * The number of elevators.
     *
     * @return integer
     */
    public function getElevatorQuantity()
    {
        return $this->elevatorQuantity;
    }

    /**
     * Sets a new elevatorQuantity
     *
     * The number of elevators.
     *
     * @param integer $elevatorQuantity
     * @return self
     */
    public function setElevatorQuantity($elevatorQuantity)
    {
        $this->elevatorQuantity = $elevatorQuantity;

        return $this;
    }

    /**
     * Gets as maxCrewQuantity
     *
     * The maximum number of crew.
     *
     * @return integer
     */
    public function getMaxCrewQuantity()
    {
        return $this->maxCrewQuantity;
    }

    /**
     * Sets a new maxCrewQuantity
     *
     * The maximum number of crew.
     *
     * @param integer $maxCrewQuantity
     * @return self
     */
    public function setMaxCrewQuantity($maxCrewQuantity)
    {
        $this->maxCrewQuantity = $maxCrewQuantity;

        return $this;
    }

    /**
     * Gets as maxGuestQuantity
     *
     * The maximum number of guests.
     *
     * @return integer
     */
    public function getMaxGuestQuantity()
    {
        return $this->maxGuestQuantity;
    }

    /**
     * Sets a new maxGuestQuantity
     *
     * The maximum number of guests.
     *
     * @param integer $maxGuestQuantity
     * @return self
     */
    public function setMaxGuestQuantity($maxGuestQuantity)
    {
        $this->maxGuestQuantity = $maxGuestQuantity;

        return $this;
    }

    /**
     * Gets as cruisingSpeed
     *
     * The ship cruising speed in knots.
     *
     * @return float
     */
    public function getCruisingSpeed()
    {
        return $this->cruisingSpeed;
    }

    /**
     * Sets a new cruisingSpeed
     *
     * The ship cruising speed in knots.
     *
     * @param float $cruisingSpeed
     * @return self
     */
    public function setCruisingSpeed($cruisingSpeed)
    {
        $this->cruisingSpeed = $cruisingSpeed;

        return $this;
    }

    /**
     * Gets as maxSpeed
     *
     * The maximum ship speed in knots.
     *
     * @return float
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Sets a new maxSpeed
     *
     * The maximum ship speed in knots.
     *
     * @param float $maxSpeed
     * @return self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Gets as insideCabinQuantity
     *
     * The number of interior cabins.
     *
     * @return integer
     */
    public function getInsideCabinQuantity()
    {
        return $this->insideCabinQuantity;
    }

    /**
     * Sets a new insideCabinQuantity
     *
     * The number of interior cabins.
     *
     * @param integer $insideCabinQuantity
     * @return self
     */
    public function setInsideCabinQuantity($insideCabinQuantity)
    {
        $this->insideCabinQuantity = $insideCabinQuantity;

        return $this;
    }

    /**
     * Gets as outsideCabinQuantity
     *
     * The number of exterior cabins.
     *
     * @return integer
     */
    public function getOutsideCabinQuantity()
    {
        return $this->outsideCabinQuantity;
    }

    /**
     * Sets a new outsideCabinQuantity
     *
     * The number of exterior cabins.
     *
     * @param integer $outsideCabinQuantity
     * @return self
     */
    public function setOutsideCabinQuantity($outsideCabinQuantity)
    {
        $this->outsideCabinQuantity = $outsideCabinQuantity;

        return $this;
    }

    /**
     * Gets as inauguralDate
     *
     * The date of the ship's first voyage.
     *
     * @return \DateTime
     */
    public function getInauguralDate()
    {
        return $this->inauguralDate;
    }

    /**
     * Sets a new inauguralDate
     *
     * The date of the ship's first voyage.
     *
     * @param \DateTime $inauguralDate
     * @return self
     */
    public function setInauguralDate(\DateTime $inauguralDate)
    {
        $this->inauguralDate = $inauguralDate;

        return $this;
    }

    /**
     * Gets as refurbishedDate
     *
     * Date the ship was last refurbished.
     *
     * @return \DateTime
     */
    public function getRefurbishedDate()
    {
        return $this->refurbishedDate;
    }

    /**
     * Sets a new refurbishedDate
     *
     * Date the ship was last refurbished.
     *
     * @param \DateTime $refurbishedDate
     * @return self
     */
    public function setRefurbishedDate(\DateTime $refurbishedDate)
    {
        $this->refurbishedDate = $refurbishedDate;

        return $this;
    }

    /**
     * Gets as builtDate
     *
     * The date the ship was built or delivered to the cruiseline.
     *
     * @return \DateTime
     */
    public function getBuiltDate()
    {
        return $this->builtDate;
    }

    /**
     * Sets a new builtDate
     *
     * The date the ship was built or delivered to the cruiseline.
     *
     * @param \DateTime $builtDate
     * @return self
     */
    public function setBuiltDate(\DateTime $builtDate)
    {
        $this->builtDate = $builtDate;

        return $this;
    }

    /**
     * Gets as nextRefurbishDate
     *
     * This is the date the ship is next scheduled to be refurbished.
     *
     * @return \DateTime
     */
    public function getNextRefurbishDate()
    {
        return $this->nextRefurbishDate;
    }

    /**
     * Sets a new nextRefurbishDate
     *
     * This is the date the ship is next scheduled to be refurbished.
     *
     * @param \DateTime $nextRefurbishDate
     * @return self
     */
    public function setNextRefurbishDate(\DateTime $nextRefurbishDate)
    {
        $this->nextRefurbishDate = $nextRefurbishDate;

        return $this;
    }


}

