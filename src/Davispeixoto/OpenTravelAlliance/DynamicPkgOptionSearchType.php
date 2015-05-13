<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgOptionSearchType
 *
 * A collection of package option search criteria.
 * XSD Type: DynamicPkgOptionSearchType
 */
class DynamicPkgOptionSearchType extends DynamicPkgSearchType
{

    /**
     * The type of search.
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * Package option search criteria.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType\OptionSearchCriteriaAType
     * $optionSearchCriteria
     */
    private $optionSearchCriteria = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as requestType
     *
     * The type of search.
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * The type of search.
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Gets as optionSearchCriteria
     *
     * Package option search criteria.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType\OptionSearchCriteriaAType
     */
    public function getOptionSearchCriteria()
    {
        return $this->optionSearchCriteria;
    }

    /**
     * Sets a new optionSearchCriteria
     *
     * Package option search criteria.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType\OptionSearchCriteriaAType
     * $optionSearchCriteria
     * @return self
     */
    public function setOptionSearchCriteria(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgOptionSearchType\OptionSearchCriteriaAType $optionSearchCriteria
    ) {
        $this->optionSearchCriteria = $optionSearchCriteria;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

