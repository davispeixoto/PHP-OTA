<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType;

use Davispeixoto\OpenTravelAlliance\SpecialServiceType;

/**
 * Class representing SpecialServiceAType
 */
class SpecialServiceAType extends SpecialServiceType
{

    /**
     * Specifies the description of a special service.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * If true, a date (or date/time) needs to be provided to indicate when the special
     * service should be delivered.
     *
     * @property boolean $serviceDateRequiredInd
     */
    private $serviceDateRequiredInd = null;

    /**
     * If true, the number of years pertaining to the event needs to be provided (e.g.,
     * the number of anniversary years, the age for a birthday).
     *
     * @property boolean $nbrOfYearsRequiredInd
     */
    private $nbrOfYearsRequiredInd = null;

    /**
     * The minimum number of guests required for this type of service.
     *
     * @property integer $minGuestsRequired
     */
    private $minGuestsRequired = null;

    /**
     * If true, a remark is required by the user when selecting a special service.
     *
     * @property boolean $userRemarkRequiredInd
     */
    private $userRemarkRequiredInd = null;

    /**
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType\PriceInfoAType[]
     * $priceInfo
     */
    private $priceInfo = null;

    /**
     * Gets as description
     *
     * Specifies the description of a special service.
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
     * Specifies the description of a special service.
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
     * Gets as status
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as serviceDateRequiredInd
     *
     * If true, a date (or date/time) needs to be provided to indicate when the special
     * service should be delivered.
     *
     * @return boolean
     */
    public function getServiceDateRequiredInd()
    {
        return $this->serviceDateRequiredInd;
    }

    /**
     * Sets a new serviceDateRequiredInd
     *
     * If true, a date (or date/time) needs to be provided to indicate when the special
     * service should be delivered.
     *
     * @param boolean $serviceDateRequiredInd
     * @return self
     */
    public function setServiceDateRequiredInd($serviceDateRequiredInd)
    {
        $this->serviceDateRequiredInd = $serviceDateRequiredInd;

        return $this;
    }

    /**
     * Gets as nbrOfYearsRequiredInd
     *
     * If true, the number of years pertaining to the event needs to be provided (e.g.,
     * the number of anniversary years, the age for a birthday).
     *
     * @return boolean
     */
    public function getNbrOfYearsRequiredInd()
    {
        return $this->nbrOfYearsRequiredInd;
    }

    /**
     * Sets a new nbrOfYearsRequiredInd
     *
     * If true, the number of years pertaining to the event needs to be provided (e.g.,
     * the number of anniversary years, the age for a birthday).
     *
     * @param boolean $nbrOfYearsRequiredInd
     * @return self
     */
    public function setNbrOfYearsRequiredInd($nbrOfYearsRequiredInd)
    {
        $this->nbrOfYearsRequiredInd = $nbrOfYearsRequiredInd;

        return $this;
    }

    /**
     * Gets as minGuestsRequired
     *
     * The minimum number of guests required for this type of service.
     *
     * @return integer
     */
    public function getMinGuestsRequired()
    {
        return $this->minGuestsRequired;
    }

    /**
     * Sets a new minGuestsRequired
     *
     * The minimum number of guests required for this type of service.
     *
     * @param integer $minGuestsRequired
     * @return self
     */
    public function setMinGuestsRequired($minGuestsRequired)
    {
        $this->minGuestsRequired = $minGuestsRequired;

        return $this;
    }

    /**
     * Gets as userRemarkRequiredInd
     *
     * If true, a remark is required by the user when selecting a special service.
     *
     * @return boolean
     */
    public function getUserRemarkRequiredInd()
    {
        return $this->userRemarkRequiredInd;
    }

    /**
     * Sets a new userRemarkRequiredInd
     *
     * If true, a remark is required by the user when selecting a special service.
     *
     * @param boolean $userRemarkRequiredInd
     * @return self
     */
    public function setUserRemarkRequiredInd($userRemarkRequiredInd)
    {
        $this->userRemarkRequiredInd = $userRemarkRequiredInd;

        return $this;
    }

    /**
     * Adds as priceInfo
     *
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfo[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfo
     *
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfo($index)
    {
        return isset($this->priceInfo[$index]);
    }

    /**
     * unset priceInfo
     *
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfo($index)
    {
        unset($this->priceInfo[$index]);
    }

    /**
     * Gets as priceInfo
     *
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType\PriceInfoAType[]
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Information regarding pricing for special services when there is an associated
     * cost.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType\PriceInfoAType[]
     * $priceInfo
     * @return self
     */
    public function setPriceInfo(array $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }


}

