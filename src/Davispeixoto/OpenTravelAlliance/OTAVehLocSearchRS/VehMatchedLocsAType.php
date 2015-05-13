<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocSearchRS;

/**
 * Class representing VehMatchedLocsAType
 */
class VehMatchedLocsAType
{

    /**
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleMatchedLocationType[]
     * $vehMatchedLoc
     */
    private $vehMatchedLoc = null;

    /**
     * Adds as vehMatchedLoc
     *
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleMatchedLocationType
     * $vehMatchedLoc
     */
    public function addToVehMatchedLoc(\Davispeixoto\OpenTravelAlliance\VehicleMatchedLocationType $vehMatchedLoc)
    {
        $this->vehMatchedLoc[] = $vehMatchedLoc;

        return $this;
    }

    /**
     * isset vehMatchedLoc
     *
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehMatchedLoc($index)
    {
        return isset($this->vehMatchedLoc[$index]);
    }

    /**
     * unset vehMatchedLoc
     *
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehMatchedLoc($index)
    {
        unset($this->vehMatchedLoc[$index]);
    }

    /**
     * Gets as vehMatchedLoc
     *
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleMatchedLocationType[]
     */
    public function getVehMatchedLoc()
    {
        return $this->vehMatchedLoc;
    }

    /**
     * Sets a new vehMatchedLoc
     *
     * A specific vehicle location that matches a search criteria. This information
     * includes the location along with the search criteria that were used to indicate
     * how the location was selected, and its distance from the area specified by the
     * search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleMatchedLocationType[]
     * $vehMatchedLoc
     * @return self
     */
    public function setVehMatchedLoc(array $vehMatchedLoc)
    {
        $this->vehMatchedLoc = $vehMatchedLoc;

        return $this;
    }


}

