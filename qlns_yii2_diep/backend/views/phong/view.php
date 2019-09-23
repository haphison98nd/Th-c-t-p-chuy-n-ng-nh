<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\employees */

$this->title = $model->id_p;
$this->params['breadcrumbs'][] = ['label' => 'PhongBan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_p',
            'name_p',
            'email_p:email',
            'tel_p',
            'user_id' ,
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id_p' => $model->id_p], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_p' => $model->id_p], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ban chac muon xoa',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back' , ['/phong'] , ['class' => 'btn btn-info']) ?>
    </p>

</div>
