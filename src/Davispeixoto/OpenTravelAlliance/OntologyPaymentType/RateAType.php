<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyPaymentType;

/**
 * Class representing RateAType
 */
class RateAType
{

    /**
     * Rate category.Example: Corporate
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CategoryAType
     * $category
     */
    private $category = null;

    /**
     * Rate code.Example: IBM
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CodeAType $code
     */
    private $code = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as category
     *
     * Rate category.Example: Corporate
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CategoryAType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Rate category.Example: Corporate
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CategoryAType
     * $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CategoryAType $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as code
     *
     * Rate code.Example: IBM
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CodeAType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Rate code.Example: IBM
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CodeAType
     * $code
     * @return self
     */
    public function setCode(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType\RateAType\CodeAType $code)
    {
        $this->code = $code;

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

