<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomDescriptionType
 *
 * Guest room information, including name and a description.
 * XSD Type: RoomDescriptionType
 */
class RoomDescriptionType
{

    /**
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The Text element MUST provide textual information regarding the description of
     * the room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TextType $text
     */
    private $text = null;

    /**
     * Gets as name
     *
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
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
     * The Name MAY be used to identify the type of information sent in the Text
     * element.
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
     * Gets as text
     *
     * The Text element MUST provide textual information regarding the description of
     * the room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TextType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The Text element MUST provide textual information regarding the description of
     * the room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TextType $text
     * @return self
     */
    public function setText(\Davispeixoto\OpenTravelAlliance\TextType $text)
    {
        $this->text = $text;

        return $this;
    }


}

