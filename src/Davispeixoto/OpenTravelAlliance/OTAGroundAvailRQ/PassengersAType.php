<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ;

/**
 * Class representing PassengersAType
 */
class PassengersAType
{

    /**
     * A passenger age, such as "25".
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * The quantity of passengers for the @Age, CustomerID or Category.Note that the
     * CodeList element has an @Quantity attribute which should be used to specify
     * associated quantity(s).
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ\PassengersAType\CustomerIDAType[]
     * $customerID
     */
    private $customerID = null;

    /**
     * An identifier for a passenger/customer age range or category.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $category
     */
    private $category = null;

    /**
     * Gets as age
     *
     * A passenger age, such as "25".
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * A passenger age, such as "25".
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of passengers for the @Age, CustomerID or Category.Note that the
     * CodeList element has an @Quantity attribute which should be used to specify
     * associated quantity(s).
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of passengers for the @Age, CustomerID or Category.Note that the
     * CodeList element has an @Quantity attribute which should be used to specify
     * associated quantity(s).
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Adds as customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ\PassengersAType\CustomerIDAType
     * $customerID
     */
    public function addToCustomerID(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ\PassengersAType\CustomerIDAType $customerID
    ) {
        $this->customerID[] = $customerID;

        return $this;
    }

    /**
     * isset customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerID($index)
    {
        return isset($this->customerID[$index]);
    }

    /**
     * unset customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerID($index)
    {
        unset($this->customerID[$index]);
    }

    /**
     * Gets as customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ\PassengersAType\CustomerIDAType[]
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number. This is typically used for a
     * customer that has an account with the transportation supplier and/or operator.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ\PassengersAType\CustomerIDAType[]
     * $customerID
     * @return self
     */
    public function setCustomerID(array $customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Gets as category
     *
     * An identifier for a passenger/customer age range or category.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * An identifier for a passenger/customer age range or category.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $category)
    {
        $this->category = $category;

        return $this;
    }


}

