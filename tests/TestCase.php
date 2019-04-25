<?php

namespace Yiisoft\Yii\Bootstrap3\Tests;

use yii\di\Container;
use Yiisoft\Arrays\ArrayHelper;
use yii\helpers\Yii;

/**
 * This is the base class for all yii framework unit tests.
 */
abstract class TestCase extends \yii\tests\TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }

    /**
     * Clean up after test.
     * By default the application created with [[mockApplication]] will be destroyed.
     */
    protected function tearDown()
    {
        parent::tearDown();
        $this->destroyApplication();
    }
}
