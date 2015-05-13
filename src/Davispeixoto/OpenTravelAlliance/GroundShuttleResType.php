<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundShuttleResType
 *
 * Shuttle service reservation information.
 * XSD Type: GroundShuttleResType
 */
class GroundShuttleResType
{

    /**
     * If true, a ticket will be/ has been issued as part of the reservation.
     *
     * @property boolean $ticketIssueInd
     */
    private $ticketIssueInd = null;

    /**
     * A ground service type. Select an enumerated value or use the "other_" literal
     * and specify a type in the @extension attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType
     * $serviceType
     */
    private $serviceType = null;

    /**
     * A collection of service locations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleResType\ServiceLocationAType[]
     * $serviceLocation
     */
    private $serviceLocation = null;

    /**
     * Gets as ticketIssueInd
     *
     * If true, a ticket will be/ has been issued as part of the reservation.
     *
     * @return boolean
     */
    public function getTicketIssueInd()
    {
        return $this->ticketIssueInd;
    }

    /**
     * Sets a new ticketIssueInd
     *
     * If true, a ticket will be/ has been issued as part of the reservation.
     *
     * @param boolean $ticketIssueInd
     * @return self
     */
    public function setTicketIssueInd($ticketIssueInd)
    {
        $this->ticketIssueInd = $ticketIssueInd;

        return $this;
    }

    /**
     * Gets as serviceType
     *
     * A ground service type. Select an enumerated value or use the "other_" literal
     * and specify a type in the @extension attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * A ground service type. Select an enumerated value or use the "other_" literal
     * and specify a type in the @extension attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType
     * $serviceType
     * @return self
     */
    public function setServiceType(\Davispeixoto\OpenTravelAlliance\ListGroundServiceProvidedType $serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Adds as serviceLocation
     *
     * A collection of service locations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleResType\ServiceLocationAType
     * $serviceLocation
     */
    public function addToServiceLocation(
        \Davispeixoto\OpenTravelAlliance\GroundShuttleResType\ServiceLocationAType $serviceLocation
    ) {
        $this->serviceLocation[] = $serviceLocation;

        return $this;
    }

    /**
     * isset serviceLocation
     *
     * A collection of service locations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceLocation($index)
    {
        return isset($this->serviceLocation[$index]);
    }

    /**
     * unset serviceLocation
     *
     * A collection of service locations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceLocation($index)
    {
        unset($this->serviceLocation[$index]);
    }

    /**
     * Gets as serviceLocation
     *
     * A collection of service locations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleResType\ServiceLocationAType[]
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * Sets a new serviceLocation
     *
     * A collection of service locations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundShuttleResType\ServiceLocationAType[]
     * $serviceLocation
     * @return self
     */
    public function setServiceLocation(array $serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;

        return $this;
    }


}

