<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyValueType
 *
 * Trip/ traveler value information with ontology reference.
 * XSD Type: OntologyValueType
 */
class OntologyValueType
{

    /**
     * Value score.Example: 3Implementer: This is a value score between 1 and 5, with 1
     * having the greatest value and 5 having the least value.
     *
     * @property integer $score
     */
    private $score = null;

    /**
     * Metrics used for valuation.Example: ClassOfService
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyValueType\ScoreBasisAType[]
     * $scoreBasis
     */
    private $scoreBasis = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as score
     *
     * Value score.Example: 3Implementer: This is a value score between 1 and 5, with 1
     * having the greatest value and 5 having the least value.
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Value score.Example: 3Implementer: This is a value score between 1 and 5, with 1
     * having the greatest value and 5 having the least value.
     *
     * @param integer $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Adds as scoreBasis
     *
     * Metrics used for valuation.Example: ClassOfService
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OntologyValueType\ScoreBasisAType
     * $scoreBasis
     */
    public function addToScoreBasis(\Davispeixoto\OpenTravelAlliance\OntologyValueType\ScoreBasisAType $scoreBasis)
    {
        $this->scoreBasis[] = $scoreBasis;

        return $this;
    }

    /**
     * isset scoreBasis
     *
     * Metrics used for valuation.Example: ClassOfService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetScoreBasis($index)
    {
        return isset($this->scoreBasis[$index]);
    }

    /**
     * unset scoreBasis
     *
     * Metrics used for valuation.Example: ClassOfService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetScoreBasis($index)
    {
        unset($this->scoreBasis[$index]);
    }

    /**
     * Gets as scoreBasis
     *
     * Metrics used for valuation.Example: ClassOfService
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyValueType\ScoreBasisAType[]
     */
    public function getScoreBasis()
    {
        return $this->scoreBasis;
    }

    /**
     * Sets a new scoreBasis
     *
     * Metrics used for valuation.Example: ClassOfService
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyValueType\ScoreBasisAType[]
     * $scoreBasis
     * @return self
     */
    public function setScoreBasis(array $scoreBasis)
    {
        $this->scoreBasis = $scoreBasis;

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

