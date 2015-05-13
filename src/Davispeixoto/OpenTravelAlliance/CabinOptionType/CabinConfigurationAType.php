<?php

namespace Davispeixoto\OpenTravelAlliance\CabinOptionType;

/**
 * Class representing CabinConfigurationAType
 */
class CabinConfigurationAType
{

    /**
     * Contains a code defining the bed configuration in the cabin.
     *
     * @property string $bedConfigurationCode
     */
    private $bedConfigurationCode = null;

    /**
     * Gets as bedConfigurationCode
     *
     * Contains a code defining the bed configuration in the cabin.
     *
     * @return string
     */
    public function getBedConfigurationCode()
    {
        return $this->bedConfigurationCode;
    }

    /**
     * Sets a new bedConfigurationCode
     *
     * Contains a code defining the bed configuration in the cabin.
     *
     * @param string $bedConfigurationCode
     * @return self
     */
    public function setBedConfigurationCode($bedConfigurationCode)
    {
        $this->bedConfigurationCode = $bedConfigurationCode;

        return $this;
    }


}

