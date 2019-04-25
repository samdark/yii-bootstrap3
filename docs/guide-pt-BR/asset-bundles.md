Asset Bundles
=============

Bootstrap é uma solução complexa para front-end, o qual inclue CSS, JavaScript, fontes e assim por diante.
A fim de permitir que você tenha controle mais flexível sobre componentes Bootstrap , esta extensão fornece vários asset bundles. Eles são:

- [[Yiisoft\Yii\Bootstrap3\BootstrapAsset|BootstrapAsset]] - Contém apenas arquivos CSS.
- [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset|BootstrapPluginAsset]] - Depende de [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contem os arquivos JavaScript.
- [[Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset|BootstrapThemeAsset]] - depende de [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contém o tema padrão do Bootstrap.

Necessidades de aplicações específicas podem exigir utilização de pacotes diferentes ( ou a combinação bundle).
Se você precisa apenas de estilos CSS, [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] será o suficiente para você. No entanto , se
você quiser usar Bootstrap JavaScript, você precisa se registrar [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]].

> Tip: a maioria dos widgets [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]] registram automaticamente.
