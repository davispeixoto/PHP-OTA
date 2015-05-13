<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyCompanyType
 *
 * Company name, code, travel segment with ontology reference.
 * XSD Type: OntologyCompanyType
 */
class OntologyCompanyType
{

    /**
     * Company code and/ or name.Example: OTA
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyCodeType $nameOrCode
     */
    private $nameOrCode = null;

    /**
     * Company primary travel segment served.Example: Transportation
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyCompanyType\TravelSegmentAType
     * $travelSegment
     */
    private $travelSegment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as nameOrCode
     *
     * Company code and/ or name.Example: OTA
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCodeType
     */
    public function getNameOrCode()
    {
        return $this->nameOrCode;
    }

    /**
     * Sets a new nameOrCode
     *
     * Company code and/ or name.Example: OTA
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCodeType $nameOrCode
     * @return self
     */
    public function setNameOrCode(\Davispeixoto\OpenTravelAlliance\OntologyCodeType $nameOrCode)
    {
        $this->nameOrCode = $nameOrCode;

        return $this;
    }

    /**
     * Gets as travelSegment
     *
     * Company primary travel segment served.Example: Transportation
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyCompanyType\TravelSegmentAType
     */
    public function getTravelSegment()
    {
        return $this->travelSegment;
    }

    /**
     * Sets a new travelSegment
     *
     * Company primary travel segment served.Example: Transportation
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyCompanyType\TravelSegmentAType
     * $travelSegment
     * @return self
     */
    public function setTravelSegment(
        \Davispeixoto\OpenTravelAlliance\OntologyCompanyType\TravelSegmentAType $travelSegment
    ) {
        $this->travelSegment = $travelSegment;

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

