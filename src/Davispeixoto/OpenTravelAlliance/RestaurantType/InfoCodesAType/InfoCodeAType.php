<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType;

/**
 * Class representing InfoCodeAType
 */
class InfoCodeAType
{

    /**
     * This name refers to an OpenTravel Code List table (e.g.
     * RestaurantCategoryCode/InfoCode). The actual code is passed in the Code
     * attribute.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Refer to OpenTravel Code List Restaurant Category (RES).
     *
     * @property string $code
     */
    private $code = null;

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
     * Gets as name
     *
     * This name refers to an OpenTravel Code List table (e.g.
     * RestaurantCategoryCode/InfoCode). The actual code is passed in the Code
     * attribute.
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
     * This name refers to an OpenTravel Code List table (e.g.
     * RestaurantCategoryCode/InfoCode). The actual code is passed in the Code
     * attribute.
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
     * Gets as code
     *
     * Refer to OpenTravel Code List Restaurant Category (RES).
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
     * Refer to OpenTravel Code List Restaurant Category (RES).
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


}

