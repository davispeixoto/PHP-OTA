<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType;

use Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType;

/**
 * Class representing CarResultsAType
 *
 * A collection of available rental car inventory.
 */
class CarResultsAType extends DynamicPkgResponseType
{

    /**
     * The type of search.
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * Identifies the common, or core, information associated with the response
     * poviding information on the availability of rental vehicles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailRSCoreType
     * $vehAvailRSCore
     */
    private $vehAvailRSCore = null;

    /**
     * Gets as responseType
     *
     * The type of search.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * The type of search.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as vehAvailRSCore
     *
     * Identifies the common, or core, information associated with the response
     * poviding information on the availability of rental vehicles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailRSCoreType
     */
    public function getVehAvailRSCore()
    {
        return $this->vehAvailRSCore;
    }

    /**
     * Sets a new vehAvailRSCore
     *
     * Identifies the common, or core, information associated with the response
     * poviding information on the availability of rental vehicles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRSCoreType $vehAvailRSCore
     * @return self
     */
    public function setVehAvailRSCore(\Davispeixoto\OpenTravelAlliance\VehicleAvailRSCoreType $vehAvailRSCore)
    {
        $this->vehAvailRSCore = $vehAvailRSCore;

        return $this;
    }


}

