Asset Bundles
=============

Bootstrap это комплексное front-end решение, включающее CSS, JavaScript, шрифты и т.д.
Для того чтобы обеспечить вам самый гибкий контроль над компонентами Bootstrap, это расширение предоставляет несколькоо asset bundles.
Вот они:

- [[Yiisoft\Yii\Bootstrap3\BootstrapAsset|BootstrapAsset]] - содержит CSS файлы.
- [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset|BootstrapPluginAsset]] - зависит от [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], содержащий javascript файлы.
- [[Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset|BootstrapThemeAsset]] - зависит от [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], содержащий Bootstrap CSS темы по умолчанию.

Конкретные приложения могут потребовать различного использования. Если вам нужны только CSS стили, то [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] будет достаточным для вас. Тем не менее, если вы хотите использовать Bootstrap JavaScript, вам необходимо зарегистрировать [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]].

> Tip: большинство виджетов регистрируются [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]] автоматически.
