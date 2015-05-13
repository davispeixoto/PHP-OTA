<?php

namespace Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType\RequestTypesAType;

/**
 * Class representing RequestTypeAType
 */
class RequestTypeAType
{

    /**
     * A specific type of package option to request. Refer to OpenTravel Code List
     * Package Option Type Code (PKO).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * A specific type of package option to request. Refer to OpenTravel Code List
     * Package Option Type Code (PKO).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A specific type of package option to request. Refer to OpenTravel Code List
     * Package Option Type Code (PKO).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

