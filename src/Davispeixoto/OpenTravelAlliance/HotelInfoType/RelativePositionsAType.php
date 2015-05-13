<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing RelativePositionsAType
 */
class RelativePositionsAType
{

    /**
     * Where the hotel is in relation to/from a location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RelativePositionType[]
     * $relativePosition
     */
    private $relativePosition = null;

    /**
     * Adds as relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition
     */
    public function addToRelativePosition(\Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition)
    {
        $this->relativePosition[] = $relativePosition;

        return $this;
    }

    /**
     * isset relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelativePosition($index)
    {
        return isset($this->relativePosition[$index]);
    }

    /**
     * unset relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelativePosition($index)
    {
        unset($this->relativePosition[$index]);
    }

    /**
     * Gets as relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RelativePositionType[]
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RelativePositionType[] $relativePosition
     * @return self
     */
    public function setRelativePosition(array $relativePosition)
    {
        $this->relativePosition = $relativePosition;

        return $this;
    }


}

