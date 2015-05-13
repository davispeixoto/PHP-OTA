<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * If true, a golf facility with a driving range is requested.
     *
     * @property boolean $drivingRangeInd
     */
    private $drivingRangeInd = null;

    /**
     * If true, a golf facility with a dining facility is requested.
     *
     * @property boolean $diningInd
     */
    private $diningInd = null;

    /**
     * If true, a golf facility with a golf pro (or golf training) is requested.
     *
     * @property boolean $golfProInd
     */
    private $golfProInd = null;

    /**
     * If included, golf facility(s) by this designer should be included in search
     * results.
     *
     * @property string $courseDesigner
     */
    private $courseDesigner = null;

    /**
     * Gets as drivingRangeInd
     *
     * If true, a golf facility with a driving range is requested.
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
     * If true, a golf facility with a driving range is requested.
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
     * If true, a golf facility with a dining facility is requested.
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
     * If true, a golf facility with a dining facility is requested.
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
     * Gets as golfProInd
     *
     * If true, a golf facility with a golf pro (or golf training) is requested.
     *
     * @return boolean
     */
    public function getGolfProInd()
    {
        return $this->golfProInd;
    }

    /**
     * Sets a new golfProInd
     *
     * If true, a golf facility with a golf pro (or golf training) is requested.
     *
     * @param boolean $golfProInd
     * @return self
     */
    public function setGolfProInd($golfProInd)
    {
        $this->golfProInd = $golfProInd;

        return $this;
    }

    /**
     * Gets as courseDesigner
     *
     * If included, golf facility(s) by this designer should be included in search
     * results.
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
     * If included, golf facility(s) by this designer should be included in search
     * results.
     *
     * @param string $courseDesigner
     * @return self
     */
    public function setCourseDesigner($courseDesigner)
    {
        $this->courseDesigner = $courseDesigner;

        return $this;
    }


}

