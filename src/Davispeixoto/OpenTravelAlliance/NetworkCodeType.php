<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing NetworkCodeType
 *
 * Defines a network code of a train operator as defined by International Union of
 * Railways (UIC.)
 * XSD Type: NetworkCodeType
 */
class NetworkCodeType
{

    /**
     * Code used to identify a Train Operator.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as International Union of
     * Railways (UIC.)
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Gets as code
     *
     * Code used to identify a Train Operator.
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
     * Code used to identify a Train Operator.
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
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as International Union of
     * Railways (UIC.)
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as International Union of
     * Railways (UIC.)
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }


}

