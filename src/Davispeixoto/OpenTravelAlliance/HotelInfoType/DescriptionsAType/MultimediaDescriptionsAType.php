<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType;

use Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType;

/**
 * Class representing MultimediaDescriptionsAType
 */
class MultimediaDescriptionsAType extends MultimediaDescriptionsType
{

    /**
     * Used to designate a particular type of description such as marketing. Refer to
     * OpenTravel Code List Information Type (INF).
     *
     * @property string $infoCode
     */
    private $infoCode = null;

    /**
     * Used to designate a particular type of additional information. Refer to
     * OpenTravel Code List Additional Detail Type (ADT).
     *
     * @property string $additionalDetailCode
     */
    private $additionalDetailCode = null;

    /**
     * Gets as infoCode
     *
     * Used to designate a particular type of description such as marketing. Refer to
     * OpenTravel Code List Information Type (INF).
     *
     * @return string
     */
    public function getInfoCode()
    {
        return $this->infoCode;
    }

    /**
     * Sets a new infoCode
     *
     * Used to designate a particular type of description such as marketing. Refer to
     * OpenTravel Code List Information Type (INF).
     *
     * @param string $infoCode
     * @return self
     */
    public function setInfoCode($infoCode)
    {
        $this->infoCode = $infoCode;

        return $this;
    }

    /**
     * Gets as additionalDetailCode
     *
     * Used to designate a particular type of additional information. Refer to
     * OpenTravel Code List Additional Detail Type (ADT).
     *
     * @return string
     */
    public function getAdditionalDetailCode()
    {
        return $this->additionalDetailCode;
    }

    /**
     * Sets a new additionalDetailCode
     *
     * Used to designate a particular type of additional information. Refer to
     * OpenTravel Code List Additional Detail Type (ADT).
     *
     * @param string $additionalDetailCode
     * @return self
     */
    public function setAdditionalDetailCode($additionalDetailCode)
    {
        $this->additionalDetailCode = $additionalDetailCode;

        return $this;
    }


}

