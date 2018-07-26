<?php namespace Sg\Shipper\Model\ResourceModel\Shipper;



use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'id';

    protected function _construct() {

        $this->_init(MagArsResourceTable::class,\Sg\Shipper\Model\ResourceModel\Shipper::class);

    }



}