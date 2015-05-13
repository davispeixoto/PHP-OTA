<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType;

use Davispeixoto\OpenTravelAlliance\TrainSegmentType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType extends TrainSegmentType
{

    /**
     * Specifies the on time performance of the train from a recognized reporting
     * agency such as the US Department of Transport, e.g. 99%.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * The class of inventory controlled services available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     */
    private $classCodes = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     * $accommodationCategory
     */
    private $accommodationCategory = null;

    /**
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Gets as onTimeRate
     *
     * Specifies the on time performance of the train from a recognized reporting
     * agency such as the US Department of Transport, e.g. 99%.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Specifies the on time performance of the train from a recognized reporting
     * agency such as the US Department of Transport, e.g. 99%.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * Adds as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes
     */
    public function addToClassCodes(\Davispeixoto\OpenTravelAlliance\ClassCodeType $classCodes)
    {
        $this->classCodes[] = $classCodes;

        return $this;
    }

    /**
     * isset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClassCodes($index)
    {
        return isset($this->classCodes[$index]);
    }

    /**
     * unset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClassCodes($index)
    {
        unset($this->classCodes[$index]);
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ClassCodeType[]
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ClassCodeType[] $classCodes
     * @return self
     */
    public function setClassCodes(array $classCodes)
    {
        $this->classCodes = $classCodes;

        return $this;
    }

    /**
     * Gets as accommodationCategory
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     */
    public function getAccommodationCategory()
    {
        return $this->accommodationCategory;
    }

    /**
     * Sets a new accommodationCategory
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationCategory
     * $accommodationCategory
     * @return self
     */
    public function setAccommodationCategory(
        \Davispeixoto\OpenTravelAlliance\AccommodationCategory $accommodationCategory
    ) {
        $this->accommodationCategory = $accommodationCategory;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\FreeTextType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any special comments on the leg, e.g. "Operated by Amtrak."
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

