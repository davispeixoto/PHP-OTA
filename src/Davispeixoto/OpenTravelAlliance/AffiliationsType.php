<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AffiliationsType
 *
 * Defines an entity that provides travel services or benefits to a customer or
 * company.
 * XSD Type: AffiliationsType
 */
class AffiliationsType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OrganizationType[] $organization
     */
    private $organization = null;

    /**
     * Employer information associated to this affiliation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmployerType[] $employer
     */
    private $employer = null;

    /**
     * Information on the organization responsible for arranging travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = null;

    /**
     * A club that offers special privileges and related services for this affiliation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelClubType[] $travelClub
     */
    private $travelClub = null;

    /**
     * Travel insurance associated to this affiliation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

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

    /**
     * Adds as organization
     *
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OrganizationType $organization
     */
    public function addToOrganization(\Davispeixoto\OpenTravelAlliance\OrganizationType $organization)
    {
        $this->organization[] = $organization;

        return $this;
    }

    /**
     * isset organization
     *
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganization($index)
    {
        return isset($this->organization[$index]);
    }

    /**
     * unset organization
     *
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganization($index)
    {
        unset($this->organization[$index]);
    }

    /**
     * Gets as organization
     *
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OrganizationType[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * Detailed information for a membership organization that has travel benefits,
     * programs or discounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OrganizationType[] $organization
     * @return self
     */
    public function setOrganization(array $organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Adds as employer
     *
     * Employer information associated to this affiliation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmployerType $employer
     */
    public function addToEmployer(\Davispeixoto\OpenTravelAlliance\EmployerType $employer)
    {
        $this->employer[] = $employer;

        return $this;
    }

    /**
     * isset employer
     *
     * Employer information associated to this affiliation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmployer($index)
    {
        return isset($this->employer[$index]);
    }

    /**
     * unset employer
     *
     * Employer information associated to this affiliation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmployer($index)
    {
        unset($this->employer[$index]);
    }

    /**
     * Gets as employer
     *
     * Employer information associated to this affiliation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmployerType[]
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Sets a new employer
     *
     * Employer information associated to this affiliation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmployerType[] $employer
     * @return self
     */
    public function setEmployer(array $employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Davispeixoto\OpenTravelAlliance\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;

        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger)
    {
        $this->travelArranger = $travelArranger;

        return $this;
    }

    /**
     * Adds as travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelClubType $travelClub
     */
    public function addToTravelClub(\Davispeixoto\OpenTravelAlliance\TravelClubType $travelClub)
    {
        $this->travelClub[] = $travelClub;

        return $this;
    }

    /**
     * isset travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelClub($index)
    {
        return isset($this->travelClub[$index]);
    }

    /**
     * unset travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelClub($index)
    {
        unset($this->travelClub[$index]);
    }

    /**
     * Gets as travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelClubType[]
     */
    public function getTravelClub()
    {
        return $this->travelClub;
    }

    /**
     * Sets a new travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelClubType[] $travelClub
     * @return self
     */
    public function setTravelClub(array $travelClub)
    {
        $this->travelClub = $travelClub;

        return $this;
    }

    /**
     * Adds as insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InsuranceType $insurance
     */
    public function addToInsurance(\Davispeixoto\OpenTravelAlliance\InsuranceType $insurance)
    {
        $this->insurance[] = $insurance;

        return $this;
    }

    /**
     * isset insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InsuranceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;

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

