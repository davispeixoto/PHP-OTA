<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GolfAmenityType
 *
 * Amentities and services available at the golf course (either included in the
 * price of the tee time or available for an extra fee), such as power carts. Note,
 * includes pricing.
 * XSD Type: GolfAmenityType
 */
class GolfAmenityType
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
     * Optional policy information regarding the amenity, for example Power Cart rental
     * policy.
     *
     * @property string $policyInfo
     */
    private $policyInfo = null;

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
     * The price associated with tee time amenities.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     */
    private $fees = null;

    /**
     * Summary amenity policies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfAmenityType\PolicyAType[] $policy
     */
    private $policy = null;

    /**
     * Guarantee payment information (if required) for golf amenity reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee
     */
    private $paymentGuarantee = null;

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
     * Gets as policyInfo
     *
     * Optional policy information regarding the amenity, for example Power Cart rental
     * policy.
     *
     * @return string
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Optional policy information regarding the amenity, for example Power Cart rental
     * policy.
     *
     * @param string $policyInfo
     * @return self
     */
    public function setPolicyInfo($policyInfo)
    {
        $this->policyInfo = $policyInfo;

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

    /**
     * Adds as fee
     *
     * The price associated with tee time amenities.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * The price associated with tee time amenities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * The price associated with tee time amenities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * The price associated with tee time amenities.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * The price associated with tee time amenities.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Adds as policy
     *
     * Summary amenity policies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenityType\PolicyAType $policy
     */
    public function addToPolicy(\Davispeixoto\OpenTravelAlliance\GolfAmenityType\PolicyAType $policy)
    {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Summary amenity policies.
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
     * Summary amenity policies.
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
     * Summary amenity policies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAmenityType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Summary amenity policies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenityType\PolicyAType[] $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Gets as paymentGuarantee
     *
     * Guarantee payment information (if required) for golf amenity reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType
     */
    public function getPaymentGuarantee()
    {
        return $this->paymentGuarantee;
    }

    /**
     * Sets a new paymentGuarantee
     *
     * Guarantee payment information (if required) for golf amenity reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee
     * @return self
     */
    public function setPaymentGuarantee(\Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentGuarantee)
    {
        $this->paymentGuarantee = $paymentGuarantee;

        return $this;
    }


}

