<?php

/**
 * 
 * @category   LCB
 * @package    LCB_DisablePurchase
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_DisablePurchase_Helper_Data extends Mage_Core_Helper_Abstract {

    public $flag;

    /**
     * Should apply
     * 
     * @return boolean
     */
    public function apply()
    {

        if ($this->flag) {
            return true;
        }

        $customerGroups = Mage::getStoreConfig(
                        'catalog/purchase/groups', Mage::app()->getStore()
        );

        if (!$customerGroups && $customerGroups !== '0') {
            $this->flag = false;
            return false;
        }

        $customerGroup = Mage::getSingleton('customer/session')->getCustomerGroupId();

        if (in_array($customerGroup, explode(',', $customerGroups))) {
            $this->flag = true;
            return true;
        }
    }

}
