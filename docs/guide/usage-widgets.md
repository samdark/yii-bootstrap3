Yii widgets
===========

Most complex bootstrap components are wrapped into Yii widgets to allow more robust syntax and integrate with
framework features. All widgets belong to `\yii\bootstrap` namespace:

- [[Yiisoft\Yii\Bootstrap3\ActiveForm|ActiveForm]]
- [[Yiisoft\Yii\Bootstrap3\Alert|Alert]]
- [[Yiisoft\Yii\Bootstrap3\Button|Button]]
- [[Yiisoft\Yii\Bootstrap3\ButtonDropdown|ButtonDropdown]]
- [[Yiisoft\Yii\Bootstrap3\ButtonGroup|ButtonGroup]]
- [[Yiisoft\Yii\Bootstrap3\Carousel|Carousel]]
- [[Yiisoft\Yii\Bootstrap3\Collapse|Collapse]]
- [[Yiisoft\Yii\Bootstrap3\Dropdown|Dropdown]]
- [[Yiisoft\Yii\Bootstrap3\Modal|Modal]]
- [[Yiisoft\Yii\Bootstrap3\Nav|Nav]]
- [[Yiisoft\Yii\Bootstrap3\NavBar|NavBar]]
- [[Yiisoft\Yii\Bootstrap3\Progress|Progress]]
- [[Yiisoft\Yii\Bootstrap3\Tabs|Tabs]]


## Customizing widget CSS classes <span id="customizing-css-classes"></span>

The widgets allow quick composition of the HTML for the bootstrap components that require the bootstrap CSS classes.
The default classes for a particular component will be added automatically by the widget, and the optional classes that you may want to customize are usually supported through the properties of the widget.

For example, you may use [[Yiisoft\Yii\Bootstrap3\Button::options]] to customize the appearance of a button.
The class 'btn' which is required for a button will be added automatically, so you don't need to worry about it.
All you need is specify a particular button class:

```php
echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-primary'], // produces class "btn btn-primary"
]);
```

However, sometimes you may need to replace the default classes with the alternative ones.
For example, the widget [[Yiisoft\Yii\Bootstrap3\ButtonGroup]] uses 'btn-group' class for the container div by default,
but you may need to use 'btn-group-vertical' instead to align the buttons vertically.
Using a plain 'class' option simply adds 'btn-group-vertical' to 'btn-group', which will produce an incorrect result.
In order to override the default classes of a widget, you need to specify the 'class' option as an array that contains the customized class definition under the 'widget' key:

```php
echo ButtonGroup::widget([
    'options' => [
        'class' => ['widget' => 'btn-group-vertical'] // replaces 'btn-group' with 'btn-group-vertical'
    ],
    'buttons' => [
        ['label' => 'A'],
        ['label' => 'B'],
    ]
]);
```
