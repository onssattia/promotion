<?php

namespace ContainerHN5eQ2G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PromotionType' shared autowired service.
     *
     * @return \App\Form\PromotionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PromotionType.php';

        return $container->privates['App\\Form\\PromotionType'] = new \App\Form\PromotionType();
    }
}
