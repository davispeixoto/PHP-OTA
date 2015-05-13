<?php

namespace Davispeixoto\OpenTravelAlliance\PackageType;

/**
 * Class representing ExtrasAType
 */
class ExtrasAType
{

    /**
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasType[] $extra
     */
    private $extra = null;

    /**
     * Adds as extra
     *
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasType $extra
     */
    public function addToExtra(\Davispeixoto\OpenTravelAlliance\ExtrasType $extra)
    {
        $this->extra[] = $extra;

        return $this;
    }

    /**
     * isset extra
     *
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * Describes an optional service which is not included in the standard package but
     * may be booked in addition.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasType[] $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }


}

