<?php

namespace Davispeixoto\OpenTravelAlliance\CategoryCodesType;

/**
 * Class representing LocationCategoryAType
 */
class LocationCategoryAType
{

    /**
     * This defines the location of the hotel (e.g. downtown, airport or suburban,
     * etc.). Refer to OpenTravel Code List Location Category Codes (LOC).
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
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * Gets as code
     *
     * This defines the location of the hotel (e.g. downtown, airport or suburban,
     * etc.). Refer to OpenTravel Code List Location Category Codes (LOC).
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
     * This defines the location of the hotel (e.g. downtown, airport or suburban,
     * etc.). Refer to OpenTravel Code List Location Category Codes (LOC).
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

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }


}

