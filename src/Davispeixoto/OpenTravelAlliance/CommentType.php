<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CommentType
 *
 * Comment information that's associated with a reservation.
 * XSD Type: CommentType
 */
class CommentType
{

    /**
     * Name MAY define the information that is being sent in the Text element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Text MUST contain textual information regarding the cancellation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TextType $text
     */
    private $text = null;

    /**
     * Gets as name
     *
     * Name MAY define the information that is being sent in the Text element.
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
     * Name MAY define the information that is being sent in the Text element.
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
     * Text MUST contain textual information regarding the cancellation.
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
     * Text MUST contain textual information regarding the cancellation.
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

