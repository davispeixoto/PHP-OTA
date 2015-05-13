<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DescriptionType
 *
 * An extension of ParagraphType. It is used to pass description information when
 * reference to or from a location may be needed.
 * XSD Type: DescriptionType
 */
class DescriptionType extends ParagraphType
{

    /**
     * An indicator for whether this is a location description.
     *  false
     *
     * @property boolean $location
     */
    private $location = null;

    /**
     * An indicator for whether this is a description TO the location (TRUE is TO the
     * location, else FROM).
     *  true
     *
     * @property boolean $refDirectionTo
     */
    private $refDirectionTo = null;

    /**
     * Gets as location
     *
     * An indicator for whether this is a location description.
     *  false
     *
     * @return boolean
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * An indicator for whether this is a location description.
     *  false
     *
     * @param boolean $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as refDirectionTo
     *
     * An indicator for whether this is a description TO the location (TRUE is TO the
     * location, else FROM).
     *  true
     *
     * @return boolean
     */
    public function getRefDirectionTo()
    {
        return $this->refDirectionTo;
    }

    /**
     * Sets a new refDirectionTo
     *
     * An indicator for whether this is a description TO the location (TRUE is TO the
     * location, else FROM).
     *  true
     *
     * @param boolean $refDirectionTo
     * @return self
     */
    public function setRefDirectionTo($refDirectionTo)
    {
        $this->refDirectionTo = $refDirectionTo;

        return $this;
    }


}

