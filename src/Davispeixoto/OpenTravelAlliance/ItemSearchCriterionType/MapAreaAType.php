<?php

namespace Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType;

/**
 * Class representing MapAreaAType
 */
class MapAreaAType
{

    /**
     * The latitude of the northern boundary of the map.
     *
     * @property string $northLatitude
     */
    private $northLatitude = null;

    /**
     * The latitude of the southern boundary of the map.
     *
     * @property string $southLatitude
     */
    private $southLatitude = null;

    /**
     * The longitude of the eastern boundary of the map.
     *
     * @property string $eastLongitude
     */
    private $eastLongitude = null;

    /**
     * The longitude of the western boundary of the map.
     *
     * @property string $westLongitude
     */
    private $westLongitude = null;

    /**
     * Gets as northLatitude
     *
     * The latitude of the northern boundary of the map.
     *
     * @return string
     */
    public function getNorthLatitude()
    {
        return $this->northLatitude;
    }

    /**
     * Sets a new northLatitude
     *
     * The latitude of the northern boundary of the map.
     *
     * @param string $northLatitude
     * @return self
     */
    public function setNorthLatitude($northLatitude)
    {
        $this->northLatitude = $northLatitude;

        return $this;
    }

    /**
     * Gets as southLatitude
     *
     * The latitude of the southern boundary of the map.
     *
     * @return string
     */
    public function getSouthLatitude()
    {
        return $this->southLatitude;
    }

    /**
     * Sets a new southLatitude
     *
     * The latitude of the southern boundary of the map.
     *
     * @param string $southLatitude
     * @return self
     */
    public function setSouthLatitude($southLatitude)
    {
        $this->southLatitude = $southLatitude;

        return $this;
    }

    /**
     * Gets as eastLongitude
     *
     * The longitude of the eastern boundary of the map.
     *
     * @return string
     */
    public function getEastLongitude()
    {
        return $this->eastLongitude;
    }

    /**
     * Sets a new eastLongitude
     *
     * The longitude of the eastern boundary of the map.
     *
     * @param string $eastLongitude
     * @return self
     */
    public function setEastLongitude($eastLongitude)
    {
        $this->eastLongitude = $eastLongitude;

        return $this;
    }

    /**
     * Gets as westLongitude
     *
     * The longitude of the western boundary of the map.
     *
     * @return string
     */
    public function getWestLongitude()
    {
        return $this->westLongitude;
    }

    /**
     * Sets a new westLongitude
     *
     * The longitude of the western boundary of the map.
     *
     * @param string $westLongitude
     * @return self
     */
    public function setWestLongitude($westLongitude)
    {
        $this->westLongitude = $westLongitude;

        return $this;
    }


}

