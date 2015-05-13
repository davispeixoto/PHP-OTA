<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SourceIdentificationType
 *
 * Where details of the package can be found.
 * XSD Type: SourceIdentificationType
 */
class SourceIdentificationType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * E.g. brochure code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * e.g. brochure edition/issue reference.
     *
     * @property string $issue
     */
    private $issue = null;

    /**
     * e.g. page number in the brochure.
     *
     * @property integer $page
     */
    private $page = null;

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
     * Gets as code
     *
     * E.g. brochure code.
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
     * E.g. brochure code.
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
     * Gets as issue
     *
     * e.g. brochure edition/issue reference.
     *
     * @return string
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Sets a new issue
     *
     * e.g. brochure edition/issue reference.
     *
     * @param string $issue
     * @return self
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Gets as page
     *
     * e.g. page number in the brochure.
     *
     * @return integer
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * e.g. page number in the brochure.
     *
     * @param integer $page
     * @return self
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }


}

