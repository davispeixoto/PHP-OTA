<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VendorMessageType
 *
 * Provides formatted textual information that a vendor wishes to make known. The
 * type of information is indicated.
 * XSD Type: VendorMessageType
 */
class VendorMessageType extends FormattedTextType
{

    /**
     * To define the type of information such as Description, Policy, Marketing, etc.
     * Refer to OpenTravel Code List Information Type (INF).
     *
     * @property string $infoType
     */
    private $infoType = null;

    /**
     * Gets as infoType
     *
     * To define the type of information such as Description, Policy, Marketing, etc.
     * Refer to OpenTravel Code List Information Type (INF).
     *
     * @return string
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Sets a new infoType
     *
     * To define the type of information such as Description, Policy, Marketing, etc.
     * Refer to OpenTravel Code List Information Type (INF).
     *
     * @param string $infoType
     * @return self
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;

        return $this;
    }


}

