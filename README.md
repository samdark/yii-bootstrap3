<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="80px">
    </a>
    <a href="http://getbootstrap.com/" target="_blank" rel="external">
        <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" height="80px">
    </a>
    <h1 align="center">Yii Framework Twitter Bootstrap 3 Extension</h1>
    <br>
</p>

This is the Twitter Bootstrap extension for [Yii framework](http://www.yiiframework.com).
It encapsulates [Bootstrap](http://getbootstrap.com/) components
and plugins in terms of Yii widgets, and thus makes using Bootstrap components/plugins
in Yii applications extremely easy.

For license information check the [LICENSE](LICENSE.md)-file.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii-bootstrap3/v/stable.png)](https://packagist.org/packages/yiisoft/yii-bootstrap3)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii-bootstrap3/downloads.png)](https://packagist.org/packages/yiisoft/yii-bootstrap3)
[![Build Status](https://travis-ci.org/yiisoft/yii-bootstrap3.svg?branch=master)](https://travis-ci.org/yiisoft/yii-bootstrap3)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/):


```
php composer.phar require --prefer-dist yiisoft/yii-bootstrap3
```

Usage
----

For example, the following
single line of code in a view file would render a Bootstrap Progress plugin:

```php
<?= Yiisoft\Yii\Bootstrap3\Progress::widget(['percent' => 60, 'label' => 'test']) ?>
```
