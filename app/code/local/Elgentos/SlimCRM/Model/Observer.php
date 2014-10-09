<?php
class Elgentos_SlimCRM_Model_Observer {

    public function saveRemarks($observer) {

        $remark = Mage::app()->getRequest()->getParam('slimcrm_remark');
        $observer->getCustomer()->setSlimcrmRemark($remark);

        return $this;
    }

}
