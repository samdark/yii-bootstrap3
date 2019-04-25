アセットのセットアップ
======================

このパッケージは、アセットのインストールについて、[NPM](https://www.npmjs.org/) のパッケージに依存しています。
このパッケージを使う前に、これらのパッケージをあなたのプロジェクトにインストールする方法を決定しなければなりません。


## asset-packagist レポジトリを使う

[asset-packagist.org](https://asset-packagist.org) を Bootstrap アセットのソース・パッケージとしてセットアップすることが出来ます。

あなたのプロジェクトの `composer.json` に下記の行を追加して下さい。

```json
"repositories": [
    {
        "type": "composer",
        "url": "https://asset-packagist.org"
    }
]
```

そして、アプリケーション構成で `@npm` のエイリアスを設定します。

```php
return [
    //...
    'aliases' => [
        '@npm'   => '@vendor/npm-asset',
    ],
    //...
];
```


## composer アセット・プラグインを使う

次のコマンドを使って [composer アセット・プラグイン](https://github.com/francoispluchino/composer-asset-plugin/) をグローバルにインストールします。

```
composer global require "fxp/composer-asset-plugin:^1.4.0"
```

Yii を使ってアセットを発行したい場合は、あなたのプロジェクトの `composer.json` に下記の行を追加して、
インストールされるパッケージが置かれるディレクトリを設定します。

```json
"extra": {
    "asset-installer-paths": {
        "npm-asset-library": "vendor/npm",
    }
}
```

これで、`composer install/update` コマンドを実行すると、Bootstrap のアセットを取得することが可能になります。

> Note: `fxp/composer-asset-plugin` は asset-packagist に比べると、`composer update` 
  コマンドを著しく遅くさせます。


## Bower/NPM クライアントを直接に使う

Bower または NPM のクライアントを直接に使って Bootstrap のアセットをインストールすることが出来ます。
あなたのプロジェクトの `package.json` に次の行を追加して下さい。

```json
{
    ...
    "dependencies": {
        "bootstrap": "3.3.5",
        ...
    }
    ...
}
```

あなたのプロジェクトの `package.json` に次の行を追加して、Bootstrap アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/bootstrap": ">=3.3.0"
},
```


## CDN を使う

[公式 CDN](https://www.bootstrapcdn.com) から Bootstrap アセットを使うことが出来ます。

あなたのプロジェクトの `package.json` に次の行を追加して、Bootstrap アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/bootstrap": ">=3.3.0"
},
```

'assetManager' アプリケーション・コンポーネントを構成して、Bootstrap アセット・バンドルを CDN のリンクでオーバーライドします。

```php
return [
    'components' => [
        'assetManager' => [
            // バンドルをオーバーライドして CDN を使う
            'bundles' => [
                Yiisoft\Yii\Bootstrap3\BootstrapAsset::class => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7',
                    'css' => [
                        'css/bootstrap.min.css'
                    ],
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset::class => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7',
                    'js' => [
                        'js/bootstrap.min.js'
                    ],
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset::class => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7',
                    'css' => [
                        'css/bootstrap-theme.min.css'
                    ]
                ],
            ],
        ],
        // ...
    ],
    // ...
];
```


## .less ファイルからコンパイルする

Bootstrap CSS ソースを直接にカスタマイズしたい場合、*.less ファイルから CSS をコンパイルしたいと思うことがあるでしょう。
そのような場合は、Bootstrap アセットを Composer や Bower/NPM からインストールすることは合理的ではありません。
なぜなら、`vendor` ディレクトリ内のファイルは変更できないからです。
Bootstrap アセットを手作業でダウンロードし、プロジェクト・ソース・コード内のどこか、
例えば `assets/source/bootstrap` フォルダに置かなければなりません。

あなたのプロジェクトの `package.json` に次の行を追加して、Bootstrap アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/bootstrap": ">=3.3.0"
},
```

'assetManager' アプリケーション・コンポーネントを構成して、Bootstrap アセット・バンドルをオーバーライドし、CSS ファイルのためのコンパイラを指定します。

```php
return [
    'components' => [
        'assetManager' => [
            // *.less ファイルのためのアセット・コンバータを設定する
            'converter' => [
                '__class' => yii\web\AssetConverter::class,
                'commands' => [
                    'less' => ['css', 'lessc {from} {to} --no-color'],
                ],
            ],
            // バンドルをオーバーライドし、ローカル・プロジェクト・ファイルを使う
            'bundles' => [
                Yiisoft\Yii\Bootstrap3\BootstrapAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                    'css' => [
                        'css/bootstrap.less'
                    ],
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                ],
            ],
        ],
        // ...
    ],
    // ...
];
```


## .sass ファイルからコンパイルする

Bootstrap CSS ソースを直接にカスタマイズしたい場合、*.sass ファイルから CSS をコンパイルしたいと思うことがあるでしょう。
そのための *.sass ファイルは [Bootstrap ported from Less to Sass](https://github.com/twbs/bootstrap-sass) から得ることが出来ます。

そのような場合は、Bootstrap アセットを Composer や Bower/NPM からインストールすることは合理的ではありません。
なぜなら、`vendor` ディレクトリ内のファイルは変更できないからです。
Bootstrap アセットを手作業でダウンロードし、プロジェクト・ソース・コード内のどこか、
例えば `assets/source/bootstrap` フォルダに置かなければなりません。

あなたのプロジェクトの `package.json` に次の行を追加して、Bootstrap アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/bootstrap": ">=3.3.0"
},
```

'assetManager' アプリケーション・コンポーネントを構成して、Bootstrap アセット・バンドルをオーバーライドし、CSS ファイルのためのコンパイラを指定します。

```php
return [
    'components' => [
        'assetManager' => [
            // *.sass ファイルのためのアセット・コンバータを設定する
            'converter' => [
                '__class' => yii\web\AssetConverter::class,
                'commands' => [
                    'scss' => ['css', 'sass {from} {to} --sourcemap']
                ],
            ],
            // バンドルをオーバーライドし、ローカル・プロジェクト・ファイルを使う
            'bundles' => [
                Yiisoft\Yii\Bootstrap3\BootstrapAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                    'css' => [
                        'css/bootstrap.scss'
                    ],
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                ],
                Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset::class => [
                    'sourcePath' => '@app/assets/source/bootstrap',
                ],
            ],
        ],
        // ...
    ],
    // ...
];
```
