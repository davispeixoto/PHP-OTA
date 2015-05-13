<?php

namespace Davispeixoto\OpenTravelAlliance\GDSInfoType;

/**
 * Class representing GDSCodesAType
 */
class GDSCodesAType
{

    /**
     * When true, this indicates rates will be loaded to specified GDSs. This attribute
     * is also under GDS_Code to associate the rate load for an individual GDS. (This
     * may also be used to idicate the willingness to upload rates to GDSs even if not
     * specified in the request message.)
     *
     * @property boolean $loadGDSIndicator
     */
    private $loadGDSIndicator = null;

    /**
     * Provides detailed information regarding the specified GDS.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType[]
     * $gDSCode
     */
    private $gDSCode = null;

    /**
     * Gets as loadGDSIndicator
     *
     * When true, this indicates rates will be loaded to specified GDSs. This attribute
     * is also under GDS_Code to associate the rate load for an individual GDS. (This
     * may also be used to idicate the willingness to upload rates to GDSs even if not
     * specified in the request message.)
     *
     * @return boolean
     */
    public function getLoadGDSIndicator()
    {
        return $this->loadGDSIndicator;
    }

    /**
     * Sets a new loadGDSIndicator
     *
     * When true, this indicates rates will be loaded to specified GDSs. This attribute
     * is also under GDS_Code to associate the rate load for an individual GDS. (This
     * may also be used to idicate the willingness to upload rates to GDSs even if not
     * specified in the request message.)
     *
     * @param boolean $loadGDSIndicator
     * @return self
     */
    public function setLoadGDSIndicator($loadGDSIndicator)
    {
        $this->loadGDSIndicator = $loadGDSIndicator;

        return $this;
    }

    /**
     * Adds as gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType
     * $gDSCode
     */
    public function addToGDSCode(\Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType $gDSCode)
    {
        $this->gDSCode[] = $gDSCode;

        return $this;
    }

    /**
     * isset gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGDSCode($index)
    {
        return isset($this->gDSCode[$index]);
    }

    /**
     * unset gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGDSCode($index)
    {
        unset($this->gDSCode[$index]);
    }

    /**
     * Gets as gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType[]
     */
    public function getGDSCode()
    {
        return $this->gDSCode;
    }

    /**
     * Sets a new gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType[]
     * $gDSCode
     * @return self
     */
    public function setGDSCode(array $gDSCode)
    {
        $this->gDSCode = $gDSCode;

        return $this;
    }


}

