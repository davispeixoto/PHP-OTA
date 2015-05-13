<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationInfoType
 *
 * Provides accommodation location, dates and classifications
 * XSD Type: AccommodationInfoType
 */
class AccommodationInfoType
{

    /**
     * A code identifying a complete package arrangement, in place of individual travel
     * and accommodation codes.
     *
     * @property string $packageID
     */
    private $packageID = null;

    /**
     * The minimum age for a child price.
     *
     * @property integer $minChildAge
     */
    private $minChildAge = null;

    /**
     * The maximum age for a child price.
     *
     * @property integer $maxChildAge
     */
    private $maxChildAge = null;

    /**
     * This is the meal plan that is included in the package price.
     *
     * @property string $baseMealPlan
     */
    private $baseMealPlan = null;

    /**
     * Full name or description plus codes for a property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PropertyIdentityType $property
     */
    private $property = null;

    /**
     * Identifies the resort and destination of the property
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\ResortAType
     * $resort
     */
    private $resort = null;

    /**
     * Provides the supplier's and/or national classifiaction of the property.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\AccommodationClassAType
     * $accommodationClass
     */
    private $accommodationClass = null;

    /**
     * Identifies the current source for information on the property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceIdentificationType
     * $sourceIdentification
     */
    private $sourceIdentification = null;

    /**
     * Provides a URL source for content information on the property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $contentInfo
     */
    private $contentInfo = null;

    /**
     * Gets as packageID
     *
     * A code identifying a complete package arrangement, in place of individual travel
     * and accommodation codes.
     *
     * @return string
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * A code identifying a complete package arrangement, in place of individual travel
     * and accommodation codes.
     *
     * @param string $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;

        return $this;
    }

    /**
     * Gets as minChildAge
     *
     * The minimum age for a child price.
     *
     * @return integer
     */
    public function getMinChildAge()
    {
        return $this->minChildAge;
    }

    /**
     * Sets a new minChildAge
     *
     * The minimum age for a child price.
     *
     * @param integer $minChildAge
     * @return self
     */
    public function setMinChildAge($minChildAge)
    {
        $this->minChildAge = $minChildAge;

        return $this;
    }

    /**
     * Gets as maxChildAge
     *
     * The maximum age for a child price.
     *
     * @return integer
     */
    public function getMaxChildAge()
    {
        return $this->maxChildAge;
    }

    /**
     * Sets a new maxChildAge
     *
     * The maximum age for a child price.
     *
     * @param integer $maxChildAge
     * @return self
     */
    public function setMaxChildAge($maxChildAge)
    {
        $this->maxChildAge = $maxChildAge;

        return $this;
    }

    /**
     * Gets as baseMealPlan
     *
     * This is the meal plan that is included in the package price.
     *
     * @return string
     */
    public function getBaseMealPlan()
    {
        return $this->baseMealPlan;
    }

    /**
     * Sets a new baseMealPlan
     *
     * This is the meal plan that is included in the package price.
     *
     * @param string $baseMealPlan
     * @return self
     */
    public function setBaseMealPlan($baseMealPlan)
    {
        $this->baseMealPlan = $baseMealPlan;

        return $this;
    }

    /**
     * Gets as property
     *
     * Full name or description plus codes for a property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyIdentityType
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Full name or description plus codes for a property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyIdentityType $property
     * @return self
     */
    public function setProperty(\Davispeixoto\OpenTravelAlliance\PropertyIdentityType $property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Gets as resort
     *
     * Identifies the resort and destination of the property
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\ResortAType
     */
    public function getResort()
    {
        return $this->resort;
    }

    /**
     * Sets a new resort
     *
     * Identifies the resort and destination of the property
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\ResortAType
     * $resort
     * @return self
     */
    public function setResort(\Davispeixoto\OpenTravelAlliance\AccommodationInfoType\ResortAType $resort)
    {
        $this->resort = $resort;

        return $this;
    }

    /**
     * Gets as accommodationClass
     *
     * Provides the supplier's and/or national classifiaction of the property.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\AccommodationClassAType
     */
    public function getAccommodationClass()
    {
        return $this->accommodationClass;
    }

    /**
     * Sets a new accommodationClass
     *
     * Provides the supplier's and/or national classifiaction of the property.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\AccommodationClassAType
     * $accommodationClass
     * @return self
     */
    public function setAccommodationClass(
        \Davispeixoto\OpenTravelAlliance\AccommodationInfoType\AccommodationClassAType $accommodationClass
    ) {
        $this->accommodationClass = $accommodationClass;

        return $this;
    }

    /**
     * Gets as sourceIdentification
     *
     * Identifies the current source for information on the property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceIdentificationType
     */
    public function getSourceIdentification()
    {
        return $this->sourceIdentification;
    }

    /**
     * Sets a new sourceIdentification
     *
     * Identifies the current source for information on the property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceIdentificationType
     * $sourceIdentification
     * @return self
     */
    public function setSourceIdentification(
        \Davispeixoto\OpenTravelAlliance\SourceIdentificationType $sourceIdentification
    ) {
        $this->sourceIdentification = $sourceIdentification;

        return $this;
    }

    /**
     * Gets as contentInfo
     *
     * Provides a URL source for content information on the property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getContentInfo()
    {
        return $this->contentInfo;
    }

    /**
     * Sets a new contentInfo
     *
     * Provides a URL source for content information on the property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $contentInfo
     * @return self
     */
    public function setContentInfo(\Davispeixoto\OpenTravelAlliance\URLType $contentInfo)
    {
        $this->contentInfo = $contentInfo;

        return $this;
    }


}

