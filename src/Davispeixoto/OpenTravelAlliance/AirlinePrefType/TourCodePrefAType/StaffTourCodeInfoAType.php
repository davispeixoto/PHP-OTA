<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType;

/**
 * Class representing StaffTourCodeInfoAType
 */
class StaffTourCodeInfoAType
{

    /**
     * Defines the type of staff covered by the TourCode.
     *
     * @property string $staffType
     */
    private $staffType = null;

    /**
     * Identifier of the staff member.
     *
     * @property string $employeeID
     */
    private $employeeID = null;

    /**
     * The airline to which the EmployeeID is associated.
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Description of the staff tour code.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as staffType
     *
     * Defines the type of staff covered by the TourCode.
     *
     * @return string
     */
    public function getStaffType()
    {
        return $this->staffType;
    }

    /**
     * Sets a new staffType
     *
     * Defines the type of staff covered by the TourCode.
     *
     * @param string $staffType
     * @return self
     */
    public function setStaffType($staffType)
    {
        $this->staffType = $staffType;

        return $this;
    }

    /**
     * Gets as employeeID
     *
     * Identifier of the staff member.
     *
     * @return string
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * Sets a new employeeID
     *
     * Identifier of the staff member.
     *
     * @param string $employeeID
     * @return self
     */
    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;

        return $this;
    }

    /**
     * Gets as vendorCode
     *
     * The airline to which the EmployeeID is associated.
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * The airline to which the EmployeeID is associated.
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the staff tour code.
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
     * Description of the staff tour code.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

