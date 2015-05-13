<?php

namespace Davispeixoto\OpenTravelAlliance\BookingReferenceType;

/**
 * Class representing UniqueIDTypeAType
 */
class UniqueIDTypeAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.It is strongly recommended that you submit a
     * comment to have any of your extended list values permanently added to the
     * OpenTravel specification to support maximum trading partner interoperability.
     * http://www.opentraveldevelopersnetwork.com/specificationcomments/2/entercomment.html
     *
     * @property string $extension
     */
    private $extension = null;

    /**
     * Used to identify the source of the identifier.
     *
     * @property string $iDContext
     */
    private $iDContext = null;

    /**
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @property string $uRL
     */
    private $uRL = null;

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
     * Gets as extension
     *
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.It is strongly recommended that you submit a
     * comment to have any of your extended list values permanently added to the
     * OpenTravel specification to support maximum trading partner interoperability.
     * http://www.opentraveldevelopersnetwork.com/specificationcomments/2/entercomment.html
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * A string value that represents an "Other_", or extended, enumerated value agreed
     * upon between trading partners.It is strongly recommended that you submit a
     * comment to have any of your extended list values permanently added to the
     * OpenTravel specification to support maximum trading partner interoperability.
     * http://www.opentraveldevelopersnetwork.com/specificationcomments/2/entercomment.html
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Gets as iDContext
     *
     * Used to identify the source of the identifier.
     *
     * @return string
     */
    public function getIDContext()
    {
        return $this->iDContext;
    }

    /**
     * Sets a new iDContext
     *
     * Used to identify the source of the identifier.
     *
     * @param string $iDContext
     * @return self
     */
    public function setIDContext($iDContext)
    {
        $this->iDContext = $iDContext;

        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL that identifies the location associated with the record identified by the
     * UniqueID.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }


}

