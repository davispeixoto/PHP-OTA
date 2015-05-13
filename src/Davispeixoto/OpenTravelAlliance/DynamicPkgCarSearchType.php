<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgCarSearchType
 *
 * A collection of rental car search criteria.
 * XSD Type: DynamicPkgCarSearchType
 */
class DynamicPkgCarSearchType extends DynamicPkgSearchType
{

    /**
     * The type of search.
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * Data that is common in a request for vehicle availability and rates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType
     * $vehAvailRQCore
     */
    private $vehAvailRQCore = null;

    /**
     * Supplemental information that may be included in a request for vehicle
     * availability and rates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType
     * $vehAvailRQInfo
     */
    private $vehAvailRQInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as requestType
     *
     * The type of search.
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * The type of search.
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Gets as vehAvailRQCore
     *
     * Data that is common in a request for vehicle availability and rates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType
     */
    public function getVehAvailRQCore()
    {
        return $this->vehAvailRQCore;
    }

    /**
     * Sets a new vehAvailRQCore
     *
     * Data that is common in a request for vehicle availability and rates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType $vehAvailRQCore
     * @return self
     */
    public function setVehAvailRQCore(\Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType $vehAvailRQCore)
    {
        $this->vehAvailRQCore = $vehAvailRQCore;

        return $this;
    }

    /**
     * Gets as vehAvailRQInfo
     *
     * Supplemental information that may be included in a request for vehicle
     * availability and rates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType
     */
    public function getVehAvailRQInfo()
    {
        return $this->vehAvailRQInfo;
    }

    /**
     * Sets a new vehAvailRQInfo
     *
     * Supplemental information that may be included in a request for vehicle
     * availability and rates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType
     * $vehAvailRQInfo
     * @return self
     */
    public function setVehAvailRQInfo(\Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType $vehAvailRQInfo)
    {
        $this->vehAvailRQInfo = $vehAvailRQInfo;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

