<?php
/**
 * Created by PhpStorm.
 * User: Khac Diep
 * Date: 3/21/2019
 * Time: 12:41 PM
 */
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model->id_cl;
$this->params['breadcrumbs'][] = ['label' => 'Club', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container">
    <div class="row">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id_cl',
                'name_cl',
                'info_cl'
            ]
        ]) ?>
    </div>
    <div class="row">
        <?= Html::a('Upadate' , ['update' , 'id_cl' => $model->id_cl] , ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete' , ['delete' , 'id_cl' => $model->id_cl] , [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa',
                'method' => 'post',
            ]
        ])?>

        <?= Html::a('Back' , ['/club'] , ['class' => 'btn btn-info'])?>
    </div>

</div>





