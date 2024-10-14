<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Форма для ввода данных</h1>

<?php $form = ActiveForm::begin([
    'action' => ['site/mouse'],
    'method' => 'post',          
]); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= Html::submitButton('Отправить') ?>

<?php ActiveForm::end(); ?>
