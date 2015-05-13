<?php

namespace Davispeixoto\OpenTravelAlliance\TripFeaturesType;

/**
 * Class representing ActivitiesAType
 */
class ActivitiesAType
{

    /**
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @property string[] $activity
     */
    private $activity = null;

    /**
     * Adds as activity
     *
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @return self
     * @param string $activity
     */
    public function addToActivity($activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * isset activity
     *
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity
     *
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivity($index)
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity
     *
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @return string[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Identifies a single Activity that traveler(s) will engage in while on their
     * journey.
     *
     * @param string $activity
     * @return self
     */
    public function setActivity(array $activity)
    {
        $this->activity = $activity;

        return $this;
    }


}

