<?php

namespace Davispeixoto\OpenTravelAlliance\OrganizationType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing OrgMemberNameAType
 */
class OrgMemberNameAType extends PersonNameType
{

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Level in employer organization (e.g. seniority) that conveys privileges.
     *
     * @property string $level
     */
    private $level = null;

    /**
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @property string $title
     */
    private $title = null;

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
     * Gets as level
     *
     * Level in employer organization (e.g. seniority) that conveys privileges.
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * Level in employer organization (e.g. seniority) that conveys privileges.
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Gets as title
     *
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Title of employee in the employer company that conveys rank or privileges.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


}

