<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing ExhibitionInfoAType
 */
class ExhibitionInfoAType
{

    /**
     * When true, indicates the event required exhibition space.
     *
     * @property boolean $exhibitionSpaceIndicator
     */
    private $exhibitionSpaceIndicator = null;

    /**
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @property string[] $propertyTypeCode
     */
    private $propertyTypeCode = null;

    /**
     * Gets as exhibitionSpaceIndicator
     *
     * When true, indicates the event required exhibition space.
     *
     * @return boolean
     */
    public function getExhibitionSpaceIndicator()
    {
        return $this->exhibitionSpaceIndicator;
    }

    /**
     * Sets a new exhibitionSpaceIndicator
     *
     * When true, indicates the event required exhibition space.
     *
     * @param boolean $exhibitionSpaceIndicator
     * @return self
     */
    public function setExhibitionSpaceIndicator($exhibitionSpaceIndicator)
    {
        $this->exhibitionSpaceIndicator = $exhibitionSpaceIndicator;

        return $this;
    }

    /**
     * Adds as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @return self
     * @param string $propertyTypeCode
     */
    public function addToPropertyTypeCode($propertyTypeCode)
    {
        $this->propertyTypeCode[] = $propertyTypeCode;

        return $this;
    }

    /**
     * isset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyTypeCode($index)
    {
        return isset($this->propertyTypeCode[$index]);
    }

    /**
     * unset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyTypeCode($index)
    {
        unset($this->propertyTypeCode[$index]);
    }

    /**
     * Gets as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @return string[]
     */
    public function getPropertyTypeCode()
    {
        return $this->propertyTypeCode;
    }

    /**
     * Sets a new propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to
     * OpenTravel Code List Property Class Type (PCT).
     *
     * @param string $propertyTypeCode
     * @return self
     */
    public function setPropertyTypeCode(array $propertyTypeCode)
    {
        $this->propertyTypeCode = $propertyTypeCode;

        return $this;
    }


}

