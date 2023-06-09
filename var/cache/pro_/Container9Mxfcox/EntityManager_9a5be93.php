<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1b28 = null;
    private $initializer77d47 = null;
    private static $publicPropertiesc36f7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getConnection', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getMetadataFactory', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getExpressionBuilder', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'beginTransaction', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getCache', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getCache();
    }
    public function transactional($func)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'transactional', array('func' => $func), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'wrapInTransaction', array('func' => $func), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'commit', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->commit();
    }
    public function rollback()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'rollback', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getClassMetadata', array('className' => $className), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'createQuery', array('dql' => $dql), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'createNamedQuery', array('name' => $name), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'createQueryBuilder', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'flush', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'clear', array('entityName' => $entityName), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->clear($entityName);
    }
    public function close()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'close', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->close();
    }
    public function persist($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'persist', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'remove', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'refresh', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'detach', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'merge', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'contains', array('entity' => $entity), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getEventManager', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getConfiguration', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'isOpen', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getUnitOfWork', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getProxyFactory', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'initializeObject', array('obj' => $obj), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'getFilters', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'isFiltersStateClean', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'hasFilters', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return $this->valueHoldera1b28->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer77d47 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera1b28) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1b28 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera1b28->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__get', ['name' => $name], $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        if (isset(self::$publicPropertiesc36f7[$name])) {
            return $this->valueHoldera1b28->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1b28;
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
        $targetObject = $this->valueHoldera1b28;
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
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1b28;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera1b28;
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
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__isset', array('name' => $name), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1b28;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera1b28;
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
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__unset', array('name' => $name), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1b28;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera1b28;
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
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__clone', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        $this->valueHoldera1b28 = clone $this->valueHoldera1b28;
    }
    public function __sleep()
    {
        $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, '__sleep', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
        return array('valueHoldera1b28');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77d47 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77d47;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer77d47 && ($this->initializer77d47->__invoke($valueHoldera1b28, $this, 'initializeProxy', array(), $this->initializer77d47) || 1) && $this->valueHoldera1b28 = $valueHoldera1b28;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1b28;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1b28;
    }
}
