<?php
class Magneto_Debug_Block_Abstract extends Mage_Core_Block_Template
{
    const DEFAULT_STORE_ID = 1;

    protected $currentStoreId;

    public function __construct(array $args = [])
    {
        parent::__construct($args);

        $this->currentStoreId = Mage::app()->getStore()->getId();
    }

    public function _getViewVars() {
        return $this->_viewVars;
    }

    public function getShowTemplateHints()
    {
        return false;
    }
}
