<?php

namespace ContainerHN5eQ2G;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3facc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8a19 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2edf2 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getConnection', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getMetadataFactory', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getExpressionBuilder', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'beginTransaction', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getCache', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'transactional', array('func' => $func), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->transactional($func);
    }

    public function commit()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'commit', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->commit();
    }

    public function rollback()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'rollback', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getClassMetadata', array('className' => $className), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'createQuery', array('dql' => $dql), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'createNamedQuery', array('name' => $name), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'createQueryBuilder', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'flush', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'clear', array('entityName' => $entityName), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->clear($entityName);
    }

    public function close()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'close', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->close();
    }

    public function persist($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'persist', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'remove', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'refresh', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'detach', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'merge', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'contains', array('entity' => $entity), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getEventManager', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getConfiguration', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'isOpen', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getUnitOfWork', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getProxyFactory', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'initializeObject', array('obj' => $obj), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'getFilters', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'isFiltersStateClean', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'hasFilters', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return $this->valueHolder3facc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera8a19 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3facc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3facc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3facc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__get', ['name' => $name], $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        if (isset(self::$publicProperties2edf2[$name])) {
            return $this->valueHolder3facc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3facc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3facc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3facc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3facc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__isset', array('name' => $name), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3facc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3facc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__unset', array('name' => $name), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3facc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3facc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__clone', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        $this->valueHolder3facc = clone $this->valueHolder3facc;
    }

    public function __sleep()
    {
        $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, '__sleep', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;

        return array('valueHolder3facc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8a19 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8a19;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8a19 && ($this->initializera8a19->__invoke($valueHolder3facc, $this, 'initializeProxy', array(), $this->initializera8a19) || 1) && $this->valueHolder3facc = $valueHolder3facc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3facc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3facc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
