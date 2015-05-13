<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AncillaryServiceDetailType
 *
 * Detailed information about an ancillary item component, including name,
 * descriptions, pricing and multimedia.
 * XSD Type: AncillaryServiceDetailType
 */
class AncillaryServiceDetailType extends AirAncillaryServiceType
{

    /**
     * The name of the ancillary item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A short description of the ancillary item.
     *
     * @property string $shortDescription
     */
    private $shortDescription = null;

    /**
     * A detailed description of the ancillary item.
     *
     * @property string $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as name
     *
     * The name of the ancillary item.
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
     * The name of the ancillary item.
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
     * Gets as shortDescription
     *
     * A short description of the ancillary item.
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description of the ancillary item.
     *
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Gets as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param string $longDescription
     * @return self
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }


}

