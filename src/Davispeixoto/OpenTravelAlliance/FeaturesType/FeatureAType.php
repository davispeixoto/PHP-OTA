<?php

namespace Davispeixoto\OpenTravelAlliance\FeaturesType;

/**
 * Class representing FeatureAType
 */
class FeatureAType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Refer to OpenTravel Code List Disability Feature Code (PHY). For any of the
     * codes which apply to a room count, use the GuestRoom\@Quantity. Additionally,
     * GuestRoom\@RoomTypeName may be used to pass the specific room type or you could
     * pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @property string $accessibleCode
     */
    private $accessibleCode = null;

    /**
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @property string $securityCode
     */
    private $securityCode = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in
     * conjunction with AccessibleCode or SecurityCode.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * Denotes the general location of a feature. Refer to OpenTravel Codelist
     * Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Indicates whether this feature is chargeable.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType\ChargeAType
     * $charge
     */
    private $charge = null;

    /**
     * Multimedia information about the feature.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the feature.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as accessibleCode
     *
     * Refer to OpenTravel Code List Disability Feature Code (PHY). For any of the
     * codes which apply to a room count, use the GuestRoom\@Quantity. Additionally,
     * GuestRoom\@RoomTypeName may be used to pass the specific room type or you could
     * pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @return string
     */
    public function getAccessibleCode()
    {
        return $this->accessibleCode;
    }

    /**
     * Sets a new accessibleCode
     *
     * Refer to OpenTravel Code List Disability Feature Code (PHY). For any of the
     * codes which apply to a room count, use the GuestRoom\@Quantity. Additionally,
     * GuestRoom\@RoomTypeName may be used to pass the specific room type or you could
     * pass "all" or "total" to indicate the AccessibleCode applies to the total hotel.
     *
     * @param string $accessibleCode
     * @return self
     */
    public function setAccessibleCode($accessibleCode)
    {
        $this->accessibleCode = $accessibleCode;

        return $this;
    }

    /**
     * Gets as securityCode
     *
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets a new securityCode
     *
     * Refer to OpenTravel Code List Security Feature Code (SEC).
     *
     * @param string $securityCode
     * @return self
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in
     * conjunction with AccessibleCode or SecurityCode.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Codelist Option Type Code (OTC). This is used in
     * conjunction with AccessibleCode or SecurityCode.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes the general location of a feature. Refer to OpenTravel Codelist
     * Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes the general location of a feature. Refer to OpenTravel Codelist
     * Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as charge
     *
     * Indicates whether this feature is chargeable.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType\ChargeAType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Indicates whether this feature is chargeable.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType\ChargeAType
     * $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType\ChargeAType $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the feature.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the feature.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the feature.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the feature.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }


}

