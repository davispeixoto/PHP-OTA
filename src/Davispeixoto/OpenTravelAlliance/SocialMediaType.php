<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SocialMediaType
 *
 * Specifies social media information used for communication with the traveler.
 * XSD Type: SocialMediaType
 */
class SocialMediaType
{

    /**
     * Identifies the social media site (e.g. Twitter, Facebook, etc.).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Specifies the user name for this specific social media type.
     *
     * @property string $userName
     */
    private $userName = null;

    /**
     * When true, this social media type is the preferred method for social media
     * communication.
     *
     * @property boolean $preferredContactInd
     */
    private $preferredContactInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Gets as type
     *
     * Identifies the social media site (e.g. Twitter, Facebook, etc.).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the social media site (e.g. Twitter, Facebook, etc.).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as userName
     *
     * Specifies the user name for this specific social media type.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * Specifies the user name for this specific social media type.
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Gets as preferredContactInd
     *
     * When true, this social media type is the preferred method for social media
     * communication.
     *
     * @return boolean
     */
    public function getPreferredContactInd()
    {
        return $this->preferredContactInd;
    }

    /**
     * Sets a new preferredContactInd
     *
     * When true, this social media type is the preferred method for social media
     * communication.
     *
     * @param boolean $preferredContactInd
     * @return self
     */
    public function setPreferredContactInd($preferredContactInd)
    {
        $this->preferredContactInd = $preferredContactInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }


}

