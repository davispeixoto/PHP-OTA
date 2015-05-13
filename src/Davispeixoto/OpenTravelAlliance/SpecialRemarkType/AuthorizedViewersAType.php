<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialRemarkType;

/**
 * Class representing AuthorizedViewersAType
 */
class AuthorizedViewersAType
{

    /**
     * Specifies those authorized to view a confidential special remark.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     * $authorizedViewer
     */
    private $authorizedViewer = null;

    /**
     * Adds as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType
     * $authorizedViewer
     */
    public function addToAuthorizedViewer(
        \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
    ) {
        $this->authorizedViewer[] = $authorizedViewer;

        return $this;
    }

    /**
     * isset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthorizedViewer($index)
    {
        return isset($this->authorizedViewer[$index]);
    }

    /**
     * unset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthorizedViewer($index)
    {
        unset($this->authorizedViewer[$index]);
    }

    /**
     * Gets as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewer()
    {
        return $this->authorizedViewer;
    }

    /**
     * Sets a new authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     * $authorizedViewer
     * @return self
     */
    public function setAuthorizedViewer(array $authorizedViewer)
    {
        $this->authorizedViewer = $authorizedViewer;

        return $this;
    }


}

