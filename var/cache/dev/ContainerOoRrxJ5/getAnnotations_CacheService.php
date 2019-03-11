<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.cache' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\PruneableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\ResettableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\DoctrineProvider.php';
include_once $this->targetDirs[3].'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Cache\\CacheTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';

return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->load('getCache_AnnotationsService.php'))));
