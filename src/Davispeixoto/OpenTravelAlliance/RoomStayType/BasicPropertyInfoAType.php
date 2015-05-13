<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType;

use Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType;

/**
 * Class representing BasicPropertyInfoAType
 */
class BasicPropertyInfoAType extends BasicPropertyInfoType
{

    /**
     * Information linked to user content.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType
     * $userGeneratedContent
     */
    private $userGeneratedContent = null;

    /**
     * Gets as userGeneratedContent
     *
     * Information linked to user content.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType
     */
    public function getUserGeneratedContent()
    {
        return $this->userGeneratedContent;
    }

    /**
     * Sets a new userGeneratedContent
     *
     * Information linked to user content.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType
     * $userGeneratedContent
     * @return self
     */
    public function setUserGeneratedContent(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent
    ) {
        $this->userGeneratedContent = $userGeneratedContent;

        return $this;
    }


}

