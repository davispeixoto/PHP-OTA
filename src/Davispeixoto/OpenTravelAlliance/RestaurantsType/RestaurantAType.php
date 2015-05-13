<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantsType;

use Davispeixoto\OpenTravelAlliance\RestaurantType;

/**
 * Class representing RestaurantAType
 */
class RestaurantAType extends RestaurantType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * A reference to an award associated with this restaurant.
     *
     * @property string $awardsRPH
     */
    private $awardsRPH = null;

    /**
     * Collection of features offered by a hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Collection of type of restaurant offered.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCodes
     */
    private $srvcInfoCodes = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as awardsRPH
     *
     * A reference to an award associated with this restaurant.
     *
     * @return string
     */
    public function getAwardsRPH()
    {
        return $this->awardsRPH;
    }

    /**
     * Sets a new awardsRPH
     *
     * A reference to an award associated with this restaurant.
     *
     * @param string $awardsRPH
     * @return self
     */
    public function setAwardsRPH($awardsRPH)
    {
        $this->awardsRPH = $awardsRPH;

        return $this;
    }

    /**
     * Adds as feature
     *
     * Collection of features offered by a hotel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType $feature
     */
    public function addToFeatures(\Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * isset features
     *
     * Collection of features offered by a hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * Collection of features offered by a hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * Collection of features offered by a hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Collection of features offered by a hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Davispeixoto\OpenTravelAlliance\ContactInfoRootType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos)
    {
        $this->contactInfos = $contactInfos;

        return $this;
    }

    /**
     * Adds as srvcInfoCode
     *
     * Collection of type of restaurant offered.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType
     * $srvcInfoCode
     */
    public function addToSrvcInfoCodes(
        \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
    ) {
        $this->srvcInfoCodes[] = $srvcInfoCode;

        return $this;
    }

    /**
     * isset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSrvcInfoCodes($index)
    {
        return isset($this->srvcInfoCodes[$index]);
    }

    /**
     * unset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSrvcInfoCodes($index)
    {
        unset($this->srvcInfoCodes[$index]);
    }

    /**
     * Gets as srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCodes()
    {
        return $this->srvcInfoCodes;
    }

    /**
     * Sets a new srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCodes
     * @return self
     */
    public function setSrvcInfoCodes(array $srvcInfoCodes)
    {
        $this->srvcInfoCodes = $srvcInfoCodes;

        return $this;
    }


}

