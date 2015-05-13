<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType;

/**
 * Class representing EarliestStartAType
 */
class EarliestStartAType
{

    /**
     * Start date or date and time.Example: 2013-01-13T22:00
     *
     * @property \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Method used to calculate the earliest start date/ time.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType
     * $calculationMethod
     */
    private $calculationMethod = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as dateTime
     *
     * Start date or date and time.Example: 2013-01-13T22:00
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * Start date or date and time.Example: 2013-01-13T22:00
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;

        return $this;
    }

    /**
     * Gets as calculationMethod
     *
     * Method used to calculate the earliest start date/ time.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType
     */
    public function getCalculationMethod()
    {
        return $this->calculationMethod;
    }

    /**
     * Sets a new calculationMethod
     *
     * Method used to calculate the earliest start date/ time.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType
     * $calculationMethod
     * @return self
     */
    public function setCalculationMethod(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\RequestedOfferAType\TimePeriodAType\EarliestStartAType\CalculationMethodAType $calculationMethod
    ) {
        $this->calculationMethod = $calculationMethod;

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

