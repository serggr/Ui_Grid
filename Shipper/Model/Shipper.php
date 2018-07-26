<?php namespace Sg\Shipper\Model;


use Magento\Framework\Model\AbstractModel;

class Shipper extends AbstractModel {

    protected function _construct() {
        $this->_init(\Sg\Shipper\Model\ResourceModel\Shipper::class);
    }

}
