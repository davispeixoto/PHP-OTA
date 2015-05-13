<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType;

/**
 * Class representing AdditionalInfoAType
 */
class AdditionalInfoAType
{

    /**
     * Indicates a specific type of attachment. Refer to OpenTravel Code list
     * Additional Info Code (AIC).
     *
     * @property string $addtionalInfoCode
     */
    private $addtionalInfoCode = null;

    /**
     * Indicates the type of delivery method available for this attachment. Refer to
     * OpenTravel Codelist Distribution Type (DTB).
     *
     * @property string $deliveryMethodCode
     */
    private $deliveryMethodCode = null;

    /**
     * Gets as addtionalInfoCode
     *
     * Indicates a specific type of attachment. Refer to OpenTravel Code list
     * Additional Info Code (AIC).
     *
     * @return string
     */
    public function getAddtionalInfoCode()
    {
        return $this->addtionalInfoCode;
    }

    /**
     * Sets a new addtionalInfoCode
     *
     * Indicates a specific type of attachment. Refer to OpenTravel Code list
     * Additional Info Code (AIC).
     *
     * @param string $addtionalInfoCode
     * @return self
     */
    public function setAddtionalInfoCode($addtionalInfoCode)
    {
        $this->addtionalInfoCode = $addtionalInfoCode;

        return $this;
    }

    /**
     * Gets as deliveryMethodCode
     *
     * Indicates the type of delivery method available for this attachment. Refer to
     * OpenTravel Codelist Distribution Type (DTB).
     *
     * @return string
     */
    public function getDeliveryMethodCode()
    {
        return $this->deliveryMethodCode;
    }

    /**
     * Sets a new deliveryMethodCode
     *
     * Indicates the type of delivery method available for this attachment. Refer to
     * OpenTravel Codelist Distribution Type (DTB).
     *
     * @param string $deliveryMethodCode
     * @return self
     */
    public function setDeliveryMethodCode($deliveryMethodCode)
    {
        $this->deliveryMethodCode = $deliveryMethodCode;

        return $this;
    }


}

