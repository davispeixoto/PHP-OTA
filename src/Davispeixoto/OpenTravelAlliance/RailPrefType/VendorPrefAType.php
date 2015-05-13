<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing VendorPrefAType
 */
class VendorPrefAType
{

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The division name or ID with which the contact is associated.
     *
     * @property string $division
     */
    private $division = null;

    /**
     * The department name or ID with which the contact is associated.
     *
     * @property string $department
     */
    private $department = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * A reference pointer used to identify an rail operator.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as division
     *
     * The division name or ID with which the contact is associated.
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * The division name or ID with which the contact is associated.
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Gets as department
     *
     * The department name or ID with which the contact is associated.
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * The department name or ID with which the contact is associated.
     *
     * @param string $department
     * @return self
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference pointer used to identify an rail operator.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference pointer used to identify an rail operator.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

