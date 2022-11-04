<?php

namespace ContainerBE0whLi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9027 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5175c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa1fac = [
        
    ];

    public function getConnection()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getConnection', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getMetadataFactory', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getExpressionBuilder', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'beginTransaction', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getCache', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'transactional', array('func' => $func), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'commit', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->commit();
    }

    public function rollback()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'rollback', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getClassMetadata', array('className' => $className), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'createQuery', array('dql' => $dql), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'createNamedQuery', array('name' => $name), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'createQueryBuilder', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'flush', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'clear', array('entityName' => $entityName), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->clear($entityName);
    }

    public function close()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'close', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->close();
    }

    public function persist($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'persist', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'remove', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'refresh', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'detach', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'merge', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'contains', array('entity' => $entity), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getEventManager', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getConfiguration', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'isOpen', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getUnitOfWork', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getProxyFactory', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'initializeObject', array('obj' => $obj), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'getFilters', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'isFiltersStateClean', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'hasFilters', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return $this->valueHolderf9027->hasFilters();
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

        $instance->initializer5175c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf9027) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9027 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9027->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__get', ['name' => $name], $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        if (isset(self::$publicPropertiesa1fac[$name])) {
            return $this->valueHolderf9027->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9027;

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

        $targetObject = $this->valueHolderf9027;
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
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9027;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9027;
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
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__isset', array('name' => $name), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9027;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9027;
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
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__unset', array('name' => $name), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9027;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9027;
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
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__clone', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        $this->valueHolderf9027 = clone $this->valueHolderf9027;
    }

    public function __sleep()
    {
        $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, '__sleep', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;

        return array('valueHolderf9027');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5175c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5175c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5175c && ($this->initializer5175c->__invoke($valueHolderf9027, $this, 'initializeProxy', array(), $this->initializer5175c) || 1) && $this->valueHolderf9027 = $valueHolderf9027;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9027;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9027;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
