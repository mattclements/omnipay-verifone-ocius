<?php
namespace Omnipay\VerifoneOcius;
use Omnipay\VerifoneOcius\Message\CompletePurchaseRequest;
use Omnipay\VerifoneOcius\Message\PurchaseRequest;
use Omnipay\Common\AbstractGateway;
/**
 * Verifone Gateway
 *
 * @link http://www.verifone.co.uk/solutions-services/paas/payware-ocius/customer-not-present/
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Verifone';
    }
    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'password' => '',
            'testMode' => false
        );
    }
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }
    public function getPassword()
    {
        return $this->getParameter('password');
    }
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\VerifoneOcius\Message\PurchaseRequest', $parameters);
    }
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\VerifoneOcius\Message\CompletePurchaseRequest', $parameters);
    }
    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\VerifoneOcius\Message\RefundRequest', $parameters);
    }
}