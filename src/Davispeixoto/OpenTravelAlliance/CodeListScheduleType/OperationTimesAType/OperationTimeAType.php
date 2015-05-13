<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListScheduleType\OperationTimesAType;

/**
 * Class representing OperationTimeAType
 */
class OperationTimeAType
{

    /**
     * Frequency description.Example: On the half hour
     *
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * Period of operation description.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Monday available indicator.Example: trueIf true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * Tuesday available indicator.Example: trueIf true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * Wednesday available indicator.Example: trueIf true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * Thursday available indicator.Example: trueIf true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * Friday available indicator.Example: trueIf true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * Saturday available indicator.Example: trueIf true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * Sunday available indicator.Example: trueIf true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

    /**
     * Operation start period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start
     */
    private $start = null;

    /**
     * Period duration.Example: P2D
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * Operation end period.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end
     */
    private $end = null;

    /**
     * Additional operation information.Example: After hours operations
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAdditionalOperationInfoType
     * $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Gets as frequency
     *
     * Frequency description.Example: On the half hour
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Frequency description.Example: On the half hour
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets as description
     *
     * Period of operation description.
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
     * Period of operation description.
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
     * Gets as mon
     *
     * Monday available indicator.Example: trueIf true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * Monday available indicator.Example: trueIf true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * Tuesday available indicator.Example: trueIf true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * Tuesday available indicator.Example: trueIf true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * Wednesday available indicator.Example: trueIf true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * Wednesday available indicator.Example: trueIf true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * Thursday available indicator.Example: trueIf true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * Thursday available indicator.Example: trueIf true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * Friday available indicator.Example: trueIf true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * Friday available indicator.Example: trueIf true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * Saturday available indicator.Example: trueIf true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * Saturday available indicator.Example: trueIf true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * Sunday available indicator.Example: trueIf true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * Sunday available indicator.Example: trueIf true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * Gets as start
     *
     * Operation start period.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Operation start period.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * Period duration.Example: P2D
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Period duration.Example: P2D
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * Operation end period.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * Operation end period.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\CodeListSchedulePeriodType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Additional operation information.Example: After hours operations
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListAdditionalOperationInfoType
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Additional operation information.Example: After hours operations
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAdditionalOperationInfoType
     * $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(\Davispeixoto\OpenTravelAlliance\ListAdditionalOperationInfoType $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }


}

