<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyLocationType;

use Davispeixoto\OpenTravelAlliance\OntologyCodeType;

/**
 * Class representing GeneralLocationAType
 */
class GeneralLocationAType extends OntologyCodeType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

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

