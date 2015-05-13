<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyTimeDurationType
 *
 * Start and end date/ time with ontology reference.
 * XSD Type: OntologyTimeDurationType
 */
class OntologyTimeDurationType
{

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Start and end date or date and time with duration information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType
     * $startAndEnd
     */
    private $startAndEnd = null;

    /**
     * End date or date and time.Example: 2013-01-13T23:37:00
     *
     * @property \DateTime $end
     */
    private $end = null;

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
     * Gets as startAndEnd
     *
     * Start and end date or date and time with duration information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType
     */
    public function getStartAndEnd()
    {
        return $this->startAndEnd;
    }

    /**
     * Sets a new startAndEnd
     *
     * Start and end date or date and time with duration information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType
     * $startAndEnd
     * @return self
     */
    public function setStartAndEnd(
        \Davispeixoto\OpenTravelAlliance\OntologyTimeDurationType\StartAndEndAType $startAndEnd
    ) {
        $this->startAndEnd = $startAndEnd;

        return $this;
    }

    /**
     * Gets as end
     *
     * End date or date and time.Example: 2013-01-13T23:37:00
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * End date or date and time.Example: 2013-01-13T23:37:00
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;

        return $this;
    }


}

