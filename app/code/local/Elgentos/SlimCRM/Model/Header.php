<?php
class Elgentos_SlimCRM_Model_Header
{
    private function getVersion() {
        return Mage::getConfig()->getNode('modules/'.$this->getModulename(true).'/version');
    }

    private function getModulename($includePackagename=false) {
        list($p,$m,$c,$a) = explode('_',get_class());
        if($includePackagename) return $p.'_'.$m;
        return strtoupper($m);
    }

    public function add($page) {
        if($page->getPage()->getIdentifier()=='home') header('X-ELGENTOS-'.$this->getModulename().': '.$this->getVersion());
    }
}