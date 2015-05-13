<?php

namespace Davispeixoto\OpenTravelAlliance\TripFeaturesType;

/**
 * Class representing OperatorsAType
 */
class OperatorsAType
{

    /**
     * Company or organization operating the trip/tour/cruise.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $operator
     */
    private $operator = null;

    /**
     * Adds as operator
     *
     * Company or organization operating the trip/tour/cruise.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     */
    public function addToOperator(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operator)
    {
        $this->operator[] = $operator;

        return $this;
    }

    /**
     * isset operator
     *
     * Company or organization operating the trip/tour/cruise.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperator($index)
    {
        return isset($this->operator[$index]);
    }

    /**
     * unset operator
     *
     * Company or organization operating the trip/tour/cruise.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperator($index)
    {
        unset($this->operator[$index]);
    }

    /**
     * Gets as operator
     *
     * Company or organization operating the trip/tour/cruise.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * Company or organization operating the trip/tour/cruise.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $operator
     * @return self
     */
    public function setOperator(array $operator)
    {
        $this->operator = $operator;

        return $this;
    }


}

