<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GolfAmenitySummaryType
 *
 * Amentities and services requested and or available at the golf facility. Note,
 * no pricing or policy information is included.
 * XSD Type: GolfAmenitySummaryType
 */
class GolfAmenitySummaryType
{

    /**
     * A unique ID for this amenity.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * A code for the amenity.
     *
     * @property string $amenityCode
     */
    private $amenityCode = null;

    /**
     * The name of the amenity.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The amenity description.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * How the amenity is priced, such as per person or per amenity.
     *
     * @property string $pricingType
     */
    private $pricingType = null;

    /**
     * If TRUE, this amenity is included with the tee time purchase.
     *
     * @property boolean $includedInTeeTimePriceInd
     */
    private $includedInTeeTimePriceInd = null;

    /**
     * If TRUE, this amenity may be reserved.
     *
     * @property boolean $reservableInd
     */
    private $reservableInd = null;

    /**
     * A string of numeric values that represent requested and/or available
     * amenities.(Developer Notes) An amenity mask may be used for systems that
     * exchange amenity information in a sequential string format. For example, in a 20
     * character amenity string, if the fourth position represents free lunch and the
     * tenth position represents a golf cart, the string would look like this:
     * 00010000010000000000
     *
     * @property string $sequentialMask
     */
    private $sequentialMask = null;

    /**
     * Gets as iD
     *
     * A unique ID for this amenity.
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
     * A unique ID for this amenity.
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
     * Gets as amenityCode
     *
     * A code for the amenity.
     *
     * @return string
     */
    public function getAmenityCode()
    {
        return $this->amenityCode;
    }

    /**
     * Sets a new amenityCode
     *
     * A code for the amenity.
     *
     * @param string $amenityCode
     * @return self
     */
    public function setAmenityCode($amenityCode)
    {
        $this->amenityCode = $amenityCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the amenity.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the amenity.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as description
     *
     * The amenity description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The amenity description.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as pricingType
     *
     * How the amenity is priced, such as per person or per amenity.
     *
     * @return string
     */
    public function getPricingType()
    {
        return $this->pricingType;
    }

    /**
     * Sets a new pricingType
     *
     * How the amenity is priced, such as per person or per amenity.
     *
     * @param string $pricingType
     * @return self
     */
    public function setPricingType($pricingType)
    {
        $this->pricingType = $pricingType;

        return $this;
    }

    /**
     * Gets as includedInTeeTimePriceInd
     *
     * If TRUE, this amenity is included with the tee time purchase.
     *
     * @return boolean
     */
    public function getIncludedInTeeTimePriceInd()
    {
        return $this->includedInTeeTimePriceInd;
    }

    /**
     * Sets a new includedInTeeTimePriceInd
     *
     * If TRUE, this amenity is included with the tee time purchase.
     *
     * @param boolean $includedInTeeTimePriceInd
     * @return self
     */
    public function setIncludedInTeeTimePriceInd($includedInTeeTimePriceInd)
    {
        $this->includedInTeeTimePriceInd = $includedInTeeTimePriceInd;

        return $this;
    }

    /**
     * Gets as reservableInd
     *
     * If TRUE, this amenity may be reserved.
     *
     * @return boolean
     */
    public function getReservableInd()
    {
        return $this->reservableInd;
    }

    /**
     * Sets a new reservableInd
     *
     * If TRUE, this amenity may be reserved.
     *
     * @param boolean $reservableInd
     * @return self
     */
    public function setReservableInd($reservableInd)
    {
        $this->reservableInd = $reservableInd;

        return $this;
    }

    /**
     * Gets as sequentialMask
     *
     * A string of numeric values that represent requested and/or available
     * amenities.(Developer Notes) An amenity mask may be used for systems that
     * exchange amenity information in a sequential string format. For example, in a 20
     * character amenity string, if the fourth position represents free lunch and the
     * tenth position represents a golf cart, the string would look like this:
     * 00010000010000000000
     *
     * @return string
     */
    public function getSequentialMask()
    {
        return $this->sequentialMask;
    }

    /**
     * Sets a new sequentialMask
     *
     * A string of numeric values that represent requested and/or available
     * amenities.(Developer Notes) An amenity mask may be used for systems that
     * exchange amenity information in a sequential string format. For example, in a 20
     * character amenity string, if the fourth position represents free lunch and the
     * tenth position represents a golf cart, the string would look like this:
     * 00010000010000000000
     *
     * @param string $sequentialMask
     * @return self
     */
    public function setSequentialMask($sequentialMask)
    {
        $this->sequentialMask = $sequentialMask;

        return $this;
    }


}

