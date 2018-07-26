<?php
namespace Sg\Shipper\Controller\Index;

use \Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    
    public function __construct(

        Context $context
    ) { 
        parent::__construct($context);
    }
    
    public function execute()
    {
        $contact = $this->_objectManager->create('Sg\Shipper\Model\Shipper');
        $contact->setName('Anders Grin');
        $contact->setDiscription('Very fast shipeer');
        $contact->save();


        die('test');
    }
}
