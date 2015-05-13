<?php

namespace Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType;

/**
 * Class representing AdditionalContentAType
 */
class AdditionalContentAType
{

    /**
     * When used, the response message will be filtered to return only the content that
     * was requested. Refer to OpenTravel code list Information Type (INF).
     *
     * @property string $contentGroupCode
     */
    private $contentGroupCode = null;

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
     * Gets as contentGroupCode
     *
     * When used, the response message will be filtered to return only the content that
     * was requested. Refer to OpenTravel code list Information Type (INF).
     *
     * @return string
     */
    public function getContentGroupCode()
    {
        return $this->contentGroupCode;
    }

    /**
     * Sets a new contentGroupCode
     *
     * When used, the response message will be filtered to return only the content that
     * was requested. Refer to OpenTravel code list Information Type (INF).
     *
     * @param string $contentGroupCode
     * @return self
     */
    public function setContentGroupCode($contentGroupCode)
    {
        $this->contentGroupCode = $contentGroupCode;

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

