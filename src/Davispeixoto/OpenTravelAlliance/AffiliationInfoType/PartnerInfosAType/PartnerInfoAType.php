<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType;

/**
 * Class representing PartnerInfoAType
 */
class PartnerInfoAType
{

    /**
     * Provides general information for the partner.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     */
    private $contact = null;

    /**
     * Describes the partnership program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as contact
     *
     * Provides general information for the partner.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Provides general information for the partner.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactInfoType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Gets as description
     *
     * Describes the partnership program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Describes the partnership program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }


}

