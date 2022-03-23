<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admission */

$this->title = $model->adminId;
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adminId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adminId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'adminId',
            'first_name',
            'last_name',
            'email:email',
            'class_dates',
            'gender',
            'phone_number',
            'place',
            'advert_place',
            'kin_name',
            'kin_phone',
            'kin_relationship',
            'kin_email:email',
            'internet_access',
            'internet_limit',
        ],
    ]) ?>

</div>
