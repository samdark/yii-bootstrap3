Yii ウィジェット
================

複雑な bootstrap コンポーネントのほとんどは Yii ウィジェットでラップされて、より堅牢な構文を与えられ、フレームワークの諸機能と統合されています。
全てのウィジェットは `\yii\bootstrap` 名前空間に属します。

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


## ウィジェットの CSS クラスをカスタマイズする <span id="customizing-css-classes"></span>

これらのウィジェットを使うと、bootstrap CSS クラスの使用を要求する bootstrap コンポーネントのための HTML を素速く構成することが出来ます。
特定のコンポーネントのデフォルトの CSS クラスはウィジェットによって自動的に追加されます。
そして、あなたがカスタマイズしたいであろうオプションの CSS クラスは、通常は、ウィジェットのプロパティによってサポートされています。

例えば、[[Yiisoft\Yii\Bootstrap3\Button::options]] を使って、ボタンの外見をカスタマイズすることが出来ます。
このとき、ボタンに要求される 'btn' クラスは自動的に追加されますので、あなたが心配をする必要はありません。
特定のボタンクラスを指定するだけで十分です。

```php
echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-primary'], // "btn btn-primary" というクラスを生成
]);
```

しかしながら、時として、デフォルトのクラスを別のクラスで置き換える必要がある場合があります。
例えば、[[Yiisoft\Yii\Bootstrap3\ButtonGroup]] は、コンテナの div に 'btn-group' をデフォルトで使用しますが、ボタンを垂直に並べるために 'btn-group-vertical' を代りに使いたいことがあるでしょう。
単純に 'class' オプションを使うと、'btn-group-vertical' が 'btn-group' に追加されるだけで、正しくない結果が生成されることになります。
ウィジェットのデフォルトのクラスをオーバーライドするためには、'class' オプションに配列形式を使用して、'widget' キーの下にカスタマイズしたクラスの定義を指定しなければなりません。

```php
echo ButtonGroup::widget([
    'options' => [
        'class' => ['widget' => 'btn-group-vertical'] // 'btn-group' を 'btn-group-vertical' で置き換え
    ],
    'buttons' => [
        ['label' => 'A'],
        ['label' => 'B'],
    ]
]);
```
