<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GDSInfoType
 *
 * This defines codes used by individual GDS's, which can be used to upload rate
 * information.
 * XSD Type: GDS_InfoType
 */
class GDSInfoType
{

    /**
     * This is the 2 character master chain code that identifes a specific chain that
     * is recognized by all GDS's.
     *
     * @property string $masterChainCode
     */
    private $masterChainCode = null;

    /**
     * The element acts as a container for GDS_Code. It is used to send item for each
     * GDS.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType $gDSCodes
     */
    private $gDSCodes = null;

    /**
     * Collection of GDS Statuses.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     * $gDSStatuses
     */
    private $gDSStatuses = null;

    /**
     * Gets as masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that
     * is recognized by all GDS's.
     *
     * @return string
     */
    public function getMasterChainCode()
    {
        return $this->masterChainCode;
    }

    /**
     * Sets a new masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that
     * is recognized by all GDS's.
     *
     * @param string $masterChainCode
     * @return self
     */
    public function setMasterChainCode($masterChainCode)
    {
        $this->masterChainCode = $masterChainCode;

        return $this;
    }

    /**
     * Gets as gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each
     * GDS.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType
     */
    public function getGDSCodes()
    {
        return $this->gDSCodes;
    }

    /**
     * Sets a new gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each
     * GDS.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType $gDSCodes
     * @return self
     */
    public function setGDSCodes(\Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType $gDSCodes)
    {
        $this->gDSCodes = $gDSCodes;

        return $this;
    }

    /**
     * Adds as gDSStatus
     *
     * Collection of GDS Statuses.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType
     * $gDSStatus
     */
    public function addToGDSStatuses(
        \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus
    ) {
        $this->gDSStatuses[] = $gDSStatus;

        return $this;
    }

    /**
     * isset gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGDSStatuses($index)
    {
        return isset($this->gDSStatuses[$index]);
    }

    /**
     * unset gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGDSStatuses($index)
    {
        unset($this->gDSStatuses[$index]);
    }

    /**
     * Gets as gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     */
    public function getGDSStatuses()
    {
        return $this->gDSStatuses;
    }

    /**
     * Sets a new gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     * $gDSStatuses
     * @return self
     */
    public function setGDSStatuses(array $gDSStatuses)
    {
        $this->gDSStatuses = $gDSStatuses;

        return $this;
    }


}

