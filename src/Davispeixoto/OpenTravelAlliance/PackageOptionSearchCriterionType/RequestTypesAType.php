<?php

namespace Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType;

/**
 * Class representing RequestTypesAType
 */
class RequestTypesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     * $requestType
     */
    private $requestType = null;

    /**
     * Adds as requestType
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType
     * $requestType
     */
    public function addToRequestType(
        \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType $requestType
    ) {
        $this->requestType[] = $requestType;

        return $this;
    }

    /**
     * isset requestType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestType($index)
    {
        return isset($this->requestType[$index]);
    }

    /**
     * unset requestType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestType($index)
    {
        unset($this->requestType[$index]);
    }

    /**
     * Gets as requestType
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType\RequestTypeAType[]
     * $requestType
     * @return self
     */
    public function setRequestType(array $requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }


}

