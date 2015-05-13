<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType;

/**
 * Class representing AccommodationClassAType
 */
class AccommodationClassAType
{

    /**
     * Providers rating eg '4'.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Providers qualifier name e.g. 'Crowns'.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Official rating e.g. '4'.
     *
     * @property string $nationalCode
     */
    private $nationalCode = null;

    /**
     * Official qualifier name eg 'STAR'.
     *
     * @property string $officialName
     */
    private $officialName = null;

    /**
     * Gets as code
     *
     * Providers rating eg '4'.
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
     * Providers rating eg '4'.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * Providers qualifier name e.g. 'Crowns'.
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
     * Providers qualifier name e.g. 'Crowns'.
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
     * Gets as nationalCode
     *
     * Official rating e.g. '4'.
     *
     * @return string
     */
    public function getNationalCode()
    {
        return $this->nationalCode;
    }

    /**
     * Sets a new nationalCode
     *
     * Official rating e.g. '4'.
     *
     * @param string $nationalCode
     * @return self
     */
    public function setNationalCode($nationalCode)
    {
        $this->nationalCode = $nationalCode;

        return $this;
    }

    /**
     * Gets as officialName
     *
     * Official qualifier name eg 'STAR'.
     *
     * @return string
     */
    public function getOfficialName()
    {
        return $this->officialName;
    }

    /**
     * Sets a new officialName
     *
     * Official qualifier name eg 'STAR'.
     *
     * @param string $officialName
     * @return self
     */
    public function setOfficialName($officialName)
    {
        $this->officialName = $officialName;

        return $this;
    }


}

