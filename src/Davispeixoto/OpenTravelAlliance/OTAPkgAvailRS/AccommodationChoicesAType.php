<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS;

/**
 * Class representing AccommodationChoicesAType
 */
class AccommodationChoicesAType
{

    /**
     * Details of a property available for the request date and duration
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationDetailType[]
     * $availableProperty
     */
    private $availableProperty = null;

    /**
     * Adds as availableProperty
     *
     * Details of a property available for the request date and duration
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationDetailType
     * $availableProperty
     */
    public function addToAvailableProperty(\Davispeixoto\OpenTravelAlliance\AccommodationDetailType $availableProperty)
    {
        $this->availableProperty[] = $availableProperty;

        return $this;
    }

    /**
     * isset availableProperty
     *
     * Details of a property available for the request date and duration
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableProperty($index)
    {
        return isset($this->availableProperty[$index]);
    }

    /**
     * unset availableProperty
     *
     * Details of a property available for the request date and duration
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableProperty($index)
    {
        unset($this->availableProperty[$index]);
    }

    /**
     * Gets as availableProperty
     *
     * Details of a property available for the request date and duration
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationDetailType[]
     */
    public function getAvailableProperty()
    {
        return $this->availableProperty;
    }

    /**
     * Sets a new availableProperty
     *
     * Details of a property available for the request date and duration
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationDetailType[]
     * $availableProperty
     * @return self
     */
    public function setAvailableProperty(array $availableProperty)
    {
        $this->availableProperty = $availableProperty;

        return $this;
    }


}

