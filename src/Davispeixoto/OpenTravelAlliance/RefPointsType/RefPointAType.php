<?php

namespace Davispeixoto\OpenTravelAlliance\RefPointsType;

use Davispeixoto\OpenTravelAlliance\RelativePositionType;

/**
 * Class representing RefPointAType
 */
class RefPointAType extends RelativePositionType
{

    /**
     * The code for the type of reference point in the proximity of the hotel facility.
     * Refer to OpenTravel Code List Reference Point Category Code (REF).
     *
     * @property string $refPointCategoryCode
     */
    private $refPointCategoryCode = null;

    /**
     * This may be used to indicate the proximity (e.g., closest, second closest)
     * between the reference point and the hotel. This may be used in conjunction with
     * RefPointCategoryCode.
     *
     * @property string $proximity
     */
    private $proximity = null;

    /**
     * A city code.
     *
     * @property string $cityCode
     */
    private $cityCode = null;

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
     * The name of the reference point.
     *
     * @property string $refPointName
     */
    private $refPointName = null;

    /**
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @property string $latitude
     */
    private $latitude = null;

    /**
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @property string $longitude
     */
    private $longitude = null;

    /**
     * The height of an item, typically above sea level.
     *
     * @property string $altitude
     */
    private $altitude = null;

    /**
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $altitudeUnitOfMeasureCode
     */
    private $altitudeUnitOfMeasureCode = null;

    /**
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @property string $positionAccuracyCode
     */
    private $positionAccuracyCode = null;

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * This attribute is used to explicitly define whether the reference point applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with RefPointCategoryCode.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * The state or province in which the reference point is located.
     *
     * @property string $stateProv
     */
    private $stateProv = null;

    /**
     * The country in which the reference point is located.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * Multimedia information about the reference point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the reference point.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as refPointCategoryCode
     *
     * The code for the type of reference point in the proximity of the hotel facility.
     * Refer to OpenTravel Code List Reference Point Category Code (REF).
     *
     * @return string
     */
    public function getRefPointCategoryCode()
    {
        return $this->refPointCategoryCode;
    }

    /**
     * Sets a new refPointCategoryCode
     *
     * The code for the type of reference point in the proximity of the hotel facility.
     * Refer to OpenTravel Code List Reference Point Category Code (REF).
     *
     * @param string $refPointCategoryCode
     * @return self
     */
    public function setRefPointCategoryCode($refPointCategoryCode)
    {
        $this->refPointCategoryCode = $refPointCategoryCode;

        return $this;
    }

    /**
     * Gets as proximity
     *
     * This may be used to indicate the proximity (e.g., closest, second closest)
     * between the reference point and the hotel. This may be used in conjunction with
     * RefPointCategoryCode.
     *
     * @return string
     */
    public function getProximity()
    {
        return $this->proximity;
    }

    /**
     * Sets a new proximity
     *
     * This may be used to indicate the proximity (e.g., closest, second closest)
     * between the reference point and the hotel. This may be used in conjunction with
     * RefPointCategoryCode.
     *
     * @param string $proximity
     * @return self
     */
    public function setProximity($proximity)
    {
        $this->proximity = $proximity;

        return $this;
    }

    /**
     * Gets as cityCode
     *
     * A city code.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Sets a new cityCode
     *
     * A city code.
     *
     * @param string $cityCode
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;

        return $this;
    }

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
     * Gets as refPointName
     *
     * The name of the reference point.
     *
     * @return string
     */
    public function getRefPointName()
    {
        return $this->refPointName;
    }

    /**
     * Sets a new refPointName
     *
     * The name of the reference point.
     *
     * @param string $refPointName
     * @return self
     */
    public function setRefPointName($refPointName)
    {
        $this->refPointName = $refPointName;

        return $this;
    }

    /**
     * Gets as latitude
     *
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Gets as longitude
     *
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * The measure of the angular distance on a meridian east or west of the prime
     * meridian.
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Gets as altitude
     *
     * The height of an item, typically above sea level.
     *
     * @return string
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Sets a new altitude
     *
     * The height of an item, typically above sea level.
     *
     * @param string $altitude
     * @return self
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Gets as altitudeUnitOfMeasureCode
     *
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getAltitudeUnitOfMeasureCode()
    {
        return $this->altitudeUnitOfMeasureCode;
    }

    /**
     * Sets a new altitudeUnitOfMeasureCode
     *
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles,
     * kilometers). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $altitudeUnitOfMeasureCode
     * @return self
     */
    public function setAltitudeUnitOfMeasureCode($altitudeUnitOfMeasureCode)
    {
        $this->altitudeUnitOfMeasureCode = $altitudeUnitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as positionAccuracyCode
     *
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @return string
     */
    public function getPositionAccuracyCode()
    {
        return $this->positionAccuracyCode;
    }

    /**
     * Sets a new positionAccuracyCode
     *
     * Indicates the accuracy of the property's geo-coding, since the property's
     * longitude and latitude may not always be exact. Refer to OpenTravel Code List
     * Position Accuracy Code (PAC).
     *
     * @param string $positionAccuracyCode
     * @return self
     */
    public function setPositionAccuracyCode($positionAccuracyCode)
    {
        $this->positionAccuracyCode = $positionAccuracyCode;

        return $this;
    }

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the reference point applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with RefPointCategoryCode.
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
     * This attribute is used to explicitly define whether the reference point applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with RefPointCategoryCode.
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
     * Gets as stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @return string
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @param string $stateProv
     * @return self
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country in which the reference point is located.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country in which the reference point is located.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

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
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param integer $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the reference point.
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
     * Multimedia information about the reference point.
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
     * Descriptive text that describes the reference point.
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
     * Descriptive text that describes the reference point.
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

