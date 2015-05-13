<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType;

/**
 * Class representing ViewershipAType
 */
class ViewershipAType
{

    /**
     * This is a reference placeholder, used as an index for multiple Viewership
     * classes.
     *
     * @property string $viewershipRPH
     */
    private $viewershipRPH = null;

    /**
     * Indicates whether this rate plan is bookable by the entity having viewership.
     * Values: false= Bookable, true= View Only (not bookable).
     *
     * @property boolean $viewOnly
     */
    private $viewOnly = null;

    /**
     * A collection of Viewship codes
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ViewershipCodesAType
     * $viewershipCodes
     */
    private $viewershipCodes = null;

    /**
     * A collection of system codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType
     * $systemCodes
     */
    private $systemCodes = null;

    /**
     * A collection of profile types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     * $profileTypes
     */
    private $profileTypes = null;

    /**
     * A collection of profile references.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $profileRefs
     */
    private $profileRefs = null;

    /**
     * A collection of profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType[] $profiles
     */
    private $profiles = null;

    /**
     * A collections of strings that identify the locations, such as regions or
     * countries, etc., associated with this viewership record.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType
     * $locationCodes
     */
    private $locationCodes = null;

    /**
     * A collections of strings that identify booking channels, such as GDSs or
     * Internet sites, etc., associated with this viewership record.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType
     * $bookingChannelCodes
     */
    private $bookingChannelCodes = null;

    /**
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     * $distributorTypes
     */
    private $distributorTypes = null;

    /**
     * Gets as viewershipRPH
     *
     * This is a reference placeholder, used as an index for multiple Viewership
     * classes.
     *
     * @return string
     */
    public function getViewershipRPH()
    {
        return $this->viewershipRPH;
    }

    /**
     * Sets a new viewershipRPH
     *
     * This is a reference placeholder, used as an index for multiple Viewership
     * classes.
     *
     * @param string $viewershipRPH
     * @return self
     */
    public function setViewershipRPH($viewershipRPH)
    {
        $this->viewershipRPH = $viewershipRPH;

        return $this;
    }

    /**
     * Gets as viewOnly
     *
     * Indicates whether this rate plan is bookable by the entity having viewership.
     * Values: false= Bookable, true= View Only (not bookable).
     *
     * @return boolean
     */
    public function getViewOnly()
    {
        return $this->viewOnly;
    }

    /**
     * Sets a new viewOnly
     *
     * Indicates whether this rate plan is bookable by the entity having viewership.
     * Values: false= Bookable, true= View Only (not bookable).
     *
     * @param boolean $viewOnly
     * @return self
     */
    public function setViewOnly($viewOnly)
    {
        $this->viewOnly = $viewOnly;

        return $this;
    }

    /**
     * Gets as viewershipCodes
     *
     * A collection of Viewship codes
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ViewershipCodesAType
     */
    public function getViewershipCodes()
    {
        return $this->viewershipCodes;
    }

    /**
     * Sets a new viewershipCodes
     *
     * A collection of Viewship codes
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ViewershipCodesAType
     * $viewershipCodes
     * @return self
     */
    public function setViewershipCodes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ViewershipCodesAType $viewershipCodes
    ) {
        $this->viewershipCodes = $viewershipCodes;

        return $this;
    }

    /**
     * Gets as systemCodes
     *
     * A collection of system codes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType
     */
    public function getSystemCodes()
    {
        return $this->systemCodes;
    }

    /**
     * Sets a new systemCodes
     *
     * A collection of system codes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType
     * $systemCodes
     * @return self
     */
    public function setSystemCodes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\SystemCodesAType $systemCodes
    ) {
        $this->systemCodes = $systemCodes;

        return $this;
    }

    /**
     * Adds as profileType
     *
     * A collection of profile types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType
     * $profileType
     */
    public function addToProfileTypes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType $profileType
    ) {
        $this->profileTypes[] = $profileType;

        return $this;
    }

    /**
     * isset profileTypes
     *
     * A collection of profile types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileTypes($index)
    {
        return isset($this->profileTypes[$index]);
    }

    /**
     * unset profileTypes
     *
     * A collection of profile types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileTypes($index)
    {
        unset($this->profileTypes[$index]);
    }

    /**
     * Gets as profileTypes
     *
     * A collection of profile types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     */
    public function getProfileTypes()
    {
        return $this->profileTypes;
    }

    /**
     * Sets a new profileTypes
     *
     * A collection of profile types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     * $profileTypes
     * @return self
     */
    public function setProfileTypes(array $profileTypes)
    {
        $this->profileTypes = $profileTypes;

        return $this;
    }

    /**
     * Adds as profileRef
     *
     * A collection of profile references.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef
     */
    public function addToProfileRefs(\Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef)
    {
        $this->profileRefs[] = $profileRef;

        return $this;
    }

    /**
     * isset profileRefs
     *
     * A collection of profile references.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileRefs($index)
    {
        return isset($this->profileRefs[$index]);
    }

    /**
     * unset profileRefs
     *
     * A collection of profile references.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileRefs($index)
    {
        unset($this->profileRefs[$index]);
    }

    /**
     * Gets as profileRefs
     *
     * A collection of profile references.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getProfileRefs()
    {
        return $this->profileRefs;
    }

    /**
     * Sets a new profileRefs
     *
     * A collection of profile references.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $profileRefs
     * @return self
     */
    public function setProfileRefs(array $profileRefs)
    {
        $this->profileRefs = $profileRefs;

        return $this;
    }

    /**
     * Adds as profile
     *
     * A collection of profiles.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profiles[] = $profile;

        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profiles.
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
     * A collection of profiles.
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
     * A collection of profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Gets as locationCodes
     *
     * A collections of strings that identify the locations, such as regions or
     * countries, etc., associated with this viewership record.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType
     */
    public function getLocationCodes()
    {
        return $this->locationCodes;
    }

    /**
     * Sets a new locationCodes
     *
     * A collections of strings that identify the locations, such as regions or
     * countries, etc., associated with this viewership record.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType
     * $locationCodes
     * @return self
     */
    public function setLocationCodes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\LocationCodesAType $locationCodes
    ) {
        $this->locationCodes = $locationCodes;

        return $this;
    }

    /**
     * Gets as bookingChannelCodes
     *
     * A collections of strings that identify booking channels, such as GDSs or
     * Internet sites, etc., associated with this viewership record.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType
     */
    public function getBookingChannelCodes()
    {
        return $this->bookingChannelCodes;
    }

    /**
     * Sets a new bookingChannelCodes
     *
     * A collections of strings that identify booking channels, such as GDSs or
     * Internet sites, etc., associated with this viewership record.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType
     * $bookingChannelCodes
     * @return self
     */
    public function setBookingChannelCodes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType $bookingChannelCodes
    ) {
        $this->bookingChannelCodes = $bookingChannelCodes;

        return $this;
    }

    /**
     * Adds as distributorType
     *
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType
     * $distributorType
     */
    public function addToDistributorTypes(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType $distributorType
    ) {
        $this->distributorTypes[] = $distributorType;

        return $this;
    }

    /**
     * isset distributorTypes
     *
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDistributorTypes($index)
    {
        return isset($this->distributorTypes[$index]);
    }

    /**
     * unset distributorTypes
     *
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDistributorTypes($index)
    {
        unset($this->distributorTypes[$index]);
    }

    /**
     * Gets as distributorTypes
     *
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     */
    public function getDistributorTypes()
    {
        return $this->distributorTypes;
    }

    /**
     * Sets a new distributorTypes
     *
     * A Collection of strings that identify the distibutors (ex Tour Operators, Agency
     * Chains, etc) which are allowed viewership.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     * $distributorTypes
     * @return self
     */
    public function setDistributorTypes(array $distributorTypes)
    {
        $this->distributorTypes = $distributorTypes;

        return $this;
    }


}

