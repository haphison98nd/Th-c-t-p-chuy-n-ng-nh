<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-search">
    <?php $form = ActiveForm::begin([
        'method' => 'get',
    ]); ?>
   <div class="row">
       <div class="col-sm-3">
           <?= $form->field($model, 'username') ?>
       </div>
        <div class="col-sm-3 ">
            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn_search' ]) ?>
            </div>
        </div>
   </div>
    <?php ActiveForm::end(); ?>

</div>
