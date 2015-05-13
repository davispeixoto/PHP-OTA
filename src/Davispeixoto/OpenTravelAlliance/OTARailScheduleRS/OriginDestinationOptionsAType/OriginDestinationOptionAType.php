<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType
{

    /**
     * A collection of one or more legs that are defined as a single train number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\TrainSegmentAType[]
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Used to specify comment information for a group of train segments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Adds as trainSegment
     *
     * A collection of one or more legs that are defined as a single train number.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of one or more legs that are defined as a single train number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrainSegment($index)
    {
        return isset($this->trainSegment[$index]);
    }

    /**
     * unset trainSegment
     *
     * A collection of one or more legs that are defined as a single train number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrainSegment($index)
    {
        unset($this->trainSegment[$index]);
    }

    /**
     * Gets as trainSegment
     *
     * A collection of one or more legs that are defined as a single train number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\TrainSegmentAType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * A collection of one or more legs that are defined as a single train number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Used to specify comment information for a group of train segments.
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
     * Used to specify comment information for a group of train segments.
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
     * Used to specify comment information for a group of train segments.
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
     * Used to specify comment information for a group of train segments.
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
     * Used to specify comment information for a group of train segments.
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

