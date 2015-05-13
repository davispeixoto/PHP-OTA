<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\PackageAType;

/**
 * Class representing CautionsAType
 */
class CautionsAType
{

    /**
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgCautionType[] $caution
     */
    private $caution = null;

    /**
     * Adds as caution
     *
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgCautionType $caution
     */
    public function addToCaution(\Davispeixoto\OpenTravelAlliance\PkgCautionType $caution)
    {
        $this->caution[] = $caution;

        return $this;
    }

    /**
     * isset caution
     *
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCaution($index)
    {
        return isset($this->caution[$index]);
    }

    /**
     * unset caution
     *
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCaution($index)
    {
        unset($this->caution[$index]);
    }

    /**
     * Gets as caution
     *
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgCautionType[]
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Sets a new caution
     *
     * Provides information regarding a package component which could affect a
     * customer's decision to book.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgCautionType[] $caution
     * @return self
     */
    public function setCaution(array $caution)
    {
        $this->caution = $caution;

        return $this;
    }


}

