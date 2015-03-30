<?php
/**
 * 
 * User: semihs
 * Date: 30.03.15
 * Time: 14:47
 * 
 */

namespace ZfBase58\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use ZfBase58\Service\ZfBase58;

class ZfBase58Factory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return ZfBase58
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options = $serviceLocator->get('Config')['zf-base58'];
        $zfBase58 = new ZfBase58($options);

        return $zfBase58;
    }
} 