<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing InsCoverageType
 *
 * Information about the travelers requesting coverage by the insurance plan and
 * traveler(s)' requirements for insurance coverage.
 * XSD Type: InsCoverageType
 */
class InsCoverageType
{

    /**
     * The unique identfier for the plan.
     *
     * @property string $planID
     */
    private $planID = null;

    /**
     * The name of the plan.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @property string $typeID
     */
    private $typeID = null;

    /**
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[]
     * $coveredTravelers
     */
    private $coveredTravelers = null;

    /**
     * Provides vendor with information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType
     * $insCoverageDetail
     */
    private $insCoverageDetail = null;

    /**
     * Gets as planID
     *
     * The unique identfier for the plan.
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * The unique identfier for the plan.
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the plan.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the plan.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @return string
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * Sets a new typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @param string $typeID
     * @return self
     */
    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;

        return $this;
    }

    /**
     * Adds as coveredTraveler
     *
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType $coveredTraveler
     */
    public function addToCoveredTravelers(\Davispeixoto\OpenTravelAlliance\CoveredTravelerType $coveredTraveler)
    {
        $this->coveredTravelers[] = $coveredTraveler;

        return $this;
    }

    /**
     * isset coveredTravelers
     *
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTravelers($index)
    {
        return isset($this->coveredTravelers[$index]);
    }

    /**
     * unset coveredTravelers
     *
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTravelers($index)
    {
        unset($this->coveredTravelers[$index]);
    }

    /**
     * Gets as coveredTravelers
     *
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[]
     */
    public function getCoveredTravelers()
    {
        return $this->coveredTravelers;
    }

    /**
     * Sets a new coveredTravelers
     *
     * Container for information about the travelers requesting coverage by the
     * insurance plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveredTravelerType[] $coveredTravelers
     * @return self
     */
    public function setCoveredTravelers(array $coveredTravelers)
    {
        $this->coveredTravelers = $coveredTravelers;

        return $this;
    }

    /**
     * Gets as insCoverageDetail
     *
     * Provides vendor with information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType
     */
    public function getInsCoverageDetail()
    {
        return $this->insCoverageDetail;
    }

    /**
     * Sets a new insCoverageDetail
     *
     * Provides vendor with information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType $insCoverageDetail
     * @return self
     */
    public function setInsCoverageDetail(\Davispeixoto\OpenTravelAlliance\InsCoverageDetailType $insCoverageDetail)
    {
        $this->insCoverageDetail = $insCoverageDetail;

        return $this;
    }


}

