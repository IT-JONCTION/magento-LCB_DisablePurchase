<?php

/**
 * 
 * @category   LCB
 * @package    LCB_DisablePurchase
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_DisablePurchase_Model_Groups {

    public function toOptionArray()
    {
        $group = Mage::getModel('customer/group')->getCollection();
        $groupArray = array('label' => '');
        foreach ($group as $eachGroup) {
            $groupData = array(
                'value' => $eachGroup->getCustomerGroupId(),
                'label' => $eachGroup->getCustomerGroupCode(),
            );
            if (!empty($groupData)) {
                array_push($groupArray, $groupData);
            }
        }
        return $groupArray;
    }

}
