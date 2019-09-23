<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 7:37 PM
 */
use yii\helpers\Html;
$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Club', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h4><?= Html::encode($this->title) ?></h4>
    <?= $this->render('form', [
        'model' => $model
    ]) ?>
</div>
