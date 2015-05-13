<?php

namespace Davispeixoto\OpenTravelAlliance\CommonPrefType;

/**
 * Class representing ContactPrefAType
 */
class ContactPrefAType
{

    /**
     * Level of preference for this method of being contacted.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Method of contact. Refer to OpenTravel Code List DistributionType (DTB).
     *
     * @property string $contactMethodCode
     */
    private $contactMethodCode = null;

    /**
     * Gets as preferLevel
     *
     * Level of preference for this method of being contacted.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Level of preference for this method of being contacted.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as contactMethodCode
     *
     * Method of contact. Refer to OpenTravel Code List DistributionType (DTB).
     *
     * @return string
     */
    public function getContactMethodCode()
    {
        return $this->contactMethodCode;
    }

    /**
     * Sets a new contactMethodCode
     *
     * Method of contact. Refer to OpenTravel Code List DistributionType (DTB).
     *
     * @param string $contactMethodCode
     * @return self
     */
    public function setContactMethodCode($contactMethodCode)
    {
        $this->contactMethodCode = $contactMethodCode;

        return $this;
    }


}

