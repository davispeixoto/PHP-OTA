<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing BookingReferenceIDAType
 */
class BookingReferenceIDAType extends UniqueIDType
{

    /**
     * Train segments that have already been booked for which pricing is requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType\TrainSegmentAType[]
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Adds as trainSegment
     *
     * Train segments that have already been booked for which pricing is requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * Train segments that have already been booked for which pricing is requested.
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
     * Train segments that have already been booked for which pricing is requested.
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
     * Train segments that have already been booked for which pricing is requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType\TrainSegmentAType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * Train segments that have already been booked for which pricing is requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }


}

