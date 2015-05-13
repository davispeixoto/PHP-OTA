<?php

namespace Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType;

/**
 * Class representing WaterAType
 */
class WaterAType
{

    /**
     * Grey water recycling indicator.Example: trueImplementer: If true, the property
     * recycles gray-water through watering of plants and landscaping.
     *
     * @property boolean $grayWaterInd
     */
    private $grayWaterInd = null;

    /**
     * Active water conservation program indicator.Example: trueImplementer: If true,
     * the property has an active water conservation program in place, that may include
     * low flow shower heads and toilets.
     *
     * @property boolean $waterProgramInd
     */
    private $waterProgramInd = null;

    /**
     * Water usage per room per night.Example: 60Implementer: The associated unit of
     * measure is specified in the WaterUOM element.
     *
     * @property integer $perRoomNightUsage
     */
    private $perRoomNightUsage = null;

    /**
     * Water usage per room per day.Example: 40Implementer: The associated water unit
     * of measure is specified in the WaterUOM element.
     *
     * @property integer $perRoomDayUsage
     */
    private $perRoomDayUsage = null;

    /**
     * Defines the waste diversion rate.
     *
     * @property float $wasteDiversionPercentage
     */
    private $wasteDiversionPercentage = null;

    /**
     * Water unit of measure.Example: Gallon(s)
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $waterUOM
     */
    private $waterUOM = null;

    /**
     * Water conservation program description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $programDescription
     */
    private $programDescription = null;

    /**
     * Gets as grayWaterInd
     *
     * Grey water recycling indicator.Example: trueImplementer: If true, the property
     * recycles gray-water through watering of plants and landscaping.
     *
     * @return boolean
     */
    public function getGrayWaterInd()
    {
        return $this->grayWaterInd;
    }

    /**
     * Sets a new grayWaterInd
     *
     * Grey water recycling indicator.Example: trueImplementer: If true, the property
     * recycles gray-water through watering of plants and landscaping.
     *
     * @param boolean $grayWaterInd
     * @return self
     */
    public function setGrayWaterInd($grayWaterInd)
    {
        $this->grayWaterInd = $grayWaterInd;

        return $this;
    }

    /**
     * Gets as waterProgramInd
     *
     * Active water conservation program indicator.Example: trueImplementer: If true,
     * the property has an active water conservation program in place, that may include
     * low flow shower heads and toilets.
     *
     * @return boolean
     */
    public function getWaterProgramInd()
    {
        return $this->waterProgramInd;
    }

    /**
     * Sets a new waterProgramInd
     *
     * Active water conservation program indicator.Example: trueImplementer: If true,
     * the property has an active water conservation program in place, that may include
     * low flow shower heads and toilets.
     *
     * @param boolean $waterProgramInd
     * @return self
     */
    public function setWaterProgramInd($waterProgramInd)
    {
        $this->waterProgramInd = $waterProgramInd;

        return $this;
    }

    /**
     * Gets as perRoomNightUsage
     *
     * Water usage per room per night.Example: 60Implementer: The associated unit of
     * measure is specified in the WaterUOM element.
     *
     * @return integer
     */
    public function getPerRoomNightUsage()
    {
        return $this->perRoomNightUsage;
    }

    /**
     * Sets a new perRoomNightUsage
     *
     * Water usage per room per night.Example: 60Implementer: The associated unit of
     * measure is specified in the WaterUOM element.
     *
     * @param integer $perRoomNightUsage
     * @return self
     */
    public function setPerRoomNightUsage($perRoomNightUsage)
    {
        $this->perRoomNightUsage = $perRoomNightUsage;

        return $this;
    }

    /**
     * Gets as perRoomDayUsage
     *
     * Water usage per room per day.Example: 40Implementer: The associated water unit
     * of measure is specified in the WaterUOM element.
     *
     * @return integer
     */
    public function getPerRoomDayUsage()
    {
        return $this->perRoomDayUsage;
    }

    /**
     * Sets a new perRoomDayUsage
     *
     * Water usage per room per day.Example: 40Implementer: The associated water unit
     * of measure is specified in the WaterUOM element.
     *
     * @param integer $perRoomDayUsage
     * @return self
     */
    public function setPerRoomDayUsage($perRoomDayUsage)
    {
        $this->perRoomDayUsage = $perRoomDayUsage;

        return $this;
    }

    /**
     * Gets as wasteDiversionPercentage
     *
     * Defines the waste diversion rate.
     *
     * @return float
     */
    public function getWasteDiversionPercentage()
    {
        return $this->wasteDiversionPercentage;
    }

    /**
     * Sets a new wasteDiversionPercentage
     *
     * Defines the waste diversion rate.
     *
     * @param float $wasteDiversionPercentage
     * @return self
     */
    public function setWasteDiversionPercentage($wasteDiversionPercentage)
    {
        $this->wasteDiversionPercentage = $wasteDiversionPercentage;

        return $this;
    }

    /**
     * Gets as waterUOM
     *
     * Water unit of measure.Example: Gallon(s)
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType
     */
    public function getWaterUOM()
    {
        return $this->waterUOM;
    }

    /**
     * Sets a new waterUOM
     *
     * Water unit of measure.Example: Gallon(s)
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $waterUOM
     * @return self
     */
    public function setWaterUOM(\Davispeixoto\OpenTravelAlliance\ListUnitOfMeasureType $waterUOM)
    {
        $this->waterUOM = $waterUOM;

        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Water conservation program description.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $programDescription
     */
    public function addToProgramDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $programDescription)
    {
        $this->programDescription[] = $programDescription;

        return $this;
    }

    /**
     * isset programDescription
     *
     * Water conservation program description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramDescription($index)
    {
        return isset($this->programDescription[$index]);
    }

    /**
     * unset programDescription
     *
     * Water conservation program description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramDescription($index)
    {
        unset($this->programDescription[$index]);
    }

    /**
     * Gets as programDescription
     *
     * Water conservation program description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * Water conservation program description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription)
    {
        $this->programDescription = $programDescription;

        return $this;
    }


}

