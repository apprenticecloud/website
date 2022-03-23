<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admission */

$this->title = 'Update Admission: ' . $model->adminId;
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adminId, 'url' => ['view', 'id' => $model->adminId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
