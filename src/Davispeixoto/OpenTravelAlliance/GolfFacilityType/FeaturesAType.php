<?php

namespace Davispeixoto\OpenTravelAlliance\GolfFacilityType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * The dress code for the golf facility.
     *
     * @property string $dressPolicy
     */
    private $dressPolicy = null;

    /**
     * If true, the golf facility contains a driving range.
     *
     * @property boolean $drivingRangeInd
     */
    private $drivingRangeInd = null;

    /**
     * If true, the golf facility contains a dining facility.
     *
     * @property boolean $diningInd
     */
    private $diningInd = null;

    /**
     * If true, golf lessons with a golf pro are available.
     *
     * @property boolean $golfLessonInd
     */
    private $golfLessonInd = null;

    /**
     * If true, a golf school is available.
     *
     * @property boolean $golfSchoolInd
     */
    private $golfSchoolInd = null;

    /**
     * The year the course was built.
     *
     * @property \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $yearBuilt
     */
    private $yearBuilt = null;

    /**
     * The name of the course designer.
     *
     * @property string $courseDesigner
     */
    private $courseDesigner = null;

    /**
     * If true, metal spikes are allowed at the golf facility.
     *
     * @property boolean $metalSpikesInd
     */
    private $metalSpikesInd = null;

    /**
     * The number of holes on the golf facility.
     *
     * @property integer $numberOfHoles
     */
    private $numberOfHoles = null;

    /**
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @property boolean $disabilityInd
     */
    private $disabilityInd = null;

    /**
     * A description of services available for disabled individuals.
     *
     * @property string $disabilityServices
     */
    private $disabilityServices = null;

    /**
     * If true, the golf facility has lockers available to guests.
     *
     * @property boolean $dayLockerInd
     */
    private $dayLockerInd = null;

    /**
     * If true, golf clubs are available for rental at the golf facility.
     *
     * @property boolean $clubRentalInd
     */
    private $clubRentalInd = null;

    /**
     * Gets as dressPolicy
     *
     * The dress code for the golf facility.
     *
     * @return string
     */
    public function getDressPolicy()
    {
        return $this->dressPolicy;
    }

    /**
     * Sets a new dressPolicy
     *
     * The dress code for the golf facility.
     *
     * @param string $dressPolicy
     * @return self
     */
    public function setDressPolicy($dressPolicy)
    {
        $this->dressPolicy = $dressPolicy;

        return $this;
    }

    /**
     * Gets as drivingRangeInd
     *
     * If true, the golf facility contains a driving range.
     *
     * @return boolean
     */
    public function getDrivingRangeInd()
    {
        return $this->drivingRangeInd;
    }

    /**
     * Sets a new drivingRangeInd
     *
     * If true, the golf facility contains a driving range.
     *
     * @param boolean $drivingRangeInd
     * @return self
     */
    public function setDrivingRangeInd($drivingRangeInd)
    {
        $this->drivingRangeInd = $drivingRangeInd;

        return $this;
    }

    /**
     * Gets as diningInd
     *
     * If true, the golf facility contains a dining facility.
     *
     * @return boolean
     */
    public function getDiningInd()
    {
        return $this->diningInd;
    }

    /**
     * Sets a new diningInd
     *
     * If true, the golf facility contains a dining facility.
     *
     * @param boolean $diningInd
     * @return self
     */
    public function setDiningInd($diningInd)
    {
        $this->diningInd = $diningInd;

        return $this;
    }

    /**
     * Gets as golfLessonInd
     *
     * If true, golf lessons with a golf pro are available.
     *
     * @return boolean
     */
    public function getGolfLessonInd()
    {
        return $this->golfLessonInd;
    }

    /**
     * Sets a new golfLessonInd
     *
     * If true, golf lessons with a golf pro are available.
     *
     * @param boolean $golfLessonInd
     * @return self
     */
    public function setGolfLessonInd($golfLessonInd)
    {
        $this->golfLessonInd = $golfLessonInd;

        return $this;
    }

    /**
     * Gets as golfSchoolInd
     *
     * If true, a golf school is available.
     *
     * @return boolean
     */
    public function getGolfSchoolInd()
    {
        return $this->golfSchoolInd;
    }

    /**
     * Sets a new golfSchoolInd
     *
     * If true, a golf school is available.
     *
     * @param boolean $golfSchoolInd
     * @return self
     */
    public function setGolfSchoolInd($golfSchoolInd)
    {
        $this->golfSchoolInd = $golfSchoolInd;

        return $this;
    }

    /**
     * Gets as yearBuilt
     *
     * The year the course was built.
     *
     * @return \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     */
    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }

    /**
     * Sets a new yearBuilt
     *
     * The year the course was built.
     *
     * @param \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $yearBuilt
     * @return self
     */
    public function setYearBuilt(\Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $yearBuilt)
    {
        $this->yearBuilt = $yearBuilt;

        return $this;
    }

    /**
     * Gets as courseDesigner
     *
     * The name of the course designer.
     *
     * @return string
     */
    public function getCourseDesigner()
    {
        return $this->courseDesigner;
    }

    /**
     * Sets a new courseDesigner
     *
     * The name of the course designer.
     *
     * @param string $courseDesigner
     * @return self
     */
    public function setCourseDesigner($courseDesigner)
    {
        $this->courseDesigner = $courseDesigner;

        return $this;
    }

    /**
     * Gets as metalSpikesInd
     *
     * If true, metal spikes are allowed at the golf facility.
     *
     * @return boolean
     */
    public function getMetalSpikesInd()
    {
        return $this->metalSpikesInd;
    }

    /**
     * Sets a new metalSpikesInd
     *
     * If true, metal spikes are allowed at the golf facility.
     *
     * @param boolean $metalSpikesInd
     * @return self
     */
    public function setMetalSpikesInd($metalSpikesInd)
    {
        $this->metalSpikesInd = $metalSpikesInd;

        return $this;
    }

    /**
     * Gets as numberOfHoles
     *
     * The number of holes on the golf facility.
     *
     * @return integer
     */
    public function getNumberOfHoles()
    {
        return $this->numberOfHoles;
    }

    /**
     * Sets a new numberOfHoles
     *
     * The number of holes on the golf facility.
     *
     * @param integer $numberOfHoles
     * @return self
     */
    public function setNumberOfHoles($numberOfHoles)
    {
        $this->numberOfHoles = $numberOfHoles;

        return $this;
    }

    /**
     * Gets as disabilityInd
     *
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @return boolean
     */
    public function getDisabilityInd()
    {
        return $this->disabilityInd;
    }

    /**
     * Sets a new disabilityInd
     *
     * If true, the golf facility accommodates physically challenged individuals.
     *
     * @param boolean $disabilityInd
     * @return self
     */
    public function setDisabilityInd($disabilityInd)
    {
        $this->disabilityInd = $disabilityInd;

        return $this;
    }

    /**
     * Gets as disabilityServices
     *
     * A description of services available for disabled individuals.
     *
     * @return string
     */
    public function getDisabilityServices()
    {
        return $this->disabilityServices;
    }

    /**
     * Sets a new disabilityServices
     *
     * A description of services available for disabled individuals.
     *
     * @param string $disabilityServices
     * @return self
     */
    public function setDisabilityServices($disabilityServices)
    {
        $this->disabilityServices = $disabilityServices;

        return $this;
    }

    /**
     * Gets as dayLockerInd
     *
     * If true, the golf facility has lockers available to guests.
     *
     * @return boolean
     */
    public function getDayLockerInd()
    {
        return $this->dayLockerInd;
    }

    /**
     * Sets a new dayLockerInd
     *
     * If true, the golf facility has lockers available to guests.
     *
     * @param boolean $dayLockerInd
     * @return self
     */
    public function setDayLockerInd($dayLockerInd)
    {
        $this->dayLockerInd = $dayLockerInd;

        return $this;
    }

    /**
     * Gets as clubRentalInd
     *
     * If true, golf clubs are available for rental at the golf facility.
     *
     * @return boolean
     */
    public function getClubRentalInd()
    {
        return $this->clubRentalInd;
    }

    /**
     * Sets a new clubRentalInd
     *
     * If true, golf clubs are available for rental at the golf facility.
     *
     * @param boolean $clubRentalInd
     * @return self
     */
    public function setClubRentalInd($clubRentalInd)
    {
        $this->clubRentalInd = $clubRentalInd;

        return $this;
    }


}

