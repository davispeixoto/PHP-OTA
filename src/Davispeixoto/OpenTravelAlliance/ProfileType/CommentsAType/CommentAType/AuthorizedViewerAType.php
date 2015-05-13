<?php

namespace Davispeixoto\OpenTravelAlliance\ProfileType\CommentsAType\CommentAType;

/**
 * Class representing AuthorizedViewerAType
 */
class AuthorizedViewerAType
{

    /**
     * Identifies an authorized viewer of a confidential remark. Can be a 3 character
     * ATA/IATA airport/city code, an office ID, pseudo city code, etc.
     *
     * @property string $viewerCode
     */
    private $viewerCode = null;

    /**
     * Gets as viewerCode
     *
     * Identifies an authorized viewer of a confidential remark. Can be a 3 character
     * ATA/IATA airport/city code, an office ID, pseudo city code, etc.
     *
     * @return string
     */
    public function getViewerCode()
    {
        return $this->viewerCode;
    }

    /**
     * Sets a new viewerCode
     *
     * Identifies an authorized viewer of a confidential remark. Can be a 3 character
     * ATA/IATA airport/city code, an office ID, pseudo city code, etc.
     *
     * @param string $viewerCode
     * @return self
     */
    public function setViewerCode($viewerCode)
    {
        $this->viewerCode = $viewerCode;

        return $this;
    }


}

