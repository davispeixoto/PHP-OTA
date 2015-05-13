<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS;

/**
 * Class representing CruiseItinInfosAType
 */
class CruiseItinInfosAType
{

    /**
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType[]
     * $cruiseItinInfo
     */
    private $cruiseItinInfo = null;

    /**
     * Adds as cruiseItinInfo
     *
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType
     * $cruiseItinInfo
     */
    public function addToCruiseItinInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType $cruiseItinInfo
    ) {
        $this->cruiseItinInfo[] = $cruiseItinInfo;

        return $this;
    }

    /**
     * isset cruiseItinInfo
     *
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseItinInfo($index)
    {
        return isset($this->cruiseItinInfo[$index]);
    }

    /**
     * unset cruiseItinInfo
     *
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseItinInfo($index)
    {
        unset($this->cruiseItinInfo[$index]);
    }

    /**
     * Gets as cruiseItinInfo
     *
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType[]
     */
    public function getCruiseItinInfo()
    {
        return $this->cruiseItinInfo;
    }

    /**
     * Sets a new cruiseItinInfo
     *
     * Identifies a specific location in the itinerary as well as the docking
     * information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseItineraryDescRS\CruiseItinInfosAType\CruiseItinInfoAType[]
     * $cruiseItinInfo
     * @return self
     */
    public function setCruiseItinInfo(array $cruiseItinInfo)
    {
        $this->cruiseItinInfo = $cruiseItinInfo;

        return $this;
    }


}

