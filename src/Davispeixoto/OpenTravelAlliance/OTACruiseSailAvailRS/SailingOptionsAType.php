<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS;

/**
 * Class representing SailingOptionsAType
 */
class SailingOptionsAType
{

    /**
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS\SailingOptionsAType\SailingOptionAType[]
     * $sailingOption
     */
    private $sailingOption = null;

    /**
     * Adds as sailingOption
     *
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS\SailingOptionsAType\SailingOptionAType
     * $sailingOption
     */
    public function addToSailingOption(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS\SailingOptionsAType\SailingOptionAType $sailingOption
    ) {
        $this->sailingOption[] = $sailingOption;

        return $this;
    }

    /**
     * isset sailingOption
     *
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSailingOption($index)
    {
        return isset($this->sailingOption[$index]);
    }

    /**
     * unset sailingOption
     *
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSailingOption($index)
    {
        unset($this->sailingOption[$index]);
    }

    /**
     * Gets as sailingOption
     *
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS\SailingOptionsAType\SailingOptionAType[]
     */
    public function getSailingOption()
    {
        return $this->sailingOption;
    }

    /**
     * Sets a new sailingOption
     *
     * Specifies a sailing availability option per cruise line and per ship.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRS\SailingOptionsAType\SailingOptionAType[]
     * $sailingOption
     * @return self
     */
    public function setSailingOption(array $sailingOption)
    {
        $this->sailingOption = $sailingOption;

        return $this;
    }


}

