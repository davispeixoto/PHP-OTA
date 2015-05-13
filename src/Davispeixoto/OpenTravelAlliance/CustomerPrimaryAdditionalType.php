<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CustomerPrimaryAdditionalType
 *
 * Information on the one primary driver and, optionally, several additional
 * drivers. This may be used to provide a frequent renter number.
 * XSD Type: CustomerPrimaryAdditionalType
 */
class CustomerPrimaryAdditionalType
{

    /**
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\PrimaryAType
     * $primary
     */
    private $primary = null;

    /**
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\AdditionalAType[]
     * $additional
     */
    private $additional = null;

    /**
     * Gets as primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\PrimaryAType
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\PrimaryAType
     * $primary
     * @return self
     */
    public function setPrimary(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\PrimaryAType $primary)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Adds as additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\AdditionalAType
     * $additional
     */
    public function addToAdditional(
        \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\AdditionalAType $additional
    ) {
        $this->additional[] = $additional;

        return $this;
    }

    /**
     * isset additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
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
     * Information on additional driver(s), possibly including frequent renter number.
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
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\AdditionalAType[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Sets a new additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType\AdditionalAType[]
     * $additional
     * @return self
     */
    public function setAdditional(array $additional)
    {
        $this->additional = $additional;

        return $this;
    }


}

