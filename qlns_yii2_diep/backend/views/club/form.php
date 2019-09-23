<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 11:14 AM
 */

?>

<div class="container">
    <?php $form = ActiveForm::begin()?>
    <?= $form->field($model,'name_cl')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model,'info_cl')->textInput(['maxlength' => 255]) ?>
</div>
<div class="form-group">
    <?= Html::submitButton('OK' , ['class' => 'btn btn-primary'])?>
    <?= Html::a('Back', ['/club'] , ['class' => 'btn btn-info']) ?>
    <?php ActiveForm::end() ?>
</div>