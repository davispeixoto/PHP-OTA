<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{

    /**
     * Specifies a
     * specific date or date range.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[]
     * $date
     */
    private $date = null;

    /**
     * Comments regarding the set of date ranges as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Adds as date
     *
     * Specifies a
     * specific date or date range.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType
     * $date
     */
    public function addToDate(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType $date
    ) {
        $this->date[] = $date;

        return $this;
    }

    /**
     * isset date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Specifies a
     * specific date or date range.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies a
     * specific date or date range.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType\DateAType[]
     * $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as comments
     *
     * Comments regarding the set of date ranges as a whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments regarding the set of date ranges as a whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     * @return self
     */
    public function setComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

