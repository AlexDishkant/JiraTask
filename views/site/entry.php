<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<p><h1>Created jira task</h1></p>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'jiraProject') ?>

<?= $form->field($model, 'description') ?>

<?= $form->field($model, 'type')->dropDownList(
        ['Задача' => 'Задача', 'Улучшения' => 'Улучшения', 'Новая функциональность' => 'Новая функциональность',
            'Ошибка' => 'Ошибка', 'Epic' => 'Epic'] ); ?>

<?= $form->field($model, 'priority')->dropDownList(
        ['Highest' => 'Highest', 'High' => 'High', 'Medium' => 'Medium', 'Low' => 'Low', 'Lowest' => 'Lowest']) ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
