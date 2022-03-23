<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdmissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'adminId') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'class_dates') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'advert_place') ?>

    <?php // echo $form->field($model, 'kin_name') ?>

    <?php // echo $form->field($model, 'kin_phone') ?>

    <?php // echo $form->field($model, 'kin_relationship') ?>

    <?php // echo $form->field($model, 'kin_email') ?>

    <?php // echo $form->field($model, 'internet_access') ?>

    <?php // echo $form->field($model, 'internet_limit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
