<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType;

/**
 * Class representing BookingInstructionAType
 */
class BookingInstructionAType
{

    /**
     * The booking method that should be applied to the offer.
     *
     * @property string $bookingMethod
     */
    private $bookingMethod = null;

    /**
     * A reference to a set of baggage allowance information.
     *
     * @property string $allowanceRPH
     */
    private $allowanceRPH = null;

    /**
     * A reference to a set of service information.
     *
     * @property string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * Special service request information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[] $sSRInfo
     */
    private $sSRInfo = null;

    /**
     * Other service information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIInfo
     */
    private $oSIInfo = null;

    /**
     * Upgrade instruction information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType\UpgradeAType
     * $upgrade
     */
    private $upgrade = null;

    /**
     * Other information related to the booking instruction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TextDescriptionType[] $otherInfo
     */
    private $otherInfo = null;

    /**
     * Gets as bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @return string
     */
    public function getBookingMethod()
    {
        return $this->bookingMethod;
    }

    /**
     * Sets a new bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @param string $bookingMethod
     * @return self
     */
    public function setBookingMethod($bookingMethod)
    {
        $this->bookingMethod = $bookingMethod;

        return $this;
    }

    /**
     * Gets as allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @return string
     */
    public function getAllowanceRPH()
    {
        return $this->allowanceRPH;
    }

    /**
     * Sets a new allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @param string $allowanceRPH
     * @return self
     */
    public function setAllowanceRPH($allowanceRPH)
    {
        $this->allowanceRPH = $allowanceRPH;

        return $this;
    }

    /**
     * Gets as serviceRPH
     *
     * A reference to a set of service information.
     *
     * @return string
     */
    public function getServiceRPH()
    {
        return $this->serviceRPH;
    }

    /**
     * Sets a new serviceRPH
     *
     * A reference to a set of service information.
     *
     * @param string $serviceRPH
     * @return self
     */
    public function setServiceRPH($serviceRPH)
    {
        $this->serviceRPH = $serviceRPH;

        return $this;
    }

    /**
     * Adds as sSRInfo
     *
     * Special service request information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType $sSRInfo
     */
    public function addToSSRInfo(\Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType $sSRInfo)
    {
        $this->sSRInfo[] = $sSRInfo;

        return $this;
    }

    /**
     * isset sSRInfo
     *
     * Special service request information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSSRInfo($index)
    {
        return isset($this->sSRInfo[$index]);
    }

    /**
     * unset sSRInfo
     *
     * Special service request information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSSRInfo($index)
    {
        unset($this->sSRInfo[$index]);
    }

    /**
     * Gets as sSRInfo
     *
     * Special service request information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[]
     */
    public function getSSRInfo()
    {
        return $this->sSRInfo;
    }

    /**
     * Sets a new sSRInfo
     *
     * Special service request information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[] $sSRInfo
     * @return self
     */
    public function setSSRInfo(array $sSRInfo)
    {
        $this->sSRInfo = $sSRInfo;

        return $this;
    }

    /**
     * Adds as oSIInfo
     *
     * Other service information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIInfo
     */
    public function addToOSIInfo(\Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIInfo)
    {
        $this->oSIInfo[] = $oSIInfo;

        return $this;
    }

    /**
     * isset oSIInfo
     *
     * Other service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOSIInfo($index)
    {
        return isset($this->oSIInfo[$index]);
    }

    /**
     * unset oSIInfo
     *
     * Other service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOSIInfo($index)
    {
        unset($this->oSIInfo[$index]);
    }

    /**
     * Gets as oSIInfo
     *
     * Other service information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     */
    public function getOSIInfo()
    {
        return $this->oSIInfo;
    }

    /**
     * Sets a new oSIInfo
     *
     * Other service information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIInfo
     * @return self
     */
    public function setOSIInfo(array $oSIInfo)
    {
        $this->oSIInfo = $oSIInfo;

        return $this;
    }

    /**
     * Gets as upgrade
     *
     * Upgrade instruction information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType\UpgradeAType
     */
    public function getUpgrade()
    {
        return $this->upgrade;
    }

    /**
     * Sets a new upgrade
     *
     * Upgrade instruction information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType\UpgradeAType
     * $upgrade
     * @return self
     */
    public function setUpgrade(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType\UpgradeAType $upgrade
    ) {
        $this->upgrade = $upgrade;

        return $this;
    }

    /**
     * Adds as otherInfo
     *
     * Other information related to the booking instruction.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType $otherInfo
     */
    public function addToOtherInfo(\Davispeixoto\OpenTravelAlliance\TextDescriptionType $otherInfo)
    {
        $this->otherInfo[] = $otherInfo;

        return $this;
    }

    /**
     * isset otherInfo
     *
     * Other information related to the booking instruction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherInfo($index)
    {
        return isset($this->otherInfo[$index]);
    }

    /**
     * unset otherInfo
     *
     * Other information related to the booking instruction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherInfo($index)
    {
        unset($this->otherInfo[$index]);
    }

    /**
     * Gets as otherInfo
     *
     * Other information related to the booking instruction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TextDescriptionType[]
     */
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }

    /**
     * Sets a new otherInfo
     *
     * Other information related to the booking instruction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType[] $otherInfo
     * @return self
     */
    public function setOtherInfo(array $otherInfo)
    {
        $this->otherInfo = $otherInfo;

        return $this;
    }


}

