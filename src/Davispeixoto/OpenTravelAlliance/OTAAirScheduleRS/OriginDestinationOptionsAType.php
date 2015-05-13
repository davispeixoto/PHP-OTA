<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS;

/**
 * Class representing OriginDestinationOptionsAType
 *
 * Holds the collection of flight options for this origin-destination pair. There
 * maybe limits imposed by individual supplier that are below the maximum
 * occurrences for this element.
 */
class OriginDestinationOptionsAType
{

    /**
     * The airport code where the journey commences.
     *
     * @property string $originCode
     */
    private $originCode = null;

    /**
     * The airport code where the journey ends.
     *
     * @property string $destinationCode
     */
    private $destinationCode = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     */
    private $originDestinationOption = null;

    /**
     * Gets as originCode
     *
     * The airport code where the journey commences.
     *
     * @return string
     */
    public function getOriginCode()
    {
        return $this->originCode;
    }

    /**
     * Sets a new originCode
     *
     * The airport code where the journey commences.
     *
     * @param string $originCode
     * @return self
     */
    public function setOriginCode($originCode)
    {
        $this->originCode = $originCode;

        return $this;
    }

    /**
     * Gets as destinationCode
     *
     * The airport code where the journey ends.
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
     * The airport code where the journey ends.
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
     * Adds as originDestinationOption
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType
     * $originDestinationOption
     */
    public function addToOriginDestinationOption(
        \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
    ) {
        $this->originDestinationOption[] = $originDestinationOption;

        return $this;
    }

    /**
     * isset originDestinationOption
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOption()
    {
        return $this->originDestinationOption;
    }

    /**
     * Sets a new originDestinationOption
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     * $originDestinationOption
     * @return self
     */
    public function setOriginDestinationOption(array $originDestinationOption)
    {
        $this->originDestinationOption = $originDestinationOption;

        return $this;
    }


}

