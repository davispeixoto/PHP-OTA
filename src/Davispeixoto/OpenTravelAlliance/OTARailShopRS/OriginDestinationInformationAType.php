<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRS;

use Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType;

/**
 * Class representing OriginDestinationInformationAType
 */
class OriginDestinationInformationAType extends RailOriginDestinationInformationType
{

    /**
     * A collection of train options for the specified origin-destination pair.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     */
    private $originDestinationOption = null;

    /**
     * Adds as originDestinationOption
     *
     * A collection of train options for the specified origin-destination pair.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOption(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOption[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOption
     *
     * A collection of train options for the specified origin-destination pair.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationOption($index)
    {
        return isset($this->originDestinationOption[$index]);
    }

    /**
     * unset originDestinationOption
     *
     * A collection of train options for the specified origin-destination pair.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationOption($index)
    {
        unset($this->originDestinationOption[$index]);
    }

    /**
     * Gets as originDestinationOption
     *
     * A collection of train options for the specified origin-destination pair.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * A collection of train options for the specified origin-destination pair.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }


}

