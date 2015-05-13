<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing ContentInfosAType
 */
class ContentInfosAType
{

    /**
     * Used for requesting specific content information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[]
     * $contentInfo
     */
    private $contentInfo = null;

    /**
     * Adds as contentInfo
     *
     * Used for requesting specific content information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType
     * $contentInfo
     */
    public function addToContentInfo(
        \Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType $contentInfo
    ) {
        $this->contentInfo[] = $contentInfo;

        return $this;
    }

    /**
     * isset contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContentInfo($index)
    {
        return isset($this->contentInfo[$index]);
    }

    /**
     * unset contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContentInfo($index)
    {
        unset($this->contentInfo[$index]);
    }

    /**
     * Gets as contentInfo
     *
     * Used for requesting specific content information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[]
     */
    public function getContentInfo()
    {
        return $this->contentInfo;
    }

    /**
     * Sets a new contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[]
     * $contentInfo
     * @return self
     */
    public function setContentInfo(array $contentInfo)
    {
        $this->contentInfo = $contentInfo;

        return $this;
    }


}

