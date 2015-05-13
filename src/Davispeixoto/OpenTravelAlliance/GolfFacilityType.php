<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GolfFacilityType
 *
 * Information about a golf facility, which may be a golf course proper and/or a
 * facility such as a hotel that has an association with a nearby golf course or
 * has one on premise.
 * XSD Type: GolfFacilityType
 */
class GolfFacilityType
{

    /**
     * The unique ID and name of the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\UniqueIDAType
     * $uniqueID
     */
    private $uniqueID = null;

    /**
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[] $amenities
     */
    private $amenities = null;

    /**
     * Primary phone and website contact information for the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ContactAType
     * $contact
     */
    private $contact = null;

    /**
     * A date and time period when a golf facility is closed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $courseClosure
     */
    private $courseClosure = null;

    /**
     * Information about course conditions with an optional source name or URL.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseConditionsAType[]
     * $courseConditions
     */
    private $courseConditions = null;

    /**
     * Ratings for the course with an optional source name or URL.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRatingAType[]
     * $courseRating
     */
    private $courseRating = null;

    /**
     * Directions to the golf facility.
     *
     * @property string[] $directions
     */
    private $directions = null;

    /**
     * Facility features information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeaturesAType
     * $features
     */
    private $features = null;

    /**
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRestrictionsAType[]
     * $courseRestrictions
     */
    private $courseRestrictions = null;

    /**
     * A short facility description with optional long description and club type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\DescriptionAType
     * $description
     */
    private $description = null;

    /**
     * General green fee amounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeeStructureAType[]
     * $feeStructure
     */
    private $feeStructure = null;

    /**
     * Hours of operation for the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $hoursOfOperation
     */
    private $hoursOfOperation = null;

    /**
     * Address and geocoding information for the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\LocationAType
     * $location
     */
    private $location = null;

    /**
     * Images, descriptions and movies that describe the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionType[]
     * $multimedia
     */
    private $multimedia = null;

    /**
     * Summary golf facility and tee time policies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PolicyAType[]
     * $policy
     */
    private $policy = null;

    /**
     * Promotions available at the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Scorecard information for the golf facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ScoreCardAType[]
     * $scoreCard
     */
    private $scoreCard = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as uniqueID
     *
     * The unique ID and name of the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\UniqueIDAType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique ID and name of the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\UniqueIDAType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\UniqueIDAType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType $amenities
     */
    public function addToAmenities(\Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType $amenities)
    {
        $this->amenities[] = $amenities;

        return $this;
    }

    /**
     * isset amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Primary phone and website contact information for the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ContactAType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Primary phone and website contact information for the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ContactAType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\ContactAType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Adds as courseClosure
     *
     * A date and time period when a golf facility is closed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $courseClosure
     */
    public function addToCourseClosure(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $courseClosure)
    {
        $this->courseClosure[] = $courseClosure;

        return $this;
    }

    /**
     * isset courseClosure
     *
     * A date and time period when a golf facility is closed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseClosure($index)
    {
        return isset($this->courseClosure[$index]);
    }

    /**
     * unset courseClosure
     *
     * A date and time period when a golf facility is closed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseClosure($index)
    {
        unset($this->courseClosure[$index]);
    }

    /**
     * Gets as courseClosure
     *
     * A date and time period when a golf facility is closed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getCourseClosure()
    {
        return $this->courseClosure;
    }

    /**
     * Sets a new courseClosure
     *
     * A date and time period when a golf facility is closed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $courseClosure
     * @return self
     */
    public function setCourseClosure(array $courseClosure)
    {
        $this->courseClosure = $courseClosure;

        return $this;
    }

    /**
     * Adds as courseConditions
     *
     * Information about course conditions with an optional source name or URL.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseConditionsAType
     * $courseConditions
     */
    public function addToCourseConditions(
        \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseConditionsAType $courseConditions
    ) {
        $this->courseConditions[] = $courseConditions;

        return $this;
    }

    /**
     * isset courseConditions
     *
     * Information about course conditions with an optional source name or URL.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseConditions($index)
    {
        return isset($this->courseConditions[$index]);
    }

    /**
     * unset courseConditions
     *
     * Information about course conditions with an optional source name or URL.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseConditions($index)
    {
        unset($this->courseConditions[$index]);
    }

    /**
     * Gets as courseConditions
     *
     * Information about course conditions with an optional source name or URL.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseConditionsAType[]
     */
    public function getCourseConditions()
    {
        return $this->courseConditions;
    }

    /**
     * Sets a new courseConditions
     *
     * Information about course conditions with an optional source name or URL.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseConditionsAType[]
     * $courseConditions
     * @return self
     */
    public function setCourseConditions(array $courseConditions)
    {
        $this->courseConditions = $courseConditions;

        return $this;
    }

    /**
     * Adds as courseRating
     *
     * Ratings for the course with an optional source name or URL.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRatingAType
     * $courseRating
     */
    public function addToCourseRating(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRatingAType $courseRating)
    {
        $this->courseRating[] = $courseRating;

        return $this;
    }

    /**
     * isset courseRating
     *
     * Ratings for the course with an optional source name or URL.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseRating($index)
    {
        return isset($this->courseRating[$index]);
    }

    /**
     * unset courseRating
     *
     * Ratings for the course with an optional source name or URL.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseRating($index)
    {
        unset($this->courseRating[$index]);
    }

    /**
     * Gets as courseRating
     *
     * Ratings for the course with an optional source name or URL.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRatingAType[]
     */
    public function getCourseRating()
    {
        return $this->courseRating;
    }

    /**
     * Sets a new courseRating
     *
     * Ratings for the course with an optional source name or URL.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRatingAType[]
     * $courseRating
     * @return self
     */
    public function setCourseRating(array $courseRating)
    {
        $this->courseRating = $courseRating;

        return $this;
    }

    /**
     * Adds as directions
     *
     * Directions to the golf facility.
     *
     * @return self
     * @param string $directions
     */
    public function addToDirections($directions)
    {
        $this->directions[] = $directions;

        return $this;
    }

    /**
     * isset directions
     *
     * Directions to the golf facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDirections($index)
    {
        return isset($this->directions[$index]);
    }

    /**
     * unset directions
     *
     * Directions to the golf facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDirections($index)
    {
        unset($this->directions[$index]);
    }

    /**
     * Gets as directions
     *
     * Directions to the golf facility.
     *
     * @return string[]
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * Sets a new directions
     *
     * Directions to the golf facility.
     *
     * @param string[] $directions
     * @return self
     */
    public function setDirections(array $directions)
    {
        $this->directions = $directions;

        return $this;
    }

    /**
     * Gets as features
     *
     * Facility features information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeaturesAType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Facility features information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeaturesAType $features
     * @return self
     */
    public function setFeatures(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeaturesAType $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Adds as courseRestrictions
     *
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRestrictionsAType
     * $courseRestrictions
     */
    public function addToCourseRestrictions(
        \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRestrictionsAType $courseRestrictions
    ) {
        $this->courseRestrictions[] = $courseRestrictions;

        return $this;
    }

    /**
     * isset courseRestrictions
     *
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseRestrictions($index)
    {
        return isset($this->courseRestrictions[$index]);
    }

    /**
     * unset courseRestrictions
     *
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseRestrictions($index)
    {
        unset($this->courseRestrictions[$index]);
    }

    /**
     * Gets as courseRestrictions
     *
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRestrictionsAType[]
     */
    public function getCourseRestrictions()
    {
        return $this->courseRestrictions;
    }

    /**
     * Sets a new courseRestrictions
     *
     * A date and time period when restrictions apply to golf facility tee times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GolfFacilityType\CourseRestrictionsAType[]
     * $courseRestrictions
     * @return self
     */
    public function setCourseRestrictions(array $courseRestrictions)
    {
        $this->courseRestrictions = $courseRestrictions;

        return $this;
    }

    /**
     * Gets as description
     *
     * A short facility description with optional long description and club type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\DescriptionAType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short facility description with optional long description and club type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\DescriptionAType
     * $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\DescriptionAType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as feeStructure
     *
     * General green fee amounts.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeeStructureAType
     * $feeStructure
     */
    public function addToFeeStructure(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeeStructureAType $feeStructure)
    {
        $this->feeStructure[] = $feeStructure;

        return $this;
    }

    /**
     * isset feeStructure
     *
     * General green fee amounts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeeStructure($index)
    {
        return isset($this->feeStructure[$index]);
    }

    /**
     * unset feeStructure
     *
     * General green fee amounts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeeStructure($index)
    {
        unset($this->feeStructure[$index]);
    }

    /**
     * Gets as feeStructure
     *
     * General green fee amounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeeStructureAType[]
     */
    public function getFeeStructure()
    {
        return $this->feeStructure;
    }

    /**
     * Sets a new feeStructure
     *
     * General green fee amounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\FeeStructureAType[]
     * $feeStructure
     * @return self
     */
    public function setFeeStructure(array $feeStructure)
    {
        $this->feeStructure = $feeStructure;

        return $this;
    }

    /**
     * Gets as hoursOfOperation
     *
     * Hours of operation for the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * Sets a new hoursOfOperation
     *
     * Hours of operation for the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType $hoursOfOperation
     * @return self
     */
    public function setHoursOfOperation(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $hoursOfOperation)
    {
        $this->hoursOfOperation = $hoursOfOperation;

        return $this;
    }

    /**
     * Gets as location
     *
     * Address and geocoding information for the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\LocationAType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Address and geocoding information for the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\LocationAType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\LocationAType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as multimedia
     *
     * Images, descriptions and movies that describe the golf facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionType $multimedia
     */
    public function addToMultimedia(\Davispeixoto\OpenTravelAlliance\MultimediaDescriptionType $multimedia)
    {
        $this->multimedia[] = $multimedia;

        return $this;
    }

    /**
     * isset multimedia
     *
     * Images, descriptions and movies that describe the golf facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMultimedia($index)
    {
        return isset($this->multimedia[$index]);
    }

    /**
     * unset multimedia
     *
     * Images, descriptions and movies that describe the golf facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMultimedia($index)
    {
        unset($this->multimedia[$index]);
    }

    /**
     * Gets as multimedia
     *
     * Images, descriptions and movies that describe the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionType[]
     */
    public function getMultimedia()
    {
        return $this->multimedia;
    }

    /**
     * Sets a new multimedia
     *
     * Images, descriptions and movies that describe the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionType[] $multimedia
     * @return self
     */
    public function setMultimedia(array $multimedia)
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    /**
     * Adds as policy
     *
     * Summary golf facility and tee time policies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PolicyAType $policy
     */
    public function addToPolicy(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\PolicyAType $policy)
    {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Summary golf facility and tee time policies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Summary golf facility and tee time policies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Summary golf facility and tee time policies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Summary golf facility and tee time policies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PolicyAType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * Promotions available at the golf facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PromotionAType
     * $promotion
     */
    public function addToPromotion(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\PromotionAType $promotion)
    {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * Promotions available at the golf facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotion($index)
    {
        return isset($this->promotion[$index]);
    }

    /**
     * unset promotion
     *
     * Promotions available at the golf facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotion($index)
    {
        unset($this->promotion[$index]);
    }

    /**
     * Gets as promotion
     *
     * Promotions available at the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * Promotions available at the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Adds as scoreCard
     *
     * Scorecard information for the golf facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ScoreCardAType
     * $scoreCard
     */
    public function addToScoreCard(\Davispeixoto\OpenTravelAlliance\GolfFacilityType\ScoreCardAType $scoreCard)
    {
        $this->scoreCard[] = $scoreCard;

        return $this;
    }

    /**
     * isset scoreCard
     *
     * Scorecard information for the golf facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetScoreCard($index)
    {
        return isset($this->scoreCard[$index]);
    }

    /**
     * unset scoreCard
     *
     * Scorecard information for the golf facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetScoreCard($index)
    {
        unset($this->scoreCard[$index]);
    }

    /**
     * Gets as scoreCard
     *
     * Scorecard information for the golf facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ScoreCardAType[]
     */
    public function getScoreCard()
    {
        return $this->scoreCard;
    }

    /**
     * Sets a new scoreCard
     *
     * Scorecard information for the golf facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType\ScoreCardAType[]
     * $scoreCard
     * @return self
     */
    public function setScoreCard(array $scoreCard)
    {
        $this->scoreCard = $scoreCard;

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

