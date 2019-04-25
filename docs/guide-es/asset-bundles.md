Asset Bundles
=============

Bootstrap es una completa solución front-end, que incluye CSS, JavaScript, fuentes y mucho más.
Con el fin de permitir un control más flexible sobre los componentes de Bootstrap, esta extensión proporciona
varios asset bundles.
Ellos son:

- [[Yiisoft\Yii\Bootstrap3\BootstrapAsset|BootstrapAsset]] - contiene unicamente los ficheros CSS principales.
- [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset|BootstrapPluginAsset]] - depende de [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contiene ficheros javascript.
- [[Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset|BootstrapThemeAsset]] - depende de [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contiene el tema CSS por defecto de Bootstrap.

Particularmente las aplicaciones pueden necesitar requerir diferentes usos de bundle (o combinación de bundle).
Si necesitas unicamente estilos CSS, [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] será suficiente para ti. Sin embargo, si
quieres usar el JavaScript de Bootstrap, necesitas registrar [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]].

> Consejo: la mayoría de los widgets registran automaticamente [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]].
