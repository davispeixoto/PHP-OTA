<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EmployeeInfoType
 *
 * Employment identification; using an employee ID number, title, level within the
 * company, and an indication of their status (e.g., active, retired, on leave, or
 * terminated from employment). Additional information about an employee can be
 * entered into the element, including the name of the employee, if it differs from
 * the person name identified as a customer or contact.
 * XSD Type: EmployeeInfoType
 */
class EmployeeInfoType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Identifier assigned to the employee.
     *
     * @property string $employeeId
     */
    private $employeeId = null;

    /**
     * Level in employer organization (e.g. seniority) that coveys privileges.
     *
     * @property string $employeeLevel
     */
    private $employeeLevel = null;

    /**
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @property string $employeeTitle
     */
    private $employeeTitle = null;

    /**
     * Status of employment. Refer to OpenTravel Code List Employee Status (EMP).
     *
     * @property string $employeeStatus
     */
    private $employeeStatus = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as employeeId
     *
     * Identifier assigned to the employee.
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Sets a new employeeId
     *
     * Identifier assigned to the employee.
     *
     * @param string $employeeId
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Gets as employeeLevel
     *
     * Level in employer organization (e.g. seniority) that coveys privileges.
     *
     * @return string
     */
    public function getEmployeeLevel()
    {
        return $this->employeeLevel;
    }

    /**
     * Sets a new employeeLevel
     *
     * Level in employer organization (e.g. seniority) that coveys privileges.
     *
     * @param string $employeeLevel
     * @return self
     */
    public function setEmployeeLevel($employeeLevel)
    {
        $this->employeeLevel = $employeeLevel;

        return $this;
    }

    /**
     * Gets as employeeTitle
     *
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @return string
     */
    public function getEmployeeTitle()
    {
        return $this->employeeTitle;
    }

    /**
     * Sets a new employeeTitle
     *
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @param string $employeeTitle
     * @return self
     */
    public function setEmployeeTitle($employeeTitle)
    {
        $this->employeeTitle = $employeeTitle;

        return $this;
    }

    /**
     * Gets as employeeStatus
     *
     * Status of employment. Refer to OpenTravel Code List Employee Status (EMP).
     *
     * @return string
     */
    public function getEmployeeStatus()
    {
        return $this->employeeStatus;
    }

    /**
     * Sets a new employeeStatus
     *
     * Status of employment. Refer to OpenTravel Code List Employee Status (EMP).
     *
     * @param string $employeeStatus
     * @return self
     */
    public function setEmployeeStatus($employeeStatus)
    {
        $this->employeeStatus = $employeeStatus;

        return $this;
    }


}

