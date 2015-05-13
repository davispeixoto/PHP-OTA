<?php

namespace Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType;

/**
 * Class representing GDSCodeAType
 */
class GDSCodeAType
{

    /**
     * This is the 2 character GDS Chain Code used to identify a specific chain.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * This is the GDS Property Code used to identify a specific hotel.
     *
     * @property string $gDSPropertyCode
     */
    private $gDSPropertyCode = null;

    /**
     * Type of GDS for hotel such as Apollo, Amadeus, Sabre, Worldspan etc.
     *
     * @property string $gDSName
     */
    private $gDSName = null;

    /**
     * This attribute is used in conjunction with the GDS_Name. When true, this
     * indicates rates will be loaded to the GDS specified by the GDS_Name.
     *
     * @property boolean $loadGDSIndicator
     */
    private $loadGDSIndicator = null;

    /**
     * A property long name per channel.
     *
     * @property string $gDSPropertyLongName
     */
    private $gDSPropertyLongName = null;

    /**
     * A property short name per channel.
     *
     * @property string $gDSPropertyShortName
     */
    private $gDSPropertyShortName = null;

    /**
     * A GDS channel room code.
     *
     * @property string $gDSRoomTypeCode
     */
    private $gDSRoomTypeCode = null;

    /**
     * Collection of GDS_CodeDetails.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[]
     * $gDSCodeDetails
     */
    private $gDSCodeDetails = null;

    /**
     * Gets as chainCode
     *
     * This is the 2 character GDS Chain Code used to identify a specific chain.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * This is the 2 character GDS Chain Code used to identify a specific chain.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;

        return $this;
    }

    /**
     * Gets as gDSPropertyCode
     *
     * This is the GDS Property Code used to identify a specific hotel.
     *
     * @return string
     */
    public function getGDSPropertyCode()
    {
        return $this->gDSPropertyCode;
    }

    /**
     * Sets a new gDSPropertyCode
     *
     * This is the GDS Property Code used to identify a specific hotel.
     *
     * @param string $gDSPropertyCode
     * @return self
     */
    public function setGDSPropertyCode($gDSPropertyCode)
    {
        $this->gDSPropertyCode = $gDSPropertyCode;

        return $this;
    }

    /**
     * Gets as gDSName
     *
     * Type of GDS for hotel such as Apollo, Amadeus, Sabre, Worldspan etc.
     *
     * @return string
     */
    public function getGDSName()
    {
        return $this->gDSName;
    }

    /**
     * Sets a new gDSName
     *
     * Type of GDS for hotel such as Apollo, Amadeus, Sabre, Worldspan etc.
     *
     * @param string $gDSName
     * @return self
     */
    public function setGDSName($gDSName)
    {
        $this->gDSName = $gDSName;

        return $this;
    }

    /**
     * Gets as loadGDSIndicator
     *
     * This attribute is used in conjunction with the GDS_Name. When true, this
     * indicates rates will be loaded to the GDS specified by the GDS_Name.
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
     * This attribute is used in conjunction with the GDS_Name. When true, this
     * indicates rates will be loaded to the GDS specified by the GDS_Name.
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
     * Gets as gDSPropertyLongName
     *
     * A property long name per channel.
     *
     * @return string
     */
    public function getGDSPropertyLongName()
    {
        return $this->gDSPropertyLongName;
    }

    /**
     * Sets a new gDSPropertyLongName
     *
     * A property long name per channel.
     *
     * @param string $gDSPropertyLongName
     * @return self
     */
    public function setGDSPropertyLongName($gDSPropertyLongName)
    {
        $this->gDSPropertyLongName = $gDSPropertyLongName;

        return $this;
    }

    /**
     * Gets as gDSPropertyShortName
     *
     * A property short name per channel.
     *
     * @return string
     */
    public function getGDSPropertyShortName()
    {
        return $this->gDSPropertyShortName;
    }

    /**
     * Sets a new gDSPropertyShortName
     *
     * A property short name per channel.
     *
     * @param string $gDSPropertyShortName
     * @return self
     */
    public function setGDSPropertyShortName($gDSPropertyShortName)
    {
        $this->gDSPropertyShortName = $gDSPropertyShortName;

        return $this;
    }

    /**
     * Gets as gDSRoomTypeCode
     *
     * A GDS channel room code.
     *
     * @return string
     */
    public function getGDSRoomTypeCode()
    {
        return $this->gDSRoomTypeCode;
    }

    /**
     * Sets a new gDSRoomTypeCode
     *
     * A GDS channel room code.
     *
     * @param string $gDSRoomTypeCode
     * @return self
     */
    public function setGDSRoomTypeCode($gDSRoomTypeCode)
    {
        $this->gDSRoomTypeCode = $gDSRoomTypeCode;

        return $this;
    }

    /**
     * Adds as gDSCodeDetail
     *
     * Collection of GDS_CodeDetails.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType
     * $gDSCodeDetail
     */
    public function addToGDSCodeDetails(
        \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType $gDSCodeDetail
    ) {
        $this->gDSCodeDetails[] = $gDSCodeDetail;

        return $this;
    }

    /**
     * isset gDSCodeDetails
     *
     * Collection of GDS_CodeDetails.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGDSCodeDetails($index)
    {
        return isset($this->gDSCodeDetails[$index]);
    }

    /**
     * unset gDSCodeDetails
     *
     * Collection of GDS_CodeDetails.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGDSCodeDetails($index)
    {
        unset($this->gDSCodeDetails[$index]);
    }

    /**
     * Gets as gDSCodeDetails
     *
     * Collection of GDS_CodeDetails.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[]
     */
    public function getGDSCodeDetails()
    {
        return $this->gDSCodeDetails;
    }

    /**
     * Sets a new gDSCodeDetails
     *
     * Collection of GDS_CodeDetails.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GDSInfoType\GDSCodesAType\GDSCodeAType\GDSCodeDetailsAType\GDSCodeDetailAType[]
     * $gDSCodeDetails
     * @return self
     */
    public function setGDSCodeDetails(array $gDSCodeDetails)
    {
        $this->gDSCodeDetails = $gDSCodeDetails;

        return $this;
    }


}

