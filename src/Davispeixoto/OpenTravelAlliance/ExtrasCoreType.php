<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ExtrasCoreType
 *
 * Describes an optional service which is not included in the standard package but
 * may be booked in addition.
 * XSD Type: ExtrasCoreType
 */
class ExtrasCoreType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Code to uniquely identify an extra.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A one to three character code denoting the type of an Extra, for example 'C' for
     * car hire, 'SKI' for Ski extras. Allocated by the provider.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The quantity of an extra being booked. A value of zero may be used to remove an
     * automatic or previously selected extra.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * The name of an extra.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @property string[] $listOfInventoryItemRPH
     */
    private $listOfInventoryItemRPH = null;

    /**
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @property string[] $listofRoomRPH
     */
    private $listofRoomRPH = null;

    /**
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasCoreType\SubCategoryAType[]
     * $subCategory
     */
    private $subCategory = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as code
     *
     * Code to uniquely identify an extra.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code to uniquely identify an extra.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as type
     *
     * A one to three character code denoting the type of an Extra, for example 'C' for
     * car hire, 'SKI' for Ski extras. Allocated by the provider.
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
     * A one to three character code denoting the type of an Extra, for example 'C' for
     * car hire, 'SKI' for Ski extras. Allocated by the provider.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of an extra being booked. A value of zero may be used to remove an
     * automatic or previously selected extra.
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
     * The quantity of an extra being booked. A value of zero may be used to remove an
     * automatic or previously selected extra.
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
     * Gets as groupCode
     *
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * A code which links two or more Extras together, enabling a rule to be applied to
     * all group members e.g. only one of the group may be booked, or any combination.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an extra.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an extra.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Adds as listOfInventoryItemRPH
     *
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @return self
     * @param string $listOfInventoryItemRPH
     */
    public function addToListOfInventoryItemRPH($listOfInventoryItemRPH)
    {
        $this->listOfInventoryItemRPH[] = $listOfInventoryItemRPH;

        return $this;
    }

    /**
     * isset listOfInventoryItemRPH
     *
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfInventoryItemRPH($index)
    {
        return isset($this->listOfInventoryItemRPH[$index]);
    }

    /**
     * unset listOfInventoryItemRPH
     *
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfInventoryItemRPH($index)
    {
        unset($this->listOfInventoryItemRPH[$index]);
    }

    /**
     * Gets as listOfInventoryItemRPH
     *
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @return string[]
     */
    public function getListOfInventoryItemRPH()
    {
        return $this->listOfInventoryItemRPH;
    }

    /**
     * Sets a new listOfInventoryItemRPH
     *
     * One or more pointers to the Inventory Item(s) with which an extra may be booked.
     *
     * @param string $listOfInventoryItemRPH
     * @return self
     */
    public function setListOfInventoryItemRPH(array $listOfInventoryItemRPH)
    {
        $this->listOfInventoryItemRPH = $listOfInventoryItemRPH;

        return $this;
    }

    /**
     * Adds as listofRoomRPH
     *
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @return self
     * @param string $listofRoomRPH
     */
    public function addToListofRoomRPH($listofRoomRPH)
    {
        $this->listofRoomRPH[] = $listofRoomRPH;

        return $this;
    }

    /**
     * isset listofRoomRPH
     *
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListofRoomRPH($index)
    {
        return isset($this->listofRoomRPH[$index]);
    }

    /**
     * unset listofRoomRPH
     *
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListofRoomRPH($index)
    {
        unset($this->listofRoomRPH[$index]);
    }

    /**
     * Gets as listofRoomRPH
     *
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @return string[]
     */
    public function getListofRoomRPH()
    {
        return $this->listofRoomRPH;
    }

    /**
     * Sets a new listofRoomRPH
     *
     * One or more pointers to the room(s) with which an extra may be booked.
     *
     * @param string $listofRoomRPH
     * @return self
     */
    public function setListofRoomRPH(array $listofRoomRPH)
    {
        $this->listofRoomRPH = $listofRoomRPH;

        return $this;
    }

    /**
     * Adds as subCategory
     *
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasCoreType\SubCategoryAType
     * $subCategory
     */
    public function addToSubCategory(\Davispeixoto\OpenTravelAlliance\ExtrasCoreType\SubCategoryAType $subCategory)
    {
        $this->subCategory[] = $subCategory;

        return $this;
    }

    /**
     * isset subCategory
     *
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubCategory($index)
    {
        return isset($this->subCategory[$index]);
    }

    /**
     * unset subCategory
     *
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubCategory($index)
    {
        unset($this->subCategory[$index]);
    }

    /**
     * Gets as subCategory
     *
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasCoreType\SubCategoryAType[]
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Sets a new subCategory
     *
     * Identifies a sub-category of Extra, for example Large, Medium or Small Frame for
     * a Mountain Bike Extra or Vehicle Type for a Car Rental extra.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasCoreType\SubCategoryAType[]
     * $subCategory
     * @return self
     */
    public function setSubCategory(array $subCategory)
    {
        $this->subCategory = $subCategory;

        return $this;
    }


}

