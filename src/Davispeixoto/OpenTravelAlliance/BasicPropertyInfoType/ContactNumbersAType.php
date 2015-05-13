<?php

namespace Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType;

/**
 * Class representing ContactNumbersAType
 */
class ContactNumbersAType
{

    /**
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     * $contactNumber
     */
    private $contactNumber = null;

    /**
     * Adds as contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType
     * $contactNumber
     */
    public function addToContactNumber(
        \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber
    ) {
        $this->contactNumber[] = $contactNumber;

        return $this;
    }

    /**
     * isset contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactNumber($index)
    {
        return isset($this->contactNumber[$index]);
    }

    /**
     * unset contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactNumber($index)
    {
        unset($this->contactNumber[$index]);
    }

    /**
     * Gets as contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Sets a new contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     * $contactNumber
     * @return self
     */
    public function setContactNumber(array $contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }


}

