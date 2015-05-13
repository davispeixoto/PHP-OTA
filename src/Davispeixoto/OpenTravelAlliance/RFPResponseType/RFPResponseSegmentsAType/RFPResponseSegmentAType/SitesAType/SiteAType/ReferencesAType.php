<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ReferencesAType
 */
class ReferencesAType
{

    /**
     * Identifies contact information and event details for a recommendation reference.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     * $reference
     */
    private $reference = null;

    /**
     * Adds as reference
     *
     * Identifies contact information and event details for a recommendation reference.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType
     * $reference
     */
    public function addToReference(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType $reference
    ) {
        $this->reference[] = $reference;

        return $this;
    }

    /**
     * isset reference
     *
     * Identifies contact information and event details for a recommendation reference.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * Identifies contact information and event details for a recommendation reference.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * Identifies contact information and event details for a recommendation reference.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Identifies contact information and event details for a recommendation reference.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     * $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;

        return $this;
    }


}

