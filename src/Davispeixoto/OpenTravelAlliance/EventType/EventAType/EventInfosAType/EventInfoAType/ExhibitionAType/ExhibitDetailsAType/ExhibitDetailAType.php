<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType;

/**
 * Class representing ExhibitDetailAType
 */
class ExhibitDetailAType
{

    /**
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @property string $exhibitTypeCode
     */
    private $exhibitTypeCode = null;

    /**
     * The exhibit booth number.
     *
     * @property string $boothNumber
     */
    private $boothNumber = null;

    /**
     * @property float $area
     */
    private $area = null;

    /**
     * @property float $height
     */
    private $height = null;

    /**
     * @property float $length
     */
    private $length = null;

    /**
     * @property float $width
     */
    private $width = null;

    /**
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @property string $units
     */
    private $units = null;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * A collection of contacts for an exhibit.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType\TaxExemptInfoAType[]
     * $taxExemptInfo
     */
    private $taxExemptInfo = null;

    /**
     * Gets as exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @return string
     */
    public function getExhibitTypeCode()
    {
        return $this->exhibitTypeCode;
    }

    /**
     * Sets a new exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @param string $exhibitTypeCode
     * @return self
     */
    public function setExhibitTypeCode($exhibitTypeCode)
    {
        $this->exhibitTypeCode = $exhibitTypeCode;

        return $this;
    }

    /**
     * Gets as boothNumber
     *
     * The exhibit booth number.
     *
     * @return string
     */
    public function getBoothNumber()
    {
        return $this->boothNumber;
    }

    /**
     * Sets a new boothNumber
     *
     * The exhibit booth number.
     *
     * @param string $boothNumber
     * @return self
     */
    public function setBoothNumber($boothNumber)
    {
        $this->boothNumber = $boothNumber;

        return $this;
    }

    /**
     * Gets as area
     *
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * @param float $area
     * @return self
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Gets as height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets as length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Gets as width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets as units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts for an exhibit.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContacts(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts for an exhibit.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts for an exhibit.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts for an exhibit.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts for an exhibit.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Adds as taxExemptInfo
     *
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType\TaxExemptInfoAType
     * $taxExemptInfo
     */
    public function addToTaxExemptInfo(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType\TaxExemptInfoAType $taxExemptInfo
    ) {
        $this->taxExemptInfo[] = $taxExemptInfo;

        return $this;
    }

    /**
     * isset taxExemptInfo
     *
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxExemptInfo($index)
    {
        return isset($this->taxExemptInfo[$index]);
    }

    /**
     * unset taxExemptInfo
     *
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxExemptInfo($index)
    {
        unset($this->taxExemptInfo[$index]);
    }

    /**
     * Gets as taxExemptInfo
     *
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType\TaxExemptInfoAType[]
     */
    public function getTaxExemptInfo()
    {
        return $this->taxExemptInfo;
    }

    /**
     * Sets a new taxExemptInfo
     *
     * Used to provide tax exemption information for the exhibiting company of the
     * booth.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType\TaxExemptInfoAType[]
     * $taxExemptInfo
     * @return self
     */
    public function setTaxExemptInfo(array $taxExemptInfo)
    {
        $this->taxExemptInfo = $taxExemptInfo;

        return $this;
    }


}

