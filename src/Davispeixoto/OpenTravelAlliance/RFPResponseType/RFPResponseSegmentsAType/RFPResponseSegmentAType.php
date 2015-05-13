<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType;

/**
 * Class representing RFPResponseSegmentAType
 */
class RFPResponseSegmentAType
{

    /**
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     */
    private $profiles = null;

    /**
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     * $sites
     */
    private $sites = null;

    /**
     * This holds information that pertains to all sites requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $rFPID
     */
    private $rFPID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as profileInfo
     *
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType
     * $profileInfo
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;

        return $this;
    }

    /**
     * isset profiles
     *
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * This can be used to echo back the profile information of the submitter of the
     * request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Adds as site
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType
     * $site
     */
    public function addToSites(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType $site
    ) {
        $this->sites[] = $site;

        return $this;
    }

    /**
     * isset sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSites($index)
    {
        return isset($this->sites[$index]);
    }

    /**
     * unset sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSites($index)
    {
        unset($this->sites[$index]);
    }

    /**
     * Gets as sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     * $sites
     * @return self
     */
    public function setSites(array $sites)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Adds as comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Adds as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $rFPID
     */
    public function addToRFPID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $rFPID)
    {
        $this->rFPID[] = $rFPID;

        return $this;
    }

    /**
     * isset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPID($index)
    {
        return isset($this->rFPID[$index]);
    }

    /**
     * unset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPID($index)
    {
        unset($this->rFPID[$index]);
    }

    /**
     * Gets as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getRFPID()
    {
        return $this->rFPID;
    }

    /**
     * Sets a new rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID)
    {
        $this->rFPID = $rFPID;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

