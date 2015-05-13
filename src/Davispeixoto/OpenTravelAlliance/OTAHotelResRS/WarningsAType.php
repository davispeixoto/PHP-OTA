<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS;

/**
 * Class representing WarningsAType
 */
class WarningsAType
{

    /**
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     * $warning
     */
    private $warning = null;

    /**
     * Adds as warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType
     * $warning
     */
    public function addToWarning(\Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType $warning)
    {
        $this->warning[] = $warning;

        return $this;
    }

    /**
     * isset warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarning($index)
    {
        return isset($this->warning[$index]);
    }

    /**
     * unset warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarning($index)
    {
        unset($this->warning[$index]);
    }

    /**
     * Gets as warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\WarningsAType\WarningAType[]
     * $warning
     * @return self
     */
    public function setWarning(array $warning)
    {
        $this->warning = $warning;

        return $this;
    }


}

