<?php

declare(strict_types=1);

namespace LoreSjoberg\Facets\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function markTestSucceeded()
    {
        $this->assertTrue(true);
    }
}
