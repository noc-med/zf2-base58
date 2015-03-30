<?php
/**
 * 
 * User: semihs
 * Date: 30.03.15
 * Time: 14:42
 * 
 */

namespace ZfBase58;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}