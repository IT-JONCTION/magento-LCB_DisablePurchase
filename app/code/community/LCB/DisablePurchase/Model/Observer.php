<?php

/**
 * 
 * @category   LCB
 * @package    LCB_DisablePurchase
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_DisablePurchase_Model_Observer {

    public function isSalable(Varien_Event_Observer $observer)
    {
        if (Mage::helper('lcb_disablepurchase')->apply()) {
            $saleable = $observer->getSalable();
            $saleable->setIsSalable(false);
        }
    }

}
