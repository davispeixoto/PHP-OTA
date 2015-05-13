<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinClassDetailType
 *
 * Detail information about a cabin class, including row characteristics, zone and
 * seat details.
 * XSD Type: CabinClassDetailType
 */
class CabinClassDetailType
{

    /**
     * The cabin layout.
     *
     * @property string $layout
     */
    private $layout = null;

    /**
     * If true, this cabin is located on an upper deck.
     *
     * @property boolean $upperDeckInd
     */
    private $upperDeckInd = null;

    /**
     * The column number associated with the row.
     *
     * @property integer $columnNumber
     */
    private $columnNumber = null;

    /**
     * The number of columns the row spans.
     *
     * @property integer $columnSpan
     */
    private $columnSpan = null;

    /**
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CabinClassAvailabilityType[]
     * $availabilityList
     */
    private $availabilityList = null;

    /**
     * Cabin row information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RowDetailType[] $rowInfo
     */
    private $rowInfo = null;

    /**
     * Summary and detailed seat information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatDetailsType $seatInfo
     */
    private $seatInfo = null;

    /**
     * Zones associated with the cabin class.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatZoneSummaryType[] $zone
     */
    private $zone = null;

    /**
     * Gets as layout
     *
     * The cabin layout.
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Sets a new layout
     *
     * The cabin layout.
     *
     * @param string $layout
     * @return self
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Gets as upperDeckInd
     *
     * If true, this cabin is located on an upper deck.
     *
     * @return boolean
     */
    public function getUpperDeckInd()
    {
        return $this->upperDeckInd;
    }

    /**
     * Sets a new upperDeckInd
     *
     * If true, this cabin is located on an upper deck.
     *
     * @param boolean $upperDeckInd
     * @return self
     */
    public function setUpperDeckInd($upperDeckInd)
    {
        $this->upperDeckInd = $upperDeckInd;

        return $this;
    }

    /**
     * Gets as columnNumber
     *
     * The column number associated with the row.
     *
     * @return integer
     */
    public function getColumnNumber()
    {
        return $this->columnNumber;
    }

    /**
     * Sets a new columnNumber
     *
     * The column number associated with the row.
     *
     * @param integer $columnNumber
     * @return self
     */
    public function setColumnNumber($columnNumber)
    {
        $this->columnNumber = $columnNumber;

        return $this;
    }

    /**
     * Gets as columnSpan
     *
     * The number of columns the row spans.
     *
     * @return integer
     */
    public function getColumnSpan()
    {
        return $this->columnSpan;
    }

    /**
     * Sets a new columnSpan
     *
     * The number of columns the row spans.
     *
     * @param integer $columnSpan
     * @return self
     */
    public function setColumnSpan($columnSpan)
    {
        $this->columnSpan = $columnSpan;

        return $this;
    }

    /**
     * Adds as availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CabinClassAvailabilityType
     * $availabilityList
     */
    public function addToAvailabilityList(\Davispeixoto\OpenTravelAlliance\CabinClassAvailabilityType $availabilityList)
    {
        $this->availabilityList[] = $availabilityList;

        return $this;
    }

    /**
     * isset availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailabilityList($index)
    {
        return isset($this->availabilityList[$index]);
    }

    /**
     * unset availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailabilityList($index)
    {
        unset($this->availabilityList[$index]);
    }

    /**
     * Gets as availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CabinClassAvailabilityType[]
     */
    public function getAvailabilityList()
    {
        return $this->availabilityList;
    }

    /**
     * Sets a new availabilityList
     *
     * A quick list of each seat in a cabin and its availability. Note, accompanying
     * seat details are in the Summary and Detail elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CabinClassAvailabilityType[]
     * $availabilityList
     * @return self
     */
    public function setAvailabilityList(array $availabilityList)
    {
        $this->availabilityList = $availabilityList;

        return $this;
    }

    /**
     * Adds as rowInfo
     *
     * Cabin row information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RowDetailType $rowInfo
     */
    public function addToRowInfo(\Davispeixoto\OpenTravelAlliance\RowDetailType $rowInfo)
    {
        $this->rowInfo[] = $rowInfo;

        return $this;
    }

    /**
     * isset rowInfo
     *
     * Cabin row information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRowInfo($index)
    {
        return isset($this->rowInfo[$index]);
    }

    /**
     * unset rowInfo
     *
     * Cabin row information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRowInfo($index)
    {
        unset($this->rowInfo[$index]);
    }

    /**
     * Gets as rowInfo
     *
     * Cabin row information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RowDetailType[]
     */
    public function getRowInfo()
    {
        return $this->rowInfo;
    }

    /**
     * Sets a new rowInfo
     *
     * Cabin row information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RowDetailType[] $rowInfo
     * @return self
     */
    public function setRowInfo(array $rowInfo)
    {
        $this->rowInfo = $rowInfo;

        return $this;
    }

    /**
     * Gets as seatInfo
     *
     * Summary and detailed seat information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatDetailsType
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
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType $seatInfo
     * @return self
     */
    public function setSeatInfo(\Davispeixoto\OpenTravelAlliance\SeatDetailsType $seatInfo)
    {
        $this->seatInfo = $seatInfo;

        return $this;
    }

    /**
     * Adds as zone
     *
     * Zones associated with the cabin class.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneSummaryType $zone
     */
    public function addToZone(\Davispeixoto\OpenTravelAlliance\SeatZoneSummaryType $zone)
    {
        $this->zone[] = $zone;

        return $this;
    }

    /**
     * isset zone
     *
     * Zones associated with the cabin class.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetZone($index)
    {
        return isset($this->zone[$index]);
    }

    /**
     * unset zone
     *
     * Zones associated with the cabin class.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetZone($index)
    {
        unset($this->zone[$index]);
    }

    /**
     * Gets as zone
     *
     * Zones associated with the cabin class.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatZoneSummaryType[]
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets a new zone
     *
     * Zones associated with the cabin class.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneSummaryType[] $zone
     * @return self
     */
    public function setZone(array $zone)
    {
        $this->zone = $zone;

        return $this;
    }


}

