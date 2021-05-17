<?php

namespace ContainerHN5eQ2G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OwI9_CFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.owI9.cF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.owI9.cF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'promotionRepository' => ['privates', 'App\\Repository\\PromotionRepository', 'getPromotionRepositoryService', true],
        ], [
            'promotionRepository' => 'App\\Repository\\PromotionRepository',
        ]);
    }
}
