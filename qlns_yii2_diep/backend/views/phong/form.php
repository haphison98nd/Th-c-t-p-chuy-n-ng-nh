<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\employees */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="employees-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_p' )->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
            ArrayHelper::map(User::find()->all(), 'id' , 'username'),
            [
                'prompt' => 'Truong Phong',
            ]
    ) ?>
    <div class="form-group">
        <?= Html::submitButton('OK' ,['class' => 'btn btn-success']) ?>
        <?= Html::a('Back',['/phong'] , ['class' => 'btn btn-info'])?>
    </div>
    <?php ActiveForm::end(); ?>

</div>