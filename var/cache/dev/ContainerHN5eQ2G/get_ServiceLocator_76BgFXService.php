<?php

namespace ContainerHN5eQ2G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_76BgFXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7_6BgFX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7_6BgFX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'promotion' => ['privates', '.errored..service_locator.7_6BgFX.App\\Entity\\Promotion', NULL, 'Cannot autowire service ".service_locator.7_6BgFX": it references class "App\\Entity\\Promotion" but no such service exists.'],
        ], [
            'promotion' => 'App\\Entity\\Promotion',
        ]);
    }
}
