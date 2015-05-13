<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing OtherAType
 */
class OtherAType
{

    /**
     * Code.Example: 123, ABC123Note: Codes may represent any item, for example, type
     * of traveler, service code, room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Code source.Example: OpenTravelNote: This is a named source that created, owns
     * or manages the code(s).
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * URI.Example: http://www.opentravel.orgNote: This is a URI to additional
     * information about the code or the code source.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The maximum number provided subject to guests in the room.
     *
     * @property integer $maxNumberProvided
     */
    private $maxNumberProvided = null;

    /**
     * Descriptive information for the value add inclusion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as code
     *
     * Code.Example: 123, ABC123Note: Codes may represent any item, for example, type
     * of traveler, service code, room amenity, etc.
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
     * Code.Example: 123, ABC123Note: Codes may represent any item, for example, type
     * of traveler, service code, room amenity, etc.
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
     * Code source.Example: OpenTravelNote: This is a named source that created, owns
     * or manages the code(s).
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
     * Code source.Example: OpenTravelNote: This is a named source that created, owns
     * or manages the code(s).
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * URI.Example: http://www.opentravel.orgNote: This is a URI to additional
     * information about the code or the code source.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * URI.Example: http://www.opentravel.orgNote: This is a URI to additional
     * information about the code or the code source.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

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
     * Gets as maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @return integer
     */
    public function getMaxNumberProvided()
    {
        return $this->maxNumberProvided;
    }

    /**
     * Sets a new maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @param integer $maxNumberProvided
     * @return self
     */
    public function setMaxNumberProvided($maxNumberProvided)
    {
        $this->maxNumberProvided = $maxNumberProvided;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information for the value add inclusion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information for the value add inclusion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }


}

