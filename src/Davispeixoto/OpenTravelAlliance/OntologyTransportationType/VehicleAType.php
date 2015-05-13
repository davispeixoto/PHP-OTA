<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyTransportationType;

/**
 * Class representing VehicleAType
 */
class VehicleAType
{

    /**
     * Vehicle class.Example: Compact
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ClassAType
     * $class
     */
    private $class = null;

    /**
     * Vehicle make.Example: Ford
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\MakeAType
     * $make
     */
    private $make = null;

    /**
     * Vehicle model.Example: Focus
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ModelAType
     * $model
     */
    private $model = null;

    /**
     * Gets as class
     *
     * Vehicle class.Example: Compact
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ClassAType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Vehicle class.Example: Compact
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ClassAType
     * $class
     * @return self
     */
    public function setClass(\Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ClassAType $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Gets as make
     *
     * Vehicle make.Example: Ford
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\MakeAType
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Sets a new make
     *
     * Vehicle make.Example: Ford
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\MakeAType
     * $make
     * @return self
     */
    public function setMake(\Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\MakeAType $make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Gets as model
     *
     * Vehicle model.Example: Focus
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ModelAType
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets a new model
     *
     * Vehicle model.Example: Focus
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ModelAType
     * $model
     * @return self
     */
    public function setModel(\Davispeixoto\OpenTravelAlliance\OntologyTransportationType\VehicleAType\ModelAType $model)
    {
        $this->model = $model;

        return $this;
    }


}

