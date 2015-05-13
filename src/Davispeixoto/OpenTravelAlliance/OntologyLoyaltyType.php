<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyLoyaltyType
 *
 * Loyalty information with ontology reference.
 * XSD Type: OntologyLoyaltyType
 */
class OntologyLoyaltyType
{

    /**
     * Program provider travel sector.Example: Transportation
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\SectorAType
     * $sector
     */
    private $sector = null;

    /**
     * Loyalty program name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\ProgramNameOrCodeAType
     * $programNameOrCode
     */
    private $programNameOrCode = null;

    /**
     * Loyalty program member information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\MemberInfoAType
     * $memberInfo
     */
    private $memberInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as sector
     *
     * Program provider travel sector.Example: Transportation
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\SectorAType
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Sets a new sector
     *
     * Program provider travel sector.Example: Transportation
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\SectorAType $sector
     * @return self
     */
    public function setSector(\Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\SectorAType $sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Gets as programNameOrCode
     *
     * Loyalty program name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\ProgramNameOrCodeAType
     */
    public function getProgramNameOrCode()
    {
        return $this->programNameOrCode;
    }

    /**
     * Sets a new programNameOrCode
     *
     * Loyalty program name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\ProgramNameOrCodeAType
     * $programNameOrCode
     * @return self
     */
    public function setProgramNameOrCode(
        \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\ProgramNameOrCodeAType $programNameOrCode
    ) {
        $this->programNameOrCode = $programNameOrCode;

        return $this;
    }

    /**
     * Gets as memberInfo
     *
     * Loyalty program member information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\MemberInfoAType
     */
    public function getMemberInfo()
    {
        return $this->memberInfo;
    }

    /**
     * Sets a new memberInfo
     *
     * Loyalty program member information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\MemberInfoAType
     * $memberInfo
     * @return self
     */
    public function setMemberInfo(\Davispeixoto\OpenTravelAlliance\OntologyLoyaltyType\MemberInfoAType $memberInfo)
    {
        $this->memberInfo = $memberInfo;

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

