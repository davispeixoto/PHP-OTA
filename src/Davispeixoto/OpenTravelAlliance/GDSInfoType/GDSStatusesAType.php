<?php

namespace Davispeixoto\OpenTravelAlliance\GDSInfoType;

/**
 * Class representing GDSStatusesAType
 */
class GDSStatusesAType
{

    /**
     * Hotel status per GDS.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     * $gDSStatus
     */
    private $gDSStatus = null;

    /**
     * Adds as gDSStatus
     *
     * Hotel status per GDS.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType
     * $gDSStatus
     */
    public function addToGDSStatus(
        \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus
    ) {
        $this->gDSStatus[] = $gDSStatus;

        return $this;
    }

    /**
     * isset gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGDSStatus($index)
    {
        return isset($this->gDSStatus[$index]);
    }

    /**
     * unset gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGDSStatus($index)
    {
        unset($this->gDSStatus[$index]);
    }

    /**
     * Gets as gDSStatus
     *
     * Hotel status per GDS.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     */
    public function getGDSStatus()
    {
        return $this->gDSStatus;
    }

    /**
     * Sets a new gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     * $gDSStatus
     * @return self
     */
    public function setGDSStatus(array $gDSStatus)
    {
        $this->gDSStatus = $gDSStatus;

        return $this;
    }


}

