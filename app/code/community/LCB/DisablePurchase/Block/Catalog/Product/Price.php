<?php

/**
 * 
 * @category   LCB
 * @package    LCB_DisablePurchase
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_DisablePurchase_Block_Catalog_Product_Price extends Mage_Catalog_Block_Product_Price {

    protected function _toHtml()
    {

        if (Mage::helper('lcb_disablepurchase')->apply()) {
            if (strpos($this->getTemplate(), 'tier') !== false) {
                return;
            }
            $this->setTemplate('lcb/disablepurchase/price.phtml');
        }

        return parent::_toHtml();
    }

}
