<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationInfoType;

/**
 * Class representing ResortAType
 */
class ResortAType
{

    /**
     * Provides the supplier's code for the resort.
     *
     * @property string $resortCode
     */
    private $resortCode = null;

    /**
     * Provides the supplier's name for the resort.
     *
     * @property string $resortName
     */
    private $resortName = null;

    /**
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @property string $destinationCode
     */
    private $destinationCode = null;

    /**
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @property string $destinationLevel
     */
    private $destinationLevel = null;

    /**
     * The name of the destination.
     *
     * @property string $destinationName
     */
    private $destinationName = null;

    /**
     * Gets as resortCode
     *
     * Provides the supplier's code for the resort.
     *
     * @return string
     */
    public function getResortCode()
    {
        return $this->resortCode;
    }

    /**
     * Sets a new resortCode
     *
     * Provides the supplier's code for the resort.
     *
     * @param string $resortCode
     * @return self
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;

        return $this;
    }

    /**
     * Gets as resortName
     *
     * Provides the supplier's name for the resort.
     *
     * @return string
     */
    public function getResortName()
    {
        return $this->resortName;
    }

    /**
     * Sets a new resortName
     *
     * Provides the supplier's name for the resort.
     *
     * @param string $resortName
     * @return self
     */
    public function setResortName($resortName)
    {
        $this->resortName = $resortName;

        return $this;
    }

    /**
     * Gets as destinationCode
     *
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @return string
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * Sets a new destinationCode
     *
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @param string $destinationCode
     * @return self
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;

        return $this;
    }

    /**
     * Gets as destinationLevel
     *
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @return string
     */
    public function getDestinationLevel()
    {
        return $this->destinationLevel;
    }

    /**
     * Sets a new destinationLevel
     *
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @param string $destinationLevel
     * @return self
     */
    public function setDestinationLevel($destinationLevel)
    {
        $this->destinationLevel = $destinationLevel;

        return $this;
    }

    /**
     * Gets as destinationName
     *
     * The name of the destination.
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * Sets a new destinationName
     *
     * The name of the destination.
     *
     * @param string $destinationName
     * @return self
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;

        return $this;
    }


}

