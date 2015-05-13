<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\ServicesAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @property string $providedBy
     */
    private $providedBy = null;

    /**
     * Identifes the name of the provider of the item or service.
     *
     * @property string $providerName
     */
    private $providerName = null;

    /**
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @property string $locationName
     */
    private $locationName = null;

    /**
     * The time the service is scheduled to begin.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the service is scheduled to finish.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Identifies a meeting or business service (e.g. security, first aid). Refer to
     * OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @return string
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * Sets a new providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @param string $providedBy
     * @return self
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;

        return $this;
    }

    /**
     * Gets as providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the service is scheduled to begin.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time the service is scheduled to begin.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time the service is scheduled to finish.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time the service is scheduled to finish.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a meeting or business service (e.g. security, first aid). Refer to
     * OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a meeting or business service (e.g. security, first aid). Refer to
     * OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

