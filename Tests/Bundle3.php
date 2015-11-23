<?php

/*
 * This file is part of the php-formatter package
 *
 * Copyright (c) 2014 Marc Morera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\SymfonyBundleDependencies\Tests;

use Symfony\Component\HttpKernel\KernelInterface;

use Mmoreram\SymfonyBundleDependencies\DependentBundleInterface;

/**
 * Class Bundle3
 */
class Bundle3 implements DependentBundleInterface
{
    /**
     * Create instance of current bundle, and return dependent bundle namespaces
     *
     * @return array Bundle instances
     */
    public static function getBundleDependencies(KernelInterface $kernel)
    {
        return [
            new \Mmoreram\SymfonyBundleDependencies\Tests\Bundle1(),
            new \Mmoreram\SymfonyBundleDependencies\Tests\Bundle2(),
            'Mmoreram\SymfonyBundleDependencies\Tests\Bundle4',
        ];
    }
}
