<?php

namespace Davispeixoto\OpenTravelAlliance\AreaInfoType;

/**
 * Class representing RecreationsAType
 */
class RecreationsAType
{

    /**
     * The date and time when Recreations was last updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType[]
     * $recreation
     */
    private $recreation = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when Recreations was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when Recreations was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Adds as recreation
     *
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType
     * $recreation
     */
    public function addToRecreation(
        \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType $recreation
    ) {
        $this->recreation[] = $recreation;

        return $this;
    }

    /**
     * isset recreation
     *
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * A recreation facility available to the guest. These may or may not be operated
     * by the hotel or located at the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType\RecreationAType[]
     * $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;

        return $this;
    }


}

