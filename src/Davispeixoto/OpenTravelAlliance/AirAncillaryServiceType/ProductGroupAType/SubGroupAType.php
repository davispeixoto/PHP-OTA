<?php

namespace Davispeixoto\OpenTravelAlliance\AirAncillaryServiceType\ProductGroupAType;

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


}

