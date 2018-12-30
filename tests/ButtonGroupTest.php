<?php

namespace yii\bootstrap3\tests;

use yii\bootstrap3\Button;
use yii\bootstrap3\ButtonGroup;

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
