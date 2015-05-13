<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType;

/**
 * Class representing RoomBlocksAType
 */
class RoomBlocksAType
{

    /**
     * The total number of room blocks for this event at this property (i.e., sub
     * blocks plus primary room block).
     *
     * @property integer $totalBlockQuantity
     */
    private $totalBlockQuantity = null;

    /**
     * Information pertaining to a room block for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[]
     * $roomBlock
     */
    private $roomBlock = null;

    /**
     * A collection of comments pertaining to the stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as totalBlockQuantity
     *
     * The total number of room blocks for this event at this property (i.e., sub
     * blocks plus primary room block).
     *
     * @return integer
     */
    public function getTotalBlockQuantity()
    {
        return $this->totalBlockQuantity;
    }

    /**
     * Sets a new totalBlockQuantity
     *
     * The total number of room blocks for this event at this property (i.e., sub
     * blocks plus primary room block).
     *
     * @param integer $totalBlockQuantity
     * @return self
     */
    public function setTotalBlockQuantity($totalBlockQuantity)
    {
        $this->totalBlockQuantity = $totalBlockQuantity;

        return $this;
    }

    /**
     * Adds as roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType
     * $roomBlock
     */
    public function addToRoomBlock(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType $roomBlock
    ) {
        $this->roomBlock[] = $roomBlock;

        return $this;
    }

    /**
     * isset roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomBlock($index)
    {
        return isset($this->roomBlock[$index]);
    }

    /**
     * unset roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomBlock($index)
    {
        unset($this->roomBlock[$index]);
    }

    /**
     * Gets as roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[]
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[]
     * $roomBlock
     * @return self
     */
    public function setRoomBlock(array $roomBlock)
    {
        $this->roomBlock = $roomBlock;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the stay.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to the stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to the stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to the stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to the stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

