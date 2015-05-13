<?php

namespace Davispeixoto\OpenTravelAlliance\DonationType;

/**
 * Class representing DonorInfoAType
 */
class DonorInfoAType
{

    /**
     * The donor name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\NameAType
     * $name
     */
    private $name = null;

    /**
     * Donor address and email address information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\ContactInfoAType
     * $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as name
     *
     * The donor name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\NameAType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The donor name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\NameAType
     * $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\NameAType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as contactInfo
     *
     * Donor address and email address information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\ContactInfoAType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Donor address and email address information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\ContactInfoAType
     * $contactInfo
     * @return self
     */
    public function setContactInfo(
        \Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType\ContactInfoAType $contactInfo
    ) {
        $this->contactInfo = $contactInfo;

        return $this;
    }


}

