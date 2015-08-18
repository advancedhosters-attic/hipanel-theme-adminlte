<?php

use advancedhosters\assets\advancedhosters\AdvancedhostersAsset;

$asset = AdvancedhostersAsset::register($this);

$logo = Yii::$app->assetManager->getAssetUrl($asset, 'images/logo.png');

?>

.logo-lg {
    background: url(<?= $logo ?>) 5px 4px no-repeat;
}

.logo-mini {
    background: url(<?= $logo ?>) 2px 6px no-repeat;
    background-size: 300%;
}

