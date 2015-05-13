<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType;

/**
 * Class representing LocationAType
 */
class LocationAType
{

    /**
     * The name of the location.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The time for this transportation activity (e.g., .return, drop-off, departure).
     *
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * The type of location (e.g., return, drop-off, departure).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as name
     *
     * The name of the location.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the location.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as time
     *
     * The time for this transportation activity (e.g., .return, drop-off, departure).
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The time for this transportation activity (e.g., .return, drop-off, departure).
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of location (e.g., return, drop-off, departure).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of location (e.g., return, drop-off, departure).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

