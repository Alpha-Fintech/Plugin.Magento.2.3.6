<?php

/*
 * Created by ScPayments
 * Date 8 Sept 2022
 * PaymentModeType is give the model for dropdown page in admin configuration setting page.
 */

namespace SCPay\SCPayment\Model\Config;

class Mode implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{		
	    return [
            ['value' => '1', 'label' => __('Test Mode')],
            ['value' => '0', 'label' => __('Live Mode')],            
        ];
	}
}