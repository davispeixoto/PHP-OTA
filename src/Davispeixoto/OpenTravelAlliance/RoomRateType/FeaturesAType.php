<?php

namespace Davispeixoto\OpenTravelAlliance\RoomRateType;

/**
 * Class representing FeaturesAType
 */
class FeaturesAType
{

    /**
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType\FeatureAType[]
     * $feature
     */
    private $feature = null;

    /**
     * Adds as feature
     *
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType\FeatureAType
     * $feature
     */
    public function addToFeature(\Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType\FeatureAType $feature)
    {
        $this->feature[] = $feature;

        return $this;
    }

    /**
     * isset feature
     *
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeature($index)
    {
        return isset($this->feature[$index]);
    }

    /**
     * unset feature
     *
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeature($index)
    {
        unset($this->feature[$index]);
    }

    /**
     * Gets as feature
     *
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType\FeatureAType[]
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets a new feature
     *
     * Allows for the description of any features and/or amenities that are made
     * available as part of this specific room and this specifiic rate plan, for
     * example, large screen television, video/DVD player in room, room service
     * breakfast, and details about that breakfast.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomRateType\FeaturesAType\FeatureAType[]
     * $feature
     * @return self
     */
    public function setFeature(array $feature)
    {
        $this->feature = $feature;

        return $this;
    }


}

