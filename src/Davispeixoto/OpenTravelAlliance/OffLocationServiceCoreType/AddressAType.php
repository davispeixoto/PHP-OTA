<?php

namespace Davispeixoto\OpenTravelAlliance\OffLocationServiceCoreType;

use Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressType
{

    /**
     * An identifier of a particular location used in place of address details.
     *
     * @property string $siteID
     */
    private $siteID = null;

    /**
     * This field is to provide a name for the site reference of the off location
     * service.
     *
     * @property string $siteName
     */
    private $siteName = null;

    /**
     * Gets as siteID
     *
     * An identifier of a particular location used in place of address details.
     *
     * @return string
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * An identifier of a particular location used in place of address details.
     *
     * @param string $siteID
     * @return self
     */
    public function setSiteID($siteID)
    {
        $this->siteID = $siteID;

        return $this;
    }

    /**
     * Gets as siteName
     *
     * This field is to provide a name for the site reference of the off location
     * service.
     *
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Sets a new siteName
     *
     * This field is to provide a name for the site reference of the off location
     * service.
     *
     * @param string $siteName
     * @return self
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }


}

