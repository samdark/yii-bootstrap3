Upgrading Instructions for Yii Framework v2 Bootstrap Extension
===============================================================

!!!IMPORTANT!!!

The following upgrading instructions are cumulative. That is,
if you want to upgrade from version A to version C and there is
version B between A and C, you need to following the instructions
for both A and B.

Upgrade from yii2-bootstrap 2.0.8
---------------------------------

* Version constraint for "yiisoft/yii2" package has been raised to "~2.1.0". Make sure your code
  matches this version of the Yii framework. 

* Assets source has been changed from Bower to NPM. Use repository name "npm-asset/bootstrap"
  for any manual version constraint specification for Bootstrap CSS source.
