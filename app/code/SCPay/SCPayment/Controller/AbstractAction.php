<?php

/*
 * Created by ScPayments
 * Date 8 Sept 2022
 * AbstractAction class is base class for SCPay payment gateway.
 */

namespace SCPay\SCPayment\Controller;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

abstract class AbstractAction extends Action
{
    protected $_context;

    public function __construct(Context $context) {
        parent::__construct($context);
        $this->_context = $context;        
    }

    // Get Magneto base context object
    protected function getContext(){
        return $this->_context;
    }

    // Get Magneto ObjectManager object.
    protected function getObjectManager(){
        return $this->_objectManager;
    }

    // Get Magento Messager object and display message at the top panel.
    protected function getMessageManager(){
        return $this->getContext()->getMessageManager();
    }
}