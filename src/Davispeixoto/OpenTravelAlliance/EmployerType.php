<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EmployerType
 *
 * Company or organization that employs the customer.
 * XSD Type: EmployerType
 */
class EmployerType
{

    /**
     * When true, indicates a default value should be used.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

    /**
     * Indicates main office, field office, or division of the organization.
     *
     * @property string $officeType
     */
    private $officeType = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * The name of the company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * The name of a company affiliated with the employer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $relatedEmployer
     */
    private $relatedEmployer = null;

    /**
     * Information about the employee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = null;

    /**
     * Accounting code(s) assigned to travel for employer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $internalRefNmbr
     */
    private $internalRefNmbr = null;

    /**
     * Information on the organization responsible for arranging travel for the
     * employer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = null;

    /**
     * Employer's loyalty program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[] $loyaltyProgram
     */
    private $loyaltyProgram = null;

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return boolean
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param boolean $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;

        return $this;
    }

    /**
     * Gets as officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @return string
     */
    public function getOfficeType()
    {
        return $this->officeType;
    }

    /**
     * Sets a new officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @param string $officeType
     * @return self
     */
    public function setOfficeType($officeType)
    {
        $this->officeType = $officeType;

        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * The name of the company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The name of the company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Adds as relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $relatedEmployer
     */
    public function addToRelatedEmployer(\Davispeixoto\OpenTravelAlliance\CompanyNameType $relatedEmployer)
    {
        $this->relatedEmployer[] = $relatedEmployer;

        return $this;
    }

    /**
     * isset relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelatedEmployer($index)
    {
        return isset($this->relatedEmployer[$index]);
    }

    /**
     * unset relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelatedEmployer($index)
    {
        unset($this->relatedEmployer[$index]);
    }

    /**
     * Gets as relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getRelatedEmployer()
    {
        return $this->relatedEmployer;
    }

    /**
     * Sets a new relatedEmployer
     *
     * The name of a company affiliated with the employer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $relatedEmployer
     * @return self
     */
    public function setRelatedEmployer(array $relatedEmployer)
    {
        $this->relatedEmployer = $relatedEmployer;

        return $this;
    }

    /**
     * Adds as employeeInfo
     *
     * Information about the employee.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeInfo
     */
    public function addToEmployeeInfo(\Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeInfo)
    {
        $this->employeeInfo[] = $employeeInfo;

        return $this;
    }

    /**
     * isset employeeInfo
     *
     * Information about the employee.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmployeeInfo($index)
    {
        return isset($this->employeeInfo[$index]);
    }

    /**
     * unset employeeInfo
     *
     * Information about the employee.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmployeeInfo($index)
    {
        unset($this->employeeInfo[$index]);
    }

    /**
     * Gets as employeeInfo
     *
     * Information about the employee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[]
     */
    public function getEmployeeInfo()
    {
        return $this->employeeInfo;
    }

    /**
     * Sets a new employeeInfo
     *
     * Information about the employee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[] $employeeInfo
     * @return self
     */
    public function setEmployeeInfo(array $employeeInfo)
    {
        $this->employeeInfo = $employeeInfo;

        return $this;
    }

    /**
     * Adds as internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $internalRefNmbr
     */
    public function addToInternalRefNmbr(\Davispeixoto\OpenTravelAlliance\FreeTextType $internalRefNmbr)
    {
        $this->internalRefNmbr[] = $internalRefNmbr;

        return $this;
    }

    /**
     * isset internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInternalRefNmbr($index)
    {
        return isset($this->internalRefNmbr[$index]);
    }

    /**
     * unset internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInternalRefNmbr($index)
    {
        unset($this->internalRefNmbr[$index]);
    }

    /**
     * Gets as internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getInternalRefNmbr()
    {
        return $this->internalRefNmbr;
    }

    /**
     * Sets a new internalRefNmbr
     *
     * Accounting code(s) assigned to travel for employer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $internalRefNmbr
     * @return self
     */
    public function setInternalRefNmbr(array $internalRefNmbr)
    {
        $this->internalRefNmbr = $internalRefNmbr;

        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel for the
     * employer.
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
     * Information on the organization responsible for arranging travel for the
     * employer.
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
     * Information on the organization responsible for arranging travel for the
     * employer.
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
     * Information on the organization responsible for arranging travel for the
     * employer.
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
     * Information on the organization responsible for arranging travel for the
     * employer.
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
     * Adds as loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Davispeixoto\OpenTravelAlliance\LoyaltyProgramType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;

        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Employer's loyalty program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyProgramType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;

        return $this;
    }


}

