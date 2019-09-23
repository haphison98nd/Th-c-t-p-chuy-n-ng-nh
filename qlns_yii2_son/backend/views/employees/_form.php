<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Phong;


/* @var $this yii\web\View */
/* @var $model backend\models\employees */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="employees-form">
    <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phongId')->dropDownList(
        ArrayHelper::map(Phong::find()->all(), 'id_p' , 'name_p'),
        [
            'prompt' => "Phong Ban"
        ]
    ) ?>


    <?php
    $items_arr =   ArrayHelper::map(\backend\models\Club::find()->all(), 'name_cl' , 'name_cl');
    $model->idclub = explode(',', $model->idclub);
    ?>
    <?= $form->field($model, 'idclub')->checkboxList($items_arr) ?>





    <div class="form-group">
        <?= Html::submitButton('Okk' , ['class' => 'btn btn-info']) ?>
        <?= Html::a('Back',['/employees'] , ['class' => 'btn btn-info'])?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
