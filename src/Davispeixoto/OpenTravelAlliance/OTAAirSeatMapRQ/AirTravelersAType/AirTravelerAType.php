<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType;

use Davispeixoto\OpenTravelAlliance\AirTravelerType;

/**
 * Class representing AirTravelerAType
 */
class AirTravelerAType extends AirTravelerType
{

    /**
     * Infant with their own seat.
     *
     * @property boolean $infantHasSeatInd
     */
    private $infantHasSeatInd = null;

    /**
     * Special service request indicator.
     *
     * @property boolean $sSRInd
     */
    private $sSRInd = null;

    /**
     * Unaccompanied minor indicator.
     *
     * @property boolean $unaccompaniedMinorInd
     */
    private $unaccompaniedMinorInd = null;

    /**
     * Oxygen required indicator.
     *
     * @property boolean $oxygenRequiredInd
     */
    private $oxygenRequiredInd = null;

    /**
     * Pet in cabin indicator.
     *
     * @property boolean $petInCabinInd
     */
    private $petInCabinInd = null;

    /**
     * Service animal indicator.
     *
     * @property boolean $serviceAnimalInd
     */
    private $serviceAnimalInd = null;

    /**
     * Gets as infantHasSeatInd
     *
     * Infant with their own seat.
     *
     * @return boolean
     */
    public function getInfantHasSeatInd()
    {
        return $this->infantHasSeatInd;
    }

    /**
     * Sets a new infantHasSeatInd
     *
     * Infant with their own seat.
     *
     * @param boolean $infantHasSeatInd
     * @return self
     */
    public function setInfantHasSeatInd($infantHasSeatInd)
    {
        $this->infantHasSeatInd = $infantHasSeatInd;

        return $this;
    }

    /**
     * Gets as sSRInd
     *
     * Special service request indicator.
     *
     * @return boolean
     */
    public function getSSRInd()
    {
        return $this->sSRInd;
    }

    /**
     * Sets a new sSRInd
     *
     * Special service request indicator.
     *
     * @param boolean $sSRInd
     * @return self
     */
    public function setSSRInd($sSRInd)
    {
        $this->sSRInd = $sSRInd;

        return $this;
    }

    /**
     * Gets as unaccompaniedMinorInd
     *
     * Unaccompanied minor indicator.
     *
     * @return boolean
     */
    public function getUnaccompaniedMinorInd()
    {
        return $this->unaccompaniedMinorInd;
    }

    /**
     * Sets a new unaccompaniedMinorInd
     *
     * Unaccompanied minor indicator.
     *
     * @param boolean $unaccompaniedMinorInd
     * @return self
     */
    public function setUnaccompaniedMinorInd($unaccompaniedMinorInd)
    {
        $this->unaccompaniedMinorInd = $unaccompaniedMinorInd;

        return $this;
    }

    /**
     * Gets as oxygenRequiredInd
     *
     * Oxygen required indicator.
     *
     * @return boolean
     */
    public function getOxygenRequiredInd()
    {
        return $this->oxygenRequiredInd;
    }

    /**
     * Sets a new oxygenRequiredInd
     *
     * Oxygen required indicator.
     *
     * @param boolean $oxygenRequiredInd
     * @return self
     */
    public function setOxygenRequiredInd($oxygenRequiredInd)
    {
        $this->oxygenRequiredInd = $oxygenRequiredInd;

        return $this;
    }

    /**
     * Gets as petInCabinInd
     *
     * Pet in cabin indicator.
     *
     * @return boolean
     */
    public function getPetInCabinInd()
    {
        return $this->petInCabinInd;
    }

    /**
     * Sets a new petInCabinInd
     *
     * Pet in cabin indicator.
     *
     * @param boolean $petInCabinInd
     * @return self
     */
    public function setPetInCabinInd($petInCabinInd)
    {
        $this->petInCabinInd = $petInCabinInd;

        return $this;
    }

    /**
     * Gets as serviceAnimalInd
     *
     * Service animal indicator.
     *
     * @return boolean
     */
    public function getServiceAnimalInd()
    {
        return $this->serviceAnimalInd;
    }

    /**
     * Sets a new serviceAnimalInd
     *
     * Service animal indicator.
     *
     * @param boolean $serviceAnimalInd
     * @return self
     */
    public function setServiceAnimalInd($serviceAnimalInd)
    {
        $this->serviceAnimalInd = $serviceAnimalInd;

        return $this;
    }


}

