<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleMatchedLocationType
 *
 *
 * XSD Type: VehicleMatchedLocationType
 */
class VehicleMatchedLocationType
{

    /**
     * When true, the location being returned is an alternate location to what was
     * initially requested.
     *
     * @property boolean $alternateLocInd
     */
    private $alternateLocInd = null;

    /**
     * Detailed information on a specific vehicle rental location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetail
     */
    private $locationDetail = null;

    /**
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType[]
     * $vehLocSearchCriterion
     */
    private $vehLocSearchCriterion = null;

    /**
     * Gets as alternateLocInd
     *
     * When true, the location being returned is an alternate location to what was
     * initially requested.
     *
     * @return boolean
     */
    public function getAlternateLocInd()
    {
        return $this->alternateLocInd;
    }

    /**
     * Sets a new alternateLocInd
     *
     * When true, the location being returned is an alternate location to what was
     * initially requested.
     *
     * @param boolean $alternateLocInd
     * @return self
     */
    public function setAlternateLocInd($alternateLocInd)
    {
        $this->alternateLocInd = $alternateLocInd;

        return $this;
    }

    /**
     * Gets as locationDetail
     *
     * Detailed information on a specific vehicle rental location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     */
    public function getLocationDetail()
    {
        return $this->locationDetail;
    }

    /**
     * Sets a new locationDetail
     *
     * Detailed information on a specific vehicle rental location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetail
     * @return self
     */
    public function setLocationDetail(\Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType $locationDetail)
    {
        $this->locationDetail = $locationDetail;

        return $this;
    }

    /**
     * Adds as vehLocSearchCriterion
     *
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType
     * $vehLocSearchCriterion
     */
    public function addToVehLocSearchCriterion(
        \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType $vehLocSearchCriterion
    ) {
        $this->vehLocSearchCriterion[] = $vehLocSearchCriterion;

        return $this;
    }

    /**
     * isset vehLocSearchCriterion
     *
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehLocSearchCriterion($index)
    {
        return isset($this->vehLocSearchCriterion[$index]);
    }

    /**
     * unset vehLocSearchCriterion
     *
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehLocSearchCriterion($index)
    {
        unset($this->vehLocSearchCriterion[$index]);
    }

    /**
     * Gets as vehLocSearchCriterion
     *
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType[]
     */
    public function getVehLocSearchCriterion()
    {
        return $this->vehLocSearchCriterion;
    }

    /**
     * Sets a new vehLocSearchCriterion
     *
     * The search criterion may be echoed to indicate how the location was selected,
     * and to provide a distance from that search location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType[]
     * $vehLocSearchCriterion
     * @return self
     */
    public function setVehLocSearchCriterion(array $vehLocSearchCriterion)
    {
        $this->vehLocSearchCriterion = $vehLocSearchCriterion;

        return $this;
    }


}

