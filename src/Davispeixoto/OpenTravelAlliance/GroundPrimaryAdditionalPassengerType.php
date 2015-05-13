<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundPrimaryAdditionalPassengerType
 *
 * Information on the one primary passenger and, optionally, several additional
 * passengers.
 * XSD Type: GroundPrimaryAdditionalPassengerType
 */
class GroundPrimaryAdditionalPassengerType
{

    /**
     * Information on the primary passenger (who is the contact for this reservation.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\PrimaryAType
     * $primary
     */
    private $primary = null;

    /**
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\AdditionalAType[]
     * $additional
     */
    private $additional = null;

    /**
     * Gets as primary
     *
     * Information on the primary passenger (who is the contact for this reservation.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\PrimaryAType
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Information on the primary passenger (who is the contact for this reservation.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\PrimaryAType
     * $primary
     * @return self
     */
    public function setPrimary(
        \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\PrimaryAType $primary
    ) {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Adds as additional
     *
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\AdditionalAType
     * $additional
     */
    public function addToAdditional(
        \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\AdditionalAType $additional
    ) {
        $this->additional[] = $additional;

        return $this;
    }

    /**
     * isset additional
     *
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditional($index)
    {
        return isset($this->additional[$index]);
    }

    /**
     * unset additional
     *
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditional($index)
    {
        unset($this->additional[$index]);
    }

    /**
     * Gets as additional
     *
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\AdditionalAType[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Sets a new additional
     *
     * Information on additional passengers. This may also be used to pass an event
     * manifest, e.g. a list of passengers that will have vehicles allocated by the
     * supplier.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType\AdditionalAType[]
     * $additional
     * @return self
     */
    public function setAdditional(array $additional)
    {
        $this->additional = $additional;

        return $this;
    }


}

