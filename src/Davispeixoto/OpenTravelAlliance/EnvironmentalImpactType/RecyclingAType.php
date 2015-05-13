<?php

namespace Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType;

/**
 * Class representing RecyclingAType
 */
class RecyclingAType
{

    /**
     * Active recycling program indicator.Example: trueImplementer: If true, the
     * property has an active recycling program.
     *
     * @property boolean $activeProgramInd
     */
    private $activeProgramInd = null;

    /**
     * Non-disposable dishware indicator.Example: trueImplementer: If true, the
     * property uses cups, glasses, dishes, tableware and other items are long-lasting
     * and not disposable.
     *
     * @property boolean $ecologicalDishwareInd
     */
    private $ecologicalDishwareInd = null;

    /**
     * Recycling details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType\DetailsAType
     * $details
     */
    private $details = null;

    /**
     * Recycling program description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $programDescription
     */
    private $programDescription = null;

    /**
     * Gets as activeProgramInd
     *
     * Active recycling program indicator.Example: trueImplementer: If true, the
     * property has an active recycling program.
     *
     * @return boolean
     */
    public function getActiveProgramInd()
    {
        return $this->activeProgramInd;
    }

    /**
     * Sets a new activeProgramInd
     *
     * Active recycling program indicator.Example: trueImplementer: If true, the
     * property has an active recycling program.
     *
     * @param boolean $activeProgramInd
     * @return self
     */
    public function setActiveProgramInd($activeProgramInd)
    {
        $this->activeProgramInd = $activeProgramInd;

        return $this;
    }

    /**
     * Gets as ecologicalDishwareInd
     *
     * Non-disposable dishware indicator.Example: trueImplementer: If true, the
     * property uses cups, glasses, dishes, tableware and other items are long-lasting
     * and not disposable.
     *
     * @return boolean
     */
    public function getEcologicalDishwareInd()
    {
        return $this->ecologicalDishwareInd;
    }

    /**
     * Sets a new ecologicalDishwareInd
     *
     * Non-disposable dishware indicator.Example: trueImplementer: If true, the
     * property uses cups, glasses, dishes, tableware and other items are long-lasting
     * and not disposable.
     *
     * @param boolean $ecologicalDishwareInd
     * @return self
     */
    public function setEcologicalDishwareInd($ecologicalDishwareInd)
    {
        $this->ecologicalDishwareInd = $ecologicalDishwareInd;

        return $this;
    }

    /**
     * Gets as details
     *
     * Recycling details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Recycling details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType\DetailsAType
     * $details
     * @return self
     */
    public function setDetails(
        \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType\DetailsAType $details
    ) {
        $this->details = $details;

        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Recycling program description.
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
     * Recycling program description.
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
     * Recycling program description.
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
     * Recycling program description.
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
     * Recycling program description.
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

