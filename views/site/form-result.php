<?php 
use yii\helpers\Html;
?>
<h1>Мы успешно получили информацию:</h1>

<div>Имя: <?= Html::encode($model->name)?></div>
<div>Почта: <?= Html::encode($model->email)?></div>