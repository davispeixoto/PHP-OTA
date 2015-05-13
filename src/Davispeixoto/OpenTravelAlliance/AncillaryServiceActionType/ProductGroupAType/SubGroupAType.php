<?php

namespace Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType;

/**
 * Class representing SubGroupAType
 */
class SubGroupAType
{

    /**
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @property string $codeSource
     */
    private $codeSource = null;

    /**
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @property string $additionalCode
     */
    private $additionalCode = null;

    /**
     * A description of the sub-group code.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * A unique ID for this product sub-group that is referenced elsewhere in this
     * schema.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * An indicator if the product group is required and/or should be included or
     * excluded from the offer results.
     *
     * @property string $resultsAction
     */
    private $resultsAction = null;

    /**
     * Gets as codeSource
     *
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @return string
     */
    public function getCodeSource()
    {
        return $this->codeSource;
    }

    /**
     * Sets a new codeSource
     *
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @param string $codeSource
     * @return self
     */
    public function setCodeSource($codeSource)
    {
        $this->codeSource = $codeSource;

        return $this;
    }

    /**
     * Gets as code
     *
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
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
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
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
     * Gets as additionalCode
     *
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @return string
     */
    public function getAdditionalCode()
    {
        return $this->additionalCode;
    }

    /**
     * Sets a new additionalCode
     *
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @param string $additionalCode
     * @return self
     */
    public function setAdditionalCode($additionalCode)
    {
        $this->additionalCode = $additionalCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the sub-group code.
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
     * A description of the sub-group code.
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
     * Gets as rPH
     *
     * A unique ID for this product sub-group that is referenced elsewhere in this
     * schema.
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
     * A unique ID for this product sub-group that is referenced elsewhere in this
     * schema.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as resultsAction
     *
     * An indicator if the product group is required and/or should be included or
     * excluded from the offer results.
     *
     * @return string
     */
    public function getResultsAction()
    {
        return $this->resultsAction;
    }

    /**
     * Sets a new resultsAction
     *
     * An indicator if the product group is required and/or should be included or
     * excluded from the offer results.
     *
     * @param string $resultsAction
     * @return self
     */
    public function setResultsAction($resultsAction)
    {
        $this->resultsAction = $resultsAction;

        return $this;
    }


}

