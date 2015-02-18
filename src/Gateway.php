<?php

namespace Omnipay\Ebanx;

use Omnipay\Common\AbstractGateway;
use Omnipay\Ebanx\Message\Request;

/**
 * eWAY Rapid 3.0 Gateway
 */
class Gateway extends AbstractGateway
{
    //public $transparentRedirect = true;

    public function getName()
    {
        return 'EBANX Checkout';
    }

    public function getDefaultParameters()
    {
        return array(
            'integration_key' => '',
            'testMode' => false,
        );
    }

    public function getApiKey()
    {
        return $this->getParameter('integration_key');
    }

    public function setApiKey($value)
    {
        return $this->setParameter('integration_key', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Ebanx\Message\Request', $parameters);
    }

}
