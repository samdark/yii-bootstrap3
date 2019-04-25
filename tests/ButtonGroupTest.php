<?php

namespace Yiisoft\Yii\Bootstrap3\Tests;

use Yiisoft\Yii\Bootstrap3\Button;
use Yiisoft\Yii\Bootstrap3\ButtonGroup;

/**
 * @group bootstrap
 */
class ButtonGroupTest extends TestCase
{
    public function testContainerOptions()
    {
        ButtonGroup::$counter = 0;
        $out = ButtonGroup::widget([
            'buttons' => [
                ['label' => 'button-A'],
                ['label' => 'button-B', 'visible' => true],
                ['label' => 'button-C', 'visible' => false],
                Button::widget(['label' => 'button-D']),
            ],
        ]);

        static::assertContains('button-A', $out);
        static::assertContains('button-B', $out);
        static::assertContains('button-B', $out);
        static::assertNotContains('button-C', $out);
    }
}
