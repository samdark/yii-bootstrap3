アセットバンドル
================

Bootstrap は、CSS、JavaScript、フォントなどを含む複雑なフロントエンドソリューションです。
Bootstrap コンポーネントに対する最大限の柔軟な制御を可能にするために、このエクステンションはアセットバンドルをいくつかに分けて提供しています。
すなわち、

- [[Yiisoft\Yii\Bootstrap3\BootstrapAsset|BootstrapAsset]] - メインの CSS ファイルのみを含みます。
- [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset|BootstrapPluginAsset]] - [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] に依存し、javascript ファイルを含みます。
- [[Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset|BootstrapThemeAsset]] - [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] に依存し、Bootstrap のデフォルトテーマの CSS を含みます。

個々のアプリケーションは、その要求に応じて、異なるバンドル (またはバンドルの組み合わせ) を必要とするでしょう。
CSS のスタイルだけが必要なのであれば、[[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] だけで十分です。
しかし、Bootstrap の JavaScript を必要とする場合は、[[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]] を登録しなければなりません。

> Tip: ほとんどのウィジェットは [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]] を自動的に登録します。
