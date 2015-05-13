<?php

namespace Davispeixoto\OpenTravelAlliance\ServiceType;

use Davispeixoto\OpenTravelAlliance\ResCommonDetailType;

/**
 * Class representing ServiceDetailsAType
 */
class ServiceDetailsAType extends ResCommonDetailType
{

    /**
     * Description of the service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $serviceDescription
     */
    private $serviceDescription = null;

    /**
     * Gets as serviceDescription
     *
     * Description of the service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * Sets a new serviceDescription
     *
     * Description of the service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $serviceDescription
     * @return self
     */
    public function setServiceDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $serviceDescription)
    {
        $this->serviceDescription = $serviceDescription;

        return $this;
    }


}

