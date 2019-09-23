<?php

use yii\helpers\Html;



$this->title = 'Update PhongBan: ' . $model->id_p;
$this->params['breadcrumbs'][] = ['label' => 'Phongban', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_p, 'url' => ['view', 'id' => $model->id_p]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>