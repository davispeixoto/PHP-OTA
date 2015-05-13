<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType;

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
     * Carrier code that may be used in conjunction with the viewer code to identify
     * those authorized to view the confidential special remark.
     *
     * @property string $viewerCarrierCode
     */
    private $viewerCarrierCode = null;

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

    /**
     * Gets as viewerCarrierCode
     *
     * Carrier code that may be used in conjunction with the viewer code to identify
     * those authorized to view the confidential special remark.
     *
     * @return string
     */
    public function getViewerCarrierCode()
    {
        return $this->viewerCarrierCode;
    }

    /**
     * Sets a new viewerCarrierCode
     *
     * Carrier code that may be used in conjunction with the viewer code to identify
     * those authorized to view the confidential special remark.
     *
     * @param string $viewerCarrierCode
     * @return self
     */
    public function setViewerCarrierCode($viewerCarrierCode)
    {
        $this->viewerCarrierCode = $viewerCarrierCode;

        return $this;
    }


}

