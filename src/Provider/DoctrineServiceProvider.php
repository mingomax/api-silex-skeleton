<?php
/**
 * This file is part of api silex skeleton
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Xuplau
 * @author    Ivan Rosolen <ivanrosolen@gmail.com>
 * @author    William Espindola <oi@williamespindola.com.br>
 * @copyright 2016 Xuplau
 * @license   MIT
 * @link      https://github.com/ivanrosolen/api-silex-skeleton
 */

namespace Xuplau\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Provider\DoctrineServiceProvider as DoctrineProvider;

/**
 * Provides doctrine DBAL
 *
 * @version 1.0.0
 *
 * @package Xuplau\Provider
 * @author  Ivan Rosolen <ivanrosolen@gmail.com>
 * @author  William Espindola <oi@williamespindola.com.br>
 *
 */
class DoctrineServiceProvider implements ServiceProviderInterface
{
    /**
     * Register doctrine provider
     *
     * @param Container $container Container instance
     * @return Void
     */
    public function register(Container $container)
    {
        $container->register(new DoctrineProvider(),[
            'dbs.options' => [
                'apidb' => $container['apidb']
            ]
        ]);
    }

    /**
     * Boot
     *
     * @param Container $container Container instance
     * @return Void
     */
    public function boot(Container $container)
    {
        // Nothing here
    }
}
