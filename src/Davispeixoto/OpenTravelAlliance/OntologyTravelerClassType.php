<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyTravelerClassType
 *
 * Traveler classification information with ontology reference.
 * XSD Type: OntologyTravelerClassType
 */
class OntologyTravelerClassType
{

    /**
     * Total disabled traveler quantity.Example: 1
     *
     * @property integer $disabledQty
     */
    private $disabledQty = null;

    /**
     * Age category.Example: Adult
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\AgeCategoryAType[]
     * $ageCategory
     */
    private $ageCategory = null;

    /**
     * Passenger category.Example: Disabled
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\PassengerCategoryAType[]
     * $passengerCategory
     */
    private $passengerCategory = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as disabledQty
     *
     * Total disabled traveler quantity.Example: 1
     *
     * @return integer
     */
    public function getDisabledQty()
    {
        return $this->disabledQty;
    }

    /**
     * Sets a new disabledQty
     *
     * Total disabled traveler quantity.Example: 1
     *
     * @param integer $disabledQty
     * @return self
     */
    public function setDisabledQty($disabledQty)
    {
        $this->disabledQty = $disabledQty;

        return $this;
    }

    /**
     * Adds as ageCategory
     *
     * Age category.Example: Adult
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\AgeCategoryAType
     * $ageCategory
     */
    public function addToAgeCategory(
        \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\AgeCategoryAType $ageCategory
    ) {
        $this->ageCategory[] = $ageCategory;

        return $this;
    }

    /**
     * isset ageCategory
     *
     * Age category.Example: Adult
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgeCategory($index)
    {
        return isset($this->ageCategory[$index]);
    }

    /**
     * unset ageCategory
     *
     * Age category.Example: Adult
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgeCategory($index)
    {
        unset($this->ageCategory[$index]);
    }

    /**
     * Gets as ageCategory
     *
     * Age category.Example: Adult
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\AgeCategoryAType[]
     */
    public function getAgeCategory()
    {
        return $this->ageCategory;
    }

    /**
     * Sets a new ageCategory
     *
     * Age category.Example: Adult
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\AgeCategoryAType[]
     * $ageCategory
     * @return self
     */
    public function setAgeCategory(array $ageCategory)
    {
        $this->ageCategory = $ageCategory;

        return $this;
    }

    /**
     * Adds as passengerCategory
     *
     * Passenger category.Example: Disabled
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\PassengerCategoryAType
     * $passengerCategory
     */
    public function addToPassengerCategory(
        \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\PassengerCategoryAType $passengerCategory
    ) {
        $this->passengerCategory[] = $passengerCategory;

        return $this;
    }

    /**
     * isset passengerCategory
     *
     * Passenger category.Example: Disabled
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerCategory($index)
    {
        return isset($this->passengerCategory[$index]);
    }

    /**
     * unset passengerCategory
     *
     * Passenger category.Example: Disabled
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerCategory($index)
    {
        unset($this->passengerCategory[$index]);
    }

    /**
     * Gets as passengerCategory
     *
     * Passenger category.Example: Disabled
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\PassengerCategoryAType[]
     */
    public function getPassengerCategory()
    {
        return $this->passengerCategory;
    }

    /**
     * Sets a new passengerCategory
     *
     * Passenger category.Example: Disabled
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTravelerClassType\PassengerCategoryAType[]
     * $passengerCategory
     * @return self
     */
    public function setPassengerCategory(array $passengerCategory)
    {
        $this->passengerCategory = $passengerCategory;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}

