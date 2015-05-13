<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RowDetailType
 *
 * Describes the row details in a seat map.
 * XSD Type: RowDetailType
 */
class RowDetailType
{

    /**
     * if true, the row is operable.
     *
     * @property boolean $operableInd
     */
    private $operableInd = null;

    /**
     * The section of the plane the row is located in.
     *
     * @property string $planeSection
     */
    private $planeSection = null;

    /**
     * The grid number associated with the row.
     *
     * @property integer $gridNumber
     */
    private $gridNumber = null;

    /**
     * If true, ths row is buffered.
     *
     * @property boolean $bufferInd
     */
    private $bufferInd = null;

    /**
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * The row number.
     *
     * @property integer $rowNumber
     */
    private $rowNumber = null;

    /**
     * Row characteristics.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RowCharacteristicsType[]
     * $characteristics
     */
    private $characteristics = null;

    /**
     * Row description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $description
     */
    private $description = null;

    /**
     * Summary and detailed seat information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatDetailsType[] $seatInfo
     */
    private $seatInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as operableInd
     *
     * if true, the row is operable.
     *
     * @return boolean
     */
    public function getOperableInd()
    {
        return $this->operableInd;
    }

    /**
     * Sets a new operableInd
     *
     * if true, the row is operable.
     *
     * @param boolean $operableInd
     * @return self
     */
    public function setOperableInd($operableInd)
    {
        $this->operableInd = $operableInd;

        return $this;
    }

    /**
     * Gets as planeSection
     *
     * The section of the plane the row is located in.
     *
     * @return string
     */
    public function getPlaneSection()
    {
        return $this->planeSection;
    }

    /**
     * Sets a new planeSection
     *
     * The section of the plane the row is located in.
     *
     * @param string $planeSection
     * @return self
     */
    public function setPlaneSection($planeSection)
    {
        $this->planeSection = $planeSection;

        return $this;
    }

    /**
     * Gets as gridNumber
     *
     * The grid number associated with the row.
     *
     * @return integer
     */
    public function getGridNumber()
    {
        return $this->gridNumber;
    }

    /**
     * Sets a new gridNumber
     *
     * The grid number associated with the row.
     *
     * @param integer $gridNumber
     * @return self
     */
    public function setGridNumber($gridNumber)
    {
        $this->gridNumber = $gridNumber;

        return $this;
    }

    /**
     * Gets as bufferInd
     *
     * If true, ths row is buffered.
     *
     * @return boolean
     */
    public function getBufferInd()
    {
        return $this->bufferInd;
    }

    /**
     * Sets a new bufferInd
     *
     * If true, ths row is buffered.
     *
     * @param boolean $bufferInd
     * @return self
     */
    public function setBufferInd($bufferInd)
    {
        $this->bufferInd = $bufferInd;

        return $this;
    }

    /**
     * Gets as cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy
     * cabin.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * The row number.
     *
     * @return integer
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * The row number.
     *
     * @param integer $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;

        return $this;
    }

    /**
     * Adds as characteristics
     *
     * Row characteristics.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RowCharacteristicsType $characteristics
     */
    public function addToCharacteristics(\Davispeixoto\OpenTravelAlliance\RowCharacteristicsType $characteristics)
    {
        $this->characteristics[] = $characteristics;

        return $this;
    }

    /**
     * isset characteristics
     *
     * Row characteristics.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharacteristics($index)
    {
        return isset($this->characteristics[$index]);
    }

    /**
     * unset characteristics
     *
     * Row characteristics.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharacteristics($index)
    {
        unset($this->characteristics[$index]);
    }

    /**
     * Gets as characteristics
     *
     * Row characteristics.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RowCharacteristicsType[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * Row characteristics.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RowCharacteristicsType[]
     * $characteristics
     * @return self
     */
    public function setCharacteristics(array $characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Adds as description
     *
     * Row description.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Row description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Row description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Row description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Row description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType $seatInfo
     */
    public function addToSeatInfo(\Davispeixoto\OpenTravelAlliance\SeatDetailsType $seatInfo)
    {
        $this->seatInfo[] = $seatInfo;

        return $this;
    }

    /**
     * isset seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatInfo($index)
    {
        return isset($this->seatInfo[$index]);
    }

    /**
     * unset seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatInfo($index)
    {
        unset($this->seatInfo[$index]);
    }

    /**
     * Gets as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatDetailsType[]
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }

    /**
     * Sets a new seatInfo
     *
     * Summary and detailed seat information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType[] $seatInfo
     * @return self
     */
    public function setSeatInfo(array $seatInfo)
    {
        $this->seatInfo = $seatInfo;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

