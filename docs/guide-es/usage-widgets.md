Yii widgets
===========

La mayoría de los componentes de bootstrap están encapsulados dentro de Yii widgets lo que permite una sintaxis
más robusta y poder integrarse con las características del framework. Todos los widgets pertenecen
al namespace `\yii\bootstrap`:

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


## Personalización de las clases css para los widget <span id="customizing-css-classes"></span>

Los widgets permiten una rápida composición del HTML para los componentes de bootstrap que requieren las clases
CSS de bootstrap.
Las clases por defecto para un componente en particular serán añadidas automáticamente por los widgets, y las clases
opcionales que quieres personalizar son frecuentemente soportadas a través de las propiedades de los widgets.

Por ejemplo, puedas usar [[Yiisoft\Yii\Bootstrap3\Button::options]] para personalizar la apariencia de un botón.
La clase 'btn' que se requiere para un botón será añadida automáticamente, por lo que no necesitas preocuparte
por ello.
Todo lo que necesitas es especificar una clase de botón en particular:

```php
echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-primary'], // produce la clase "btn btn-primary"
]);
```

Sin embargo, a veces puede que tengas que remplazar las clases por defecto por las alternativas.
Por ejemplo, el widget [[Yiisoft\Yii\Bootstrap3\ButtonGroup]] utiliza por defecto la clase 'btn-group' para el contenido del div, pero necesitas usar 'btn-group-vertical' en lugar de alinear los botones verticalmente.
El uso directo de la opción 'class' simplemente añade 'btn-group-vertical' a 'btn-group, el cual producirá un resultado incorrecto.
Con el fin de sobrescribir las clases por defecto de un widget, necesitas especificar la opción 'class' como un
array que contiene la definición de la clase personalizada bajo la clave 'widget':

```php
echo ButtonGroup::widget([
    'options' => [
        'class' => ['widget' => 'btn-group-vertical'] // remplaza 'btn-group' con 'btn-group-vertical'
    ],
    'buttons' => [
        ['label' => 'A'],
        ['label' => 'B'],
    ]
]);
```
