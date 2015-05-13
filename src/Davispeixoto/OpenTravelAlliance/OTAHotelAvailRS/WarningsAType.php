<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing WarningsAType
 */
class WarningsAType
{

    /**
     * Warning MUST define a business error or informational alert associated with the
     * availability.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\WarningsAType\WarningAType[]
     * $warning
     */
    private $warning = null;

    /**
     * Adds as warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * availability.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\WarningsAType\WarningAType
     * $warning
     */
    public function addToWarning(\Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\WarningsAType\WarningAType $warning)
    {
        $this->warning[] = $warning;

        return $this;
    }

    /**
     * isset warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * availability.
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
     * availability.
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
     * availability.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\WarningsAType\WarningAType[]
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * Warning MUST define a business error or informational alert associated with the
     * availability.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\WarningsAType\WarningAType[]
     * $warning
     * @return self
     */
    public function setWarning(array $warning)
    {
        $this->warning = $warning;

        return $this;
    }


}

