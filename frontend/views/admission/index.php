<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdmissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="admission-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Admission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adminId',
            'first_name',
            'last_name',
            'email:email',
            'class_dates',
            //'gender',
            //'phone_number',
            //'place',
            //'advert_place',
            //'kin_name',
            //'kin_phone',
            //'kin_relationship',
            //'kin_email:email',
            //'internet_access',
            //'internet_limit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
