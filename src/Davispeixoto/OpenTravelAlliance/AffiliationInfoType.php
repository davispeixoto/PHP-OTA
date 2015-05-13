<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AffiliationInfoType
 *
 * The AffiliationInfo object is used to identify the brand or franchise
 * affiliations of the hotel.
 * XSD Type: AffiliationInfoType
 */
class AffiliationInfoType
{

    /**
     * The date and time when the affiliation information for this hotel was last
     * updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A collection of DistribSystem elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType
     * $distribSystems
     */
    private $distribSystems = null;

    /**
     * Collection of Brands.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     * $brands
     */
    private $brands = null;

    /**
     * Collection of LoyalPrograms.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     * $loyalPrograms
     */
    private $loyalPrograms = null;

    /**
     * A collection of Award elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     * $awards
     */
    private $awards = null;

    /**
     * Collection of PartnerInfo.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     * $partnerInfos
     */
    private $partnerInfos = null;

    /**
     * Collection of affiliation descriptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     */
    private $descriptions = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when the affiliation information for this hotel was last
     * updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the affiliation information for this hotel was last
     * updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Gets as distribSystems
     *
     * A collection of DistribSystem elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType
     */
    public function getDistribSystems()
    {
        return $this->distribSystems;
    }

    /**
     * Sets a new distribSystems
     *
     * A collection of DistribSystem elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType
     * $distribSystems
     * @return self
     */
    public function setDistribSystems(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType $distribSystems
    ) {
        $this->distribSystems = $distribSystems;

        return $this;
    }

    /**
     * Adds as brand
     *
     * Collection of Brands.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType
     * $brand
     */
    public function addToBrands(\Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType $brand)
    {
        $this->brands[] = $brand;

        return $this;
    }

    /**
     * isset brands
     *
     * Collection of Brands.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBrands($index)
    {
        return isset($this->brands[$index]);
    }

    /**
     * unset brands
     *
     * Collection of Brands.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBrands($index)
    {
        unset($this->brands[$index]);
    }

    /**
     * Gets as brands
     *
     * Collection of Brands.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Sets a new brands
     *
     * Collection of Brands.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\BrandsAType\BrandAType[]
     * $brands
     * @return self
     */
    public function setBrands(array $brands)
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * Adds as loyalProgram
     *
     * Collection of LoyalPrograms.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType
     * $loyalProgram
     */
    public function addToLoyalPrograms(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram
    ) {
        $this->loyalPrograms[] = $loyalProgram;

        return $this;
    }

    /**
     * isset loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyalPrograms($index)
    {
        return isset($this->loyalPrograms[$index]);
    }

    /**
     * unset loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyalPrograms($index)
    {
        unset($this->loyalPrograms[$index]);
    }

    /**
     * Gets as loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     */
    public function getLoyalPrograms()
    {
        return $this->loyalPrograms;
    }

    /**
     * Sets a new loyalPrograms
     *
     * Collection of LoyalPrograms.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     * $loyalPrograms
     * @return self
     */
    public function setLoyalPrograms(array $loyalPrograms)
    {
        $this->loyalPrograms = $loyalPrograms;

        return $this;
    }

    /**
     * Adds as award
     *
     * A collection of Award elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType
     * $award
     */
    public function addToAwards(\Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType $award)
    {
        $this->awards[] = $award;

        return $this;
    }

    /**
     * isset awards
     *
     * A collection of Award elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAwards($index)
    {
        return isset($this->awards[$index]);
    }

    /**
     * unset awards
     *
     * A collection of Award elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAwards($index)
    {
        unset($this->awards[$index]);
    }

    /**
     * Gets as awards
     *
     * A collection of Award elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Sets a new awards
     *
     * A collection of Award elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     * $awards
     * @return self
     */
    public function setAwards(array $awards)
    {
        $this->awards = $awards;

        return $this;
    }

    /**
     * Adds as partnerInfo
     *
     * Collection of PartnerInfo.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType
     * $partnerInfo
     */
    public function addToPartnerInfos(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo
    ) {
        $this->partnerInfos[] = $partnerInfo;

        return $this;
    }

    /**
     * isset partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnerInfos($index)
    {
        return isset($this->partnerInfos[$index]);
    }

    /**
     * unset partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnerInfos($index)
    {
        unset($this->partnerInfos[$index]);
    }

    /**
     * Gets as partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     */
    public function getPartnerInfos()
    {
        return $this->partnerInfos;
    }

    /**
     * Sets a new partnerInfos
     *
     * Collection of PartnerInfo.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     * $partnerInfos
     * @return self
     */
    public function setPartnerInfos(array $partnerInfos)
    {
        $this->partnerInfos = $partnerInfos;

        return $this;
    }

    /**
     * Adds as description
     *
     * Collection of affiliation descriptions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescriptions(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->descriptions[] = $description;

        return $this;
    }

    /**
     * isset descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * Collection of affiliation descriptions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }


}

